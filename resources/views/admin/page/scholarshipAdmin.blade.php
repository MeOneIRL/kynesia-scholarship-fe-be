@extends('admin.layouts.app')

@section('title', 'Beasiswa')

@section('content')
<script src="{{ asset('js/scholarshipAdmin.js')}}"></script>
<section class="">
    <div class="md:mx-24 md:flex">
        @include('admin.layouts.sidebarPendaftaran')
        <div class="md:w-3/4">
            @include('admin.layouts.navbarPendaftaran')
            <div class="px-5 md:px-12 py-12">
                <div class="mb-8">
                    <h3 class="text-3xl text-primary-color mb-4">
                        List Beasiswa
                    </h3>
                    <table class="divide-y divide-gray-300" id="dataTable">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    ID
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Name
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Status
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Mulai
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Berakhir
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Ubah Status
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Edit
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-500">
                            @foreach($scholarships as $scholarship)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    {{$scholarship->id}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                    {{$scholarship->name}}
                                    </div>
                                </td>
                                @if($scholarship->status == 1)
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                    Aktif
                                    </div>
                                </td>
                                @elseif($scholarship->status == 0)
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                    Tidak Aktif
                                    </div>
                                </td>
                                @endif
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-500">
                                    {{date("d M Y", strtotime($scholarship->startStepOne))}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    {{date("d M Y", strtotime($scholarship->announceStepTwo))}}
                                </td>
                                @if($scholarship->status == 0)
                                <td class="px-6 py-4 text-center">
                                    <a href="{{route('scholarshipAdminActivate',$scholarship->id)}}" class="px-4 py-1 text-sm text-green-600 bg-green-200 rounded-full">
                                        Aktifkan
                                    </a>
                                </td>
                                @elseif($scholarship->status == 1)
                                <td class="px-6 py-4 text-center">
                                    <a href="{{route('scholarshipAdminDeactivate',$scholarship->id)}}" class="px-4 py-1 text-sm text-red-600 bg-red-200 rounded-full">
                                        Non Aktifkan
                                    </a>
                                </td>
                                @endif
                                <td class="px-6 py-4 text-center">
                                    <a href="{{route('scholarshipAdminUpdateForm',$scholarship->id)}}" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">
                                        Edit
                                    </a>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <form action="{{route('scholarshipAdminDelete',$scholarship->id)}}" method=POST>
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit"
                                        class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="relative">
                    <a href="{{route('scholarshipAdminForm')}}">
                        <button class="bg-primary-color text-bg-color p-2.5 rounded-md absolute right-0">
                            Tambah Beasiswa
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