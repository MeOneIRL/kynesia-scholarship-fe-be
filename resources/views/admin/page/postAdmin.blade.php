@extends('admin.layouts.app')

@section('title', 'Post')

@section('content')

<section class="">
    <div class="md:mx-24 md:flex">
        @include('admin.layouts.sidebarPendaftaran')
        <div class="md:w-3/4">
            @include('admin.layouts.navbarPendaftaran')
            <div class="px-5 md:px-12 py-12">
                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Riwayat Pencairan Dana
                    </h3>
                    <p class="text-lg text-secondary-color text-justify mb-4">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi reiciendis delectus molestias
                        suscipit obcaecati rerum ipsum vitae blanditiis aut eveniet vel error earum maxime eaque dicta
                        et officiis, veniam dolor. Dolore iure adipisci minus quos facilis ullam quo quas ab:
                    </p>
                </div>
                <div class="mb-8">
                    <a class="text-lg text-primary-color underline" href="#">Link menuju halaman online meeting</a>
                </div>
                <div class="relative">
                    <button class="bg-primary-color text-bg-color p-2.5 rounded-md absolute right-0">
                        Tandai Sebagai Selesai
                    </button>
                </div>
            </div>
            @include('admin.layouts.footer ')
        </div>
    </div>
</section>

@endsection