@extends('layouts.app')

@section('title', 'Detail Post')

@section('content')

<section class="">
    <div class="md:mx-24 md:flex">
        @include('layouts.sidebarPortal')
        <div class="md:w-3/4">
            @include('layouts.navbarPortal')
            <div class="px-5 md:px-12 py-12">
                <div class="mb-8">
                    <div class="w-full mb-4">
                        <img class="max-w-prose w-full h-auto bg-cover" src="https://dummyimage.com/250x200/000/fff.png"
                            alt="">
                    </div>
                    <h3 class="text-xl md:text-3xl text-primary-color">
                        Pengumuman Kynesia Scholarship 2021
                    </h3>
                    <p class="text-xs md:text-sm text-accent-color mb-4">Sunday, 18 July 2021</p>
                    <p class="text-base md:text-lg text-secondary-color text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, laudantium ex! Minima rerum eos
                        cupiditate mollitia quos, qui architecto optio id consequuntur cum iusto vitae veritatis ex
                        repellat accusantium non odit! Doloribus, vitae et temporibus minima, ipsum voluptatem,
                        reiciendis omnis atque accusantium sequi saepe placeat iusto tempore sint culpa. <br><br>
                        Eius laudantium, obcaecati neque delectus incidunt explicabo esse deserunt ab consequatur iure
                        optio excepturi mollitia nihil, animi rerum facere amet quasi magnam nostrum aperiam. Eligendi
                        esse
                        porro iusto ducimus voluptates dolorum quod dolore voluptas ex id molestias, maxime vitae
                        aliquid, blanditiis, in accusamus fuga dicta. Debitis aspernatur consectetur ex asperiores nemo.
                    </p>
                </div>
                <div class="w-auto">
                    <a class="w-2/3 md:w-1/4 flex flex-row items-center justify-center bg-gray-100 text-secondary-color px-4 py-1.5 rounded hover:bg-gray-300"
                        href="">
                        <svg class="flex-none" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.71 15.88L10.83 12L14.71 8.12001C15.1 7.73001 15.1 7.10001 14.71 6.71001C14.32 6.32001 13.69 6.32001 13.3 6.71001L8.70998 11.3C8.31998 11.69 8.31998 12.32 8.70998 12.71L13.3 17.3C13.69 17.69 14.32 17.69 14.71 17.3C15.09 16.91 15.1 16.27 14.71 15.88Z"
                                fill="#1E335F" />
                        </svg>
                        <p class="flex-none">Kembali ke home</p>
                    </a>
                </div>
            </div>
            @include('layouts.footer ')
        </div>
    </div>
</section>

@endsection