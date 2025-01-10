<?php

namespace App\Http\Controllers;

use App\Models\SalaryCaculation;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function resultTrueSalary(Request $request)
    {
        $luongcoban = $request->input('luongcoban');
        $phucap = $request->input('phucap');
        $thuong = $request->input('thuong');
        $khautru = $request->input('khautru');

        $luongnhan = ($luongcoban + $phucap + $thuong) - $khautru;

        return response()->json(['luongnhan' => $luongnhan]);
    }
    public function updateSalary(Request $request)
    {
    // 1. Lấy id_nhanvien từ query string
    $nhanVienId = $request->query('id_nhanvien'); // Lấy từ URL ?id_nhanvien=1

    // 2. Xác định nhân viên trong CSDL
    $nhanVien = SalaryCaculation::find($nhanVienId);

    if (!$nhanVien) {
        return back()->with('error', 'Nhân viên không tồn tại.');
    }

    // 3. Lấy dữ liệu từ form
    $luongCoBan = $request->input('luongcoban', 0);
    $phuCap = $request->input('phucap', 0);
    $thuong = $request->input('thuong', 0);
    $khauTru = $request->input('khautru', 0);

    // 4. Cập nhật các trường
    $nhanVien->luongcoban = is_numeric($luongCoBan) ? floatval($luongCoBan) : 0;
    $nhanVien->phucap = is_numeric($phuCap) ? floatval($phuCap) : 0;
    $nhanVien->thuong = is_numeric($thuong) ? floatval($thuong) : 0;
    $nhanVien->khautru = is_numeric($khauTru) ? floatval($khauTru) : 0;

    // 5. Lưu vào CSDL
    $nhanVien->save();

    // 6. Trả thông báo thành công về view
    return redirect()->route('forms/insert-salary', ['id_nhanvien' => $nhanVienId])
                     ->with('success', 'Cập nhật lương thành công.');
    }



}
