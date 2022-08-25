<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="container">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg  sticky-top ">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="100" height="50" viewBox="0 0 631.000000 194.000000"
                    preserveAspectRatio="xMidYMid meet">
                        <metadata>
                        Created by potrace 1.16, written by Peter Selinger 2001-2019
                        </metadata>
                        <g transform="translate(0.000000,194.000000) scale(0.100000,-0.100000)"
                        fill="#FFFFFF" stroke="none">
                            <path d="M5575 1860 c-88 -12 -229 -65 -219 -81 3 -5 1 -9 -4 -9 -11 0 -164
                            -128 -175 -147 -15 -25 -26 -13 -16 20 5 17 8 57 7 87 -3 106 -34 114 -405
                            109 -264 -5 -263 -4 -313 -101 -16 -31 -33 -58 -38 -60 -11 -4 -86 -126 -88
                            -143 -1 -7 -27 -51 -58 -98 -31 -46 -59 -93 -63 -103 -4 -11 -26 -47 -49 -81
                            -24 -35 -62 -94 -85 -133 -23 -38 -42 -70 -44 -70 -1 0 9 39 22 88 13 48 35
                            130 49 182 14 52 28 108 30 124 2 16 10 52 18 80 23 79 28 105 32 184 7 129
                            -16 137 -403 130 -264 -4 -265 -4 -314 -97 -16 -31 -51 -87 -79 -126 -27 -38
                            -50 -76 -50 -83 0 -7 -25 -51 -55 -96 -30 -46 -58 -92 -62 -102 -4 -11 -25
                            -46 -48 -79 -57 -84 -135 -214 -135 -225 0 -10 -39 -84 -88 -167 -44 -74 -66
                            -133 -91 -245 -19 -83 -21 -102 -10 -137 26 -87 63 -101 268 -101 l143 0 -6
                            -32 c-24 -134 -17 -181 33 -215 21 -15 53 -18 184 -21 221 -6 262 1 308 46 29
                            31 40 53 60 129 13 51 28 94 34 96 5 2 93 2 193 -1 l184 -5 -6 -26 c-15 -65
                            -18 -142 -6 -170 23 -57 48 -65 223 -69 292 -7 317 4 368 169 18 59 37 103 48
                            108 13 8 17 5 18 -12 7 -84 97 -199 186 -237 152 -66 375 -66 550 0 71 27 194
                            123 253 199 24 31 44 60 44 65 0 5 13 43 29 85 38 100 98 291 99 316 1 19 17
                            83 97 380 35 128 39 151 39 275 1 162 -8 187 -103 284 -87 91 -152 115 -321
                            120 -69 3 -152 1 -185 -4z m245 -100 c135 -21 243 -100 270 -196 27 -96 7
                            -196 -154 -785 -86 -314 -111 -373 -198 -464 -118 -125 -231 -170 -423 -169
                            -138 0 -208 17 -274 64 -77 56 -113 175 -91 300 12 70 140 561 196 755 41 140
                            98 263 148 321 71 83 211 155 336 173 79 12 117 12 190 1z m-1720 -27 c0 -8
                            -260 -981 -267 -1000 -4 -10 9 -13 52 -13 49 0 56 -2 51 -17 -5 -18 -36 -134
                            -56 -210 l-11 -42 -56 -3 -57 -3 -35 -137 -36 -138 -197 0 c-109 0 -198 2
                            -198 4 0 2 16 61 35 132 19 70 35 131 35 136 0 4 -104 8 -231 8 -193 0 -230 2
                            -226 14 3 7 20 67 37 132 l32 118 306 513 306 513 258 0 c142 0 258 -3 258 -7z
                            m980 -7 c0 -7 -58 -232 -130 -499 -71 -267 -130 -490 -130 -496 0 -6 21 -11
                            50 -11 28 0 50 -3 50 -7 0 -4 -15 -65 -32 -135 l-33 -128 -56 0 -56 0 -27
                            -103 c-15 -56 -32 -119 -37 -139 l-10 -38 -199 0 -199 0 14 48 c7 26 25 89 39
                            140 l25 92 -230 0 c-141 0 -229 4 -229 10 0 5 15 66 34 134 l34 125 297 496
                            c163 272 298 502 301 510 9 22 524 22 524 1z"/>
                            <path d="M5624 1498 c-11 -13 -25 -35 -32 -51 -13 -30 -245 -890 -263 -975
                            -13 -61 -3 -82 40 -82 46 0 68 25 95 107 53 164 248 920 250 968 l1 50 -35 3
                            c-27 2 -41 -3 -56 -20z"/>
                            <path d="M3493 1142 c-57 -109 -130 -248 -162 -309 l-60 -113 83 0 82 0 83
                            306 c45 169 80 308 79 309 -2 2 -49 -85 -105 -193z"/>
                            <path d="M4425 1043 c-88 -167 -161 -309 -163 -314 -2 -5 32 -9 77 -9 57 0 83
                            4 86 13 11 35 163 612 162 613 -1 1 -74 -135 -162 -303z"/>
                            <path d="M1545 1779 c-28 -5 -66 -15 -85 -23 -30 -12 -37 -12 -59 3 -21 13
                            -52 16 -182 15 -140 -1 -162 -4 -203 -23 -41 -20 -47 -21 -61 -7 -23 22 -77
                            29 -158 21 -40 -4 -149 -7 -243 -6 -182 3 -231 -6 -253 -46 -5 -11 -39 -95
                            -75 -189 -36 -93 -90 -233 -121 -312 -43 -111 -55 -156 -55 -198 0 -51 2 -56
                            33 -74 31 -20 46 -20 537 -16 278 2 516 5 530 7 14 1 52 -5 84 -15 117 -36
                            285 -10 355 55 20 19 21 19 21 1 0 -10 9 -27 21 -38 18 -16 37 -19 139 -19 81
                            0 125 4 143 14 23 12 29 12 43 0 13 -10 59 -15 188 -16 217 -4 293 3 314 27
                            15 18 16 18 55 -1 65 -34 133 -40 218 -20 87 21 117 35 187 90 56 44 105 132
                            137 244 9 33 33 93 53 135 33 70 37 86 40 179 l4 102 -34 33 c-61 59 -79 69
                            -132 78 -82 14 -230 -26 -289 -78 -16 -14 -19 -14 -33 6 -29 42 -68 53 -232
                            63 -214 14 -624 8 -645 -9 -13 -11 -25 -10 -69 2 -75 20 -116 24 -173 15z
                            m149 -93 c42 -17 66 -51 66 -91 0 -17 -13 -69 -28 -115 l-29 -85 -91 -3 c-51
                            -1 -92 0 -92 2 0 3 14 39 30 81 17 42 30 82 30 90 0 19 -34 20 -48 2 -12 -14
                            -172 -430 -172 -447 0 -18 39 -10 54 11 8 12 25 50 37 85 l23 64 93 0 93 0
                            -25 -57 c-14 -31 -36 -75 -48 -97 -60 -108 -232 -167 -343 -117 -56 25 -71 62
                            -54 133 15 60 118 335 151 400 37 74 97 123 179 149 42 12 139 10 174 -5z
                            m1320 0 c44 -18 66 -52 66 -99 0 -39 -109 -346 -156 -438 -31 -62 -105 -125
                            -167 -144 -135 -40 -241 3 -240 98 1 66 140 430 188 493 65 85 216 129 309 90z
                            m-2364 -3 c0 -5 -10 -36 -22 -70 l-23 -63 -60 0 -60 0 -19 -52 c-10 -29 -21
                            -59 -23 -65 -4 -10 10 -13 50 -13 l55 0 -26 -65 -25 -65 -56 0 -56 0 -28 -76
                            -27 -76 65 7 c36 3 65 4 65 2 0 -11 -44 -123 -53 -134 -7 -10 -51 -13 -158
                            -13 -82 0 -149 3 -149 6 0 7 249 665 257 677 2 4 69 7 149 7 79 0 144 -3 144
                            -7z m240 -2 c0 -4 -42 -118 -94 -252 -126 -329 -118 -293 -57 -285 29 4 51 3
                            51 -2 0 -5 -11 -38 -24 -73 l-24 -64 -141 -3 c-95 -2 -141 1 -141 8 0 6 57
                            161 127 345 l127 335 88 0 c48 0 88 -4 88 -9z m425 -56 c-14 -36 -25 -67 -25
                            -70 0 -2 -28 -5 -62 -7 l-62 -3 -23 -60 c-13 -32 -23 -61 -23 -62 0 -2 25 -3
                            55 -3 l54 0 -23 -62 -24 -63 -57 -5 -58 -5 -23 -60 c-34 -88 -34 -88 36 -80
                            33 4 60 3 60 -1 0 -5 -12 -39 -26 -76 l-26 -68 -148 0 c-82 0 -151 3 -153 8
                            -2 4 54 158 124 342 71 184 128 336 129 338 0 1 67 2 150 2 l149 0 -24 -65z
                            m910 48 c-4 -10 -16 -42 -27 -70 l-21 -53 -51 0 -52 0 -94 -247 c-51 -137 -99
                            -260 -107 -275 -13 -27 -16 -28 -98 -28 -47 0 -85 4 -85 9 0 5 45 127 100 271
                            55 144 100 264 100 266 0 2 -23 4 -51 4 -45 0 -50 2 -44 18 4 9 16 41 27 70
                            l19 52 196 0 c182 0 195 -1 188 -17z m308 8 c63 -10 82 -30 81 -84 -3 -87 -79
                            -227 -123 -227 -29 0 -30 -10 -4 -36 30 -30 30 -31 -35 -204 l-47 -125 -83 -3
                            c-45 -2 -82 0 -82 4 0 4 23 68 50 141 28 73 50 140 50 148 0 8 -8 15 -19 15
                            -15 0 -29 -29 -71 -142 -29 -79 -58 -149 -63 -155 -11 -15 -177 -19 -177 -5 0
                            9 248 661 257 675 6 9 204 8 266 -2z"/>
                            <path d="M2856 1552 c-18 -35 -166 -422 -166 -434 0 -5 10 -8 22 -6 19 3 34
                            34 105 218 46 118 83 223 83 232 0 28 -28 21 -44 -10z"/>
                        </g>
                    </svg>
                  </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/planilla/nueva">Nuevo</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/planilla/listado">Todas las planillas</a>
                        </li>
                        
                    </ul>
                    
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <form class="d-flex" action="{{route('buscar')}}" method="get">
                                <input class="form-control me-2"  name="buscar" type="Buscar" placeholder="Buscar" aria-label="Buscar">
                                <button class="btn btn-outline-success" type="submit">Buscar</button>
                            </form>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
