<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<header class="header_area bg-dark text-white" dir="rtl">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">


            {{-- زر التنقل في الشاشات الصغيرة --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="تبديل القائمة">
                <span class="navbar-toggler-icon"></span>
            </button>
            @if (Auth::check())

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    +
                </button>
            @endif

            <!-- Button trigger modal -->

            {{-- عناصر القائمة --}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                {{-- الروابط اليمنى (الرئيسية مثلاً) --}}
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item @yield('home-active')">
                        <a class="nav-link" href="{{ route('theme.index') }}">الرئيسية</a>
                    </li>
                </ul>

                {{-- الروابط اليسرى (حالة المستخدم) --}}
                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-sm btn-warning">تسجيل / دخول</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end text-end" aria-labelledby="userDropdown">
                                {{-- <li><a class="dropdown-item" href="#">لوحة التحكم</a></li> --}}
                                <li>
                                    <a class="dropdown-item" href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        تسجيل الخروج
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {{-- فورم تسجيل الخروج --}}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>
</header>