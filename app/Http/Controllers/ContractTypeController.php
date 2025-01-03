<?php

namespace App\Http\Controllers;

use App\Models\ContractType;
use Illuminate\Http\Request;

class ContractTypeController extends Controller
{
    // Hiển thị danh sách hình thức hợp đồng
    public function index()
    {
        $contractTypes = ContractType::paginate(10);
        return view('pages.contract_types.index', compact('contractTypes'));
    }

    // Hiển thị form thêm hình thức hợp đồng
    public function create()
    {
        return view('pages.contract_types.create');
    }

    // Lưu hình thức hợp đồng mới
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:contract_types',
            'description' => 'nullable|string',
        ]);

        ContractType::create($validatedData);

        return redirect()->route('contract_types.index')
            ->with('success', 'Hình thức hợp đồng đã được thêm thành công!');
    }

    // Hiển thị form chỉnh sửa hình thức hợp đồng
    public function edit($id)
    {
        $contractType = ContractType::findOrFail($id);
        return view('pages.contract_types.edit', compact('contractType'));
    }

    // Cập nhật hình thức hợp đồng
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:contract_types,name,' . $id,
            'description' => 'nullable|string',
        ]);

        $contractType = ContractType::findOrFail($id);

        // Kiểm tra và cập nhật dữ liệu
        $contractType->update($validatedData);

        return redirect()->route('contract_types.index')
            ->with('success', 'Hình thức hợp đồng đã được cập nhật thành công!');
    }

    // Xóa hình thức hợp đồng
    public function destroy($id)
    {
        $contractType = ContractType::findOrFail($id);
        $contractType->delete();

        return redirect()->route('contract_types.index')
            ->with('success', 'Hình thức hợp đồng đã được xóa thành công!');
    }
}
