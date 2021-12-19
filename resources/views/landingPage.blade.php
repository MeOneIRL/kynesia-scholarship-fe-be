@extends('layouts.app')

@section('title', 'Kynesia Scholarship Program')

@section('content')

@include('layouts.headerLandingPage')

<section class="container mx-2.5 md:mx-24">
    <div class="container px-10 py-4 md:px-24 md:py-8 flex flex-col gap-2.5 bg-primary-color rounded-lg">
        <h1 class="text-3xl md:text-5xl text-bg-color font-bold">
            Kynesia Foundation Scholarship 2021
        </h1>
        <h2 class="text-xl md:text-3xl text-accent-color font-bold">
            Selamat Datang!
        </h2>
        <p class="text-base md:text-xl text-bg-color">
            Melalui program Kynesia Scholarship, Kynesia Foundation ingin turut membantu memberikan akses
            finansial ke perguruan tinggi dan menghasilkan pemimpin masa depan yang dapat membawa perubahan
            bagi lingkungan sekitar.
        </p>
        <div class="flex-initial">
            <button class="bg-bg-color mt-1 md:mt-8 hover:bg-gray-200 text-secondary-color font-semibold rounded p-1">
                <svg class="inline-block" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 9H15V3H9V9H5L12 16L19 9ZM11 11V5H13V11H14.17L12 13.17L9.83 11H11ZM5 18H19V20H5V18Z"
                        fill="#1E335F" />
                </svg>
                <p class="inline-block text-base md:text-lg">Get Handbook</p>
            </button>
        </div>
    </div>
    <div class="container mx-auto mt-12 flex flex-row flex-wrap gap-7 justify-center">
        <div
            class="bg-bg-white px-8 py-5 max-w-xs flex flex-col gap-2.5 text-center shadow-md hover:shadow-xl rounded-md">
            <svg class="mx-auto" width="100" height="100" viewBox="0 0 100 100" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M50 25C54.5833 25 58.3333 28.75 58.3333 33.3333C58.3333 37.9167 54.5833 41.6667 50 41.6667C45.4167 41.6667 41.6667 37.9167 41.6667 33.3333C41.6667 28.75 45.4167 25 50 25ZM50 62.5C61.25 62.5 74.1667 67.875 75 70.8333V75H25V70.875C25.8333 67.875 38.75 62.5 50 62.5ZM50 16.6667C40.7917 16.6667 33.3333 24.125 33.3333 33.3333C33.3333 42.5417 40.7917 50 50 50C59.2083 50 66.6667 42.5417 66.6667 33.3333C66.6667 24.125 59.2083 16.6667 50 16.6667ZM50 54.1666C38.875 54.1666 16.6667 59.75 16.6667 70.8333V83.3333H83.3333V70.8333C83.3333 59.75 61.125 54.1666 50 54.1666Z"
                    fill="#1E335F" />
            </svg>
            <h3 class="text-primary-color text-2xl font-medium">Pendaftaran</h3>
            <p class="text-secondary-color text-sm">Dashboard untuk melakukan pendaftaran beasiswa Kynesia Foundation
                Scholarship</p>
            <a href="{{route('loginAccountForm')}}">
                <button class="w-full bg-primary-color text-bg-color rounded py-0.5 px-2">
                    <p class="inline-block text-lg">Klik untuk mendaftar</p>
                    <svg class="inline-block text-lg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.59L13.17 12L8.59 7.41L10 6L16 12L10 18L8.59 16.59Z" fill="white" />
                    </svg>
                </button>
            </a>
        </div>
        <div
            class="bg-bg-white px-8 py-5 max-w-xs flex flex-col gap-2.5 text-center shadow-md hover:shadow-xl rounded-md">
            <svg class="mx-auto" width="100" height="100" viewBox="0 0 100 100" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.5 71.875V87.5H28.125L74.2083 41.4167L58.5833 25.7917L12.5 71.875ZM24.6667 79.1667H20.8333V75.3333L58.5833 37.5833L62.4167 41.4167L24.6667 79.1667ZM86.2917 23.4583L76.5417 13.7083C75.7083 12.875 74.6667 12.5 73.5833 12.5C72.5 12.5 71.4583 12.9167 70.6667 13.7083L63.0417 21.3333L78.6667 36.9583L86.2917 29.3333C87.9167 27.7083 87.9167 25.0833 86.2917 23.4583Z"
                    fill="#1E335F" />
            </svg>
            <h3 class="text-primary-color text-2xl font-medium">Portal Beasiswa</h3>
            <p class="text-secondary-color text-sm">Dashboard untuk para penerima beasiswa Kynesia Foundation
                Scholarship</p>
            <a href="{{route('loginPortal')}}">
                <button class="w-full bg-primary-color text-bg-color rounded py-0.5 px-2">
                    <p class="inline-block text-lg">Klik untuk masuk</p>
                    <svg class="inline-block text-lg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.59L13.17 12L8.59 7.41L10 6L16 12L10 18L8.59 16.59Z" fill="white" />
                    </svg>
                </button>
            </a>
        </div>
        <div
            class="bg-bg-white px-8 py-5 max-w-xs flex flex-col gap-2.5 text-center shadow-md hover:shadow-xl rounded-md">
            <svg class="mx-auto" width="100" height="100" viewBox="0 0 100 100" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M45.8333 75H54.1667V66.6667H45.8333V75ZM50 8.33334C27 8.33334 8.33334 27 8.33334 50C8.33334 73 27 91.6667 50 91.6667C73 91.6667 91.6667 73 91.6667 50C91.6667 27 73 8.33334 50 8.33334ZM50 83.3334C31.625 83.3334 16.6667 68.375 16.6667 50C16.6667 31.625 31.625 16.6667 50 16.6667C68.375 16.6667 83.3334 31.625 83.3334 50C83.3334 68.375 68.375 83.3334 50 83.3334ZM50 25C40.7917 25 33.3333 32.4583 33.3333 41.6667H41.6667C41.6667 37.0833 45.4167 33.3333 50 33.3333C54.5833 33.3333 58.3333 37.0833 58.3333 41.6667C58.3333 50 45.8333 48.9583 45.8333 62.5H54.1667C54.1667 53.125 66.6667 52.0833 66.6667 41.6667C66.6667 32.4583 59.2083 25 50 25Z"
                    fill="#1E335F" />
            </svg>
            <h3 class="text-primary-color text-2xl font-medium">Bantuan</h3>
            <p class="text-secondary-color text-sm">Portal bantuan Kynesia Foundation Scholarship dan kontak Kynesia
                Foundation</p>
            <a href="{{route('helpForm')}}">
                <button class="w-full bg-primary-color text-bg-color rounded py-0.5 px-2">
                    <p class="inline-block text-lg">Klik untuk bantuan</p>
                    <svg class="inline-block text-lg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.59L13.17 12L8.59 7.41L10 6L16 12L10 18L8.59 16.59Z" fill="white" />
                    </svg>
                </button>
            </a>
        </div>
    </div>
</section>

@include('layouts.footer')

@endsection