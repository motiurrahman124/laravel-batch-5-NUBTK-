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
        @include("common.admin-panel.sidebar")

        <main id="mainContent" class="min-w-0 transition-[margin] duration-300 lg:ml-[248px]">
            @include("common.admin-panel.header")

            <div class="p-4 lg:p-8">
                @yield("content")
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