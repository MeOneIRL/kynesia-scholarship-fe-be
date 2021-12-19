@extends('layouts.app')

@section('title', 'Home Pendaftaran')

@section('content')

<section class="">
    <div class="md:mx-24 md:flex">
        @include('layouts.sidebarPendaftaran')
        <div class="md:w-3/4">
            @include('layouts.navbarPendaftaran')
            <div class="px-5 md:px-12 py-12">
                @include('layouts.sessionFlashMessage')
                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Selamat Datang di Portal Pendaftaran Kynesia Scholarship!
                    </h3>
                    <p class="text-lg text-secondary-color text-justify">
                        Portal pendaftaran berisikan empat buah halaman yang dapan diakses selama proses pendaftaran.
                        Halaman Home berisikan informasi terkati pendaftaran seperti timeline pendaftaran serta status
                        pendaftaran pendaftar. Pada halaman Administrasi berkas berisikan formulir administrasi yang
                        perlu diisi oleh pendaftar. Pada halaman Tes Online berisikan informasi terkait tes online yang
                        akan dilaksanakan beserta link menuju tempat dilaksanakannya tes online. Pada halaman Wawancara
                        berisikan informasi terkait wawancara beserta link menuju tempat dilakukannya wawancara.
                    </p>
                </div>
                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Timeline Pendaftaran
                    </h3>
                    <div class="">
                        <table class="border-collapse border border-gray-300 rounded-md w-full">
                            <thead class="bg-accent-color text-secondary-color">
                                <tr>
                                    <th class="p-1 border border-gray-300">
                                        Timeline Kegiatan
                                    </th>
                                    <th class="p-1 border border-gray-300">
                                        Waktu
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-secondary-color">
                                <tr>
                                    <td class="p-0.5 border border-gray-300">
                                        Pendaftaran Beasiswa (Administrasi dan Tes Online)
                                    </td>
                                    <td class="p-0.5 border border-gray-300">{{date("d-M-Y",
                                        strtotime($scholarship->startStepOne))}} s/d {{date("d-M-Y",
                                        strtotime($scholarship->endStepOne))}}</td>
                                </tr>
                                <tr>
                                    <td class="p-0.5 border border-gray-300">
                                        Pengumuman Beasiswa Tahap 1 (Adminisrasi dan Tes Online)</td>
                                    <td class="p-0.5 border border-gray-300">{{date("d-M-Y",
                                        strtotime($scholarship->announceStepOne))}}</td>
                                </tr>
                                <tr>
                                    <td class="p-0.5 border border-gray-300">Proses Seleksi Tahap 2 (Wawancara Online)
                                    </td>
                                    <td class="p-0.5 border border-gray-300">{{date("d-M-Y",
                                        strtotime($scholarship->startStepTwo))}} s/d {{date("d-M-Y",
                                        strtotime($scholarship->endStepTwo))}}</td>
                                </tr>
                                <tr>
                                    <td class="p-0.5 border border-gray-300">Pengumuman Penerima Beasiswa</td>
                                    <td class="p-0.5 border border-gray-300">{{date("d-M-Y",
                                        strtotime($scholarship->announceStepTwo))}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <h3 class="text-3xl text-primary-color mb-4">
                        Status Pendaftaran
                    </h3>
                    <table class="border-collapse border border-gray-300 rounded-md w-full">
                        <thead class="bg-accent-color text-secondary-color">
                            <tr class="">
                                <th class="p-1 border border-gray-300">
                                    Tahap Seleksi
                                </th>
                                <th class="p-1 border border-gray-300">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        @if($registered == NULL)
                        <tbody class="text-secondary-color">
                            <tr>
                                <td class="p-0.5 border border-gray-300">
                                    Tahap 1 (Administrasi dan Tes Online)
                                </td>
                                <td class="p-0.5 text-green-400 border border-gray-300">-</td>
                            </tr>
                            <tr>
                                <td class="p-0.5 border border-gray-300">Tahap 2 (Wawancara Online)</td>
                                <td class="p-0.5 text-yellow-400 border border-gray-300">-</td>
                            </tr>
                        </tbody>
                        @endif
                        @if($registered != NULL)
                        <tbody class="text-secondary-color">
                            <tr>
                                <td class="p-0.5 border border-gray-300">
                                    Tahap 1 (Administrasi dan Tes Online)
                                </td>
                                @if($registered->statusOne == 'Proses Pendaftaran')
                                <td class="p-0.5 text-primary-color border border-gray-300">{{$registered->statusOne}}
                                </td>
                                @elseif($registered->statusOne == 'Melakukan Test')
                                <td class="p-0.5 text-primary-color border border-gray-300">{{$registered->statusOne}}
                                </td>
                                @elseif($registered->statusOne == 'Proses Seleksi')
                                <td class="p-0.5 text-accent-color border border-gray-300">{{$registered->statusOne}}
                                </td>
                                @elseif($registered->statusOne == 'Lolos')
                                <td class="p-0.5 text-green-400 border border-gray-300">{{$registered->statusOne}}</td>
                                @elseif($registered->statusOne == 'Tidak Lolos')
                                <td class="p-0.5 text-red-500 border border-gray-300">{{$registered->statusOne}}</td>
                                @else
                                <td class="p-0.5 text-secondary-color border border-gray-300">{{$registered->statusOne}}
                                </td>
                                @endif
                            </tr>
                            <tr>
                                <td class="p-0.5 border border-gray-300">Tahap 2 (Wawancara Online)</td>
                                @if ($registered->statusTwo == 'Proses Pendaftaran')
                                <td class="p-0.5 text-primary-color border border-gray-300">{{$registered->statusTwo}}
                                </td>
                                @elseif ($registered->statusTwo == 'Lolos')
                                <td class="p-0.5 text-green-400 border border-gray-300">{{$registered->statusTwo}}</td>
                                @elseif ($registered->statusTwo == 'Tidak Lolos')
                                <td class="p-0.5 text-accent-color border border-gray-300">{{$registered->statusTwo}}
                                </td>
                                @else
                                <td class="p-0.5 text-secondary-color border border-gray-300">{{$registered->statusTwo}}
                                </td>
                                @endif
                            </tr>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
            @include('layouts.footer ')
        </div>
    </div>
</section>

@endsection