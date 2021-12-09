@extends('layouts.app')

@section('title', 'Tes Online')

@section('content')

<section class="">
    <div class="md:mx-24 md:flex">
        @include('layouts.sidebarPendaftaran')
        <div class="md:w-3/4">
            @include('layouts.navbarPendaftaran')
            <div class="px-5 md:px-12 py-12">
                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Informasi Tes Online
                    </h3>
                    <div class="">
                        <table class="border-collapse border border-gray-300 rounded-md w-full">
                            <thead class="text-left bg-accent-color text-secondary-color">
                                <tr>
                                    <th class="w-1/2 p-1 border border-gray-300">
                                        Tipe Soal
                                    </th>
                                    <th class="w-1/2 p-1 border border-gray-300">
                                        Durasi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-secondary-color">
                                <tr>
                                    <td class="p-0.5 border border-gray-300">
                                        50 Soal TPA (Tes Potensi Akademik)
                                    </td>
                                    <td class="p-0.5 border border-gray-300">90 Menit</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Aturan Tes Online
                    </h3>
                    <p class="text-lg text-secondary-color text-justify mb-4">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi reiciendis delectus molestias
                        suscipit obcaecati rerum ipsum vitae blanditiis aut eveniet vel error earum maxime eaque dicta
                        et officiis, veniam dolor. Dolore iure adipisci minus quos facilis ullam quo quas ab:
                    </p>
                    <ol class="text-lg text-secondary-color list-decimal list-inside">
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, mollitia?</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, officia.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, dignissimos.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quas.</li>
                    </ol>
                </div>
                <div class="mb-8">
                    <a class="text-lg text-primary-color underline" href="#">Link menuju halaman tes online</a>
                </div>
                <div class="relative">
                    <button class="bg-primary-color text-bg-color p-2.5 rounded-md absolute right-0">
                        Tandai Sebagai Selesai
                    </button>
                </div>
            </div>
            @include('layouts.footer ')
        </div>
    </div>
</section>

@endsection