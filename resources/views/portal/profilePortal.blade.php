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
                    <form action="{{route('profilePortalPost')}}" method="POST">
                        @csrf
                        <div class="overflow-hidden">
                            <input type="hidden" name="user_id" value = "{{$profile->id}}">
                            <div class="px-4 py-5 bg-white sm:p-0">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="full-name"
                                            class="block text-sm font-medium text-secondary-color">Nama
                                            lengkap</label>
                                        <input type="text" name="name" id="full-name" value = "{{$profile->name}}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="id"
                                            class="block text-sm font-medium text-secondary-color">NIK</label>
                                        <input type="number" name="id" id="id" value = "{{$profile->nik}}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="birthplace"
                                            class="block text-sm font-medium text-secondary-color">Tempat
                                            Lahir</label>
                                        <input type="text" name="birthplace" id="birthplace" value = "{{$profile->birthplace}}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="birthdate"
                                            class="block text-sm font-medium text-secondary-color">Tanggal
                                            Lahir</label>
                                        <input type="date" name="birthdate" id="birthdate" value = "{{$profile->birthdate}}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6">
                                        <label for="street-address"
                                            class="block text-sm font-medium text-secondary-color">Alamat</label>
                                        <p class="text-xs text-gray-300">Sesuai Identitas</p>
                                        <input type="text" name="address" id="street-address" value = "{{$profile->address}}"
                                            autocomplete="street-address"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="postal-code"
                                            class="block text-sm font-medium text-secondary-color">Kode
                                            Pos</label>
                                        <input type="text" name="postalCode" id="postal-code" value = "{{$profile->postalCode}}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="district"
                                            class="block text-sm font-medium text-secondary-color">Kecamatan</label>
                                        <input type="text" name="district" id="district" value = "{{$profile->district}}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="city"
                                            class="block text-sm font-medium text-secondary-color">Kota/Kabupaten</label>
                                        <input type="text" name="city" id="city" value = "{{$profile->city}}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="province"
                                            class="block text-sm font-medium text-secondary-color">Provinsi</label>
                                        <select id="province" name="province"
                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option name="province" value="Aceh" @if($profile->province == "Aceh") selected="selected" @endif>Aceh</option>
                                            <option name="province" value="Bali" @if($profile->province == "Bali") selected="selected" @endif>Bali</option>
                                            <option name="province" value="Bangka Belitung" @if($profile->province == "Bangka Belitung") selected="selected" @endif>Bangka Belitung</option>
                                            <option name="province" value="Banten" @if($profile->province == "Banten") selected="selected" @endif>Banten</option>
                                            <option name="province" value="Bengkulu" @if($profile->province == "Bengkulu") selected="selected" @endif>Bengkulu</option>
                                            <option name="province" value="DI Yogyakarta" @if($profile->province == "DI Yogyakarta") selected="selected" @endif>DI Yogyakarta</option>
                                            <option name="province" value="DKI Jakarta" @if($profile->province == "DKI Jakarta") selected="selected" @endif>DKI Jakarta</option>
                                            <option name="province" value="Gorontalo" @if($profile->province == "Gorontalo") selected="selected" @endif>Gorontalo</option>
                                            <option name="province" value="Jambi" @if($profile->province == "Jambi") selected="selected" @endif>Jambi</option>
                                            <option name="province" value="Jawa Barat" @if($profile->province == "Jawa Barat") selected="selected" @endif>Jawa Barat</option>
                                            <option name="province" value="Jawa Tengah" @if($profile->province == "Jawa Tengah") selected="selected" @endif>Jawa Tengah</option>
                                            <option name="province" value="Jawa Timur" @if($profile->province == "Jawa Timur") selected="selected" @endif>Jawa Timur</option>
                                            <option name="province" value="Kalimantan Barat" @if($profile->province == "Kalimantan Barat") selected="selected" @endif>Kalimantan Barat</option>
                                            <option name="province" value="Kalimantan Selatan" @if($profile->province == "Kalimantan Selatan") selected="selected" @endif>Kalimantan Selatan
                                            </option>
                                            <option name="province" value="Kalimantan Tengah" @if($profile->province == "Kalimantan Tengah") selected="selected" @endif>Kalimantan Tengah</option>
                                            <option name="province" value="Kalimantan Timur" @if($profile->province == "Kalimantan Timur") selected="selected" @endif>Kalimantan Timur</option>
                                            <option name="province" value="Kalimantan Utara" @if($profile->province == "Kalimantan Utara") selected="selected" @endif>Kalimantan Utara</option>
                                            <option name="province" value="Kepulauan Riau" @if($profile->province == "Kepulauan Riau") selected="selected" @endif>Kepulauan Riau</option>
                                            <option name="province" value="Lampung" @if($profile->province == "Lampung") selected="selected" @endif>Lampung</option>
                                            <option name="province" value="Maluku Utara" @if($profile->province == "Maluku Utara") selected="selected" @endif>Maluku Utara</option>
                                            <option name="province" value="Maluku" @if($profile->province == "Maluku") selected="selected" @endif>Maluku</option>
                                            <option name="province" value="Nusa Tenggara Barat" @if($profile->province == "Nusa Tenggara Barat") selected="selected" @endif>Nusa Tenggara Barat
                                            </option>
                                            <option name="province" value="Nusa Tenggara Timur" @if($profile->province == "Nusa Tenggara Timur") selected="selected" @endif>Nusa Tenggara Timur
                                            </option>
                                            <option name="province" value="Papua Barat" @if($profile->province == "Papua Barat") selected="selected" @endif>Papua Barat</option>
                                            <option name="province" value="Papua" @if($profile->province == "Papua") selected="selected" @endif>Papua</option>
                                            <option name="province" value="Riau" @if($profile->province == "Riau") selected="selected" @endif>Riau</option>
                                            <option name="province" value="Sulawesi Barat" @if($profile->province == "Sulawesi Barat") selected="selected" @endif>Sulawesi Barat</option>
                                            <option name="province" value="Sulawesi Selatan" @if($profile->province == "Sulawesi Selatan") selected="selected" @endif>Sulawesi Selatan</option>
                                            <option name="province" value="Sulawesi Tengah" @if($profile->province == "Sulawesi Tengah") selected="selected" @endif>Sulawesi Tengah</option>
                                            <option name="province" value="Sulawesi Tenggara" @if($profile->province == "Sulawesi Tenggara") selected="selected" @endif>Sulawesi Tenggara</option>
                                            <option name="province" value="Sulawesi Utara" @if($profile->province == "Sulawesi Utara") selected="selected" @endif>Sulawesi Utara</option>
                                            <option name="province" value="Sumatra Barat" @if($profile->province == "Sumatra Barat") selected="selected" @endif>Sumatra Barat</option>
                                            <option name="province" value="Sumatra Selatan" @if($profile->province == "Sumatra Selatan") selected="selected" @endif>Sumatra Selatan</option>
                                            <option name="province" value="Sumatra Utara" @if($profile->province == "Sumatra Utara") selected="selected" @endif>Sumatra Utara
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="email" class="block text-sm font-medium text-secondary-color">Alamat
                                            Email</label>
                                        <input type="text" name="email" id="email" value = "{{$profile->email}}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="telephone" class="block text-sm font-medium text-secondary-color">
                                            Telephone</label>
                                        <input type="number" name="telephone" id="telephone" value = "{{$profile->telephone}}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="handphone" class="block text-sm font-medium text-secondary-color">
                                            Handphone</label>
                                        <input type="number" name="handphone" id="telephone" value = "{{$profile->phoneNumber}}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="bank-name" class="block text-sm font-medium text-secondary-color">
                                            Nama Bank</label>
                                        <input type="text" name="bank" id="bank-name" value = "{{$profile->bank}}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="bank-number" class="block text-sm font-medium text-secondary-color">
                                            Nomor Rekening</label>
                                        <input type="text" name="bankNumber" id="bank-number" value = "{{$profile->bankNumber}}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6">
                                        <label for="university" class="block text-sm font-medium text-secondary-color">
                                            Universitas</label>
                                        <input type="text" name="university" id="university" value = "{{$profile->university}}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6">
                                        <label for="major" class="block text-sm font-medium text-secondary-color">
                                            Program Studi</label>
                                        <input type="text" name="major" id="major" value = "{{$profile->major}}"
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