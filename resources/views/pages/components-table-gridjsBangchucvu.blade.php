<x-app-layout title="Table Gridjs Component" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Bảng Chức Vụ
            </h2>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- From HTML Table -->
            <div class="card pb-4">
                <div class="my-3 flex h-8 items-center justify-between px-4 sm:px-5">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        From Chức Vụ
                    </h2>
                </div>
                <div>
                    <div x-data x-init="$el._x_grid = new Gridjs.Grid({
                        from: $refs.table,
                        sort: true,
                        search: true,
                    }).render($refs.wrapper);">
                        <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                            <table x-ref="table" class="w-full text-left">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">#</th>
                                        <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">Tên Chức Vụ</th>
                                        <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">Nội Dung</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($departments as $department)
                                        <tr>
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $department->id }}</td>
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $department->name }}</td>
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $department->content }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <div x-ref="wrapper"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
