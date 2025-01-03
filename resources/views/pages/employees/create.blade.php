<x-app-layout title="Form Layout v5" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Form Thêm Nhân Viên
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
            <div class="col-span-12 lg:col-span-8">
                <div class="card">
                    <div class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                        <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
                            Thêm Nhân Viên
                        </h2>
                    </div>
                    <div class="p-4 sm:p-5">
                        <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-col space-y-4">

                                <!-- Avatar -->
                                <div class="flex items-center space-x-4">
                                    <div class="avatar mt-1.5 h-20 w-20">
                                        <img class="mask is-squircle" id="avatar-img" src="{{ asset('images/200x200.png') }}" alt="avatar" />
                                    </div>
                                    <div>
                                        <input type="file" name="avatar" id="avatar" class="hidden" accept="image/*" onchange="previewImage(event)">
                                        <button type="button" class="btn" onclick="document.getElementById('avatar').click()">Tải ảnh</button>
                                    </div>
                                </div>

                                <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>

                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                                    <!-- ID nhân viên -->
                                    <label class="block">
                                        <span>ID nhân viên</span>
                                        <input
                                            class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2"
                                            placeholder="Enter ID" type="text" name="employee_id" />
                                    </label>

                                    <!-- Họ tên -->
                                    <label class="block">
                                        <span>Họ tên</span>
                                        <input
                                            class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2"
                                            placeholder="Enter full name" type="text" name="full_name" />
                                    </label>

                                    <!-- Ngày sinh -->
                                    <label class="block">
                                        <span>Ngày sinh</span>
                                        <input
                                            class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2"
                                            placeholder="Enter birthdate" type="date" name="dob" />
                                    </label>

                                    <!-- Giới tính -->
                                    <label class="block">
                                        <span>Giới tính</span>
                                        <select
                                            class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2"
                                            name="gender">
                                            <option value="male">Nam</option>
                                            <option value="female">Nữ</option>
                                            <option value="other">Khác</option>
                                        </select>
                                    </label>

                                    <!-- Phòng ban -->
                                    <label class="block">
                                        <span>Phòng ban</span>
                                        <select
                                            class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2"
                                            name="department_id">
                                            @foreach($departments as $department)
                                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                            @endforeach
                                        </select>
                                    </label>

                                    <!-- Chức vụ -->
                                    <label class="block">
                                        <span>Chức vụ</span>
                                        <select
                                            class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2"
                                            name="position_id">
                                            @foreach($positions as $position)
                                                <option value="{{ $position->id }}">{{ $position->name }}</option>
                                            @endforeach
                                        </select>
                                    </label>

                                    <!-- Ngày vào làm -->
                                    <label class="block">
                                        <span>Ngày vào làm</span>
                                        <input
                                            class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2"
                                            placeholder="Enter join date" type="date" name="start_date" />
                                    </label>

                                    <!-- Hình thức hợp đồng -->
                                    <label class="block">
                                        <span>Hình thức hợp đồng</span>
                                        <select
                                            class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2"
                                            name="contract_type_id">
                                            @foreach($contractTypes as $contractType)
                                                <option value="{{ $contractType->id }}">{{ $contractType->name }}</option>
                                            @endforeach
                                        </select>
                                    </label>

                                    <!-- Email -->
                                    <label class="block">
                                        <span>Email</span>
                                        <input
                                            class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2"
                                            placeholder="Enter email address" type="email" name="email" />
                                    </label>

                                    <!-- Số điện thoại -->
                                    <label class="block">
                                        <span>Số điện thoại</span>
                                        <input
                                            class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2"
                                            placeholder="Enter phone number" type="text" name="phone" />
                                    </label>

                                    <!-- Địa chỉ -->
                                    <label class="block">
                                        <span>Địa chỉ</span>
                                        <input
                                            class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2"
                                            placeholder="Enter address" type="text" name="address" />
                                    </label>

                                </div>
                            </div>
                            <div class="flex justify-end space-x-4 mt-6">
                                <button type="submit" class="btn btn-primary">Lưu</button>
                                <button type="reset" class="btn btn-secondary">Hủy</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- JavaScript để xem trước ảnh -->
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function () {
                const avatarImg = document.getElementById('avatar-img');
                avatarImg.src = reader.result;
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</x-app-layout>
