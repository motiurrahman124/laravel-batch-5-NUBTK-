<!DOCTYPE html>
<html lang="en">

@include("common.head")

<body>
    <div class="bg-slate-100 h-screen max-w-[1000px] mx-auto">
        @include("common.header")
        <main class="bg-gray-200 flex items-center justify-center text-white py-5 px-6 text-3xl h-[500px]">
            @yield("main_content")
        </main>
        @include("common.footer")
    </div>
</body>

</html>