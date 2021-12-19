@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')

@include('layouts.headerLandingPage')

<section>
    <div class="max-w-screen-sm mx-auto">
        @include('layouts.sessionFlashMessage')
    </div>
    <div class="container mx-auto px-8 md:px-28 py-12 max-w-screen-sm border-0 md:border border-gray-300 rounded-md">
        <h3 class="mb-8 md:mb-12 text-2xl md:text-3xl text-secondary-color text-center">
            Masukan Email Anda
        </h3>
        <form class="flex flex-col" action="{{route('emailPost')}}" method="POST">
            @csrf
            <div class="mb-5">
                <label class="c" for="email">Email</label>
                <input
                    class="p-1 w-full text-secondary-color border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary-color focus:border-primary-color transition duration-500 rounded"
                    type="email" name="email" id="email">
            </div>
            <div class="w-full mx-auto mb-5">
                <button class="w-full p-1 bg-primary-color text-bg-color rounded" type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</section>

@include('layouts.footer')

@endsection