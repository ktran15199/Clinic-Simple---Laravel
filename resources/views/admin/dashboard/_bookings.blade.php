<x-card class="bg-warning text-light m-2">
    <div class="row justify-content-between">
        <i class="fa fa-stethoscope fa-5x" aria-hidden="true"></i>
        <div class="text-right">
            <div class="huge">{{ $bookings->count() }}</div>
            <div>{{ trans_choice('Bookings', $bookings->count()) }}</div>
        </div>
    </div>

    <x-slot name="footer">
        <a href="{{ route('admin.booking.index') }}" class="d-flex justify-content-between text-dark">
            <span>Details</span>
            <span><i class="fa fa-arrow-circle-right"></i></span>
        </a>
    </x-slot>
</x-card>
