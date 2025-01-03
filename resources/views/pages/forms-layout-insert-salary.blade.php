<x-app-layout title="Form Layout v1" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Form Layout 1
          </h2>
          <div class="hidden h-full py-1 sm:flex">
            <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
          </div>
          <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
            <li class="flex items-center space-x-2">
              <a
                class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                href="#"
                >Forms</a
              >
              <svg
                x-ignore
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </li>
            <li>Form Update Salary</li>
          </ul>
        </div>

        <template x-if="$store.breakpoints.isXs">
          <div
            x-data="{isStuck:false}"
            class="pb-6"
            x-intersect:enter.full.margin.-60px.0.0.0="isStuck = false"
            x-intersect:leave.full.margin.-60px.0.0.0="isStuck = true"
          >
            <div :class="isStuck && 'fixed right-0 top-[60px] w-full z-10'">
              <div
                class="transition-all duration-200"
                :class="isStuck && 'py-2.5 px-4 bg-white dark:bg-navy-700 shadow-lg relative'"
              >
                <ol class="steps with-space-line">
                  <li class="step before:bg-primary dark:before:bg-accent">
                    <div
                      class="step-header rounded-full bg-primary text-white dark:bg-accent"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </div>
                    <h3
                      class="text-xs font-medium text-slate-700 dark:text-navy-100"
                    >
                      Create Account
                    </h3>
                  </li>
                  <li class="step before:bg-primary dark:before:bg-accent">
                    <div
                      class="step-header rounded-full bg-primary text-white dark:bg-accent"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </div>
                    <h3
                      class="text-xs font-medium text-slate-700 dark:text-navy-100"
                    >
                      Select Service
                    </h3>
                  </li>
                  <li class="step before:bg-slate-200 dark:before:bg-navy-500">
                    <div
                      class="step-header rounded-full bg-primary text-white dark:bg-accent"
                    >
                      3
                    </div>
                    <h3
                      class="text-xs font-medium text-slate-700 dark:text-navy-100"
                    >
                      Address
                    </h3>
                  </li>
                  <li class="step before:bg-slate-200 dark:before:bg-navy-500">
                    <div
                      class="step-header rounded-full bg-slate-200 text-slate-800 dark:bg-navy-500 dark:text-white"
                    >
                      4
                    </div>
                    <h3
                      class="text-xs font-medium text-slate-700 dark:text-navy-100"
                    >
                      Review
                    </h3>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </template>

        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
          
          <div class="col-span-12 sm:col-span-8">
          <form action="{{ route('forms/insert-salary') }}" method="post">
    @csrf
    <div class="card p-4 sm:p-5">
        <p class="text-base font-medium text-slate-700 dark:text-navy-100">Tính lương</p>

        <div class="mt-4 space-y-4">
            <label class="block">
                <span>Họ và tên</span>
                <span class="relative mt-1.5 flex">
                    {{ $nhanVien ? $nhanVien->nhanvien->hoten : 'Chưa chọn nhân viên' }}
                </span>
            </label>
            <label class="block">
                <span>Lương cơ bản</span>
                <span class="relative mt-1.5 flex">
                    <input
                        name="luongcoban"
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9"
                        placeholder="Nhập lương cơ bản"
                        type="text"
                        value="{{ $nhanVien ? $nhanVien->luongcoban : '' }}"
                    />
                </span>
            </label>
            <label class="block">
                <span>Phụ cấp</span>
                <span class="relative mt-1.5 flex">
                    <input
                        name="phucap"
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9"
                        placeholder="Nhập phụ cấp"
                        type="text"
                        value="{{ $nhanVien ? $nhanVien->phucap : '' }}"
                    />
                </span>
            </label>
            <label class="block">
                <span>Thưởng</span>
                <span class="relative mt-1.5 flex">
                    <input
                        name="thuong"
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9"
                        placeholder="Nhập thưởng"
                        type="text"
                        value="{{ $nhanVien ? $nhanVien->thuong : '' }}"
                    />
                </span>
            </label>
            <label class="block">
                <span>Khấu trừ</span>
                <span class="relative mt-1.5 flex">
                    <input
                        name="khautru"
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9"
                        placeholder="Nhập khấu trừ"
                        type="text"
                        value="{{ $nhanVien ? $nhanVien->khautru : '' }}"
                    />
                </span>
            </label>
            <label class="block">
                <span>Lương nhận được:</span>
                <span class="relative mt-1.5 flex">
                    {{ $nhanVien ? ($nhanVien->luongcoban + $nhanVien->phucap + $nhanVien->thuong - $nhanVien->khautru) : 'Chưa tính toán' }}
                </span>
            </label>
        </div>
    </div>

    <div class="flex justify-end space-x-2">
        <button
            class="btn space-x-2 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50"
            type="submit">
            <span>Next</span>
        </button>
    </div>
</form>
Form Insert Salary


              </div>
            </div>
          </div>

          
        </div>
      </main>
</x-app-layout>
