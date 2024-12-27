<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    // Hiển thị form thêm chức vụ
    public function create()
    {
        return view('pages/forms-layout-v2Themchucvu');
    }

    // Xử lý lưu chức vụ
    public function store(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Lưu chức vụ vào cơ sở dữ liệu
        Department::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Chuyển hướng với thông báo thành công
        return redirect()->route('departments.create')->with('success', 'Department added successfully!');
    }
}
