@extends('layouts.app')

@section('title', 'Home Pendaftaran')

@section('content')

<section class="">
    <div class="md:mx-24 md:flex">
        @include('layouts.sidebarPendaftaran')
        <div class="md:w-3/4">
            @include('layouts.navbarPendaftaran')
            <div class="px-5 md:px-12 py-12">
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
                                    <td class="p-0.5 border border-gray-300">15 - 25 Juli 2021</td>
                                </tr>
                                <tr>
                                    <td class="p-0.5 border border-gray-300">
                                        Pengumuman Beasiswa Tahap 1 (Adminisrasi dan Tes Online)</td>
                                    <td class="p-0.5 border border-gray-300">4 Juli 2021</td>
                                </tr>
                                <tr>
                                    <td class="p-0.5 border border-gray-300">Proses Seleksi Tahap 2 (Wawancara Online)
                                    </td>
                                    <td class="p-0.5 border border-gray-300">7 - 14 Juli 2021</td>
                                </tr>
                                <tr>
                                    <td class="p-0.5 border border-gray-300">Pengumuman Penerima Beasiswa</td>
                                    <td class="p-0.5 border border-gray-300">18 Juli 2021</td>
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
                        <tbody class="text-secondary-color">
                            <tr>
                                <td class="p-0.5 border border-gray-300">
                                    Tahap 1 (Administrasi dan Tes Online)
                                </td>
                                <td class="p-0.5 text-green-400 border border-gray-300">Lulus</td>
                            </tr>
                            <tr>
                                <td class="p-0.5 border border-gray-300">Tahap 2 (Wawancara Online)</td>
                                <td class="p-0.5 text-yellow-400 border border-gray-300">Dalam Proses Peninjauan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @include('layouts.footer ')
        </div>
    </div>
</section>

@endsection