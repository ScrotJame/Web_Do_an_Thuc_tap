<?php

namespace App\Http\Controllers;

use App\Models\PhongBan;
use Illuminate\Http\Request;
use App\Models\AllUser;
use App\Models\ChucVu;
use App\Models\Hopdong;
use Illuminate\Support\Facades\Storage;

class AllUserController extends Controller
{
   // Hiển thị form thêm nhân viên
   public function formsLayoutInsertEmployees()
   {
       $departments = PhongBan::all();
       $contractTypes = Hopdong::all();
       $ChucVu = ChucVu::all();

       return view('forms/layout-insert-employees', compact('departments', 'contractTypes', 'ChucVu'));
   }

   // Xử lý thêm nhân viên
   public function store(Request $request)
{
   // Xác thực dữ liệu đầu vào
   $request->validate([
       'id_nhanvien' => 'required|unique:nhanvien',
       'hoten' => 'required',
       'ngaysinh' => 'required|date',
       'gioitinh' => 'required|in:0,1',
       'id_phongban' => 'required|exists:phongban,id_phongban',
       'id_hinhthuchopdong' => 'required|exists:hinhthuchopdong,id_hinhthuchopdong',
       'id_chucvu' => 'required|exists:chucvu,id_chucvu',
       'ngayvaolam' => 'required|date',
       'email' => 'required|email',
       'sodienthoai' => 'required',
       'diachi' => 'required',
       'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Avatar validation
   ]);

   try {
       // Xử lý tải lên tệp avatar nếu có
       if ($request->hasFile('avatar')) {
           $avatarPath = $request->file('avatar')->store('avatars', 'public');
       } else {
           $avatarPath = null;
       }

       // Tạo mới nhân viên
       AllUser::create(array_merge(
           $request->all(),
           ['avatar' => $avatarPath] // Lưu đường dẫn ảnh đại diện
       ));

       // Chuyển hướng về danh sách nhân viên nếu thành công
       return redirect()->route('employees.index')
                        ->with('success', 'Nhân viên đã được thêm thành công!');
   } catch (\Exception $e) {
       // Hiển thị thông báo lỗi chi tiết
       dd($e->getMessage());
   
       return redirect()->route('employees.create')
                        ->withErrors(['error' => 'Không thể thêm nhân viên, vui lòng thử lại!'])
                        ->withInput();
   }
}


   // Hiển thị form sửa nhân viên
   public function edit($id)
   {
       $employee = AllUser::findOrFail($id);
       $departments = Hopdong::all();
       $contractTypes = Hopdong::all();
       $ChucVu = ChucVu::all();

       return view('employees.edit', compact('employee', 'departments', 'contractTypes', 'ChucVu'));
   }

   // Xử lý sửa nhân viên
   public function update(Request $request, $id)
   {
       $request->validate([
           'id_nhanvien' => 'required',
           'hoten' => 'required',
           'ngaysinh' => 'required|date',
           'gioitinh' => 'required',
           'id_phongban' => 'required|exists:departments,id',
           'id_hinhthuchopdong' => 'required|exists:contract_types,id',
           'id_chucvu' => 'required|exists:ChucVu,id',
           'start_date' => 'required|date',
           'email' => 'required|email',
           'sodienthoai' => 'required',
           'diachi' => 'required',
           'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Avatar validation
       ]);

       $employee = AllUser::findOrFail($id);

       // Handle file upload for avatar
       if ($request->hasFile('avatar')) {
           // Delete the old avatar if exists
           if ($employee->avatar) {
               Storage::delete('public/' . $employee->avatar);
           }
           $avatarPath = $request->file('avatar')->store('avatars', 'public');
       } else {
           $avatarPath = $employee->avatar;
       }

       // Update the employee with new data
       $employee->update(array_merge(
           $request->all(),
           ['avatar' => $avatarPath] // Update the avatar path
       ));

       return redirect()->route('employees.index');
   }

   // Xóa nhân viên
   public function destroy($id)
   {
       $employee = AllUser::findOrFail($id);

       // Delete the avatar image if exists
       if ($employee->avatar) {
           Storage::delete('public/' . $employee->avatar);
       }

       // Delete the employee
       $employee->delete();

       return redirect()->route('employees.index');
   }
}
