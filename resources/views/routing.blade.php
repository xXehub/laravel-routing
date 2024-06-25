<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel Routing</title>
    @vite('resources/sass/app.scss')
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container m-5">
        <div class="list-group mt-4">
            <a href="{{ url('/cloning') }}" class="list-group-item list-group-item-action">
                <b>Tugas (Bootstrap Clone)</b>
            </a>

        <div class="list-group list-group-numbered mt-4">
            {{-- Kode anda selanjutnya letakkan di sini --}}
            {{-- <a href="{{ url('/cloning') }}" class="list-group-item list-group-item-action">
                CLONING
            </a> --}}

            <a href="{{ url('/basic_routing') }}" class="list-group-item list-group-item-action">
                Basic Routing (No View, No Controller)
            </a>

            <a href="{{ url('/view_route') }}" class="list-group-item list-group-item-action">
                View Route
            </a>

            <a href="{{ url('/controller_route') }}" class="list-group-item list-group-item-action">
                Controller Route
            </a>

            <a href="{{ url('/') }}" class="list-group-item list-group-item-action">
                Redirect Route
            </a>

            <a href="{{ url('/user/12345') }}" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 1
            </a>
            <a href="{{ url('/posts/01/comments/20') }}" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 2
            </a>

            <a href="{{ url('/username') }}" class="list-group-item list-group-item-action">
                Route Parameter (Optional Parameter)
            </a>

            <a href="{{ url('/title/this-is-my-title') }}" class="list-group-item list-group-item-action">
                Route With Regular Expression Constraints
            </a>

            <a href="{{ route('profileRouteName', ['profileId' => '123']) }}"
                class="list-group-item list-group-item-action">
                Named Route
            </a>

            <a href="{{ url('/route_priority/user') }}" class="list-group-item list-group-item-action">
                Route Priority
            </a>

            <a href="{{ url('/asdqwezxc') }}" class="list-group-item list-group-item-action">
                Fallback Routes
            </a>
        </div>

        {{-- Khusus kode program untuk Route Groups di sini --}}
        <h6 class="mt-4">Route Groups (Route Prefixes & Route Name Prefixes)</h6>
        <div class="list-group list-group-numbered mt-4">
            <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">
                Admin Dashboard
            </a>
            <a href="{{ route('admin.users') }}" class="list-group-item list-group-item-action">
                Admin Users
            </a>
            <a href="{{ route('admin.items') }}" class="list-group-item list-group-item-action">
                Admin Items
            </a>
        </div>

    </div>
    @vite('resources/js/app.js')
</body>

</html>
