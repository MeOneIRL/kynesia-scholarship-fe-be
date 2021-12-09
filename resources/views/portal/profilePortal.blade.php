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
                    <h3 class="text-3xl text-primary-color mb-1">
                        Profile Anda
                    </h3>
                    <p class="text-secondary-color text-justify">
                        Silahkan lakukan pembaruan terhadap identitas anda sesuai dengan kolom yang diminta
                    </p>
                </div>
                <div class="mb-8">
                    <form action="">
                        <div class="overflow-hidden">
                            <div class="px-4 py-5 bg-white sm:p-0">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="full-name"
                                            class="block text-sm font-medium text-secondary-color">Nama
                                            lengkap</label>
                                        <input type="text" name="full-name" id="full-name"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="id"
                                            class="block text-sm font-medium text-secondary-color">NIK</label>
                                        <input type="number" name="id" id="id"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="birthplace"
                                            class="block text-sm font-medium text-secondary-color">Tempat
                                            Lahir</label>
                                        <input type="text" name="birthplace" id="birthplace"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="birthdate"
                                            class="block text-sm font-medium text-secondary-color">Tanggal
                                            Lahir</label>
                                        <input type="date" name="birthdate" id="birthdate"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6">
                                        <label for="street-address"
                                            class="block text-sm font-medium text-secondary-color">Alamat</label>
                                        <p class="text-xs text-gray-300">Sesuai Identitas</p>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="postal-code"
                                            class="block text-sm font-medium text-secondary-color">Kode
                                            Pos</label>
                                        <input type="text" name="postal-code" id="postal-code"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="district"
                                            class="block text-sm font-medium text-secondary-color">Kecamatan</label>
                                        <input type="text" name="district" id="district"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="city"
                                            class="block text-sm font-medium text-secondary-color">Kota/Kabupaten</label>
                                        <input type="text" name="city" id="city"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="province"
                                            class="block text-sm font-medium text-secondary-color">Provinsi</label>
                                        <select id="province" name="province"
                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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

                                    <div class="col-span-6">
                                        <label for="email" class="block text-sm font-medium text-secondary-color">Alamat
                                            Email</label>
                                        <input type="text" name="email" id="email"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="telephone" class="block text-sm font-medium text-secondary-color">
                                            Telephone</label>
                                        <input type="number" name="telephone" id="telephone"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="handphone" class="block text-sm font-medium text-secondary-color">
                                            Handphone</label>
                                        <input type="number" name="telephone" id="telephone"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="bank-name" class="block text-sm font-medium text-secondary-color">
                                            Nama Bank</label>
                                        <input type="text" name="bank-name" id="bank-name"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="bank-number" class="block text-sm font-medium text-secondary-color">
                                            Nomor Rekening</label>
                                        <input type="number" name="bank-number" id="bank-number"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6">
                                        <label for="university" class="block text-sm font-medium text-secondary-color">
                                            Universitas</label>
                                        <input type="number" name="university" id="university"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6">
                                        <label for="major" class="block text-sm font-medium text-secondary-color">
                                            Program Studi</label>
                                        <input type="number" name="major" id="major"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>
                            </div>
                            <div class="sm:mt-4 px-4 py-3 text-right sm:px-0">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-color focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-color">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @include('layouts.footer ')
        </div>
    </div>
</section>

@endsection