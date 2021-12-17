@extends('layouts.app')

@section('title', 'Detail Post')

@section('content')

<section class="">
    <div class="md:mx-24 md:flex">
        @include('layouts.sidebarPortal')
        <div class="md:w-3/4">
            @include('layouts.navbarPortal')
            <div class="px-5 md:px-12 py-12">
                <div class="w-full mx-auto py-5">
                    @foreach($images as $image)
                    <div class="mx-5">
                        <img class="inset-0 h-full w-full object-cover object-center"
                            src="{{asset($image->imagePath)}}" />
                    </div>
                    @endforeach
                    <h3 class="w-full text-primary-color text-lg md:text-4xl px-5 font-bold leading-none">
                        {{$post->title}}
                    </h3>
                    <p
                        class="w-full text-xs md:text-sm text-accent-color uppercase tracking-wide font-semibold px-5 pt-3">
                        {{$post->date}}
                    </p>
                    <div class="px-5 w-full text-sm md:text-base text-justify text-secondary-color mx-auto">
                        <p class="my-5">{{$post->content}}</p>
                    </div>
                </div>

                <div class="w-auto px-5">
                    <a class="inline-block" href="/portal/detail-post">
                        <button
                            class="p-1 inline-flex justify-center items-center bg-transparent border-2 border-secondary-color text-secondary-color text-sm rounded-lg hover:bg-gray-100 focus:border-4 focus:border-primary-color">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.71 15.88L10.83 12L14.71 8.12001C15.1 7.73001 15.1 7.10001 14.71 6.71001C14.32 6.32001 13.69 6.32001 13.3 6.71001L8.70998 11.3C8.31998 11.69 8.31998 12.32 8.70998 12.71L13.3 17.3C13.69 17.69 14.32 17.69 14.71 17.3C15.09 16.91 15.1 16.27 14.71 15.88Z"
                                    fill="#1E335F" />
                            </svg>
                            <span>
                                Kembali Ke Home
                            </span>
                        </button>
                    </a>
                </div>
            </div>
            @include('layouts.footer ')
        </div>
    </div>
</section>

@endsection