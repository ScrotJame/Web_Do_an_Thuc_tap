<x-app-layout title="Form Layout v2" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Form Position
            </h2>
        </div>

        <div class="col-span-12 grid lg:col-span-8">
            <div class="card">
                <div class="border-b border-slate-200 p-4 dark:border-navy-500 sm:px-5">
                    <div class="flex items-center space-x-2">
                        <div class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 p-1 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <h4 class="text-lg font-medium text-slate-700 dark:text-navy-100">
                            Position
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

                    <!-- Form thêm phòng ban -->
                    <form action="{{ route('departments.store') }}" method="POST">
                        @csrf
                        <label class="block">
                            <span>Position Name</span>
                            <input
                                name="name"
                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Enter job title" type="text" />
                            @error('name')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="block">
                            <span>Description</span>
                            <textarea
                                name="description"
                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Enter job description"></textarea>
                            @error('description')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </label>
                        <button
                            class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            <span>Save</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
