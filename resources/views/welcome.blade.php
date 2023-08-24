<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Xerone IT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />

    <!-- Styles -->

</head>

<body class="">
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">Xerone IT</a>
        </div>
        <div class="flex-none">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a class="btn btn-ghost normal-case text-xl text-blue-600" href="{{ url('/dashboard') }}"
                            class="">Dashboard</a>
                    @else
                        <a class="btn btn-ghost normal-case text-xl text-blue-600" href="{{ route('login') }}"
                            class="=">Log
                            in</a>

                        @if (Route::has('register'))
                            <a class="btn btn-ghost normal-case text-xl text-blue-600" href="{{ route('register') }}"
                                class="">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</body>

</html>
