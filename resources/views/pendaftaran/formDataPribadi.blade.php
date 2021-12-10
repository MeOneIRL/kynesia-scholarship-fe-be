@extends('layouts.app')

@section('title', 'Form Administrasi')

@section('styles')

<style>
    #checking_address:checked~.dot {
        transform: translateX(100%);
        background-color: #13B0BE;
    }
</style>

@endsection

@section('content')

<section x-data="{ show: false }" class="">
    <div class="md:mx-24 md:flex">
        @include('layouts.sidebarPendaftaran')
        <div class="md:w-3/4">
            @include('layouts.navbarPendaftaran')
            <div class="px-5 md:px-12 py-12">
                <form action="{{route('biodataPost')}}" method= "POST" onsubmit="return confirm('Apakah anda yakin ingin mengirimkan data anda?')">
                    @csrf
                    <input type="hidden" name="scholarship_id" value="{{$scholarship->id}}">
                    <div class="overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-0">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6">
                                    <h3 class="text-primary-color text-lg font-bold ">Form Data Pribadi</h3>
                                    <p class="text-secondary-color text-sm">Beiriskan form informasi mengenai data diri
                                    </p>
                                </div>

                                <div class="col-span-6">
                                    <label for="full_name" class="block text-sm font-medium text-secondary-color">Nama
                                        lengkap</label>
                                    <input type="text" name="full_name" id="full_name"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nickname" class="block text-sm font-medium text-secondary-color">Nama
                                        Panggilan</label>
                                    <input type="text" name="nickname" id="nickname"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="sex" class="block text-sm font-medium text-secondary-color">Jenis
                                        Kelamin</label>
                                    <select id="sex" name="sex"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                        required>
                                        <option name="sex" value="Laki-kali">Laki-laki</option>
                                        <option name="sex" value="Perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="birthplace"
                                        class="block text-sm font-medium text-secondary-color">Tempat
                                        Lahir</label>
                                    <input type="text" name="birthplace" id="birthplace"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="birthdate"
                                        class="block text-sm font-medium text-secondary-color">Tanggal
                                        Lahir</label>
                                    <input type="date" name="birthdate" id="birthdate"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="telephone" class="block text-sm font-medium text-secondary-color">
                                        Telephone</label>
                                    <input type="number" name="telephone" id="telephone"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block text-sm font-medium text-secondary-color">Alamat
                                        Email</label>
                                    <input type="text" name="email" id="email"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="id_type"
                                        class="block text-sm font-medium text-secondary-color">Identitas Yang
                                        Digunakan</label>
                                    <select id="id_type" name="id_type"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                        required>
                                        <option name="id_type" value="KTP">KTP</option>
                                        <option name="id_type" value="Passport">Passport</option>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="id_number" class="block text-sm font-medium text-secondary-color">Nomor
                                        Identitas</label>
                                    <input type="number" name="id_number" id="id_number"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6">
                                    <label for="address"
                                        class="block text-sm font-medium text-secondary-color">Alamat</label>
                                    <p class="text-xs text-gray-300">Sesuai Identitas</p>
                                    <input type="text" name="address" id="address" autocomplete="address"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="postal-code" class="block text-sm font-medium text-secondary-color">Kode
                                        Pos</label>
                                    <input type="text" name="code" id="postal-code"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="district"
                                        class="block text-sm font-medium text-secondary-color">Kecamatan</label>
                                    <input type="text" name="district" id="district"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="city"
                                        class="block text-sm font-medium text-secondary-color">Kota/Kabupaten</label>
                                    <input type="text" name="city" id="city"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="province"
                                        class="block text-sm font-medium text-secondary-color">Provinsi</label>
                                    <select id="province" name="province"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                        required>
                                        <option name="province" value="Aceh">Aceh</option>
                                        <option name="province" value="Bali">Bali</option>
                                        <option name="province" value="Bangka Belitung">Bangka Belitung</option>
                                        <option name="province" value="Banten">Banten</option>
                                        <option name="province" value="Bengkulu">Bengkulu</option>
                                        <option name="province" value="DI Yogyakarta">DI Yogyakarta</option>
                                        <option name="province" value="DKI Jakarta">DKI Jakarta</option>
                                        <option name="province" value="Gorontalo">Gorontalo</option>
                                        <option name="province" value="Jambi">Jambi</option>
                                        <option name="province" value="Jawa Barat">Jawa Barat</option>
                                        <option name="province" value="Jawa Tengah">Jawa Tengah</option>
                                        <option name="province" value="Jawa Timur">Jawa Timur</option>
                                        <option name="province" value="Kalimantan Barat">Kalimantan Barat</option>
                                        <option name="province" value="Kalimantan Selatan">Kalimantan Selatan
                                        </option>
                                        <option name="province" value="Kalimantan Tengah">Kalimantan Tengah</option>
                                        <option name="province" value="Kalimantan Timur">Kalimantan Timur</option>
                                        <option name="province" value="Kalimantan Utara">Kalimantan Utara</option>
                                        <option name="province" value="Kepulauan Riau">Kepulauan Riau</option>
                                        <option name="province" value="Lampung">Lampung</option>
                                        <option name="province" value="Maluku Utara">Maluku Utara</option>
                                        <option name="province" value="Maluku">Maluku</option>
                                        <option name="province" value="Nusa Tenggara Barat">Nusa Tenggara Barat
                                        </option>
                                        <option name="province" value="Nusa Tenggara Timur">Nusa Tenggara Timur
                                        </option>
                                        <option name="province" value="Papua Barat">Papua Barat</option>
                                        <option name="province" value="Papua">Papua</option>
                                        <option name="province" value="Riau">Riau</option>
                                        <option name="province" value="Sulawesi Barat">Sulawesi Barat</option>
                                        <option name="province" value="Sulawesi Selatan">Sulawesi Selatan</option>
                                        <option name="province" value="Sulawesi Tengah">Sulawesi Tengah</option>
                                        <option name="province" value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                        <option name="province" value="Sulawesi Utara">Sulawesi Utara</option>
                                        <option name="province" value="Sumatra Barat">Sumatra Barat</option>
                                        <option name="province" value="Sumatra Selatan">Sumatra Selatan</option>
                                        <option name="province" value="Sumatra Utara">Sumatra Utara
                                        </option>
                                    </select>
                                </div>

                                <div class="col-span-6 text-secondary-color font-bold">
                                    Alamat Saat Ini
                                </div>

                                <div x-data="{ checking_address: false }" class="col-span-6">
                                    <div class="col-span-6 mb-5">
                                        <label for="checking_address" class="flex items-center cursor-pointer">
                                            <div class="relative">
                                                <input x-model="checking_address" type="checkbox" id="checking_address"
                                                    name="checking_address" class="sr-only" value="same">
                                                <div class="block bg-gray-200 w-14 h-8 rounded-full"></div>
                                                <div
                                                    class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition">
                                                </div>
                                            </div>
                                            <div class="ml-3 text-gray-700 font-medium">
                                                Sama dengan KTP
                                            </div>
                                        </label>
                                    </div>

                                    <div :class="{'block': !checking_address, 'hidden': checking_address}"
                                        class="col-span-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6">
                                                <label for="living_address"
                                                    class="block text-sm font-medium text-secondary-color">Alamat Saat
                                                    Ini</label>
                                                <input type="text" name="living_address" id="living_address"
                                                    autocomplete="living_address"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                    required>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="living_code"
                                                    class="block text-sm font-medium text-secondary-color">Kode
                                                    Pos</label>
                                                <input type="text" name="living_code" id="living_code"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                    required>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="living_district"
                                                    class="block text-sm font-medium text-secondary-color">Kecamatan</label>
                                                <input type="text" name="living_district" id="living_district"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                    required>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="living_city"
                                                    class="block text-sm font-medium text-secondary-color">Kota/Kabupaten</label>
                                                <input type="text" name="living_city" id="living_city"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                    required>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="living_province"
                                                    class="block text-sm font-medium text-secondary-color">Provinsi</label>
                                                <select id="living_province" name="living_province"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                                    required>
                                                    <option name="living_province" value="Aceh">Aceh</option>
                                                    <option name="living_province" value="Bali">Bali</option>
                                                    <option name="living_province" value="Bangka Belitung">Bangka
                                                        Belitung
                                                    </option>
                                                    <option name="living_province" value="Banten">Banten</option>
                                                    <option name="living_province" value="Bengkulu">Bengkulu</option>
                                                    <option name="living_province" value="DI Yogyakarta">DI Yogyakarta
                                                    </option>
                                                    <option name="living_province" value="DKI Jakarta">DKI Jakarta
                                                    </option>
                                                    <option name="living_province" value="Gorontalo">Gorontalo</option>
                                                    <option name="living_province" value="Jambi">Jambi</option>
                                                    <option name="living_province" value="Jawa Barat">Jawa Barat
                                                    </option>
                                                    <option name="living_province" value="Jawa Tengah">Jawa Tengah
                                                    </option>
                                                    <option name="living_province" value="Jawa Timur">Jawa Timur
                                                    </option>
                                                    <option name="living_province" value="Kalimantan Barat">Kalimantan
                                                        Barat
                                                    </option>
                                                    <option name="living_province" value="Kalimantan Selatan">Kalimantan
                                                        Selatan
                                                    </option>
                                                    <option name="living_province" value="Kalimantan Tengah">Kalimantan
                                                        Tengah
                                                    </option>
                                                    <option name="living_province" value="Kalimantan Timur">Kalimantan
                                                        Timur
                                                    </option>
                                                    <option name="living_province" value="Kalimantan Utara">Kalimantan
                                                        Utara
                                                    </option>
                                                    <option name="living_province" value="Kepulauan Riau">Kepulauan Riau
                                                    </option>
                                                    <option name="living_province" value="Lampung">Lampung</option>
                                                    <option name="living_province" value="Maluku Utara">Maluku Utara
                                                    </option>
                                                    <option name="living_province" value="Maluku">Maluku</option>
                                                    <option name="living_province" value="Nusa Tenggara Barat">Nusa
                                                        Tenggara
                                                        Barat
                                                    </option>
                                                    <option name="living_province" value="Nusa Tenggara Timur">Nusa
                                                        Tenggara
                                                        Timur
                                                    </option>
                                                    <option name="living_province" value="Papua Barat">Papua Barat
                                                    </option>
                                                    <option name="living_province" value="Papua">Papua</option>
                                                    <option name="living_province" value="Riau">Riau</option>
                                                    <option name="living_province" value="Sulawesi Barat">Sulawesi Barat
                                                    </option>
                                                    <option name="living_province" value="Sulawesi Selatan">Sulawesi
                                                        Selatan
                                                    </option>
                                                    <option name="living_province" value="Sulawesi Tengah">Sulawesi
                                                        Tengah
                                                    </option>
                                                    <option name="living_province" value="Sulawesi Tenggara">Sulawesi
                                                        Tenggara
                                                    </option>
                                                    <option name="living_province" value="Sulawesi Utara">Sulawesi Utara
                                                    </option>
                                                    <option name="living_province" value="Sumatra Barat">Sumatra Barat
                                                    </option>
                                                    <option name="living_province" value="Sumatra Selatan">Sumatra
                                                        Selatan
                                                    </option>
                                                    <option name="living_province" value="Sumatra Utara">Sumatra Utara
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2.5 pb-2.5 col-span-6 border-b border-gray-300">
                                    <p class="text-primary-color font-bold">Media Sosial</p>
                                    <p class="text-secondary-color text-sm">Opsional untuk diisi</p>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="instagram" class="block text-sm font-medium text-secondary-color">
                                        Instagram</label>
                                    <input type="text" name="instagram" id="instagram"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="facebook" class="block text-sm font-medium text-secondary-color">
                                        Facebook</label>
                                    <input type="text" name="facebook" id="facebook"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="twitter" class="block text-sm font-medium text-secondary-color">
                                        Twitter</label>
                                    <input type="text" name="twitter" id="twitter"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tiktok" class="block text-sm font-medium text-secondary-color">
                                        Tiktok</label>
                                    <input type="text" name="tiktok" id="tiktok"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mt-2.5 pb-2.5 col-span-6 border-b border-gray-300">
                                    <p class="text-primary-color font-bold">Program Studi Yang Diterima</p>
                                    <p class="text-secondary-color text-sm">Isi informasi program studi yang diterima
                                    </p>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="text_id" class="block text-sm font-medium text-secondary-color">
                                        Nomor Peserta</label>
                                    <input type="number" name="text_id" id="text_id"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="entrance_type"
                                        class="block text-sm font-medium text-secondary-color">Jalur Masuk</label>
                                    <select id="entrance_type" name="entrance_type"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                        required>
                                        <option name="entrance_type" value="SNPMTN">SNPMTN</option>
                                        <option name="entrance_type" value="SBMPTN">SBMPTN</option>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="major" class="block text-sm font-medium text-secondary-color">
                                        Program Studi</label>
                                    <input type="text" name="major" id="major"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="university"
                                        class="block text-sm font-medium text-secondary-color">Perguruan Tinggi</label>
                                    <select id="university" name="university"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                        required>
                                        <option name="university" value="Universitas Indonesia">Universitas Indonesia
                                        </option>
                                        <option name="university" value="Universitas Padjadjaran">Universitas
                                            Padjadjaran</option>
                                        <option name="university" value="Institut Teknologi Bandung">Institut Teknologi
                                            Bandung</option>
                                    </select>
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
                <div class="sm:mt-4 px-4 py-3 text-right sm:px-0">
                    <a href="{{route('familyForm')}}">
                        <button
                            class="inline-flex justify-center items-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-secondary-color bg-bg-color focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-color hover:bg-gray-100 hover:shadow">
                            Form Data Keluarga
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