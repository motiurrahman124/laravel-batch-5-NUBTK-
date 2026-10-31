@extends("pages.admin-panel.admin-dashboard")

@section("content")
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
    <div>
        <div class="mb-2 flex items-center gap-2 text-xs text-[#929ba8]">
            <a href="{{ route('admin-panel') }}" class="transition hover:text-[#3479df]">Dashboard</a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <span>Course List</span>
        </div>
        <h1 class="text-[22px] font-semibold text-[#303e50]">Course List</h1>
    </div>
</div>

<section class="overflow-hidden rounded-[10px] border border-[#edf0f3] bg-white shadow-[0_3px_14px_rgba(29,54,92,.025)]">
    <div class="overflow-x-auto">
        <table class="w-full min-w-[900px] border-collapse text-left">
            <thead>
                <tr class="border-b border-[#edf0f4] bg-[#fafbfc] text-[13px] font-medium text-[#929ba8]">
                    <th class="px-5 py-4">Title</th>
                    <th class="px-5 py-4">Price</th>
                    <th class="px-5 py-4">Duration</th>
                    <th class="px-5 py-4">Level</th>
                    <th class="px-5 py-4">Status</th>
                    <th class="px-5 py-4">Short Description</th>
                    <th class="px-5 py-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#edf0f4] text-[13px] text-[#687586]">

                @foreach($data as $course)
                <tr>
                    <td class="px-5 py-4 font-medium text-[#303e50]">{{$course->title}}</td>
                    <td class="px-5 py-4">${{$course->price}}</td>
                    <td class="px-5 py-4">{{$course->duration}}</td>
                    <td class="px-5 py-4">{{$course->level}}</td>
                    <td class="px-5 py-4">
                        @if($course->status == "active")
                        <span class="rounded-full bg-[#e7f7ef] px-3 py-1 text-[#3a8d69]">{{$course->status}}</span>
                        @else
                        <span class="rounded-full bg-[#f7e7e7] px-3 py-1 text-[#f40f07]">{{$course->status}}</span>
                        @endif
                    </td>
                    <td class="max-w-[300px] px-5 py-4">{{$course->short_description}}</td>
                    <td class="space-x-2">
                        <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded-md cursor-pointer">Edit</a>
                        <a href="{{route("deleteCourse", $course->id)}}" class="bg-red-500 text-white px-3 py-1 rounded-md cursor-pointer">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>
@endsection