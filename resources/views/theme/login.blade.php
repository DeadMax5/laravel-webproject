{{-- @extends('theme.master')
@section('title', 'login')


@section('content')
@include('theme.partials.hero', ['title' => 'login'])



<!-- ================ contact section start ================= -->
<section class="section-margin--small section-margin">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <form action="{{ route('login') }}" class="form-contact contact_form" action="contact_process.php"
                    method="post" novalidate="novalidate">
                    @csrf
                    <div class="form-group">
                        <input class="form-control border" name="email" id="email" type="email"
                            placeholder="Enter email address" value="{{ old('email') }}">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <input class="form-control border" name="password" id="name" type="password"
                            placeholder="Enter your password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="form-group text-center text-md-right mt-3">
                        <a href="{{ route('register') }} " style="color:green" class="mx-3">Sign up instead
                            ?</a>
                        <button type="submit" class="button button--active button-contactForm">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->


@endsection --}}




@extends('theme.master')
@section('title', 'تسجيل الدخول')

@section('content')
    @include('theme.partials.hero', ['title' => 'تسجيل الدخول'])

    <!-- ================ بداية قسم الاتصال ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">
                    <form action="{{ route('login') }}" class="form-contact contact_form" method="post"
                        novalidate="novalidate">
                        @csrf
                        <div class="form-group">
                            <input class="form-control border" name="email" id="email" type="email"
                                placeholder="أدخل بريدك الإلكتروني" value="{{ old('email') }}">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <input class="form-control border" name="password" id="password" type="password"
                                placeholder="أدخل كلمة المرور">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="form-group text-center text-md-right mt-3">
                            <a href="{{ route('register') }}" style="color:green" class="mx-3">ليس لديك حساب؟ سجل الآن</a>
                            <button type="submit" class="button button--active button-contactForm">تسجيل الدخول</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ نهاية قسم الاتصال ================= -->
@endsection