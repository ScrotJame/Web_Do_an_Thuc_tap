<x-app-layout title="Employee Index" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Employee Index
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent" href="#">Components</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
                <li>Employee Index</li>
            </ul>
        </div>
        
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <div>
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        Employees List
                    </h2>
                    <div class="flex">
                        <div class="flex items-center" x-data="{isInputActive:false}">
                            <label class="block">
                                <input x-effect="isInputActive === true && $nextTick(() => { $el.focus() });"
                                    :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                                    class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200"
                                    placeholder="Search here..." type="text" />
                            </label>
                            <button @click="isInputActive = !isInputActive" class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                        <table class="is-hoverable w-full text-left">
                            
                            <thead>
                                <tr>
                                    @foreach (Schema::getColumnListing('nhanvien') as $column)
                                        <th class="bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100">{{ ucfirst($column) }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                        <tr><a href="#">
                                            <td class="px-4 py-3">{{ $employee->id_nhanvien }}</td>
                                            <td class="px-4 py-3">{{ $employee->id_nhanvien }}</td>
                                            <td class="px-4 py-3">{{ $employee->hoten }}</td>
                                            <td class="px-4 py-3">{{ $employee->ngaysinh }}</td>
                                            <td class="px-4 py-3"> @if ($employee->gioitinh == 0)  Nam
                                                                    @elseif ($employee->gioitinh == 1) Nữ 
                                                                    @endif</td>
                                            <td class="px-4 py-3">{{ $employee->department ? $employee->department->tenphongban : '' }}</td>
                                            <td class="px-4 py-3">{{ $employee->position ? $employee->position->tenchucvu : '' }}</td>
                                            <td class="px-4 py-3">{{ $employee->ngayvaolam }}</td>
                                            <td class="px-4 py-3">{{ $employee->contractType ? $employee->contractType->tenhinhthuc : '' }}</td>
                                            <td class="px-4 py-3">{{ $employee->email }}</td>
                                            <td class="px-4 py-3">{{ $employee->sodienthoai }}</td>
                                            <td class="px-4 py-3">{{ $employee->diachi }}</td>
                                            <td class="px-4 py-3">{{ $employee->id_quyenhan }}</td>
                                            <td class="px-4 py-3">{{ $employee->avatar }}</td>
                                            </a>
                                            
                                        </tr>
                                            @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
