@extends('layouts.app')

@section('title', 'Masuk Pendaftaran')

@section('content')

@include('layouts.headerLandingPage')

<section>
    <div class="max-w-screen-sm mx-auto">
        @include('layouts.sessionFlashMessage')
    </div>
    <div class="container mx-auto px-8 md:px-28 py-12 max-w-screen-sm border-0 md:border border-gray-300 rounded-md">
        <h3 class="mb-8 md:mb-12 text-2xl md:text-3xl text-secondary-color text-center">
            Masuk Akun Pendaftaran
        </h3>
        <form class="flex flex-col" action="{{route('loginAccountPost')}}" method="POST">
            @csrf
            <div class="mb-5">
                <label class="c" for="email">Email</label>
                <input
                    class="p-1 w-full text-secondary-color border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary-color focus:border-primary-color transition duration-500 rounded"
                    type="email" name="email" id="email">
            </div>
            <div class="mb-5">
                <label class="block text-lg text-secondary-color" for="password">Password</label>
                <input
                    class="p-1 w-full text-secondary-color border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary-color focus:border-primary-color transition duration-500 rounded"
                    type="password" name="password" id="password">
            </div>
            <div class="flex items-center mb-5">
                <input class="h-5 w-5 mr-2.5 text-primary-color focus:ring-primary-color border-gray-300 rounded"
                    type="checkbox" name="rememberMe" id="rememberMe">
                <label class="text-secondary-color text-lg" for="rememberMe">
                    Remember me
                </label>
            </div>
            <div class="mb-8 text-primary-color hover:underline">
                <a href="#">Lupa password?</a>
            </div>
            <div class="w-full mx-auto mb-5">
                <button class="w-full p-1 bg-primary-color text-bg-color rounded" type="submit">
                    Masuk
                </button>
            </div>
            <div class="text-secondary-color text-center">
                Belum memiliki akun?
                <span class="text-primary-color hover:underline">
                    <a href="{{route('registerAccountForm')}}">Daftar</a>
                </span>
            </div>
        </form>
    </div>
</section>

@include('layouts.footer')

@endsection