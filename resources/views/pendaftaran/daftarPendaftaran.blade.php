@extends('layouts.app')

@section('title', 'Daftar Pendaftaran')

@section('content')

@include('layouts.headerLandingPage')

<script src="{{ asset('js/validationIodine.js')}}"></script>

<section>
    <div class="container mx-auto px-8 md:px-28 py-12 max-w-screen-sm border-0 md:border border-gray-300 rounded-md">
        <h3 class="mb-8 md:mb-12 text-2xl md:text-3xl text-secondary-color text-center">
            Daftar Akun Pendaftaran
        </h3>
        <form id="form" x-data="form" @focusout="change" @input="change" @submit="submit" class="flex flex-col"
            action="{{route('registerAccountPost')}}" method="POST">
            @csrf
            <div class="mb-2">
                <label class="block text-lg text-secondary-color" for="email">Email</label>
                <input
                    class="p-1 w-full text-secondary-color border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary-color focus:border-primary-color transition duration-500 rounded"
                    type="email" name="email" id="email"
                    :class="{'border border-primary-color ring-1 ring-primary-color': email.errorMessage}"
                    data-rules='["required", "email"]'>
                <div class="h-3">
                    <p class="text-xs text-red-500" x-show="email.errorMessage" x-text="email.errorMessage"
                        x-transition>
                    </p>
                </div>
                <div class="error text-xs text-red-500">@error('email'){{$message}}@enderror</div>
            </div>
            <div class="mb-2">
                <label class="block text-lg text-secondary-color" for="password">Password</label>
                <input
                    class="p-1 w-full text-secondary-color border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary-color focus:border-primary-color transition duration-500 rounded"
                    type="password" name="password" id="password"
                    :class="{'border border-primary-color ring-1 ring-primary-color': password.errorMessage}"
                    data-rules='["required"]'>
                <div class="h-3">
                    <p class="text-xs text-red-500" x-show="password.errorMessage" x-text="password.errorMessage"
                        x-transition>
                    </p>
                </div>
            </div>
            <div class="mb-8">
                <label class="block text-lg text-secondary-color" for="ulangPassword">Ulangi Password</label>
                <input
                    class="p-1 w-full text-secondary-color border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary-color focus:border-primary-color transition duration-500 rounded"
                    type="password" name="password_confirmation" id="ulangPassword"
                    :class="{'border border-primary-color ring-1 ring-primary-color': password_confirmation.errorMessage}"
                    data-rules='["required", "matchingPassword"]'>
                <div class="h-3">
                    <p class="text-xs text-red-500" x-show="password_confirmation.errorMessage"
                        x-text="password_confirmation.errorMessage" x-transition>
                    </p>
                </div>
                <div class="error text-xs text-red-500">@error('password'){{$message}}@enderror</div>
            </div>
            <div class="w-full mx-auto mb-5">
                <button class="w-full p-1 bg-primary-color text-bg-color rounded" type="submit">
                    Daftar
                </button>
            </div>
            <div class="text-secondary-color text-center">
                Sudah memiliki akun?
                <span class="text-primary-color hover:underline">
                    <a href="{{route('loginAccountForm')}}">Masuk</a>
                </span>
            </div>
        </form>
    </div>
</section>

@include('layouts.footer')

@endsection