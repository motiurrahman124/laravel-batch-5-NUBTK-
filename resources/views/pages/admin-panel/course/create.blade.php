@extends("pages.admin-panel.admin-dashboard")

@section("content")
<div class="mx-auto max-w-5xl">
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <div class="mb-2 flex items-center gap-2 text-xs text-[#929ba8]">
                <a href="{{ route('admin-panel') }}" class="transition hover:text-[#3479df]">Dashboard</a>
                <i class="fa-solid fa-chevron-right text-[9px]"></i>
                <span>Add Course</span>
            </div>
            <h1 class="text-[22px] font-semibold text-[#303e50]">Add New Course</h1>
        </div>
        <a href="{{ route('admin-panel') }}" class="inline-flex h-10 items-center justify-center gap-2 rounded-md border border-[#dfe5ec] bg-white px-4 text-sm font-medium text-[#687586] transition hover:border-[#3479df] hover:text-[#3479df]">
            <i class="fa-solid fa-arrow-left text-xs"></i>
            Back
        </a>
    </div>

    <form class="overflow-hidden rounded-[10px] border border-[#edf0f3] bg-white shadow-[0_3px_14px_rgba(29,54,92,.025)]" action="#" method="post">
        @csrf

        <div class="border-b border-[#edf0f4] px-5 py-5 sm:px-7">
            <h2 class="text-base font-semibold text-[#303e50]">Course Information</h2>
            <p class="mt-1 text-xs leading-5 text-[#929ba8]">Enter the details that learners will see for this course.</p>
        </div>

        <div class="grid gap-6 px-5 py-6 sm:px-7 md:grid-cols-2">
            <div class="md:col-span-2">
                <label for="title" class="mb-2 block text-[13px] font-medium text-[#566273]">Course Title <span class="text-[#ef6b6b]">*</span></label>
                <input
                    id="title"
                    name="title"
                    type="text"
                    placeholder="e.g. Complete Web Development"
                    class="h-11 w-full rounded-md border border-[#dde3ea] bg-white px-3.5 text-sm text-[#303e50] outline-none transition placeholder:text-[#adb5c0] focus:border-[#3479df] focus:ring-3 focus:ring-[#3479df]/10"
                >
            </div>

            <div>
                <label for="price" class="mb-2 block text-[13px] font-medium text-[#566273]">Price <span class="text-[#ef6b6b]">*</span></label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex w-11 items-center justify-center rounded-l-md border-r border-[#dde3ea] bg-[#f7f9fb] text-sm text-[#788494]">$</span>
                    <input
                        id="price"
                        name="price"
                        type="number"
                        min="0"
                        placeholder="0"
                        class="h-11 w-full rounded-md border border-[#dde3ea] bg-white pl-14 pr-3.5 text-sm text-[#303e50] outline-none transition placeholder:text-[#adb5c0] focus:border-[#3479df] focus:ring-3 focus:ring-[#3479df]/10"
                    >
                </div>
            </div>

            <div>
                <label for="duration" class="mb-2 block text-[13px] font-medium text-[#566273]">Duration <span class="text-[#ef6b6b]">*</span></label>
                <input
                    id="duration"
                    name="duration"
                    type="text"
                    placeholder="e.g. 8 weeks or 24 hours"
                    class="h-11 w-full rounded-md border border-[#dde3ea] bg-white px-3.5 text-sm text-[#303e50] outline-none transition placeholder:text-[#adb5c0] focus:border-[#3479df] focus:ring-3 focus:ring-[#3479df]/10"
                >
            </div>

            <div>
                <label for="level" class="mb-2 block text-[13px] font-medium text-[#566273]">Course Level <span class="text-[#ef6b6b]">*</span></label>
                <div class="relative">
                    <select
                        id="level"
                        name="level"
                        class="h-11 w-full appearance-none rounded-md border border-[#dde3ea] bg-white px-3.5 pr-10 text-sm text-[#303e50] outline-none transition focus:border-[#3479df] focus:ring-3 focus:ring-[#3479df]/10"
                    >
                        <option value="" selected disabled>Select a level</option>
                        <option value="beginner">Beginner</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="advanced">Advanced</option>
                    </select>
                    <i class="fa-solid fa-chevron-down pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-[10px] text-[#929ba8]"></i>
                </div>
            </div>

            <div>
                <span class="mb-2 block text-[13px] font-medium text-[#566273]">Status <span class="text-[#ef6b6b]">*</span></span>
                <div class="flex h-11 items-center gap-6 rounded-md border border-[#dde3ea] px-3.5">
                    <label class="flex cursor-pointer items-center gap-2 text-sm text-[#566273]">
                        <input type="radio" name="status" value="active" checked class="accent-[#3479df]">
                        Active
                    </label>
                    <label class="flex cursor-pointer items-center gap-2 text-sm text-[#566273]">
                        <input type="radio" name="status" value="inactive" class="accent-[#3479df]">
                        Inactive
                    </label>
                </div>
            </div>

            <div class="md:col-span-2">
                <label for="short_description" class="mb-2 block text-[13px] font-medium text-[#566273]">Short Description <span class="text-[#ef6b6b]">*</span></label>
                <textarea
                    id="short_description"
                    name="short_description"
                    rows="4"
                    maxlength="255"
                    placeholder="Write a brief overview of the course..."
                    class="w-full resize-none rounded-md border border-[#dde3ea] bg-white px-3.5 py-3 text-sm leading-6 text-[#303e50] outline-none transition placeholder:text-[#adb5c0] focus:border-[#3479df] focus:ring-3 focus:ring-[#3479df]/10"
                ></textarea>
                <p class="mt-1 text-right text-[11px] text-[#929ba8]">Maximum 255 characters</p>
            </div>

            <div class="md:col-span-2">
                <label for="image" class="mb-2 block text-[13px] font-medium text-[#566273]">Course Image <span class="text-[#ef6b6b]">*</span></label>
                <label for="image" class="flex min-h-36 cursor-pointer flex-col items-center justify-center rounded-md border border-dashed border-[#cfd7e2] bg-[#fafbfc] px-5 text-center transition hover:border-[#3479df] hover:bg-[#f7faff]">
                    <span class="grid h-11 w-11 place-items-center rounded-full bg-[#edf4ff] text-[#3479df]">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                    </span>
                    <span class="mt-3 text-sm font-medium text-[#566273]">Click to upload course image</span>
                    <span class="mt-1 text-xs text-[#929ba8]">PNG, JPG or WEBP (recommended: 1200 × 630)</span>
                </label>
                <input id="image" name="image" type="file" accept="image/png,image/jpeg,image/webp" class="sr-only">
            </div>
        </div>

        <div class="flex flex-col-reverse gap-3 border-t border-[#edf0f4] bg-[#fbfcfd] px-5 py-4 sm:flex-row sm:items-center sm:justify-end sm:px-7">
            <a href="{{ route('admin-panel') }}" class="inline-flex h-10 items-center justify-center rounded-md border border-[#dfe5ec] bg-white px-5 text-sm font-medium text-[#687586] transition hover:bg-[#f5f7fa]">Cancel</a>
            <button type="submit" class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-[#3479df] px-5 text-sm font-medium text-white shadow-sm transition hover:bg-[#2869c8] focus:outline-none focus:ring-4 focus:ring-[#3479df]/20">
                <i class="fa-solid fa-plus text-xs"></i>
                Add Course
            </button>
        </div>
    </form>
</div>
@endsection