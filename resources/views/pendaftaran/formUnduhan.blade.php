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

<script src="{{ asset('js/validationIodine.js')}}"></script>

<section>
    <div class="md:mx-24 md:flex">
        @include('layouts.sidebarPendaftaran')
        <div class="md:w-3/4">
            @include('layouts.navbarPendaftaran')
            <div class="px-5 md:px-12 py-12">
                @include('layouts.sessionFlashMessage')
                <form x-data="form" @focusout="change" @input="change" @submit="submit"
                    action="{{route('downloadablePost')}}" method="POST" enctype="multipart/form-data"
                    onsubmit="return confirm('Setelah dikirim formulir tidak dapat diubah, kamu yakin ingin mengumpulkan?');">
                    @csrf
                    <input type="hidden" name="scholarship_id" value="{{$scholarship->id}}">
                    <div class="overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-0">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6">
                                    <h3 class="text-primary-color text-xl font-bold ">Formulir Unduhan</h3>
                                    <p class="text-secondary-color text-base font-medium">Berisikan formulir terkait
                                        file yang perlu dikirimkan
                                    </p>
                                    <div class="w-32 p-1 bg-accent-color"></div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="id" class="block text-sm font-medium text-secondary-color">KTP/ Paspor/
                                        KK</label>
                                    <p class="text-gray-500 text-xs">Scan dengan format JPG, JPEG, atau PNG (Maks. 1MB)
                                    </p>
                                    <input type="file" name="id" id="id"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        :class="{'border border-primary-color ring-1 ring-primary-color': id.errorMessage}"
                                        accept="image/jpeg, image/png" data-rules='["required"]'>
                                    <div class="h-3">
                                        <p class="text-xs text-red-500" x-show="id.errorMessage"
                                            x-text="id.errorMessage" x-transition>
                                        </p>
                                    </div>
                                    <div class="error text-xs text-red-500">
                                        @error('id'){{$message}}@enderror
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="graduate_pass"
                                        class="block text-sm font-medium text-secondary-color">Surat Keterangan Lulus/
                                        Ijazah</label>
                                    <p class="text-gray-500 text-xs">Kirim dengan PDF (Maks. 1MB)
                                    </p>
                                    <input type="file" name="graduate_pass" id="graduate_pass"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        :class="{'border border-primary-color ring-1 ring-primary-color': graduate_pass.errorMessage}"
                                        accept="application/pdf" data-rules='["required"]'>
                                    <div class="h-3">
                                        <p class="text-xs text-red-500" x-show="graduate_pass.errorMessage"
                                            x-text="graduate_pass.errorMessage" x-transition>
                                        </p>
                                    </div>
                                    <div class="error text-xs text-red-500">@error('graduate_pass'){{$message}}@enderror
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="university_pass"
                                        class="block text-sm font-medium text-secondary-color">Bukti Diterima Di
                                        Perguruan Tinggi</label>
                                    <p class="text-gray-500 text-xs">Scan dengan format JPG, JPEG, atau PNG (Maks. 1MB)
                                    </p>
                                    <input type="file" name="university_pass" id="university_pass"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        :class="{'border border-primary-color ring-1 ring-primary-color': university_pass.errorMessage}"
                                        accept="image/jpeg, image/png" data-rules='["required"]'>
                                    <div class="h-3">
                                        <p class="text-xs text-red-500" x-show="university_pass.errorMessage"
                                            x-text="university_pass.errorMessage" x-transition>
                                        </p>
                                    </div>
                                    <div class="error text-xs text-red-500">
                                        @error('university_pass'){{$message}}@enderror</div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="motivation_letter"
                                        class="block text-sm font-medium text-secondary-color">Motivation Letter</label>
                                    <p class="text-gray-500 text-xs">Kirim dengan format PDF (Maks. 1MB)
                                    </p>
                                    <input type="file" name="motivation_letter" id="motivation_letter"
                                        class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        :class="{'border border-primary-color ring-1 ring-primary-color': motivation_letter.errorMessage}"
                                        accept="application/pdf" data-rules='["required"]'>
                                    <div class="h-3">
                                        <p class="text-xs text-red-500" x-show="motivation_letter.errorMessage"
                                            x-text="motivation_letter.errorMessage" x-transition>
                                        </p>
                                    </div>
                                    <div class="error text-xs text-red-500">
                                        @error('motivation_letter'){{$message}}@enderror</div>
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
                <div class="sm:mt-4 px-4 py-3 text-left sm:px-0">
                    <a href="/pendaftaran/form-data-pendidikan">
                        <button
                            class="inline-flex justify-center items-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-secondary-color bg-bg-color focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-color hover:bg-gray-100 hover:shadow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.71 15.88L10.83 12L14.71 8.12001C15.1 7.73001 15.1 7.10001 14.71 6.71001C14.32 6.32001 13.69 6.32001 13.3 6.71001L8.70998 11.3C8.31998 11.69 8.31998 12.32 8.70998 12.71L13.3 17.3C13.69 17.69 14.32 17.69 14.71 17.3C15.09 16.91 15.1 16.27 14.71 15.88Z"
                                    fill="#1E335F" />
                            </svg>
                            Form Data Pendidikan
                        </button>
                    </a>
                </div>
            </div>
            @include('layouts.footer ')
        </div>
    </div>
</section>

@endsection