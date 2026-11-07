@extends("pages.admin-panel.admin-dashboard")

@section("content")
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
    <div>
        <div class="mb-2 flex items-center gap-2 text-xs text-[#929ba8]">
            <a href="{{ route('admin-panel') }}" class="transition hover:text-[#3479df]">Dashboard</a>
            <i class="fa-solid fa-chevron-right text-[9px]"></i>
            <span>Booking List</span>
        </div>
        <h1 class="text-[22px] font-semibold text-[#303e50]">Booking List</h1>
    </div>
</div>

<section class="overflow-hidden rounded-[10px] border border-[#edf0f3] bg-white shadow-[0_3px_14px_rgba(29,54,92,.025)]">
    <div class="overflow-x-auto">
        <table class="w-full min-w-[900px] border-collapse text-left">
            <thead>
                <tr class="border-b border-[#edf0f4] bg-[#fafbfc] text-[13px] font-medium text-[#929ba8]">
                    <th class="px-5 py-4">Name</th>
                    <th class="px-5 py-4">Email</th>
                    <th class="px-5 py-4">Course</th>
                    <th class="px-5 py-4">Car Type</th>
                    <th class="px-5 py-4">Message</th>
                    <th class="px-5 py-4">User Info</th>
                    <th class="px-5 py-4">Status</th>
                    <th class="px-5 py-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#edf0f4] text-[13px] text-[#687586]">
                @foreach($bookings as $booking)
                <tr>
                    <td class="px-5 py-4">{{$booking->name}}</td>
                    <td class="px-5 py-4">{{$booking->email}}</td>
                    <td class="px-5 py-4">
                        <p>Title: {{$booking->course->title}}</p>
                        <p>Price: ${{$booking->course->price}}</p>
                        <p>Duration: {{$booking->course->duration}}</p>
                    </td>
                    <td class="px-5 py-4">{{$booking->car_type}}</td>
                    <td class="px-5 py-4">{{$booking->message}}</td>
                    <td class="px-5 py-4">{{$booking->user->name}}</td>
                    <td class="px-5 py-4">
                        @if($booking->status == "approved")
                        <span class="rounded-full bg-[#e7f7ef] px-3 py-1 text-[#3a8d69]">Approved</span>
                        @elseif($booking->status == "rejected")
                        <span class="rounded-full bg-[#f7e7e7] px-3 py-1 text-[#f40f07]">Rejected</span>
                        @else
                        <span class="rounded-full bg-[#f6f2e3] px-3 py-1 text-[#f4c107]">Pending</span>
                        @endif
                    </td>
                    <td class="space-x-2">
                        <a href="/admin-panel/bookings/approve/{{$booking->id}}" class="bg-blue-500 text-white px-3 py-1 rounded-md cursor-pointer">Approve</a>
                        <a href="/admin-panel/bookings/reject/{{$booking->id}}" class="bg-red-500 text-white px-3 py-1 rounded-md cursor-pointer">Reject</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection