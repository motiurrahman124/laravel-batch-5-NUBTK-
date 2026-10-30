<aside id="sidebar" class="fixed inset-y-0 left-0 z-30 w-[248px] -translate-x-full bg-gradient-to-b from-[#062a56] to-[#073263] text-white transition-transform duration-300 lg:translate-x-0">
            <div class="flex h-[84px] items-center gap-3 px-[44px] text-xl font-bold">
                <span class="grid h-[28px] w-[28px] grid-cols-2 gap-[3px]" aria-hidden="true">
                    <span class="rounded-[50%_50%_50%_3px] bg-white"></span><span class="rounded-[50%_50%_3px_50%] bg-white"></span>
                    <span class="rounded-[50%_3px_50%_50%] bg-white"></span><span class="rounded-[3px_50%_50%_50%] bg-white"></span>
                </span>
                <span>logoipsum</span>
            </div>

            <nav class="pt-[17px]" aria-label="Admin navigation">
                <a class="flex h-12 items-center gap-4 bg-[#3479df] px-[44px] text-sm font-medium text-white" href="{{ url('/admin-panel') }}">
                    <i class="fa-solid fa-border-all w-[18px] text-center"></i><span>Dashboard</span>
                </a>
                <a class="flex h-12 items-center gap-4 px-[44px] text-sm font-medium text-white/80 transition hover:bg-white/5 hover:text-white" href="#">
                    <i class="fa-solid fa-users w-[18px] text-center"></i><span>User List</span>
                </a>
                <a class="flex h-12 items-center gap-4 px-[44px] text-sm font-medium text-white/80 transition hover:bg-white/5 hover:text-white" href="#">
                    <i class="fa-solid fa-table-cells w-[18px] text-center"></i><span>Courses</span>
                </a>
                <a class="flex h-12 items-center gap-4 px-[44px] text-sm font-medium text-white/80 transition hover:bg-white/5 hover:text-white" href="/admin/add-course">
                    <i class="fa-solid fa-table-cells w-[18px] text-center"></i><span>Add Course</span>
                </a>
                <a class="flex h-12 items-center gap-4 px-[44px] text-sm font-medium text-white/80 transition hover:bg-white/5 hover:text-white" href="#">
                    <i class="fa-solid fa-calendar-check w-[18px] text-center"></i><span>Bookings</span>
                </a>
                <a href="/logout" class="flex h-12 items-center gap-4 px-[44px] text-sm font-medium text-white/80 transition hover:bg-white/5 hover:text-white"">
                    <i class="fa-solid fa-right-from-bracket w-[18px] text-center"></i><span>Logout</span>
                </a>
            </nav>
        </aside>