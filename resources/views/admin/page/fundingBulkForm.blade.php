@extends('admin.layouts.app')

@section('title', 'Pencairan Dana')

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

<section>
    <div class="md:mx-24 md:flex" x-data="handler()">
        @include('admin.layouts.sidebarPendaftaran')
        <div class="md:w-3/4">
            @include('admin.layouts.navbarPendaftaran')
            <div class="px-5 md:px-12 py-12">
                @include('admin.layouts.sessionFlashMessage')
                <form action="{{route('fundingBulkPost')}}" method="POST">
                    @csrf
                    <div class="overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-0">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6">
                                    <h3 class="text-primary-color text-lg font-bold ">Masukan Data Pencairan Dana</h3>
                                </div>

                                <div class="col-span-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6">
                                            <label for="father_name"
                                                class="block text-sm font-medium text-secondary-color">Beasiswa</label>
                                            <select id="father_education" name="scholarship_id"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                                required>
                                                <option name="scholarship_id" disabled selected hidden>Pilih</option>
                                                @foreach($scholarships as $scholarship)
                                                <option name="scholarship_id" value="{{$scholarship->id}}">{{$scholarship->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="error">@error('name'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="father_birthdate"
                                                class="block text-sm font-medium text-secondary-color">Keterangan</label>
                                                <input type="text" name="detail" id="father_name"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                >
                                            <div class="error">@error('startStepOne'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="father_birthdate"
                                                class="block text-sm font-medium text-secondary-color">Status</label>
                                            <select id="father_education" name="status"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-color focus:border-primary-color sm:text-sm"
                                                required>
                                                <option name="status" disabled selected hidden>Pilih</option>
                                                <option name="status" value=1>Sudah Cair</option>
                                                <option name="status" value=0>Belum Cair</option>
                                            </select>
                                            <div class="error">@error('endStepOne'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="father_name"
                                                class="block text-sm font-medium text-secondary-color">Jumlah</label>
                                            <input type="number" name="total" id="father_name"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                >
                                            <div class="error">@error('name'){{$message}}@enderror</div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="father_name"
                                                class="block text-sm font-medium text-secondary-color">Tanggal Pencairan</label>
                                            <input type="date" name="date" id="father_name"
                                                class="mt-1 focus:ring-primary-color focus:border-primary-color block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                >
                                            <div class="error">@error('name'){{$message}}@enderror</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sm:mt-4 px-4 py-3 text-right sm:px-0">                            
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-color focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-color">
                                Selesai
                            </button>
                        </div>
                    </div>
                </form>
                <div class="sm:mt-4 px-4 py-3 flex justify-between sm:px-0">
                    <a href="{{route('registeredAdmin')}}">
                        <button
                            class="inline-flex justify-center items-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-secondary-color bg-bg-color focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-color hover:bg-gray-100 hover:shadow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.71 15.88L10.83 12L14.71 8.12001C15.1 7.73001 15.1 7.10001 14.71 6.71001C14.32 6.32001 13.69 6.32001 13.3 6.71001L8.70998 11.3C8.31998 11.69 8.31998 12.32 8.70998 12.71L13.3 17.3C13.69 17.69 14.32 17.69 14.71 17.3C15.09 16.91 15.1 16.27 14.71 15.88Z"
                                    fill="#1E335F" />
                            </svg>
                            Cancel
                        </button>
                    </a>
                </div>
            </div>
            @include('admin.layouts.footer ')
        </div>
    </div>
</section>

@endsection