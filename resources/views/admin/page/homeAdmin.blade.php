@extends('admin.layouts.app')

@section('title', 'Home Admin')

@section('content')

<section class="">
    <div class="md:mx-24 md:flex">
        @include('admin.layouts.sidebarPendaftaran')
        <div class="md:w-3/4">
            @include('admin.layouts.navbarPendaftaran')
            <div class="px-5 md:px-12 py-12">
                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Timeline Beasiswa {{$scholarship->name}} Yang Berlangsung
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
                                    <td class="p-0.5 border border-gray-300">{{date("d-M-Y", strtotime($scholarship->startStepOne))}} s/d {{date("d-M-Y", strtotime($scholarship->endStepOne))}}</td>
                                </tr>
                                <tr>
                                    <td class="p-0.5 border border-gray-300">
                                        Pengumuman Beasiswa Tahap 1 (Adminisrasi dan Tes Online)</td>
                                    <td class="p-0.5 border border-gray-300">{{date("d-M-Y", strtotime($scholarship->announceStepOne))}}</td>
                                </tr>
                                <tr>
                                    <td class="p-0.5 border border-gray-300">Proses Seleksi Tahap 2 (Wawancara Online)
                                    </td>
                                    <td class="p-0.5 border border-gray-300">{{date("d-M-Y", strtotime($scholarship->startStepTwo))}} s/d {{date("d-M-Y", strtotime($scholarship->endStepTwo))}}</td>
                                </tr>
                                <tr>
                                    <td class="p-0.5 border border-gray-300">Pengumuman Penerima Beasiswa</td>
                                    <td class="p-0.5 border border-gray-300">{{date("d-M-Y", strtotime($scholarship->announceStepTwo))}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @include('admin.layouts.footer ')
        </div>
    </div>
</section>

@endsection