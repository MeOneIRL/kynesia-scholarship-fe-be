@extends('admin.layouts.app')

@section('title', 'Pencairan Dana')

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
                    <table class="divide-y divide-gray-300" id="dataTable">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    No
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Beasiswa
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Nama
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Jumlah
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Tanggal Pencairan
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Keterangan
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Status
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Ubah Status
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-500">
                            @foreach($fundings as $funding)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    {{$loop->index+1}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                    {{$funding->scholarshipName}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                    {{$funding->userName}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                    Rp. {{$funding->total}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                    {{$funding->date}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                    {{$funding->detail}}
                                    </div>
                                </td>
                                @if($funding->status == 0)
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                        Belum Cair
                                    </div>
                                </td>
                                @elseif($funding->status == 1)
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                        Sudah Cair
                                    </div>
                                </td>
                                @endif
                                @if($funding->status == 0)
                                <td class="px-6 py-4 text-center">
                                    <a href="" class="px-4 py-1 text-sm text-green-600 bg-green-200 rounded-full">
                                        Cairkan
                                    </a>
                                </td>
                                @elseif($funding->status == 1)
                                <td class="px-6 py-4 text-center">
                                    -
                                </td>
                                @endif
                                <td class="px-6 py-4 text-center">
                                    Delete
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="relative">
                    <a href="{{route('fundingOneForm')}}">
                        <button class="bg-primary-color text-bg-color p-2.5 rounded-md absolute right-0">
                            Per Orangan
                        </button>
                    </a>
                </div>
                <br>
                <br>
                <div class="relative">
                    <a href="{{route('fundingBulkForm')}}">
                        <button class="bg-primary-color text-bg-color p-2.5 rounded-md absolute right-0">
                            Per Beasiswa
                        </button>
                    </a>
                </div>
            </div>
            @include('admin.layouts.footer ')
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable();

        });
    </script>
</section>

@endsection