@extends('admin.layouts.app')

@section('title', 'Pendaftar')

@section('content')

<section class="">
    <div class="md:mx-24 md:flex">
        @include('admin.layouts.sidebarPendaftaran')
        <div class="md:w-3/4">
            @include('admin.layouts.navbarPendaftaran')
            <div class="px-5 md:px-12 py-12">
                <!-- Tahap 1 -->
                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Daftar Peserta Tahap 1
                    </h3>
                    <p class="text-lg text-secondary-color text-justify mb-4">
                        Daftar Peserta Yang Telah Menyelesaikan Seluruh Tahapan Pendaftaran Dan Test
                    </p>
                    <div class="">
                        <table class="divide-y divide-gray-300" id="stepOne">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        No
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Name
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Email
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Status
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Seleksi
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-500">
                                @foreach($stepOne as $list)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-center text-gray-500">
                                        {{$loop->index+1}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="text-sm text-gray-900">
                                            {{$list->name}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="text-sm text-gray-900">
                                            {{$list->email}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="text-sm text-gray-500">
                                            {{$list->statusOne}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="{{route('stepOneAdminForm',$list->id)}}" class="px-4 py-1 text-sm text-green-600 bg-green-200 rounded-full">
                                            Terima
                                        </a>
                                        <form action="{{route('stepOneAdminDeny',$list->id)}}" method="POST"
                                        onsubmit="return confirm('Apakah anda yakin akan menolak {{$list->name}}?');">
                                            @csrf
                                            <button type="submit" class="px-4 py-1 text-sm text-red-600 bg-red-200 rounded-full">
                                                Tolak
                                            </button>
                                        </form>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="relative">
                    <a href="">
                        <button class="bg-primary-color text-bg-color p-2.5 rounded-md absolute right-0">
                            Tolak Semua
                        </button>
                    </a>
                </div>
                <br>
                <br>
                <!-- End Tahap 1 -->

                <!-- Tahap 2 -->
                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Daftar Peserta Tahap 2
                    </h3>
                    <p class="text-lg text-secondary-color text-justify mb-4">
                        Daftar Peserta Yang Masuk Tahap Wawancara
                    </p>
                    <div class="">
                        <table class="divide-y divide-gray-300" id="stepTwo">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        No
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Name
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Email
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Status
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Seleksi
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-500">
                                @foreach($stepTwo as $list)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-center text-gray-500">
                                        {{$loop->index+1}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="text-sm text-gray-900">
                                            {{$list->name}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="text-sm text-gray-900">
                                            {{$list->email}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="text-sm text-gray-500">
                                            {{$list->statusTwo}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <form action="{{route('stepTwoAdminAccept',$list->id)}}" method="POST"
                                        onsubmit="return confirm('Apakah anda yakin akan menerima {{$list->name}}?');">
                                            @csrf
                                            <button type="submit" class="px-4 py-1 text-sm text-green-600 bg-green-200 rounded-full">
                                                Terima
                                            </button>
                                        </form>
                                        <form action="{{route('stepTwoAdminDeny',$list->id)}}" method="POST"
                                        onsubmit="return confirm('Apakah anda yakin akan menolak {{$list->name}}?');">
                                            @csrf
                                            <button type="submit" class="px-4 py-1 text-sm text-red-600 bg-red-200 rounded-full">
                                                Tolak
                                            </button>
                                        </form>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="relative">
                    <a href="">
                        <button class="bg-primary-color text-bg-color p-2.5 rounded-md absolute right-0">
                            Tolak Semua
                        </button>
                    </a>
                </div>
                <br>
                <br>
                <!-- End Tahap 2 -->

                <!-- Ditolak -->
                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        Daftar Peserta Yang Ditolak
                    </h3>
                    <p class="text-lg text-secondary-color text-justify mb-4">
                        Daftar Peserta Yang Tidak Lolos
                    </p>
                    <div class="">
                        <table class="divide-y divide-gray-300" id="denied">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        No
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Name
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Email
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Tahap 1
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Tahap 2
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-500">
                                @foreach($denied as $list)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-center text-gray-500">
                                        {{$loop->index+1}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="text-sm text-gray-900">
                                            {{$list->name}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="text-sm text-gray-900">
                                            {{$list->email}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="text-sm text-gray-500">
                                            {{$list->statusOne}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="text-sm text-gray-500">
                                            {{$list->statusTwo}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Ditolak -->
            </div>
            @include('admin.layouts.footer ')
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#stepOne').DataTable();

        });
        $(document).ready(function () {
            $('#stepTwo').DataTable();

        });
        $(document).ready(function () {
            $('#denied').DataTable();

        });
    </script>
</section>

@endsection