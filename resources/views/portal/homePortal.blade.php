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
                    <h3 class="text-3xl text-accent-color mb-2">
                        Informasi Beasiswa
                    </h3>
                    <div class="mx-auto flex flex-col">
                        <div class="flex flex-col md:flex-row overflow-hidden bg-white rounded-lg shadow-xl mt-4 w-100">
                            <div class="h-52 w-auto md:w-1/2">
                                <img class="inset-0 h-full w-full object-cover object-center"
                                    src="https://picsum.photos/640/360" />
                            </div>
                            <div class="w-full py-4 px-6 text-gray-800 flex flex-col space-y-2">
                                <div>
                                    <a href="">
                                        <h3 class="font-semibold text-base md:text-lg text-primary-color leading-tight">
                                            Pengumuman Kynesia Scholarship
                                        </h3>
                                    </a>
                                    <p
                                        class="text-xs md:text-sm text-gray-700 text-accent-color uppercase tracking-wide font-semibold">
                                        Sunday, 18 July 2021
                                    </p>
                                </div>
                                <p class="text-sm md:text-base text-secondary-color">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Aut, blanditiis? Eveniet distinctio et placeat sint
                                    nisi praesentium ab at nulla.
                                </p>
                                <div class="text-right">
                                    <a class="inline-block" href="/portal/detail-post">
                                        <button
                                            class="p-1 bg-transparent border-2 border-primary-color text-primary-color text-xs md:text-sm rounded-lg hover:bg-primary-color hover:text-bg-color focus:border-4 focus:border-primary-color">
                                            Selengkapnya
                                        </button>
                                    </a>
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