<?php
namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    // Hiển thị danh sách chức vụ
    public function index()
    {
        $positions = Position::paginate(10); // Phân trang
        return view('pages.positions.index', compact('positions')); // Trỏ tới view ở thư mục pages/positions
    }

    // Hiển thị form thêm chức vụ
    public function create()
    {
        return view('pages.positions.create'); // Trỏ tới view ở thư mục pages/positions
    }

    // Lưu chức vụ mới
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Position::create([
            'name' => $request->tenchucvu,
            'description' => $request->description,
        ]);

        return redirect()->route('positions.index')->with('success', 'Chức vụ đã được thêm thành công!');
    }

    // Hiển thị form chỉnh sửa chức vụ
    public function edit($id)
    {
        $position = Position::findOrFail($id);
        return view('pages.positions.edit', compact('position')); // Trỏ tới view ở thư mục pages/positions
    }

    // Cập nhật chức vụ
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $position = Position::findOrFail($id);
        $position->update($request->only(['name', 'description']));

        return redirect()->route('positions.index')->with('success', 'Chức vụ đã được cập nhật thành công!');
    }

    // Xóa chức vụ
    public function destroy($id)
    {
        $position = Position::findOrFail($id);
        $position->delete();

        return redirect()->route('positions.index')->with('success', 'Chức vụ đã được xóa thành công!');
    }
}
