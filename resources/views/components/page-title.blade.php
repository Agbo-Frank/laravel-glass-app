@props(['location'])

<div class="title">
    <h2>{{ $title }}</h2>
    <p>
        <a href="/">Home</a>
        <i class="fa fa-angle-double-right" ></i>
        <a href="{{ $location }}">{{ $location }}</a>
    </p>
</div>