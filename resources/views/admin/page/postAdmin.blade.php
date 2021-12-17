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
                    <table class="divide-y divide-gray-300" id="dataTable">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    No
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Judul
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Tanggal Post
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-500">
                            @foreach($posts as $post)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    {{$loop->index+1}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                    {{$post->title}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                    {{$post->date}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    Delete
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mb-8">
                    <a class="text-lg text-primary-color underline" href="#">Link menuju halaman online meeting</a>
                </div>
                <div class="relative">
                    <a href="{{route('postAdminForm')}}">
                        <button class="bg-primary-color text-bg-color p-2.5 rounded-md absolute right-0">
                            Tandai Sebagai Selesai
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