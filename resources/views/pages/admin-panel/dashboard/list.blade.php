@extends("pages.admin-panel.admin-dashboard")

@section("content")
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
            <path d="M0,56 C18,48 25,58 42,43 S70,51 88,36 S118,28 138,43 S168,55 188,38 S212,25 230,42 S248,50 260,48 L260,62 L0,62Z" fill="#ff8d78" />
            <path d="M0,47 C18,38 29,40 48,44 S78,57 96,35 S126,20 145,34 S174,38 193,26 S220,12 238,27 S250,38 260,42 L260,62 L0,62Z" fill="#36c9d3" />
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
@endsection