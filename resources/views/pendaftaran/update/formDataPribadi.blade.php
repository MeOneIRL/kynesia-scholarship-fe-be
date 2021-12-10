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
                <form action="{{route('updateBiodataPost',$biodata->user_id)}}" method= "POST" onsubmit="return confirm('Apakah anda yakin ingin mengirimkan data anda?')">
                    @csrf
                    <input type="hidden" name="scholarship_id" value="{{$biodata->scholarship_id}}">
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
                                    <input type="text" name="full_name" id="full_name" value = "{{$biodata->name}}"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nickname" class="block text-sm font-medium text-secondary-color">Nama
                                        Panggilan</label>
                                    <input type="text" name="nickname" id="nickname" value = "{{$biodata->nickname}}"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="sex" class="block text-sm font-medium text-secondary-color">Jenis
                                        Kelamin</label>
                                    <select id="sex" name="sex"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                        required>
                                        <option name="sex" value="Laki-laki" @if($biodata->gender == "Laki-laki") selected = "selected" @endif>Laki-laki</option>
                                        <option name="sex" value="Perempuan" @if($biodata->gender == "Perempuan") selected = "selected" @endif>Perempuan</option>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="birthplace"
                                        class="block text-sm font-medium text-secondary-color">Tempat
                                        Lahir</label>
                                    <input type="text" name="birthplace" id="birthplace" value = "{{$biodata->birthplace}}"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="birthdate"
                                        class="block text-sm font-medium text-secondary-color">Tanggal
                                        Lahir</label>
                                    <input type="date" name="birthdate" id="birthdate" value = "{{$biodata->birthdate}}"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="telephone" class="block text-sm font-medium text-secondary-color">
                                        Telephone</label>
                                    <input type="number" name="telephone" id="telephone" value = "{{$biodata->telephone}}"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block text-sm font-medium text-secondary-color">Alamat
                                        Email</label>
                                    <input type="text" name="email" id="email" value = "{{$biodata->email}}"
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
                                        <option name="id_type" value="KTP" @if($biodata->idType == "KTP") selected = "selected" @endif>KTP</option>
                                        <option name="id_type" value="Passport" @if($biodata->idType == "Passport") selected = "selected" @endif>Passport</option>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="id_number" class="block text-sm font-medium text-secondary-color">Nomor
                                        Identitas</label>
                                    <input type="number" name="id_number" id="id_number" value = "{{$biodata->idNumber}}"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6">
                                    <label for="address"
                                        class="block text-sm font-medium text-secondary-color">Alamat</label>
                                    <p class="text-xs text-gray-300">Sesuai Identitas</p>
                                    <input type="text" name="address" id="address" autocomplete="address" value = "{{$biodata->addressID}}"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="postal-code" class="block text-sm font-medium text-secondary-color">Kode
                                        Pos</label>
                                    <input type="text" name="code" id="postal-code" value = "{{$biodata->postCodeID}}"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="district"
                                        class="block text-sm font-medium text-secondary-color">Kecamatan</label>
                                    <input type="text" name="district" id="district" value = "{{$biodata->districtID}}"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="city"
                                        class="block text-sm font-medium text-secondary-color">Kota/Kabupaten</label>
                                    <input type="text" name="city" id="city" value = "{{$biodata->cityID}}"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="province"
                                        class="block text-sm font-medium text-secondary-color">Provinsi</label>
                                    <select id="province" name="province"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                        required>
                                        <option name="province" value="Aceh" @if($biodata->provinceID == "Aceh") selected = "selected" @endif>Aceh</option>
                                        <option name="province" value="Bali" @if($biodata->provinceID == "Bali") selected = "selected" @endif>Bali</option>
                                        <option name="province" value="Bangka Belitung" @if($biodata->provinceID == "Bangka Belitung") selected = "selected" @endif>Bangka Belitung</option>
                                        <option name="province" value="Banten" @if($biodata->provinceID == "Banten") selected = "selected" @endif>Banten</option>
                                        <option name="province" value="Bengkulu" @if($biodata->provinceID == "Bengkulu") selected = "selected" @endif>Bengkulu</option>
                                        <option name="province" value="DI Yogyakarta" @if($biodata->provinceID == "DI Yogyakarta") selected = "selected" @endif>DI Yogyakarta</option>
                                        <option name="province" value="DKI Jakarta" @if($biodata->provinceID == "DKI Jakarta") selected = "selected" @endif>DKI Jakarta</option>
                                        <option name="province" value="Gorontalo" @if($biodata->provinceID == "Gorontalo") selected = "selected" @endif>Gorontalo</option>
                                        <option name="province" value="Jambi" @if($biodata->provinceID == "Jambi") selected = "selected" @endif>Jambi</option>
                                        <option name="province" value="Jawa Barat" @if($biodata->provinceID == "Jawa Barat") selected = "selected" @endif>Jawa Barat</option>
                                        <option name="province" value="Jawa Tengah" @if($biodata->provinceID == "Jawa Tengah") selected = "selected" @endif>Jawa Tengah</option>
                                        <option name="province" value="Jawa Timur" @if($biodata->provinceID == "Jawa Timur") selected = "selected" @endif>Jawa Timur</option>
                                        <option name="province" value="Kalimantan Barat" @if($biodata->provinceID == "Kalimantan Barat") selected = "selected" @endif>Kalimantan Barat</option>
                                        <option name="province" value="Kalimantan Selatan" @if($biodata->provinceID == "Kalimantan Selatan") selected = "selected" @endif>Kalimantan Selatan
                                        </option>
                                        <option name="province" value="Kalimantan Tengah" @if($biodata->provinceID == "Kalimantan Tengah") selected = "selected" @endif>Kalimantan Tengah</option>
                                        <option name="province" value="Kalimantan Timur" @if($biodata->provinceID == "Kalimantan Timur") selected = "selected" @endif>Kalimantan Timur</option>
                                        <option name="province" value="Kalimantan Utara" @if($biodata->provinceID == "Kalimantan Utara") selected = "selected" @endif>Kalimantan Utara</option>
                                        <option name="province" value="Kepulauan Riau" @if($biodata->provinceID == "Kepulauan Riau") selected = "selected" @endif>Kepulauan Riau</option>
                                        <option name="province" value="Lampung" @if($biodata->provinceID == "Lampung") selected = "selected" @endif>Lampung</option>
                                        <option name="province" value="Maluku Utara" @if($biodata->provinceID == "Maluku Utara") selected = "selected" @endif>Maluku Utara</option>
                                        <option name="province" value="Maluku" @if($biodata->provinceID == "Maluku") selected = "selected" @endif>Maluku</option>
                                        <option name="province" value="Nusa Tenggara Barat" @if($biodata->provinceID == "Nusa Tenggara Barat") selected = "selected" @endif>Nusa Tenggara Barat
                                        </option>
                                        <option name="province" value="Nusa Tenggara Timur" @if($biodata->provinceID == "Nusa Tenggara Timur") selected = "selected" @endif>Nusa Tenggara Timur
                                        </option>
                                        <option name="province" value="Papua Barat" @if($biodata->provinceID == "Papua Barat") selected = "selected" @endif>Papua Barat</option>
                                        <option name="province" value="Papua" @if($biodata->provinceID == "Papua") selected = "selected" @endif>Papua</option>
                                        <option name="province" value="Riau" @if($biodata->provinceID == "Riau") selected = "selected" @endif>Riau</option>
                                        <option name="province" value="Sulawesi Barat" @if($biodata->provinceID == "Sulawesi Barat") selected = "selected" @endif>Sulawesi Barat</option>
                                        <option name="province" value="Sulawesi Selatan" @if($biodata->provinceID == "Sulawesi Selatan") selected = "selected" @endif>Sulawesi Selatan</option>
                                        <option name="province" value="Sulawesi Tengah" @if($biodata->provinceID == "Sulawesi Tengah") selected = "selected" @endif>Sulawesi Tengah</option>
                                        <option name="province" value="Sulawesi Tenggara" @if($biodata->provinceID == "Sulawesi Tenggara") selected = "selected" @endif>Sulawesi Tenggara</option>
                                        <option name="province" value="Sulawesi Utara" @if($biodata->provinceID == "Sulawesi Utara") selected = "selected" @endif>Sulawesi Utara</option>
                                        <option name="province" value="Sumatra Barat" @if($biodata->provinceID == "Sumatra Barat") selected = "selected" @endif>Sumatra Barat</option>
                                        <option name="province" value="Sumatra Selatan" @if($biodata->provinceID == "Sumatra Selatan") selected = "selected" @endif>Sumatra Selatan</option>
                                        <option name="province" value="Sumatra Utara" @if($biodata->provinceID == "Sumatra Utara") selected = "selected" @endif>Sumatra Utara
                                        </option>
                                    </select>
                                </div>


                                <div x-data="{ checking_address: false }" class="col-span-6">
                                    <div class="col-span-6 mb-5">
                                        <label for="checking_address" class="flex items-center cursor-pointer">
                                        </label>
                                    </div>

                                    <div
                                        class="col-span-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6">
                                                <label for="living_address"
                                                    class="block text-sm font-medium text-secondary-color">Alamat Saat
                                                    Ini</label>
                                                <input type="text" name="living_address" id="living_address" value = "{{$biodata->addressLiving}}"
                                                    autocomplete="living_address"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                    required>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="living_code"
                                                    class="block text-sm font-medium text-secondary-color">Kode
                                                    Pos</label>
                                                <input type="text" name="living_code" id="living_code" value = "{{$biodata->postCodeLiving}}"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                    required>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="living_district"
                                                    class="block text-sm font-medium text-secondary-color">Kecamatan</label>
                                                <input type="text" name="living_district" id="living_district" value = "{{$biodata->districtLiving}}"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                    required>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="living_city"
                                                    class="block text-sm font-medium text-secondary-color">Kota/Kabupaten</label>
                                                <input type="text" name="living_city" id="living_city" value = "{{$biodata->cityLiving}}"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                    required>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="living_province"
                                                    class="block text-sm font-medium text-secondary-color">Provinsi</label>
                                                <select id="living_province" name="living_province"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                                    required>
                                                    <option name="living_province" value="Aceh" @if($biodata->provinceLiving == "Aceh") selected = "selected" @endif>Aceh</option>
                                                    <option name="living_province" value="Bali" @if($biodata->provinceLiving == "Bali") selected = "selected" @endif>Bali</option>
                                                    <option name="living_province" value="Bangka Belitung" @if($biodata->provinceLiving == "Bangka Belitung") selected = "selected" @endif>Bangka
                                                        Belitung
                                                    </option>
                                                    <option name="living_province" value="Banten" @if($biodata->provinceLiving == "Banten") selected = "selected" @endif>Banten</option>
                                                    <option name="living_province" value="Bengkulu" @if($biodata->provinceLiving == "Bengkulu") selected = "selected" @endif>Bengkulu</option>
                                                    <option name="living_province" value="DI Yogyakarta" @if($biodata->provinceLiving == "DI Yogyakarta") selected = "selected" @endif>DI Yogyakarta
                                                    </option>
                                                    <option name="living_province" value="DKI Jakarta" @if($biodata->provinceLiving == "DKI Jakarta") selected = "selected" @endif>DKI Jakarta
                                                    </option>
                                                    <option name="living_province" value="Gorontalo" @if($biodata->provinceLiving == "Gorontalo") selected = "selected" @endif>Gorontalo</option>
                                                    <option name="living_province" value="Jambi" @if($biodata->provinceLiving == "Jambi") selected = "selected" @endif>Jambi</option>
                                                    <option name="living_province" value="Jawa Barat" @if($biodata->provinceLiving == "Jawa Barat") selected = "selected" @endif>Jawa Barat
                                                    </option>
                                                    <option name="living_province" value="Jawa Tengah" @if($biodata->provinceLiving == "Jawa Tengah") selected = "selected" @endif>Jawa Tengah
                                                    </option>
                                                    <option name="living_province" value="Jawa Timur" @if($biodata->provinceLiving == "Jawa Timur") selected = "selected" @endif>Jawa Timur
                                                    </option>
                                                    <option name="living_province" value="Kalimantan Barat" @if($biodata->provinceLiving == "Kalimantan Barat") selected = "selected" @endif>Kalimantan
                                                        Barat
                                                    </option>
                                                    <option name="living_province" value="Kalimantan Selatan" @if($biodata->provinceLiving == "Kalimantan Selatan") selected = "selected" @endif>Kalimantan
                                                        Selatan
                                                    </option>
                                                    <option name="living_province" value="Kalimantan Tengah" @if($biodata->provinceLiving == "Kalimantan Tengah") selected = "selected" @endif>Kalimantan
                                                        Tengah
                                                    </option>
                                                    <option name="living_province" value="Kalimantan Timur" @if($biodata->provinceLiving == "Kalimantan Timur") selected = "selected" @endif>Kalimantan
                                                        Timur
                                                    </option>
                                                    <option name="living_province" value="Kalimantan Utara" @if($biodata->provinceLiving == "Kalimantan Utara") selected = "selected" @endif>Kalimantan
                                                        Utara
                                                    </option>
                                                    <option name="living_province" value="Kepulauan Riau" @if($biodata->provinceLiving == "Kepulauan Riau") selected = "selected" @endif>Kepulauan Riau
                                                    </option>
                                                    <option name="living_province" value="Lampung" @if($biodata->provinceLiving == "Lampung") selected = "selected" @endif>Lampung</option>
                                                    <option name="living_province" value="Maluku Utara" @if($biodata->provinceLiving == "Maluku Utara") selected = "selected" @endif>Maluku Utara
                                                    </option>
                                                    <option name="living_province" value="Maluku" @if($biodata->provinceLiving == "Maluku") selected = "selected" @endif>Maluku</option>
                                                    <option name="living_province" value="Nusa Tenggara Barat" @if($biodata->provinceLiving == "Nusa Tenggara Barat") selected = "selected" @endif>Nusa
                                                        Tenggara
                                                        Barat
                                                    </option>
                                                    <option name="living_province" value="Nusa Tenggara Timur" @if($biodata->provinceLiving == "") selected = "selected" @endif>Nusa
                                                        Tenggara
                                                        Timur
                                                    </option>
                                                    <option name="living_province" value="Papua Barat" @if($biodata->provinceLiving == "") selected = "selected" @endif>Papua Barat
                                                    </option>
                                                    <option name="living_province" value="Papua" @if($biodata->provinceLiving == "") selected = "selected" @endif>Papua</option>
                                                    <option name="living_province" value="Riau" @if($biodata->provinceLiving == "") selected = "selected" @endif>Riau</option>
                                                    <option name="living_province" value="Sulawesi Barat" @if($biodata->provinceLiving == "") selected = "selected" @endif>Sulawesi Barat
                                                    </option>
                                                    <option name="living_province" value="Sulawesi Selatan" @if($biodata->provinceLiving == "") selected = "selected" @endif>Sulawesi
                                                        Selatan
                                                    </option>
                                                    <option name="living_province" value="Sulawesi Tengah" @if($biodata->provinceLiving == "") selected = "selected" @endif>Sulawesi
                                                        Tengah
                                                    </option>
                                                    <option name="living_province" value="Sulawesi Tenggara" @if($biodata->provinceLiving == "") selected = "selected" @endif>Sulawesi
                                                        Tenggara
                                                    </option>
                                                    <option name="living_province" value="Sulawesi Utara" @if($biodata->provinceLiving == "") selected = "selected" @endif>Sulawesi Utara
                                                    </option>
                                                    <option name="living_province" value="Sumatra Barat" @if($biodata->provinceLiving == "") selected = "selected" @endif>Sumatra Barat
                                                    </option>
                                                    <option name="living_province" value="Sumatra Selatan" @if($biodata->provinceLiving == "") selected = "selected" @endif>Sumatra
                                                        Selatan
                                                    </option>
                                                    <option name="living_province" value="Sumatra Utara" @if($biodata->provinceLiving == "") selected = "selected" @endif>Sumatra Utara
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
                                    <input type="text" name="instagram" id="instagram" value = "{{$socialMedia->instagram}}"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="facebook" class="block text-sm font-medium text-secondary-color">
                                        Facebook</label>
                                    <input type="text" name="facebook" id="facebook" value = "{{$socialMedia->facebook}}"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="twitter" class="block text-sm font-medium text-secondary-color">
                                        Twitter</label>
                                    <input type="text" name="twitter" id="twitter" value = "{{$socialMedia->twitter}}"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tiktok" class="block text-sm font-medium text-secondary-color">
                                        Tiktok</label>
                                    <input type="text" name="tiktok" id="tiktok" value = "{{$socialMedia->tiktok}}"
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
                                    <input type="number" name="text_id" id="text_id" value = "{{$biodata->entranceNumber}}"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="entrance_type"
                                        class="block text-sm font-medium text-secondary-color">Jalur Masuk</label>
                                    <select id="entrance_type" name="entrance_type"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                        required>
                                        <option name="entrance_type" value="SNPMTN" @if($biodata->entrance == "SNMPTN") selected = "selected" @endif>SNPMTN</option>
                                        <option name="entrance_type" value="SBMPTN" @if($biodata->entrance == "SBMPTN") selected = "selected" @endif>SBMPTN</option>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="major" class="block text-sm font-medium text-secondary-color">
                                        Program Studi</label>
                                    <input type="text" name="major" id="major" value = "{{$biodata->major}}"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="university"
                                        class="block text-sm font-medium text-secondary-color">Perguruan Tinggi</label>
                                    <select id="university" name="university"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                        required>
                                        <option name="university" value="Universitas Indonesia" @if($biodata->university == "Universitas Indonesia") selected = "selected" @endif>Universitas Indonesia
                                        </option>
                                        <option name="university" value="Universitas Padjadjaran" @if($biodata->university == "Universitas Padjadjaran") selected = "selected" @endif>Universitas
                                            Padjadjaran</option>
                                        <option name="university" value="Institut Teknologi Bandung" @if($biodata->university == "Institut Teknologi Bandung") selected = "selected" @endif>Institut Teknologi
                                            Bandung</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="sm:mt-4 px-4 py-3 text-right sm:px-0">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-color focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-color">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
                <div class="sm:mt-4 px-4 py-3 text-right sm:px-0">
                    <a href="route('familyForm')">
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