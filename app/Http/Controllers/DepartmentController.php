<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    // Hiển thị danh sách phòng ban
    public function index()
    {
        $departments = Department::paginate(10); // Phân trang
        return view('pages.departments.index', compact('departments'));
    }

    // Hiển thị form thêm phòng ban
    public function create()
    {
        return view('pages.departments.create'); // Đổi đường dẫn ở đây
    }

    // Xử lý lưu phòng ban
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Department::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('departments.index')->with('success', 'Phòng ban đã được thêm thành công!');
    }

    // Hiển thị form chỉnh sửa phòng ban
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('pages.departments.edit', compact('department')); // Đổi đường dẫn ở đây
    }

    // Xử lý cập nhật phòng ban
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $department = Department::findOrFail($id);
        $department->update($request->only(['name', 'description']));

        return redirect()->route('departments.index')->with('success', 'Phòng ban đã được cập nhật thành công!');
    }

    // Xử lý xóa phòng ban
    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();

        return redirect()->route('departments.index')->with('success', 'Phòng ban đã được xóa thành công!');
    }
}
