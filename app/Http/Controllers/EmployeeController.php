<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use App\Models\ContractType;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    // Hiển thị danh sách nhân viên
    public function index()
    {
        $employees = Employee::with(['department', 'contractType', 'position'])->get();
        
        return view('pages.employees.index', compact('employees'));
    }

    // Hiển thị form thêm nhân viên
    public function create()
    {
        $departments = Department::all();
        $contractTypes = ContractType::all();
        $positions = Position::all();

        return view('pages.employees.create', compact('departments', 'contractTypes', 'positions'));
    }

    // Xử lý thêm nhân viên
    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|unique:employees',
            'full_name' => 'required',
            'dob' => 'required|date',
            'gender' => 'required',
            'department_id' => 'required|exists:departments,id',
            'contract_type_id' => 'required|exists:contract_types,id',
            'position_id' => 'required|exists:positions,id',
            'start_date' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Avatar validation
        ]);

        // Handle file upload for avatar
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
        } else {
            $avatarPath = null;
        }

        // Create the employee
        Employee::create(array_merge(
            $request->all(),
            ['avatar' => $avatarPath] // Save the avatar path
        ));

        return redirect()->route('employees.index');
    }

    // Hiển thị form sửa nhân viên
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $departments = Department::all();
        $contractTypes = ContractType::all();
        $positions = Position::all();

        return view('employees.edit', compact('employee', 'departments', 'contractTypes', 'positions'));
    }

    // Xử lý sửa nhân viên
    public function update(Request $request, $id)
    {
        $request->validate([
            'employee_id' => 'required',
            'full_name' => 'required',
            'dob' => 'required|date',
            'gender' => 'required',
            'department_id' => 'required|exists:departments,id',
            'contract_type_id' => 'required|exists:contract_types,id',
            'position_id' => 'required|exists:positions,id',
            'start_date' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Avatar validation
        ]);

        $employee = Employee::findOrFail($id);

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
        $employee = Employee::findOrFail($id);

        // Delete the avatar image if exists
        if ($employee->avatar) {
            Storage::delete('public/' . $employee->avatar);
        }

        // Delete the employee
        $employee->delete();

        return redirect()->route('employees.index');
    }
}
