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

<script src="{{ asset('js/dataKeluarga.js')}}"></script>
<script src="{{ asset('js/validationIodine.js')}}"></script>

<section>
    <div class="md:mx-24 md:flex" x-data="handler()">
        @include('layouts.sidebarPendaftaran')
        <div class="md:w-3/4">
            @include('layouts.navbarPendaftaran')
            <div class="px-5 md:px-12 py-12">
                @include('layouts.sessionFlashMessage')
                <form x-data="form" @focusout="change" @input="change" @submit="submit" action="{{route('familyPost')}}"
                    method="POST" onsubmit="return confirm('Apakah anda yakin ingin mengirimkan data anda?')">
                    @csrf
                    <input type="hidden" name="scholarship_id" value="{{$scholarship->id}}">
                    <div class="overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-0">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6">
                                    <h3 class="text-primary-color text-lg font-bold ">Form Data Keluarga</h3>
                                    <p class="text-secondary-color text-sm">Berisikan form informasi data keluarga anda
                                        beserta pendapatan total orang tua</p>
                                </div>

                                {{-- Ayah --}}

                                <div class="col-span-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6">
                                            <p class="text-secondary-color font-bold">Ayah</p>
                                            <p class="text-gray-300 text-sm">Isi identitas ayah anda</p>
                                        </div>
                                        <input type="hidden" name="father" value="Ayah">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="father_name"
                                                class="block text-sm font-medium text-secondary-color">Nama
                                                lengkap</label>
                                            <input type="text" name="father_name" id="father_name"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': father_name.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="father_name.errorMessage"
                                                    x-text="father_name.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('father_name'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="father_sex"
                                                class="block text-sm font-medium text-secondary-color">Jenis
                                                Kelamin</label>
                                            <select id="father_sex" name="father_sex"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                                required>
                                                <option name="father_sex" value="Laki-laki">Laki-laki</option>
                                                <div class="error text-xs text-red-500">
                                                    @error('father_sex'){{$message}}@enderror</div>
                                            </select>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="father_birthplace"
                                                class="block text-sm font-medium text-secondary-color">Tempat
                                                Lahir</label>
                                            <input type="text" name="father_birthplace" id="father_birthplace"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': father_birthplace.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="father_birthplace.errorMessage"
                                                    x-text="father_birthplace.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('father_birthplace'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="father_birthdate"
                                                class="block text-sm font-medium text-secondary-color">Tanggal
                                                Lahir</label>
                                            <input type="date" name="father_birthdate" id="father_birthdate"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': father_birthdate.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="father_birthdate.errorMessage"
                                                    x-text="father_birthdate.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('father_birthdate'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="father_education"
                                                class="block text-sm font-medium text-secondary-color">Pendidikan
                                                Terakhir</label>
                                            <select id="father_education" name="father_education"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                                required>
                                                <option name="father_education" disabled selected hidden>Pilih</option>
                                                <option name="father_education" value="SD">SD</option>
                                                <option name="father_education" value="SMP">SMP</option>
                                                <option name="father_education" value="SMA">SMA</option>
                                                <option name="father_education" value="D3">D3</option>
                                                <option name="father_education" value="S1">S1</option>
                                                <option name="father_education" value="S2">S2</option>
                                                <option name="father_education" value="S3">S3</option>
                                            </select>
                                            <div class="error text-xs text-red-500">
                                                @error('father_education'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="father_job"
                                                class="block text-sm font-medium text-secondary-color">Pekerjaan</label>
                                            <input type="text" name="father_job" id="father_job"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': father_job.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="father_job.errorMessage"
                                                    x-text="father_job.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('father_job'){{$message}}@enderror</div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Ibu --}}

                                <div class="col-span-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6">
                                            <p class="text-secondary-color font-bold">Ibu</p>
                                            <p class="text-gray-300 text-sm">Isi identitas ibu anda</p>
                                        </div>
                                        <input type="hidden" name="mother" value="Ibu">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="mother_name"
                                                class="block text-sm font-medium text-secondary-color">Nama
                                                lengkap</label>
                                            <input type="text" name="mother_name" id="mother_name"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': mother_name.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="mother_name.errorMessage"
                                                    x-text="mother_name.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('father_name'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="mother_sex"
                                                class="block text-sm font-medium text-secondary-color">Jenis
                                                Kelamin</label>
                                            <select id="mother_sex" name="mother_sex"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                                required>
                                                <option name="mother_sex" value="Perempuan">Perempuan</option>
                                            </select>
                                            <div class="error text-xs text-red-500">
                                                @error('mother_sex'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="mother_birthplace"
                                                class="block text-sm font-medium text-secondary-color">Tempat
                                                Lahir</label>
                                            <input type="text" name="mother_birthplace" id="mother_birthplace"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': mother_birthplace.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="mother_birthplace.errorMessage"
                                                    x-text="mother_birthplace.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('mother_birthplace'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="mother_birthdate"
                                                class="block text-sm font-medium text-secondary-color">Tanggal
                                                Lahir</label>
                                            <input type="date" name="mother_birthdate" id="mother_birthdate"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': mother_birthdate.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="mother_birthdate.errorMessage"
                                                    x-text="mother_birthdate.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('mother_birthdate'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="mother_education"
                                                class="block text-sm font-medium text-secondary-color">Pendidikan
                                                Terakhir</label>
                                            <select id="mother_education" name="mother_education"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                                required>
                                                <option name="mother_education" disabled selected hidden>Pilih</option>
                                                <option name="mother_education" value="SD">SD</option>
                                                <option name="mother_education" value="SMP">SMP</option>
                                                <option name="mother_education" value="SMA">SMA</option>
                                                <option name="mother_education" value="D3">D3</option>
                                                <option name="mother_education" value="S1">S1</option>
                                                <option name="mother_education" value="S2">S2</option>
                                                <option name="mother_education" value="S3">S3</option>
                                            </select>
                                            <div class="error text-xs text-red-500">
                                                @error('mother_education'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="mother_job"
                                                class="block text-sm font-medium text-secondary-color">Pekerjaan</label>
                                            <input type="text" name="mother_job" id="mother_job"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                :class="{'border border-primary-color ring-1 ring-primary-color': mother_job.errorMessage}"
                                                data-rules='["required"]'>
                                            <div class="h-3">
                                                <p class="text-xs text-red-500" x-show="mother_job.errorMessage"
                                                    x-text="mother_job.errorMessage" x-transition>
                                                </p>
                                            </div>
                                            <div class="error text-xs text-red-500">
                                                @error('mother_job'){{$message}}@enderror</div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Anak --}}
                                <template x-for="(field, index) in childForm" :key="index">
                                    <div class="col-span-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6">
                                                <p class="text-secondary-color font-bold">Anak <span
                                                        x-text="index + 1"></span></p>
                                                <p class="text-gray-300 text-sm">Isi identitas anak <span
                                                        x-text="index + 1"></span> anda</p>
                                            </div>
                                            <input x-model="field.child" type="hidden" name="child[]"
                                                value="Anak Pertama">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="child_name"
                                                    class="block text-sm font-medium text-secondary-color">Nama
                                                    lengkap</label>
                                                <input x-model="field.child_name" type="text" name="child_name[]"
                                                    id="child_name"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="child_sex"
                                                    class="block text-sm font-medium text-secondary-color">Jenis
                                                    Kelamin</label>
                                                <select x-model="field.child_sex" id="child_sex" name="child_sex[]"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm">
                                                    <option name="child_sex" disabled selected hidden>Pilih</option>
                                                    <option name="child_sex[]" value="Laki-laki">
                                                        Laki-laki</option>
                                                    <option name="child_sex[]" value="Perempuan">
                                                        Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="child_birthplace"
                                                    class="block text-sm font-medium text-secondary-color">Tempat
                                                    Lahir</label>
                                                <input x-model="field.child_birthplace" type="text"
                                                    name="child_birthplace[]" id="child_birthplace"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="child_birthdate"
                                                    class="block text-sm font-medium text-secondary-color">Tanggal
                                                    Lahir</label>
                                                <input x-model="field.child_birthdate" type="date"
                                                    name="child_birthdate[]" id="child_birthdate"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="child_education"
                                                    class="block text-sm font-medium text-secondary-color">Pendidikan
                                                    Terakhir</label>
                                                <select x-model="field.child_education" id="child_education[]"
                                                    name="child_education"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm">
                                                    <option name="child_education" disabled selected hidden>Pilih
                                                    </option>
                                                    <option name="child_education[]" value="SD">SD</option>
                                                    <option name="child_education[]" value="SMP">SMP</option>
                                                    <option name="child_education[]" value="SMA">SMA</option>
                                                    <option name="child_education[]" value="D3">D3</option>
                                                    <option name="child_education[]" value="S1">S1</option>
                                                    <option name="child_education[]" value="S2">S2</option>
                                                    <option name="child_education[]" value="S3">S3</option>
                                                </select>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="child_job"
                                                    class="block text-sm font-medium text-secondary-color">Pekerjaan</label>
                                                <input x-model="field.child_job" type="text" name="child_job[]"
                                                    id="child_job"
                                                    class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                            <div class="col-span-6">
                                                <button
                                                    class="float-right text-sm inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-300"
                                                    type="button" :class="{'hidden': index == 0, 'block': index > 0}"
                                                    @click="removeField(index)">
                                                    Hapus Anak
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <div class="col-span-6">
                                    <button type="button"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-300"
                                        @click="addNewField()">
                                        Tambah Anak
                                    </button>
                                </div>
                                <div class="col-span-6 mt-2.5 pb-2.5 border-b border-gray-300">
                                    <p class="text-primary-color font-bold">Pendapatan Orang Tua</p>
                                    <p class="text-secondary-color text-sm">Isi total pendapatan dari kedua orang tua
                                    </p>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="earnings"
                                        class="block text-sm font-medium text-secondary-color">Pendapatan Orang
                                        Tua</label>
                                    <div class="flex flex-row items-center space-x-1">
                                        <span class="text-sm text-secondary-color fotn-medium">Rp.</span>
                                        <input type="number" name="earnings" id="earnings"
                                            class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                            :class="{'border border-primary-color ring-1 ring-primary-color': earnings.errorMessage}"
                                            data-rules='["required"]'>
                                        <span class="text-sm text-secondary-color fotn-medium">/Bulan</span>
                                    </div>
                                    <div class="h-3 pl-7">
                                        <p class="text-xs text-red-500" x-show="earnings.errorMessage"
                                            x-text="earnings.errorMessage" x-transition>
                                        </p>
                                    </div>
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
                    <a href="/pendaftaran/form-data-pribadi">
                        <button
                            class="inline-flex justify-center items-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-secondary-color bg-bg-color focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-color hover:bg-gray-100 hover:shadow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.71 15.88L10.83 12L14.71 8.12001C15.1 7.73001 15.1 7.10001 14.71 6.71001C14.32 6.32001 13.69 6.32001 13.3 6.71001L8.70998 11.3C8.31998 11.69 8.31998 12.32 8.70998 12.71L13.3 17.3C13.69 17.69 14.32 17.69 14.71 17.3C15.09 16.91 15.1 16.27 14.71 15.88Z"
                                    fill="#1E335F" />
                            </svg>
                            Form Data Pribadi
                        </button>
                    </a>
                    <a href="/pendaftaran/form-data-pendidikan">
                        <button
                            class="inline-flex justify-center items-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-secondary-color bg-bg-color focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-color hover:bg-gray-100 hover:shadow">
                            Form Data Pendidikan
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