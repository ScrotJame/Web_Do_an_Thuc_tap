<x-app-layout title="Sửa Hình Thức Hợp Đồng" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Sửa Hình Thức Hợp Đồng
            </h2>
        </div>

        <div class="col-span-12 grid lg:col-span-8">
            <div class="card">
                <div class="border-b border-slate-200 p-4 dark:border-navy-500 sm:px-5">
                    <div class="flex items-center space-x-2">
                        <div
                            class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 p-1 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                            <i class="fa-solid fa-file-contract"></i>
                        </div>
                        <h4 class="text-lg font-medium text-slate-700 dark:text-navy-100">
                            Cập Nhật Hình Thức Hợp Đồng
                        </h4>
                    </div>
                </div>
                <div class="space-y-4 p-4 sm:p-5">
                    <!-- Hiển thị thông báo thành công -->
                    @if (session('success'))
                        <div class="text-green-600">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Form chỉnh sửa hình thức hợp đồng -->
                    <form action="{{ route('contract_types.update', $contractType->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Tên Hình Thức Hợp Đồng -->
                        <label class="block">
                            <span class="font-semibold">Tên Hình Thức Hợp Đồng</span>
                            <input
                                name="name"
                                type="text"
                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Nhập tên hình thức hợp đồng"
                                value="{{ old('name', $contractType->name) }}" />
                            @error('name')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </label>

                        <!-- Mô Tả -->
                        <label class="block">
                            <span class="font-semibold">Mô Tả</span>
                            <textarea
                                name="description"
                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Nhập mô tả hình thức hợp đồng">{{ old('description', $contractType->description) }}</textarea>
                            @error('description')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </label>

                        <!-- Nút cập nhật -->
                        <button
                            type="submit"
                            class="btn mt-4 space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            <i class="fa-solid fa-check"></i>
                            <span>Cập Nhật</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
