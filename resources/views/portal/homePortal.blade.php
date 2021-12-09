@extends('layouts.app')

@section('title', 'Home Portal')

@section('content')

<section class="">
    <div class="md:mx-24 md:flex">
        @include('layouts.sidebarPortal')
        <div class="md:w-3/4">
            @include('layouts.navbarPortal')
            <div class="px-5 md:px-12 py-12">
                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Selamat Datang di Portal Beasiswa Kynesia Scholarship!
                    </h3>
                    <p class="text-lg text-secondary-color text-justify">
                        Portal Beasiswa berisikan informasi terkait beasiswa serta riwayat dari pencairan dana beasiswa
                        yang dilakukan oleh pihak Kynesia Foundation. Pada portal beasiswa juga kamu bisa mengakses
                        informasi profile kamu jika ada informasi terbaru yang perlu kamu perbaharui
                    </p>
                </div>
                <div class="mb-8">
                    <h3 class="text-3xl text-accent-color mb-4">
                        Informasi Beasiswa
                    </h3>
                    <div>
                        <div
                            class="py-3 md:py-6 px-4 md:px-8 flex flex-row flex-wrap border border-gray-300 rounded-md">
                            <div class="w-full md:w-1/4 mb-2.5 md:mb-0">
                                <img class="w-full h-full mx-auto bg-cover"
                                    src="https://dummyimage.com/250x200/000/fff.png" alt="">
                            </div>
                            <div class="w-full md:w-3/4 md:pl-5">
                                <h5 class="text-xl md:text-2xl text-primary-color">Pengumaman Kynesia Scholarship 2021
                                </h5>
                                <p class="text-xs md:text-sm text-accent-color">Sunday, 18 July 2021</p>
                                <p class="text-sm md:text-base text-secondary-color text-justify mb-5 md:mb-10">Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Magni, labore explicabo itaque
                                    reiciendis vitae minima a ex possimus harum velit.</p>
                                <div class="">
                                    <a class="float-right bg-primary-color text-bg-color px-8 py-1.5 rounded"
                                        href="">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer ')
        </div>
    </div>
</section>

@endsection