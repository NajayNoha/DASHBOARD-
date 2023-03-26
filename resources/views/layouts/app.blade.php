@include('layouts.head')
<body>
    <div id="app">

            @if (Auth::user())
            @include('layouts.header')
            @endif
            @if (Auth::check())
                @if (Auth::user() && Auth::user()->role ==  "superAdmin")
                    @include('layouts.superAdmin.sideBar')
                @else
                    @include('layouts.employe.sideBar')
                @endif
            @endif


            <main class="py-2">
                @yield('content')
            </main>
    </div>
@include('layouts.buttom')