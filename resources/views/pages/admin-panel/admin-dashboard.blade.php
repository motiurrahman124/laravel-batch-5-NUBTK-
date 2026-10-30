<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#f5f7fa] font-[Inter,sans-serif] text-[#263345]">
    <div class="min-h-screen">
        <button id="sidebarOverlay" class="fixed inset-0 z-20 hidden bg-slate-950/40 lg:hidden" type="button" aria-label="Close menu"></button>
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
                <a class="flex h-12 items-center gap-4 px-[44px] text-sm font-medium text-white/80 transition hover:bg-white/5 hover:text-white" href="#">
                    <i class="fa-solid fa-calendar-check w-[18px] text-center"></i><span>Bookings</span>
                </a>
                <a href="/logout" class="flex h-12 items-center gap-4 px-[44px] text-sm font-medium text-white/80 transition hover:bg-white/5 hover:text-white"">
                    <i class="fa-solid fa-right-from-bracket w-[18px] text-center"></i><span>Logout</span>
                </a>
            </nav>
        </aside>

        <main id="mainContent" class="min-w-0 transition-[margin] duration-300 lg:ml-[248px]">
            <header class="flex h-[68px] items-center justify-between border-b border-[#edf0f4] bg-white px-4 lg:h-[84px] lg:px-8">
                <button id="menuToggle" class="grid h-10 w-10 place-items-center text-lg text-[#5f6977]" type="button" aria-label="Toggle menu" aria-controls="sidebar" aria-expanded="true">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="flex items-center gap-4 lg:gap-[22px]">
                    <button class="text-[#7e8997]" type="button" aria-label="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <button class="text-[#7e8997]" type="button" aria-label="Help"><i class="fa-solid fa-circle-question"></i></button>
                    <button class="relative text-[#7e8997]" type="button" aria-label="Notifications">
                        <i class="fa-regular fa-bell"></i>
                        <span class="absolute -right-3 -top-3 grid h-[18px] w-[18px] place-items-center rounded-full bg-[#ef5d5d] text-[10px] text-white">3</span>
                    </button>
                    <div class="flex items-center gap-[10px] text-sm font-semibold">
                        <span class="grid h-[38px] w-[38px] place-items-center rounded-full bg-gradient-to-br from-[#b8eee5] to-[#70c4b4] text-[#062a56]"><i class="fa-solid fa-user"></i></span>
                        <span class="hidden sm:inline">John</span>
                    </div>
                </div>
            </header>

            <div class="p-4 lg:p-8">
                <section class="mb-5 grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">
                    <article class="h-[178px] overflow-hidden rounded-[10px] border border-[#edf0f3] bg-white px-5 pt-5 shadow-[0_3px_14px_rgba(29,54,92,.025)]">
                        <div class="mb-4 flex items-center justify-between text-[13px] text-[#929ba8]"><span>Total Sales</span><i class="fa-solid fa-circle-info"></i></div>
                        <div class="mb-[10px] text-[23px] font-medium text-[#303e50]">$ 154,430</div>
                        <div class="mb-3 flex items-center gap-[7px] text-xs text-[#788494]"><span>Week ratio 13%</span><i class="fa-solid fa-caret-up text-[#ef6b6b]"></i></div>
                        <div class="mb-3 flex items-center gap-[7px] text-xs text-[#788494]"><span>Day ratio 10%</span><i class="fa-solid fa-caret-down text-[#4a9f84]"></i></div>
                        <div class="-mx-5 mt-2 grid h-[45px] place-items-center border-t border-[#edf0f4] text-[13px]">Day Sales $15,443</div>
                    </article>

                    <article class="h-[178px] overflow-hidden rounded-[10px] border border-[#edf0f3] bg-white px-5 pt-5 shadow-[0_3px_14px_rgba(29,54,92,.025)]">
                        <div class="mb-4 flex items-center justify-between text-[13px] text-[#929ba8]"><span>Visits</span><i class="fa-solid fa-circle-info"></i></div>
                        <div class="mb-[3px] text-[23px] font-medium text-[#303e50]">6,480</div>
                        <svg class="h-[62px] w-full" viewBox="0 0 260 62" preserveAspectRatio="none" aria-label="Visit trend chart">
                            <path d="M0,56 C18,48 25,58 42,43 S70,51 88,36 S118,28 138,43 S168,55 188,38 S212,25 230,42 S248,50 260,48 L260,62 L0,62Z" fill="#ff8d78"/>
                            <path d="M0,47 C18,38 29,40 48,44 S78,57 96,35 S126,20 145,34 S174,38 193,26 S220,12 238,27 S250,38 260,42 L260,62 L0,62Z" fill="#36c9d3"/>
                        </svg>
                        <div class="-mx-5 grid h-[45px] place-items-center border-t border-[#edf0f4] text-[13px]">Day visits 4,280</div>
                    </article>

                    <article class="h-[178px] overflow-hidden rounded-[10px] border border-[#edf0f3] bg-white px-5 pt-5 shadow-[0_3px_14px_rgba(29,54,92,.025)]">
                        <div class="mb-4 flex items-center justify-between text-[13px] text-[#929ba8]"><span>Payments</span><i class="fa-solid fa-circle-info"></i></div>
                        <div class="mb-[5px] text-[23px] font-medium text-[#303e50]">5,320</div>
                        <div class="flex h-[60px] items-end justify-center gap-[20px] border-b border-[#edf0f4]">
                            <span class="h-[31px] w-[27px] bg-[#3475d8]"></span><span class="h-[54px] w-[27px] bg-[#3475d8]"></span>
                            <span class="h-[48px] w-[27px] bg-[#3475d8]"></span><span class="h-[50px] w-[27px] bg-[#3475d8]"></span>
                            <span class="h-[28px] w-[27px] bg-[#3475d8]"></span><span class="h-[48px] w-[27px] bg-[#3475d8]"></span>
                        </div>
                        <div class="-mx-5 grid h-[45px] place-items-center border-t border-[#edf0f4] text-[13px]">Conversion rate 50%</div>
                    </article>

                    <article class="h-[178px] rounded-[10px] border border-[#edf0f3] bg-white text-center shadow-[0_3px_14px_rgba(29,54,92,.025)]">
                        <div class="flex h-[56px] items-center justify-end px-5 text-[13px] text-[#929ba8]"><i class="fa-solid fa-circle-info"></i></div>
                        <div class="text-sm leading-[1.6] text-[#929ba8]">Operation<br>Effect</div>
                        <div class="mt-[15px] text-xl">88%</div>
                    </article>
                </section>

                <section class="overflow-hidden rounded-[10px] border border-[#edf0f3] bg-white shadow-[0_3px_14px_rgba(29,54,92,.025)]">
                    <div class="flex min-h-[64px] flex-col justify-between border-b border-[#edf0f4] px-5 py-2 sm:flex-row sm:items-center sm:py-0">
                        <div class="flex h-[48px] items-center gap-7">
                            <button class="tab-button h-full border-b-2 border-[#4a78d7] text-[13px] text-[#4a78d7]" type="button">Sales</button>
                            <button class="tab-button h-full border-b-2 border-transparent text-[13px] text-[#8b96a5]" type="button">Visits</button>
                        </div>
                        <div class="hidden items-center gap-[22px] lg:flex">
                            <button class="text-[13px] text-[#687586]" type="button">All day</button>
                            <button class="text-[13px] text-[#687586]" type="button">All week</button>
                            <button class="text-[13px] text-[#687586]" type="button">All month</button>
                            <button class="text-[13px] text-[#687586]" type="button">All year</button>
                            <div class="flex h-[38px] items-center gap-[11px] rounded-md border border-[#edf0f4] px-[10px] text-xs text-[#687586]">
                                <span>2020-01-01</span><i class="fa-solid fa-chevron-right"></i><span>2020-12-31</span><i class="fa-solid fa-calendar-days"></i>
                            </div>
                        </div>
                    </div>

                    <div class="grid min-h-[330px] grid-cols-1 lg:grid-cols-[minmax(0,1fr)_250px]">
                        <div class="border-b border-[#edf0f4] px-5 py-[22px] lg:border-b-0 lg:border-r">
                            <div class="mb-3 text-[14px] font-semibold">Store Sales Trend</div>
                            <div class="grid h-[260px] grid-cols-12 items-end gap-2 border-b border-[#dfe4ea] px-1 pt-2" style="background-image: repeating-linear-gradient(to bottom, transparent 0, transparent 40px, #edf0f4 41px, transparent 42px)">
                                <span class="h-[82%] bg-[#b9d8ff]"></span><span class="h-[68%] bg-[#5fa1ef]"></span>
                                <span class="h-[61%] bg-[#b9d8ff]"></span><span class="h-[38%] bg-[#b9d8ff]"></span>
                                <span class="h-[48%] bg-[#b9d8ff]"></span><span class="h-[54%] bg-[#5fa1ef]"></span>
                                <span class="h-[88%] bg-[#4d86de]"></span><span class="h-[72%] bg-[#4d86de]"></span>
                                <span class="h-[43%] bg-[#b9d8ff]"></span><span class="h-[56%] bg-[#5fa1ef]"></span>
                                <span class="h-[62%] bg-[#b9d8ff]"></span><span class="h-[70%] bg-[#5fa1ef]"></span>
                            </div>
                            <div class="grid grid-cols-4 pl-[8%] pt-1 text-center text-[11px] text-[#69778a]"><span>2017</span><span>2018</span><span>2019</span><span>2020</span></div>
                        </div>

                        <aside class="px-5 py-[22px]">
                            <div class="mb-3 text-[14px] font-semibold">Sales ranking</div>
                            @foreach([
                                ['No. 0 Shop', '432,641'],
                                ['No. 1 Shop', '432,641'],
                                ['No. 2 Shop', '432,641'],
                                ['No. 3 Shop', '432,641'],
                                ['No. 4 Shop', '432,641'],
                                ['No. 5 Shop', '432,641'],
                                ['No. 6 Shop', '432,641'],
                            ] as $index => $shop)
                                <div class="grid h-9 grid-cols-[28px_1fr_70px] items-center text-xs text-[#697586]">
                                    <span class="grid h-[22px] w-[22px] place-items-center rounded-full {{ $index < 3 ? 'bg-[#dce7f7] text-[#062a56]' : 'bg-[#eef1f5]' }} text-[11px]">{{ $index + 1 }}</span>
                                    <span>{{ $shop[0] }}</span>
                                    <span class="text-right">{{ $shop[1] }}</span>
                                </div>
                            @endforeach
                        </aside>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const desktopQuery = window.matchMedia('(min-width: 1024px)');
        let sidebarOpen = true;

        function updateSidebar(open) {
            sidebarOpen = open;
            menuToggle.setAttribute('aria-expanded', String(open));

            if (desktopQuery.matches) {
                sidebar.classList.toggle('lg:translate-x-0', open);
                sidebar.classList.toggle('-translate-x-full', !open);
                mainContent.classList.toggle('lg:ml-[248px]', open);
                mainContent.classList.toggle('lg:ml-0', !open);
                sidebarOverlay.classList.add('hidden');
                return;
            }

            sidebar.classList.toggle('-translate-x-full', !open);
            sidebar.classList.toggle('translate-x-0', open);
            sidebarOverlay.classList.toggle('hidden', !open);
        }

        menuToggle.addEventListener('click', () => updateSidebar(!sidebarOpen));
        sidebarOverlay.addEventListener('click', () => updateSidebar(false));
        desktopQuery.addEventListener('change', () => updateSidebar(desktopQuery.matches));

        sidebar.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                if (!desktopQuery.matches) {
                    updateSidebar(false);
                }
            });
        });

        updateSidebar(true);

        document.querySelectorAll('.tab-button').forEach((tab) => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('.tab-button').forEach((item) => {
                    item.classList.remove('border-[#4a78d7]', 'text-[#4a78d7]');
                    item.classList.add('border-transparent', 'text-[#8b96a5]');
                });
                tab.classList.add('border-[#4a78d7]', 'text-[#4a78d7]');
                tab.classList.remove('border-transparent', 'text-[#8b96a5]');
            });
        });
    </script>
</body>
</html>