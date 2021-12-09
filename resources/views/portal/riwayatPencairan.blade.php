@extends('layouts.app')

@section('title', 'Home Pendaftaran')

@section('content')

<section class="">
    <div class="md:mx-24 md:flex">
        @include('layouts.sidebarPortal')
        <div class="md:w-3/4">
            @include('layouts.navbarPortal')
            <div class="px-5 md:px-12 py-12">
                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-2.5">
                        Informasi Pencairan Dana
                    </h3>
                    <p class="mb-4 text-secondary-color">
                        Berikut laporan pencairan dana yang dilakukan oleh Kynesia Foundation
                    </p>
                    <div class="">
                        <table class="border-collapse border border-gray-300 rounded-md w-full">
                            <thead class="bg-accent-color text-secondary-color">
                                <tr>
                                    <th class="p-1 border border-gray-300">
                                        Pencairan Dana Bulan
                                    </th>
                                    <th class="p-1 border border-gray-300">
                                        Tanggal Pencairan
                                    </th>
                                    <th class="p-1 border border-gray-300">
                                        Keterangan
                                    </th>
                                    <th class="p-1 border border-gray-300">
                                        Jumlah
                                    </th>
                                    <th class="p-1 border border-gray-300">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-secondary-color text-center">
                                <tr>
                                    <td class="p-0.5 border border-gray-300">
                                        September 2021
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        01/09/2021
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        Pencairan Dana September 2021
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        5000000
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        Sudah dibayar
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0.5 border border-gray-300">
                                        Oktober 2021
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        01/10/2021
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        Pencairan Dana Oktober 2021
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        5000000
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        Sudah dibayar
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0.5 border border-gray-300">
                                        November 2021
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        01/11/2021
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        Pencairan Dana November 2021
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        5000000
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        Sudah dibayar
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0.5 border border-gray-300">
                                        Desember 2021
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        01/12/2021
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        Pencairan Dana Desember 2021
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        5000000
                                    </td>
                                    <td class="p-0.5 border border-gray-300">
                                        Sudah dibayar
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mb-8">
                    <h3 class="text-xl text-primary-color mb-4">
                        Informasi Terkait Pencairan Dana Beasiswa
                    </h3>
                    <p class="text-base text-secondary-color text-justify mb-2.5">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi reiciendis delectus molestias
                        suscipit obcaecati rerum ipsum vitae blanditiis aut eveniet vel error earum maxime eaque dicta
                        et officiis, veniam dolor. Dolore iure adipisci minus quos facilis ullam quo quas ab:
                    </p>
                    <ol class="text-base text-secondary-color list-decimal list-inside mb-2.5">
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, mollitia?</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, officia.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, dignissimos.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quas.</li>
                    </ol>
                    <p class="text-base text-secondary-color text-justify mb-4">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi reiciendis delectus molestias
                        suscipit obcaecati rerum ipsum vitae blanditiis aut eveniet vel error earum maxime eaque dicta
                        et officiis, veniam dolor. Dolore iure adipisci minus quos facilis ullam quo quas ab:
                    </p>
                </div>
            </div>
            @include('layouts.footer ')
        </div>
    </div>
</section>

@endsection