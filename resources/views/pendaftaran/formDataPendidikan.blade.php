@extends('layouts.app')

@section('title', 'Form Administrasi')

@section('styles')

<style>
    #checking_address:checked~.dot {
        transform: translateX(100%);
        background-color: #13B0BE;
    }

    .row {
        max-width: 80%;
        margin: 20px auto;
    }
</style>

@endsection

@section('content')

<script src="{{ asset('js/dataPendidikan.js')}}"></script>
<script src="{{ asset('js/validationIodine.js')}}"></script>

<section>
    <div class="md:mx-24 md:flex" x-data="handler()">
        @include('layouts.sidebarPendaftaran')
        <div class="md:w-3/4">
            @include('layouts.navbarPendaftaran')
            <div class="px-5 md:px-12 py-12">
                @include('layouts.sessionFlashMessage')
                <form x-data="form" @focusout="change" @input="change" @submit="submit"
                    action="{{route('educationPost')}}" method="POST"
                    onsubmit="return confirm('Apakah anda yakin ingin mengirimkan data anda?')">
                    @csrf
                    <input type="hidden" name="scholarship_id" value="{{$scholarship->id}}">
                    <div class="overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-0">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6">
                                    <h3 class="text-primary-color text-lg font-bold ">Form Data Pendidikan</h3>
                                    <p class="text-secondary-color text-sm">Berisikan form informasi riwayat pendidikan
                                        yang pernah dilalui
                                    </p>
                                </div>

                                {{-- Riwayat Pendidikan --}}

                                <div class="col-span-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="pb-2.5 col-span-6 border-b border-gray-300">
                                            <p class="text-primary-color font-bold">Latar Pendidikan</p>
                                            <p class="text-secondary-color text-sm">Isi latar pendidikan anda</p>
                                        </div>

                                        {{-- SD --}}
                                        <div class="col-span-6">
                                            <p class="text-secondary-color text-sm font-semibold">SD (Sekolah Dasar)</p>
                                            <p class="text-gray-300 text-xs">Isi data sekolah dasar anda</p>
                                        </div>
                                        <input type="hidden" name="elementary" value="SD">
                                        <div class="col-span-6">
                                            <label for="elementary_name"
                                                class="block text-sm font-medium text-secondary-color">Nama
                                                Sekolah</label>
                                            <input type="text" name="elementary_name" id="elementary_name"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': elementary_name.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="elementary_name.errorMessage"
                                                    x-text="elementary_name.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('elementary_name'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="elementary_province"
                                                class="block text-sm font-medium text-secondary-color">Provinsi</label>
                                            <select id="elementary_province" name="elementary_province"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                                required>
                                                <option name="elementary_province" disabled selected hidden>Pilih
                                                </option>
                                                <option name="elementary_province" value="Aceh">Aceh</option>
                                                <option name="elementary_province" value="Bali">Bali</option>
                                                <option name="elementary_province" value="Bangka Belitung">Bangka
                                                    Belitung
                                                </option>
                                                <option name="elementary_province" value="Banten">Banten</option>
                                                <option name="elementary_province" value="Bengkulu">Bengkulu</option>
                                                <option name="elementary_province" value="DI Yogyakarta">DI Yogyakarta
                                                </option>
                                                <option name="elementary_province" value="DKI Jakarta">DKI Jakarta
                                                </option>
                                                <option name="elementary_province" value="Gorontalo">Gorontalo</option>
                                                <option name="elementary_province" value="Jambi">Jambi</option>
                                                <option name="elementary_province" value="Jawa Barat">Jawa Barat
                                                </option>
                                                <option name="elementary_province" value="Jawa Tengah">Jawa Tengah
                                                </option>
                                                <option name="elementary_province" value="Jawa Timur">Jawa Timur
                                                </option>
                                                <option name="elementary_province" value="Kalimantan Barat">Kalimantan
                                                    Barat
                                                </option>
                                                <option name="elementary_province" value="Kalimantan Selatan">Kalimantan
                                                    Selatan
                                                </option>
                                                <option name="elementary_province" value="Kalimantan Tengah">Kalimantan
                                                    Tengah
                                                </option>
                                                <option name="elementary_province" value="Kalimantan Timur">Kalimantan
                                                    Timur
                                                </option>
                                                <option name="elementary_province" value="Kalimantan Utara">Kalimantan
                                                    Utara
                                                </option>
                                                <option name="elementary_province" value="Kepulauan Riau">Kepulauan Riau
                                                </option>
                                                <option name="elementary_province" value="Lampung">Lampung</option>
                                                <option name="elementary_province" value="Maluku Utara">Maluku Utara
                                                </option>
                                                <option name="elementary_province" value="Maluku">Maluku</option>
                                                <option name="elementary_province" value="Nusa Tenggara Barat">Nusa
                                                    Tenggara
                                                    Barat
                                                </option>
                                                <option name="elementary_province" value="Nusa Tenggara Timur">Nusa
                                                    Tenggara
                                                    Timur
                                                </option>
                                                <option name="elementary_province" value="Papua Barat">Papua Barat
                                                </option>
                                                <option name="elementary_province" value="Papua">Papua</option>
                                                <option name="elementary_province" value="Riau">Riau</option>
                                                <option name="elementary_province" value="Sulawesi Barat">Sulawesi Barat
                                                </option>
                                                <option name="elementary_province" value="Sulawesi Selatan">Sulawesi
                                                    Selatan
                                                </option>
                                                <option name="elementary_province" value="Sulawesi Tengah">Sulawesi
                                                    Tengah
                                                </option>
                                                <option name="elementary_province" value="Sulawesi Tenggara">Sulawesi
                                                    Tenggara
                                                </option>
                                                <option name="elementary_province" value="Sulawesi Utara">Sulawesi Utara
                                                </option>
                                                <option name="elementary_province" value="Sumatra Barat">Sumatra Barat
                                                </option>
                                                <option name="elementary_province" value="Sumatra Selatan">Sumatra
                                                    Selatan
                                                </option>
                                                <option name="elementary_province" value="Sumatra Utara">Sumatra Utara
                                                </option>
                                            </select>
                                            <div class="error text-xs text-red-500">
                                                @error('elementary_province'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="elementary_city"
                                                class="block text-sm font-medium text-secondary-color">Kota/
                                                Kabupaten</label>
                                            <input type="text" name="elementary_city" id="elementary_city"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': elementary_city.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="elementary_city.errorMessage"
                                                    x-text="elementary_city.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('elementary_city'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="elementary_enter"
                                                class="block text-sm font-medium text-secondary-color">Tahun
                                                Masuk</label>
                                            <input type="number" min="1990" max="2021" step="1" name="elementary_enter"
                                                id="elementary_enter"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': elementary_enter.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="elementary_enter.errorMessage"
                                                    x-text="elementary_enter.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('elementary_enter'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="elementary_graduate"
                                                class="block text-sm font-medium text-secondary-color">Tahun
                                                Keluar</label>
                                            <input type="number" min="1990" max="2021" step="1"
                                                name="elementary_graduate" id="elementary_graduate"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': elementary_graduate.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500"
                                                    x-show="elementary_graduate.errorMessage"
                                                    x-text="elementary_graduate.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('elementary_graduate'){{$message}}@enderror</div>
                                        </div>

                                        {{-- SMP --}}
                                        <div class="col-span-6 mt-2.5">
                                            <p class="text-secondary-color text-sm font-semibold">SMP (Sekolah Menengah
                                                Pertama)</p>
                                            <p class="text-gray-300 text-xs">Isi data sekolah menengah pertama anda</p>
                                        </div>
                                        <input type="hidden" name="junior" value="SMP">
                                        <div class="col-span-6">
                                            <label for="junior_name"
                                                class="block text-sm font-medium text-secondary-color">Nama
                                                Sekolah</label>
                                            <input type="text" name="junior_name" id="junior_name"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': junior_name.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="junior_name.errorMessage"
                                                    x-text="junior_name.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('junior_grade'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="junior_province"
                                                class="block text-sm font-medium text-secondary-color">Provinsi</label>
                                            <select id="junior_province" name="junior_province"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                                required>
                                                <option name="junior_province" disabled selected hidden>Pilih</option>
                                                <option name="junior_province" value="Aceh">Aceh</option>
                                                <option name="junior_province" value="Bali">Bali</option>
                                                <option name="junior_province" value="Bangka Belitung">Bangka
                                                    Belitung
                                                </option>
                                                <option name="junior_province" value="Banten">Banten</option>
                                                <option name="junior_province" value="Bengkulu">Bengkulu</option>
                                                <option name="junior_province" value="DI Yogyakarta">DI Yogyakarta
                                                </option>
                                                <option name="junior_province" value="DKI Jakarta">DKI Jakarta
                                                </option>
                                                <option name="junior_province" value="Gorontalo">Gorontalo</option>
                                                <option name="junior_province" value="Jambi">Jambi</option>
                                                <option name="junior_province" value="Jawa Barat">Jawa Barat
                                                </option>
                                                <option name="junior_province" value="Jawa Tengah">Jawa Tengah
                                                </option>
                                                <option name="junior_province" value="Jawa Timur">Jawa Timur
                                                </option>
                                                <option name="junior_province" value="Kalimantan Barat">Kalimantan
                                                    Barat
                                                </option>
                                                <option name="junior_province" value="Kalimantan Selatan">Kalimantan
                                                    Selatan
                                                </option>
                                                <option name="junior_province" value="Kalimantan Tengah">Kalimantan
                                                    Tengah
                                                </option>
                                                <option name="junior_province" value="Kalimantan Timur">Kalimantan
                                                    Timur
                                                </option>
                                                <option name="junior_province" value="Kalimantan Utara">Kalimantan
                                                    Utara
                                                </option>
                                                <option name="junior_province" value="Kepulauan Riau">Kepulauan Riau
                                                </option>
                                                <option name="junior_province" value="Lampung">Lampung</option>
                                                <option name="junior_province" value="Maluku Utara">Maluku Utara
                                                </option>
                                                <option name="junior_province" value="Maluku">Maluku</option>
                                                <option name="junior_province" value="Nusa Tenggara Barat">Nusa
                                                    Tenggara
                                                    Barat
                                                </option>
                                                <option name="junior_province" value="Nusa Tenggara Timur">Nusa
                                                    Tenggara
                                                    Timur
                                                </option>
                                                <option name="junior_province" value="Papua Barat">Papua Barat
                                                </option>
                                                <option name="junior_province" value="Papua">Papua</option>
                                                <option name="junior_province" value="Riau">Riau</option>
                                                <option name="junior_province" value="Sulawesi Barat">Sulawesi Barat
                                                </option>
                                                <option name="junior_province" value="Sulawesi Selatan">Sulawesi
                                                    Selatan
                                                </option>
                                                <option name="junior_province" value="Sulawesi Tengah">Sulawesi
                                                    Tengah
                                                </option>
                                                <option name="junior_province" value="Sulawesi Tenggara">Sulawesi
                                                    Tenggara
                                                </option>
                                                <option name="junior_province" value="Sulawesi Utara">Sulawesi Utara
                                                </option>
                                                <option name="junior_province" value="Sumatra Barat">Sumatra Barat
                                                </option>
                                                <option name="junior_province" value="Sumatra Selatan">Sumatra
                                                    Selatan
                                                </option>
                                                <option name="junior_province" value="Sumatra Utara">Sumatra Utara
                                                </option>
                                            </select>
                                            <div class="error text-xs text-red-500">
                                                @error('junior_province'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="junior_city"
                                                class="block text-sm font-medium text-secondary-color">Kota/
                                                Kabupaten</label>
                                            <input type="text" name="junior_city" id="junior_city"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': junior_city.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="junior_city.errorMessage"
                                                    x-text="junior_city.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('junior_city'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="junior_enter"
                                                class="block text-sm font-medium text-secondary-color">Tahun
                                                Masuk</label>
                                            <input type="number" min="1990" max="2021" step="1" name="junior_enter"
                                                id="junior_enter"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': junior_enter.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="junior_enter.errorMessage"
                                                    x-text="junior_enter.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('junior_enter'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="junior_graduate"
                                                class="block text-sm font-medium text-secondary-color">Tahun
                                                Keluar</label>
                                            <input type="number" min="1990" max="2021" step="1" name="junior_graduate"
                                                id="junior_graduate"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': junior_graduate.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="junior_graduate.errorMessage"
                                                    x-text="junior_graduate.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('junior_graduate'){{$message}}@enderror</div>
                                        </div>

                                        {{-- SMA --}}
                                        <div class="col-span-6 mt-2.5">
                                            <p class="text-secondary-color text-sm font-semibold">SMA (Sekolah Menengah
                                                Atas)</p>
                                            <p class="text-gray-300 text-xs">Isi data sekolah menengah atas anda</p>
                                        </div>
                                        <input type="hidden" name="high" value="SMA">
                                        <div class="col-span-6">
                                            <label for="high_name"
                                                class="block text-sm font-medium text-secondary-color">Nama
                                                Sekolah</label>
                                            <input type="text" name="high_name" id="high_name"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': high_name.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="high_name.errorMessage"
                                                    x-text="high_name.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('high_name'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="high_province"
                                                class="block text-sm font-medium text-secondary-color">Provinsi</label>
                                            <select id="high_province" name="high_province"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                                required>
                                                <option name="high_province" disabled selected hidden>Pilih</option>
                                                <option name="high_province" value="Aceh">Aceh</option>
                                                <option name="high_province" value="Bali">Bali</option>
                                                <option name="high_province" value="Bangka Belitung">Bangka
                                                    Belitung
                                                </option>
                                                <option name="high_province" value="Banten">Banten</option>
                                                <option name="high_province" value="Bengkulu">Bengkulu</option>
                                                <option name="high_province" value="DI Yogyakarta">DI Yogyakarta
                                                </option>
                                                <option name="high_province" value="DKI Jakarta">DKI Jakarta
                                                </option>
                                                <option name="high_province" value="Gorontalo">Gorontalo</option>
                                                <option name="high_province" value="Jambi">Jambi</option>
                                                <option name="high_province" value="Jawa Barat">Jawa Barat
                                                </option>
                                                <option name="high_province" value="Jawa Tengah">Jawa Tengah
                                                </option>
                                                <option name="high_province" value="Jawa Timur">Jawa Timur
                                                </option>
                                                <option name="high_province" value="Kalimantan Barat">Kalimantan
                                                    Barat
                                                </option>
                                                <option name="high_province" value="Kalimantan Selatan">Kalimantan
                                                    Selatan
                                                </option>
                                                <option name="high_province" value="Kalimantan Tengah">Kalimantan
                                                    Tengah
                                                </option>
                                                <option name="high_province" value="Kalimantan Timur">Kalimantan
                                                    Timur
                                                </option>
                                                <option name="high_province" value="Kalimantan Utara">Kalimantan
                                                    Utara
                                                </option>
                                                <option name="high_province" value="Kepulauan Riau">Kepulauan Riau
                                                </option>
                                                <option name="high_province" value="Lampung">Lampung</option>
                                                <option name="high_province" value="Maluku Utara">Maluku Utara
                                                </option>
                                                <option name="high_province" value="Maluku">Maluku</option>
                                                <option name="high_province" value="Nusa Tenggara Barat">Nusa
                                                    Tenggara
                                                    Barat
                                                </option>
                                                <option name="high_province" value="Nusa Tenggara Timur">Nusa
                                                    Tenggara
                                                    Timur
                                                </option>
                                                <option name="high_province" value="Papua Barat">Papua Barat
                                                </option>
                                                <option name="high_province" value="Papua">Papua</option>
                                                <option name="high_province" value="Riau">Riau</option>
                                                <option name="high_province" value="Sulawesi Barat">Sulawesi Barat
                                                </option>
                                                <option name="high_province" value="Sulawesi Selatan">Sulawesi
                                                    Selatan
                                                </option>
                                                <option name="high_province" value="Sulawesi Tengah">Sulawesi
                                                    Tengah
                                                </option>
                                                <option name="high_province" value="Sulawesi Tenggara">Sulawesi
                                                    Tenggara
                                                </option>
                                                <option name="high_province" value="Sulawesi Utara">Sulawesi Utara
                                                </option>
                                                <option name="high_province" value="Sumatra Barat">Sumatra Barat
                                                </option>
                                                <option name="high_province" value="Sumatra Selatan">Sumatra
                                                    Selatan
                                                </option>
                                                <option name="high_province" value="Sumatra Utara">Sumatra Utara
                                                </option>
                                            </select>
                                            <div class="error text-xs text-red-500">
                                                @error('high_province'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="high_city"
                                                class="block text-sm font-medium text-secondary-color">Kota/
                                                Kabupaten</label>
                                            <input type="text" name="high_city" id="high_city"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': high_city.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="high_city.errorMessage"
                                                    x-text="high_city.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('high_city'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="high_enter"
                                                class="block text-sm font-medium text-secondary-color">Tahun
                                                Masuk</label>
                                            <input type="number" min="1990" max="2021" step="1" name="high_enter"
                                                id="high_enter"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': high_enter.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="high_enter.errorMessage"
                                                    x-text="high_enter.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('high_enter'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="high_graduate"
                                                class="block text-sm font-medium text-secondary-color">Tahun
                                                Keluar</label>
                                            <input type="number" min="1990" max="2021" step="1" name="high_graduate"
                                                id="high_graduate"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': high_graduate.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="high_graduate.errorMessage"
                                                    x-text="high_graduate.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('high_graduate'){{$message}}@enderror</div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Pendidikan Non-Formal --}}

                                <div class="mt-2.5 pb-2.5 col-span-6 border-b border-gray-300">
                                    <p class="text-primary-color font-bold">Pendidikan Non-Formal</p>
                                    <p class="text-seconndary-color text-sm">Isi informasi terkait pendidikan non formal
                                        anda (opsional)</p>
                                </div>
                                <template x-for="(field, index) in trainingForm" :key="index">
                                    <div class="col-span-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6">
                                                <p class="text-secondary-color text-sm font-semibold">Pendidikan
                                                    Non-Formal <span x-text="index + 1"></span></p>
                                                <p class="text-gray-300 text-xs">Isi informasi pendidikan non-formal
                                                    <span x-text="index + 1"></span> anda
                                                </p>
                                            </div>
                                            <div class="col-span-6">
                                                <label for="training_name"
                                                    class="block text-sm font-medium text-secondary-color">Nama
                                                    Pendidikan Non-Formal</label>
                                                <input x-model="field.training_name" type="text" name="training_name[]"
                                                    id="training_name"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="training_period"
                                                    class="block text-sm font-medium text-secondary-color">Lama
                                                    Pendidikan</label>
                                                <input x-model="field.training_period" type="text"
                                                    name="training_period[]" id="training_period"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                <div class="error">@error('training_period'){{$message}}@enderror</div>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="training_year"
                                                    class="block text-sm font-medium text-secondary-color">Tahun
                                                    Diselenggarakan</label>
                                                <input x-model="field.training_year" type="number"
                                                    name="training_year[]" id="training_year"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                <div class="error">@error('training_year'){{$message}}@enderror</div>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="training_organizer"
                                                    class="block text-sm font-medium text-secondary-color">Penyelenggara</label>
                                                <input x-model="field.training_organizer" type="text"
                                                    name="training_organizer[]" id="training_organizer"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                <div class="error">@error('training_organizer'){{$message}}@enderror
                                                </div>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="training_certificate"
                                                    class="block text-sm font-medium text-secondary-color">Sertifikat</label>
                                                <select x-model="field.training_certificate" id="training_certificate"
                                                    name="training_certificate[]"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm">
                                                    <option name="training_certificate[]">Pilih</option>
                                                    <option name="training_certificate[]" value="Ya">
                                                        Ya</option>
                                                    <option name="training_certificate[]" value="Tidak">
                                                        Tidak</option>
                                                </select>
                                                <div class="error">@error('training_certificate'){{$message}}@enderror
                                                </div>
                                            </div>
                                            <div class="col-span-6">
                                                <button
                                                    class="float-right inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-300"
                                                    type="button" :class="{'hidden': index == 0, 'block': index > 0}"
                                                    @click="removeFieldTraining(index)">
                                                    Hapus Pendidikan Non-Formal
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <div class="col-span-6">
                                    <button type="button"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-300"
                                        @click="addNewFieldTraining()">
                                        Tambah Pendidikan Non-Formal
                                    </button>
                                </div>


                                {{-- Prestasi Akademik --}}

                                <div class="mt-2.5 pb-2.5 col-span-6 border-b border-gray-300">
                                    <p class="text-primary-color font-bold">Prestasi Akademik</p>
                                    <p class="text-secondary-color text-sm">Isi informasi terkait prestasi akademik anda
                                        (opsional)</p>
                                </div>
                                <template x-for="(field, index) in achievementForm" :key="index">
                                    <div class="col-span-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6">
                                                <p class="text-secondary-color text-sm font-semibold">Prestasi Akademik
                                                    <span x-text="index + 1"></span>
                                                </p>
                                                <p class="text-gray-300 text-xs">Isi informasi prestasi akademik
                                                    <span x-text="index + 1"></span> anda
                                                </p>
                                            </div>
                                            <div class="col-span-6">
                                                <label for="achievement_name"
                                                    class="block text-sm font-medium text-secondary-color">Nama
                                                    Prestasi Akademik</label>
                                                <input x-model="field.achievement_name" type="text"
                                                    name="achievement_name[]" id="achievement_name"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="achievement_organizer"
                                                    class="block text-sm font-medium text-secondary-color">Istitusi
                                                    Penyelenggara</label>
                                                <input x-model="field.achievement_organizer" type="text"
                                                    name="achievement_organizer[]" id="achievement_organizer"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                <div class="error">@error('achievement_organizer'){{$message}}@enderror
                                                </div>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="achievement_level"
                                                    class="block text-sm font-medium text-secondary-color">Tingkat</label>
                                                <select x-model="field.achievement_level" id="achievement_level"
                                                    name="achievement_level[]"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm">
                                                    <option name="achievement_level[]">Pilih</option>
                                                    <option name="achievement_level[]" value="Regional">
                                                        Regional</option>
                                                    <option name="achievement_level[]" value="Nasional">
                                                        Nasional</option>
                                                    <option name="achievement_level[]" value="Internasional">
                                                        Internasional</option>
                                                </select>
                                                <div class="error">@error('achivement_level'){{$message}}@enderror</div>
                                            </div>
                                            <div class="col-span-6">
                                                <button
                                                    class="float-right text-sm inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-300"
                                                    type="button" :class="{'hidden': index == 0, 'block': index > 0}"
                                                    @click="removeFieldAchievement(index)">
                                                    Hapus Prestasi Akademik
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <div class="col-span-6">
                                    <button type="button"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-300"
                                        @click="addNewFieldAchievement()">
                                        Tambah Prestasi Akademik
                                    </button>
                                </div>

                                {{-- Bahasa Asing --}}

                                <div class="mt-2.5 pb-2.5 col-span-6 border-b border-gray-300">
                                    <p class="text-primary-color font-bold">Bahasa Asing</p>
                                    <p class="text-secondary-color text-sm">Isi informasi terkait bahasa asing yang anda
                                        kuasai (opsional)</p>
                                </div>
                                <template x-for="(field, index) in languageForm" :key="index">
                                    <div class="col-span-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6">
                                                <p class="text-secondary-color text-sm font-semibold">Bahasa Asing
                                                    <span x-text="index + 1"></span>
                                                </p>
                                                <p class="text-gray-300 text-xs">Isi tingkat kemampuan bahasa asing
                                                    <span x-text="index + 1"></span> anda
                                                </p>
                                            </div>
                                            <div class="col-span-6">
                                                <label for="language"
                                                    class="block text-sm font-medium text-secondary-color">Bahasa
                                                    Asing</label>
                                                <select x-model="field.language" id="language" name="language[]"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm">
                                                    <option name="language[]">Pilih</option>
                                                    <option name="language[]" value="Inggris">Inggris</option>
                                                    <option name="language[]" value="Mandarin">Mandarin</option>
                                                    <option name="language[]" value="Jepang">Jepang</option>
                                                    <option name="language[]" value="Korea">Korea</option>
                                                    <option name="language[]" value="India">India</option>
                                                    <option name="language[]" value="Perancis">Perancis</option>
                                                    <option name="language[]" value="Belanda">Belanda</option>
                                                    <option name="language[]" value="Jerman">Jerman</option>
                                                    <option name="language[]" value="Rusia">Rusia</option>
                                                    <option name="language[]" value="Arab">Arab</option>
                                                </select>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="language_talk"
                                                    class="block text-sm font-medium text-secondary-color">Kemampuan
                                                    Berbicara</label>
                                                <select x-model="field.language_talk" id="language_talk"
                                                    name="language_talk[]"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm">
                                                    <option name="language_talk[]">Pilih</option>
                                                    <option name="language_talk[]" value="Beginner">Beginner</option>
                                                    <option name="language_talk[]" value="Intermediate">Intermediate
                                                    </option>
                                                    <option name="language_talk[]" value="Advance">Advance</option>
                                                </select>
                                                <div class="error">@error('language_talk'){{$message}}@enderror</div>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="language_write"
                                                    class="block text-sm font-medium text-secondary-color">Kemampuan
                                                    Menulis</label>
                                                <select x-model="field.language_write" id="language_write"
                                                    name="language_write[]"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm">
                                                    <option name="language_write[]">Pilih</option>
                                                    <option name="language_write[]" value="Beginner">Beginner</option>
                                                    <option name="language_write[]" value="Intermediate">Intermediate
                                                    </option>
                                                    <option name="language_write[]" value="Advance">Advance</option>
                                                </select>
                                                <div class="error">@error('language_write'){{$message}}@enderror</div>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="language_read"
                                                    class="block text-sm font-medium text-secondary-color">Kemampuan
                                                    Membaca</label>
                                                <select x-model="field.language_read" id="language_read"
                                                    name="language_read[]"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm">
                                                    <option name="language_read[]">Pilih</option>
                                                    <option name="language_read[]" value="Beginner">Beginner</option>
                                                    <option name="language_read[]" value="Intermediate">Intermediate
                                                    </option>
                                                    <option name="language_read[]" value="Advance">Advance</option>
                                                </select>
                                                <div class="error">@error('language_read'){{$message}}@enderror</div>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="language_listen"
                                                    class="block text-sm font-medium text-secondary-color">Kemampuan
                                                    Mendengarkan</label>
                                                <select x-model="field.language_listen" id="language_listen"
                                                    name="language_listen[]"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm">
                                                    <option name="language_listen[]" value="Beginner">Beginner</option>
                                                    <option name="language_listen[]" value="Intermediate">Intermediate
                                                    </option>
                                                    <option name="language_listen[]" value="Advance">Advance</option>
                                                </select>
                                                <div class="error">@error('language_listen'){{$message}}@enderror</div>
                                            </div>
                                            <div class="col-span-6">
                                                <button
                                                    class="float-right text-sm inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-300"
                                                    type="button" :class="{'hidden': index == 0, 'block': index > 0}"
                                                    @click="removeFieldLanguage(index)">
                                                    Hapus Bahasa Asing
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <div class="col-span-6">
                                    <button type="button"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-300"
                                        @click="addNewFieldLanguage()">
                                        Tambah Bahasa Asing
                                    </button>
                                </div>

                                {{-- Pengalaman Organisasi --}}

                                <div class="mt-2.5 pb-2.5 col-span-6 border-b border-gray-300">
                                    <p class="text-primary-color font-bold">Pengalaman Organisasi</p>
                                    <p class="text-secondary-color text-sm">Isi informasi terkait pengalaman organisai
                                        anda (opsional)</p>
                                </div>
                                <template x-for="(field, index) in organizationForm" :key="index">
                                    <div class="col-span-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6">
                                                <p class="text-secondary-color text-sm font-semibold">Pengalaman
                                                    Organisasi
                                                    <span x-text="index + 1"></span>
                                                </p>
                                                <p class="text-gray-300 text-xs">Isi informasi pengalaman organisasi
                                                    <span x-text="index + 1"></span> anda
                                                </p>
                                            </div>
                                            <div class="col-span-6">
                                                <label for="organization_name"
                                                    class="block text-sm font-medium text-secondary-color">Nama
                                                    Organisasi</label>
                                                <input x-model="field.organization_name" type="text"
                                                    name="organization_name[]" id="organization_name"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="organization_period"
                                                    class="block text-sm font-medium text-secondary-color">Periode
                                                    Mengurus</label>
                                                <input x-model="field.organization_period" type="text"
                                                    name="organization_period[]" id="organization_period"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                    placeholder="e.g. 2020-2021">
                                                <div class="error">@error('organization_period'){{$message}}@enderror
                                                </div>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="organization_position"
                                                    class="block text-sm font-medium text-secondary-color">Posisi
                                                    Mengurus</label>
                                                <input x-model="field.organization_position" type="text"
                                                    name="organization_position[]" id="organization_position"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                <div class="error">@error('organization_position'){{$message}}@enderror
                                                </div>
                                            </div>
                                            <div class="col-span-6">
                                                <label for="organization_detail"
                                                    class="block text-sm font-medium text-secondary-color">Keterangan</label>
                                                <p class="text-xs text-gray-300">Maksimal 100 kata</p>
                                                <textarea x-model="field.organization_detail"
                                                    name="organization_detail[]" id="organization_detail" cols="30"
                                                    rows="5"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                                                <div class="error">@error('organization_detail'){{$message}}@enderror
                                                </div>
                                            </div>
                                            <div class="col-span-6">
                                                <button
                                                    class="float-right text-sm inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-300"
                                                    type="button" :class="{'hidden': index == 0, 'block': index > 0}"
                                                    @click="removeFieldOrganization(index)">
                                                    Hapus Pengalaman Organisasi
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <div class="col-span-6">
                                    <button type="button"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-300"
                                        @click="addNewFieldOrganization()">
                                        Tambah Pengalaman Organisasi
                                    </button>
                                </div>

                                {{-- Special Talent --}}

                                <div class="mt-2.5 pb-2.5 col-span-6 border-b border-gray-300">
                                    <p class="text-primary-color font-bold">Special Talent Information</p>
                                    <p class="text-secondary-color text-sm">Isi informasi terkait bakat yang anda miliki
                                        (opsional)</p>
                                </div>
                                <template x-for="(field, index) in talentForm" :key="index">
                                    <div class="col-span-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6">
                                                <p class="text-secondary-color text-sm font-semibold">Special Talent
                                                    <span x-text="index + 1"></span>
                                                </p>
                                                <p class="text-gray-300 text-xs">Isi informasi kemampuan bakat
                                                    <span x-text="index + 1"></span> anda
                                                </p>
                                            </div>
                                            <div class="col-span-6">
                                                <label for="talent_name"
                                                    class="block text-sm font-medium text-secondary-color">Nama
                                                    Bakat</label>
                                                <input x-model="field.talent_name" type="text" name="talent_name[]"
                                                    id="talent_name"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                            <div class="col-span-6">
                                                <button
                                                    class="float-right text-sm inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-300"
                                                    type="button" :class="{'hidden': index == 0, 'block': index > 0}"
                                                    @click="removeFieldSpecial(index)">
                                                    Hapus Talent
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <div class="col-span-6">
                                    <button type="button"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-300"
                                        @click="addNewFieldSpecial()">
                                        Tambah Talent
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="sm:mt-4 px-4 py-3 text-right sm:px-0">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-color focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-color">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
                <div class="sm:mt-4 px-4 py-3 flex justify-between sm:px-0">
                    <a href="/pendaftaran/form-data-keluarga">
                        <button
                            class="inline-flex justify-center items-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-secondary-color bg-bg-color focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-color hover:bg-gray-100 hover:shadow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.71 15.88L10.83 12L14.71 8.12001C15.1 7.73001 15.1 7.10001 14.71 6.71001C14.32 6.32001 13.69 6.32001 13.3 6.71001L8.70998 11.3C8.31998 11.69 8.31998 12.32 8.70998 12.71L13.3 17.3C13.69 17.69 14.32 17.69 14.71 17.3C15.09 16.91 15.1 16.27 14.71 15.88Z"
                                    fill="#1E335F" />
                            </svg>
                            Form Data Keluarga
                        </button>
                    </a>
                    <a href="/pendaftaran/form-unduhan">
                        <button
                            class="inline-flex justify-center items-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-secondary-color bg-bg-color focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-color hover:bg-gray-100 hover:shadow">
                            Form Unduhan
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.59 16.59L13.17 12L8.59 7.41L10 6L16 12L10 18L8.59 16.59Z" fill="#1E335F" />
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
            @include('layouts.footer ')
        </div>
    </div>
</section>

@endsection