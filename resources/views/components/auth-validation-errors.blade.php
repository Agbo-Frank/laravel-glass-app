@props(['errors'])

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color: crimson; font-size: 13px">{{ $error }}</li>
        @endforeach
    </ul>
@endif
