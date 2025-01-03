<x-app-layout title="Form Layout v5" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Form Thêm  Nhân Viên
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                        href="#">Forms</a>
                    <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
                <li>Form Thêm Nhân viên</li>
            </ul>
        </div>

        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
            <div class="col-span-12 lg:col-span-4">
                {{-- <div class="card p-4 sm:p-5">
                    <div class="flex items-center space-x-4">
                         <div class="avatar h-14 w-14">
                            <img class="rounded-full" src="{{ asset('images/200x200.png') }}" alt="avatar" />
                        </div> 
                        <div>
                         
                          
                        </div>
                    </div> --}}
                    {{-- <ul class="mt-6 space-y-1.5 font-inter font-medium">
                        <li>
                            <a class="flex items-center space-x-2 rounded-lg bg-primary px-4 py-2.5 tracking-wide text-white outline-none transition-all dark:bg-accent"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Account</span>
                            </a>
                        </li> --}}
                        {{-- <li>
                            <a class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>

                                <span>Notification</span>
                            </a>
                        </li> --}}
                        {{-- <li>
                            <a class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span>Security</span>
                            </a>
                        </li>
                        <li>
                            <a class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                                <span>Apps</span>
                            </a>
                        </li>
                        <li>
                            <a class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                                <span> Privacy & data </span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-8">
                <div class="card">
                    <div
                        class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                        <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
                            Thêm Nhân Viên
                        </h2>
                       
                    </div>
                    <div class="p-4 sm:p-5">
                        <div class="flex flex-col">
                            <span class="text-base font-medium text-slate-600 dark:text-navy-100">Avatar</span>
                            <div class="avatar mt-1.5 h-20 w-20">
                                <img class="mask is-squircle" src="{{ asset('images/200x200.png') }}" alt="avatar" />
                                <div
                                    class="absolute bottom-0 right-0 flex items-center justify-center rounded-full bg-white dark:bg-navy-700">
                                    <button
                                        class="btn h-6 w-6 rounded-full border border-slate-200 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:border-navy-500 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <svg xmlns="data:image/jpeg;base64,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" class="h-3.5 w-3.5"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
<div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
    <!-- ID nhân viên -->
    <label class="block">
        <span>ID nhân viên</span>
        <span class="relative mt-1.5 flex">
            <input
                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Enter ID" type="text" />
            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <i class="fa-regular fa-user text-base"></i>
            </span>
        </span>
    </label>
    
    <!-- Họ tên -->
    <label class="block">
        <span>Họ tên</span>
        <span class="relative mt-1.5 flex">
            <input
                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Enter full name" type="text" />
            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <i class="fa-regular fa-user text-base"></i>
            </span>
        </span>
    </label>

    <!-- Ngày sinh -->
    <label class="block">
        <span>Ngày sinh</span>
        <span class="relative mt-1.5 flex">
            <input
                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Enter birthdate" type="date" />
            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <i class="fa-regular fa-calendar text-base"></i>
            </span>
        </span>
    </label>

    <!-- Giới tính -->
    <label class="block">
        <span>Giới tính</span>
        <span class="relative mt-1.5 flex">
            <select
                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent">
                <option value="male">Nam</option>
                <option value="female">Nữ</option>
                <option value="other">Khác</option>
            </select>
            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <i class="fa fa-genderless text-base"></i>
            </span>
        </span>
    </label>

    <!-- Phòng ban -->
    <label class="block">
        <span>Phòng ban</span>
        <span class="relative mt-1.5 flex">
            <input
                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Enter department" type="text" />
            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <i class="fa-regular fa-building text-base"></i>
            </span>
        </span>
    </label>

    <!-- Chức vụ -->
    <label class="block">
        <span>Chức vụ</span>
        <span class="relative mt-1.5 flex">
            <input
                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Enter position" type="text" />
            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <i class="fa-regular fa-briefcase text-base"></i>
            </span>
        </span>
    </label>

    <!-- Ngày vào làm -->
    <label class="block">
        <span>Ngày vào làm</span>
        <span class="relative mt-1.5 flex">
            <input
                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Enter join date" type="date" />
            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <i class="fa-regular fa-calendar-plus text-base"></i>
            </span>
        </span>
    </label>

    <!-- Hình thức hợp đồng -->
    <label class="block">
        <span>Hình thức hợp đồng</span>
        <span class="relative mt-1.5 flex">
            <select
                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent">
                <option value="fulltime">Toàn thời gian</option>
                <option value="parttime">Bán thời gian</option>
                <option value="intern">Thực tập</option>
            </select>
            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <i class="fa fa-file-contract text-base"></i>
            </span>
        </span>
    </label>

    <!-- Email -->
    <label class="block">
        <span>Email</span>
        <span class="relative mt-1.5 flex">
            <input
                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Enter email address" type="text" />
            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <i class="fa-regular fa-envelope text-base"></i>
            </span>
        </span>
    </label>

    <!-- Số điện thoại -->
    <label class="block">
        <span>Số điện thoại</span>
        <span class="relative mt-1.5 flex">
            <input
                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Enter phone number" type="text" />
            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <i class="fa fa-phone"></i>
            </span>
        </span>
    </label>

    <!-- Địa chỉ -->
    <label class="block">
        <span>Địa chỉ</span>
        <span class="relative mt-1.5 flex">
            <input
                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Enter address" type="text" />
            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <i class="fa fa-map-marker-alt"></i>
            </span>
        </span>
    </label>

    <!-- Quyền hạn -->
    <label class="block">
        <span>Quyền hạn</span>
        <span class="relative mt-1.5 flex">
            <select
                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent">
                <option value="admin">Quản trị viên</option>
                <option value="employee">Nhân viên</option>
                <option value="manager">Quản lý</option>
            </select>
            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <i class="fa fa-lock"></i>
            </span>
        </span>
    </label>
</div>
<div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
<div class="flex justify-center space-x-2">
    <button
        class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
        Cancel
    </button>
    <button
        class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
        Save
    </button>
</div>
            </div>
        </div>
    </main>
</x-app-layout>
