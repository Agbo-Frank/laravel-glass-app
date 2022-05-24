@props(['status'])

@if ($status)
    <div style="color: #4CAF50; font-size: 13px">
        {{ $status }}
    </div>
@endif
