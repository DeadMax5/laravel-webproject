@extends('theme.master')
@section('title', 'register')


@section('content')
    @include('theme.partials.hero', ['title' => 'Register'])



    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('register.post') }}" class="form-contact contact_form" action="contact_process.php"
                        method="post" inovalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control border" name="name" type="text"
                                        placeholder="Enter your name" value="{{ old('name') }}">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    {{-- @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror --}}
                                </div>
                                <div class="form-group">
                                    <input class="form-control border" name="email" type="email"
                                        placeholder="Enter email address" value="{{ old('name') }}">
                                    {{-- @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror --}}
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control border" name="password" type="password"
                                        placeholder="Enter your password">
                                    {{-- @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror --}}
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control border" name="password_confirmation" type="password"
                                        placeholder="Enter your password confirmation">
                                    {{-- @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror --}}
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center text-md-right mt-3">
                            <a href="{{ route('login') }} " style="color:green" class="mx-3">Already Registered
                                ?</a>
                            <button type="submit" class="button button--active button-contactForm">Register</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

@endsection
