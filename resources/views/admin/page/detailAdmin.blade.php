@extends('admin.layouts.app')

@section('title', 'Home Pendaftaran')

@section('content')

<section class="">
    <div class="md:mx-24 md:flex">
        @include('admin.layouts.sidebarPendaftaran')
        <div class="md:w-3/4">
            @include('admin.layouts.navbarPendaftaran')
            <div class="px-5 md:px-12 py-12">
                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Data Pribadi
                    </h3>
                    <p class="text-lg text-secondary-color text-justify">
                        Email : {{$biodata->email}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Nama : {{$biodata->name}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Panggilan : {{$biodata->nickname}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Jenis Kelamin : {{$biodata->gender}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Tempat Tanggal Lahir : {{$biodata->birthplace}}, {{$biodata->birthdate}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        No. Telephone : {{$biodata->telephone}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        No. {{$biodata->idType}} : {{$biodata->idNumber}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Provinsi {{$biodata->idType}} : {{$biodata->provinceID}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Kota {{$biodata->idType}} : {{$biodata->cityID}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Kecamatan {{$biodata->idType}} : {{$biodata->districtID}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Alamat {{$biodata->idType}} : {{$biodata->addressID}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Kode Pos {{$biodata->idType}} : {{$biodata->postCodeID}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Provinsi Tinggal : {{$biodata->provinceLiving}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Kota Tinggal : {{$biodata->cityLiving}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Kecamatan Tinggal : {{$biodata->districtLiving}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Alamat Tinggal : {{$biodata->addressLiving}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Kode Pos Tinggal : {{$biodata->postCodeLiving}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Jalur Masuk : {{$biodata->entrance}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Nomor Peserta : {{$biodata->entranceNumber}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Universitas : {{$biodata->major}}, {{$biodata->university}}
                    </p>
                </div>
                
                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Data Keluarga
                    </h3>
                    @foreach($families as $family)
                    <h3 class="text-2xl text-primary-color mb-4">
                        {{$family->status}}
                    </h3>
                    <p class="text-lg text-secondary-color text-justify">
                        Nama : {{$family->name}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Tempat Tanggal Lahir : {{$family->birthplace}}, {{$family->birthdate}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Jenis Kelamin : {{$family->gender}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Pendidikan : {{$family->education}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Pekerjaan : {{$family->job}}
                    </p>
                    <br>
                    @endforeach
                    <p class="text-lg text-secondary-color text-justify">
                        Penghasilan : Rp. {{$networth->networth}}
                    </p>
                </div>

                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Riwayat Pendidikan Formal
                    </h3>
                    @foreach($educations as $education)
                    <h3 class="text-2xl text-primary-color mb-4">
                        {{$education->grade}}
                    </h3>
                    <p class="text-lg text-secondary-color text-justify">
                        Sekolah : {{$education->name}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Provinsi : {{$education->province}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Kota : {{$education->city}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Tahun Masuk : {{$education->enter}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Tahun Lulus : {{$education->graduate}}
                    </p>
                    <br>
                    @endforeach
                </div>

                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Riwayat Pendidikan Non-Formal
                    </h3>
                    @foreach($trainings as $training)
                    <h3 class="text-2xl text-primary-color mb-4">
                        Penyelenggara : {{$training->organizer}}
                    </h3>
                    <p class="text-lg text-secondary-color text-justify">
                        Nama : {{$training->name}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Periode : {{$training->period}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Tahun : {{$training->year}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Sertifikat : Periode : {{$training->certificate}}
                    </p>
                    <br>
                    @endforeach
                </div>

                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Penguasaan Bahasa
                    </h3>
                    @foreach($languages as $language)
                    <h3 class="text-3xl text-primary-color mb-4">
                        {{$language->language}}
                    </h3>
                    <p class="text-lg text-secondary-color text-justify">
                        Membaca : {{$language->read}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Menulis : {{$language->write}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Mendengar : {{$language->listen}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Berbicara : {{$language->talk}}
                    </p>
                    <br>
                    @endforeach
                </div>

                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Prestasi
                    </h3>
                    @foreach($achievements as $achievement)
                    <h3 class="text-2xl text-primary-color mb-4">
                        {{$achievement->organizer}}
                    </h3>
                    <p class="text-lg text-secondary-color text-justify">
                        Tahap : {{$achievement->level}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Detail : {{$achievement->name}}
                    </p>
                    @endforeach
                </div>

                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Kelebihan Lain
                    </h3>
                    @foreach($talents as $talent)
                    <p class="text-lg text-secondary-color text-justify">
                        {{$talent->name}}
                    </p>
                    @endforeach
                </div>

                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Sosial Media
                    </h3>
                    <p class="text-lg text-secondary-color text-justify">
                        Facebook : {{$socialMedia->facebook}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Twitter : {{$socialMedia->twitter}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Instagram : {{$socialMedia->instagram}}
                    </p>
                    <p class="text-lg text-secondary-color text-justify">
                        Tiktok : {{$socialMedia->tiktok}}
                    </p>
                </div>

                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Dokumen Pelengkap
                    </h3>
                    <p class="text-lg text-secondary-color text-justify">
                    </p>
                </div>

            </div>
            @include('admin.layouts.footer ')
        </div>
    </div>
</section>

@endsection