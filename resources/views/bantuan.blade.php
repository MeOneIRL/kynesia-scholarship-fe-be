@extends('layouts.app')

@section('title', 'Bantuan')

@section('content')

@include('layouts.headerLandingPage')

<section class="container mx-2.5 md:mx-24">
    <div class="container px-10 py-4 md:px-24 md:py-8 flex flex-col gap-2.5 bg-primary-color text-center rounded-lg">
        <h1 class="text-3xl md:text-5xl text-bg-color font-bold">
            Bantuan
        </h1>
        <p class="text-base md:text-xl text-bg-color">
            Pada halaman ini berisikan pertanyaan yang sering ditanyakan atau <span class="italic">frequently asked
                question</span> (FAQ) oleh pendaftar, kolom ajukan pertanyaan melalui email serta kontak yang dapat
            dihubungi dari Kynesia Foundation
        </p>
    </div>
    <div class="container mx-auto mt-4 md:mt-8">
        <h1 class="mb-2.5 text-base md:text-3xl font-medium text-secondary-color italic">
            Frequently Asked Question <span class="not-italic">(FAQ)</span>
        </h1>
        <div class="bg-white mx-auto" x-data="{selected:null}">
            <ul class="">
                <li class="relative bg-primary-color rounded my-2.5 md:my-5">
                    <button type="button" class="w-full px-2 py-1.5 md:px-3.5 md:py-2.5 text-left text-bg-color"
                        @click="selected !== 1 ? selected = 1 : selected = null">
                        <div class="flex items-center justify-between text-sm md:text-base">
                            <span>
                                Should I use reCAPTCHA v2 or v3? </span>
                            <span>
                                <svg class="w-5 h-5 md:w-7 md:h-7" width="30" height="30" viewBox="0 0 30 30"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.75 16.25H16.25V23.75H13.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25Z"
                                        fill="white" />
                                </svg>
                            </span>
                        </div>
                    </button>
                    <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-bg-color text-secondary-color"
                        style="" x-ref="container1"
                        x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                        <div class="p-6 border-l-4 border-accent-color">
                            <p class="text-sm md:text-base">reCAPTCHA v2 is not going away! We will continue to fully
                                support and improve security
                                and usability for v2. <br>
                                reCAPTCHA v3 is intended for power users, site owners that want more data about their
                                traffic, and for use cases in which it is not appropriate to show a challenge to the
                                user. <br>
                                For example, a registration page might still use reCAPTCHA v2 for a higher-friction
                                challenge, whereas more common actions like sign-in, searches, comments, or voting might
                                use reCAPTCHA v3. To see more details, see the reCAPTCHA v3 developer guide.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="relative bg-primary-color rounded my-2.5 md:my-5">
                    <button type="button" class="w-full px-2 py-1.5 md:px-3.5 md:py-2.5 text-left text-bg-color"
                        @click="selected !== 2 ? selected = 2 : selected = null">
                        <div class="flex items-center justify-between text-sm md:text-base">
                            <span>
                                Should I use reCAPTCHA v2 or v3? </span>
                            <span>
                                <svg class="w-5 h-5 md:w-7 md:h-7" width="30" height="30" viewBox="0 0 30 30"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.75 16.25H16.25V23.75H13.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25Z"
                                        fill="white" />
                                </svg>
                            </span>
                        </div>
                    </button>
                    <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-bg-color text-secondary-color"
                        style="" x-ref="container1"
                        x-bind:style="selected == 2 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                        <div class="p-6 border-l-4 border-accent-color">
                            <p class="text-sm md:text-base">reCAPTCHA v2 is not going away! We will continue to fully
                                support and improve security
                                and usability for v2. <br>
                                reCAPTCHA v3 is intended for power users, site owners that want more data about their
                                traffic, and for use cases in which it is not appropriate to show a challenge to the
                                user. <br>
                                For example, a registration page might still use reCAPTCHA v2 for a higher-friction
                                challenge, whereas more common actions like sign-in, searches, comments, or voting might
                                use reCAPTCHA v3. To see more details, see the reCAPTCHA v3 developer guide.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="relative bg-primary-color rounded my-2.5 md:my-5">
                    <button type="button" class="w-full px-2 py-1.5 md:px-3.5 md:py-2.5 text-left text-bg-color"
                        @click="selected !== 3 ? selected = 3 : selected = null">
                        <div class="flex items-center justify-between text-sm md:text-base">
                            <span>
                                Should I use reCAPTCHA v2 or v3? </span>
                            <span>
                                <svg class="w-5 h-5 md:w-7 md:h-7" width="30" height="30" viewBox="0 0 30 30"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.75 16.25H16.25V23.75H13.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25Z"
                                        fill="white" />
                                </svg>
                            </span>
                        </div>
                    </button>
                    <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-bg-color text-secondary-color"
                        style="" x-ref="container1"
                        x-bind:style="selected == 3 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                        <div class="p-6 border-l-4 border-accent-color">
                            <p class="text-sm md:text-base">reCAPTCHA v2 is not going away! We will continue to fully
                                support and improve security
                                and usability for v2. <br>
                                reCAPTCHA v3 is intended for power users, site owners that want more data about their
                                traffic, and for use cases in which it is not appropriate to show a challenge to the
                                user. <br>
                                For example, a registration page might still use reCAPTCHA v2 for a higher-friction
                                challenge, whereas more common actions like sign-in, searches, comments, or voting might
                                use reCAPTCHA v3. To see more details, see the reCAPTCHA v3 developer guide.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="container mx-auto mt-4 md:mt-8">
        <h3 class="text-base md:text-3xl font-medium text-secondary-color mb-2.5">
            Ajukan Pertanyaan
        </h3>
        <div class="container mx-auto border px-8 py-4 md:px-20 md:py-10 border-gray-300 rounded-md">
            <form action="#">
                <div class="flex flex-wrap md:items-center mb-2.5 md:mb-5">
                    <label class="w-full md:w-1/4 text-sm md:text-lg text-secondary-color font-medium" for="email">
                        Email
                    </label>
                    <input
                        class="w-full md:w-3/4 bg-bg-color text-secondary-color mt-2 p-0.5 md:p-1 border border-gray-300 rounded-md focus:outline-none focus:ring-1 md:focus:ring-2 focus:ring-primary-color focus:ring-opacity-50 focus:border-primary-color"
                        type="email" name="" id="">
                </div>
                <div class="flex flex-wrap md:items-left mb-2.5 md:mb-5">
                    <label class="w-full md:w-1/4 text-sm md:text-lg text-secondary-color font-medium" for="message">Isi
                        Pesan</label>
                    <textarea
                        class="w-full md:w-3/4 h-32 bg-bg-color text-secondary-color mt-2 p-0.5 md:p-1 border border-gray-300 rounded-md focus:outline-none focus:ring-1 md:focus:ring-2 focus:ring-primary-color focus:ring-opacity-50 focus:border-primary-color"
                        name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="flex flex-wrap flex-row-reverse">
                    <button
                        class="w-full md:w-3/4 text-sm md:text-lg font-semibold trackng-wide bg-primary-color text-bg-color rounded-lg p-1 focus:outline-none focus:ring-1 md:focus:ring-2 focus:ring-primary-color">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="container mx-auto mt-4 md:mt-8 px-8 py-4 md:py-8 md:px-20 rounded-md bg-accent-color">
        <h3 class="text-base md:text-3xl font-medium text-secondary-color text-center">
            Kontak Kami
        </h3>
        <div class="mt-4 md:mt-8 grid grid-cols-1 md:grid-cols-4 gap-1 justify-center">
            <div>
                <div class="shadow-md h-24 md:h-32 flex items-center justify-center bg-bg-color rounded-md">
                    <svg class="inline-block h-7 md:h-14" width="50" height="50" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint0_radial_23_33)" />
                        <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint1_radial_23_33)" />
                        <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint2_radial_23_33)" />
                        <path
                            d="M23 10.5C23 11.3284 22.3284 12 21.5 12C20.6716 12 20 11.3284 20 10.5C20 9.67157 20.6716 9 21.5 9C22.3284 9 23 9.67157 23 10.5Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16 21C18.7614 21 21 18.7614 21 16C21 13.2386 18.7614 11 16 11C13.2386 11 11 13.2386 11 16C11 18.7614 13.2386 21 16 21ZM16 19C17.6569 19 19 17.6569 19 16C19 14.3431 17.6569 13 16 13C14.3431 13 13 14.3431 13 16C13 17.6569 14.3431 19 16 19Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6 15.6C6 12.2397 6 10.5595 6.65396 9.27606C7.2292 8.14708 8.14708 7.2292 9.27606 6.65396C10.5595 6 12.2397 6 15.6 6H16.4C19.7603 6 21.4405 6 22.7239 6.65396C23.8529 7.2292 24.7708 8.14708 25.346 9.27606C26 10.5595 26 12.2397 26 15.6V16.4C26 19.7603 26 21.4405 25.346 22.7239C24.7708 23.8529 23.8529 24.7708 22.7239 25.346C21.4405 26 19.7603 26 16.4 26H15.6C12.2397 26 10.5595 26 9.27606 25.346C8.14708 24.7708 7.2292 23.8529 6.65396 22.7239C6 21.4405 6 19.7603 6 16.4V15.6ZM15.6 8H16.4C18.1132 8 19.2777 8.00156 20.1779 8.0751C21.0548 8.14674 21.5032 8.27659 21.816 8.43597C22.5686 8.81947 23.1805 9.43139 23.564 10.184C23.7234 10.4968 23.8533 10.9452 23.9249 11.8221C23.9984 12.7223 24 13.8868 24 15.6V16.4C24 18.1132 23.9984 19.2777 23.9249 20.1779C23.8533 21.0548 23.7234 21.5032 23.564 21.816C23.1805 22.5686 22.5686 23.1805 21.816 23.564C21.5032 23.7234 21.0548 23.8533 20.1779 23.9249C19.2777 23.9984 18.1132 24 16.4 24H15.6C13.8868 24 12.7223 23.9984 11.8221 23.9249C10.9452 23.8533 10.4968 23.7234 10.184 23.564C9.43139 23.1805 8.81947 22.5686 8.43597 21.816C8.27659 21.5032 8.14674 21.0548 8.0751 20.1779C8.00156 19.2777 8 18.1132 8 16.4V15.6C8 13.8868 8.00156 12.7223 8.0751 11.8221C8.14674 10.9452 8.27659 10.4968 8.43597 10.184C8.81947 9.43139 9.43139 8.81947 10.184 8.43597C10.4968 8.27659 10.9452 8.14674 11.8221 8.0751C12.7223 8.00156 13.8868 8 15.6 8Z"
                            fill="white" />
                        <defs>
                            <radialGradient id="paint0_radial_23_33" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(12 23) rotate(-55.3758) scale(25.5196)">
                                <stop stop-color="#B13589" />
                                <stop offset="0.79309" stop-color="#C62F94" />
                                <stop offset="1" stop-color="#8A3AC8" />
                            </radialGradient>
                            <radialGradient id="paint1_radial_23_33" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(11 31) rotate(-65.1363) scale(22.5942)">
                                <stop stop-color="#E0E8B7" />
                                <stop offset="0.444662" stop-color="#FB8A2E" />
                                <stop offset="0.71474" stop-color="#E2425C" />
                                <stop offset="1" stop-color="#E2425C" stop-opacity="0" />
                            </radialGradient>
                            <radialGradient id="paint2_radial_23_33" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(0.500002 3) rotate(-8.1301) scale(38.8909 8.31836)">
                                <stop offset="0.156701" stop-color="#406ADC" />
                                <stop offset="0.467799" stop-color="#6A45BE" />
                                <stop offset="1" stop-color="#6A45BE" stop-opacity="0" />
                            </radialGradient>
                        </defs>
                    </svg>
                    <p class="text-sm md:text-base inline-block">
                        @kynesia.id
                    </p>
                </div>
            </div>
            <div>
                <div class="shadow-md h-24 md:h-32 flex items-center justify-center bg-bg-color rounded-md">
                    <svg class="inline-block h-7 md:h-14" width="50" height="50" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16 31C23.732 31 30 24.732 30 17C30 9.26801 23.732 3 16 3C8.26801 3 2 9.26801 2 17C2 19.5109 2.661 21.8674 3.81847 23.905L2 31L9.31486 29.3038C11.3014 30.3854 13.5789 31 16 31ZM16 28.8462C22.5425 28.8462 27.8462 23.5425 27.8462 17C27.8462 10.4576 22.5425 5.15385 16 5.15385C9.45755 5.15385 4.15385 10.4576 4.15385 17C4.15385 19.5261 4.9445 21.8675 6.29184 23.7902L5.23077 27.7692L9.27993 26.7569C11.1894 28.0746 13.5046 28.8462 16 28.8462Z"
                            fill="#BFC8D0" />
                        <path
                            d="M28 16C28 22.6274 22.6274 28 16 28C13.4722 28 11.1269 27.2184 9.19266 25.8837L5.09091 26.9091L6.16576 22.8784C4.80092 20.9307 4 18.5589 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16Z"
                            fill="url(#paint0_linear_11_24)" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16 30C23.732 30 30 23.732 30 16C30 8.26801 23.732 2 16 2C8.26801 2 2 8.26801 2 16C2 18.5109 2.661 20.8674 3.81847 22.905L2 30L9.31486 28.3038C11.3014 29.3854 13.5789 30 16 30ZM16 27.8462C22.5425 27.8462 27.8462 22.5425 27.8462 16C27.8462 9.45755 22.5425 4.15385 16 4.15385C9.45755 4.15385 4.15385 9.45755 4.15385 16C4.15385 18.5261 4.9445 20.8675 6.29184 22.7902L5.23077 26.7692L9.27993 25.7569C11.1894 27.0746 13.5046 27.8462 16 27.8462Z"
                            fill="white" />
                        <path
                            d="M12.5 9.50001C12.1672 8.83143 11.6565 8.89062 11.1407 8.89062C10.2188 8.89062 8.78125 9.9949 8.78125 12.0501C8.78125 13.7344 9.52345 15.5782 12.0244 18.3362C14.438 20.998 17.6094 22.3749 20.2422 22.3281C22.875 22.2812 23.4167 20.0156 23.4167 19.2504C23.4167 18.9113 23.2062 18.7421 23.0613 18.6961C22.1641 18.2656 20.5093 17.4633 20.1328 17.3125C19.7563 17.1618 19.5597 17.3657 19.4375 17.4766C19.0961 17.802 18.4193 18.7609 18.1875 18.9766C17.9558 19.1923 17.6103 19.0831 17.4665 19.0016C16.9374 18.7893 15.5029 18.1512 14.3595 17.0427C12.9453 15.6719 12.8623 15.2003 12.5959 14.7804C12.3828 14.4446 12.5392 14.2385 12.6172 14.1484C12.9219 13.7969 13.3426 13.2541 13.5313 12.9844C13.7199 12.7147 13.5702 12.3051 13.4803 12.0501C13.0938 10.9531 12.7663 10.0349 12.5 9.50001Z"
                            fill="white" />
                        <defs>
                            <linearGradient id="paint0_linear_11_24" x1="26.5" y1="7" x2="4" y2="28"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#5BD066" />
                                <stop offset="1" stop-color="#27B43E" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <p class="inline-block text-sm md:text-base">
                        0812-XXX-XXXX <br>
                        Senin - Jumat: <br>
                        08.00 - 16.00
                    </p>
                </div>
            </div>
            <div>
                <div class="shadow-md h-24 md:h-32 flex items-center justify-center bg-bg-color rounded-md">
                    <svg class="inline-block h-7 md:h-14" width="50" height="50" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 11.9556C2 8.47078 2 6.7284 2.67818 5.39739C3.27473 4.22661 4.22661 3.27473 5.39739 2.67818C6.7284 2 8.47078 2 11.9556 2H20.0444C23.5292 2 25.2716 2 26.6026 2.67818C27.7734 3.27473 28.7253 4.22661 29.3218 5.39739C30 6.7284 30 8.47078 30 11.9556V20.0444C30 23.5292 30 25.2716 29.3218 26.6026C28.7253 27.7734 27.7734 28.7253 26.6026 29.3218C25.2716 30 23.5292 30 20.0444 30H11.9556C8.47078 30 6.7284 30 5.39739 29.3218C4.22661 28.7253 3.27473 27.7734 2.67818 26.6026C2 25.2716 2 23.5292 2 20.0444V11.9556Z"
                            fill="white" />
                        <path
                            d="M22.0513 8.52295L16.0642 13.1954L9.94019 8.52295V8.52421L9.94758 8.53053V15.0732L15.9951 19.8466L22.0513 15.2575V8.52295Z"
                            fill="#EA4335" />
                        <path
                            d="M23.6235 7.38639L22.0512 8.52292V15.2575L26.9987 11.459V9.17074C26.9987 9.17074 26.3982 5.90258 23.6235 7.38639Z"
                            fill="#FBBC05" />
                        <path
                            d="M22.0512 15.2577V23.9926H25.8432C25.8432 23.9926 26.9223 23.8814 26.9999 22.6514V11.4591L22.0512 15.2577Z"
                            fill="#34A853" />
                        <path d="M9.94787 23.9999V15.0731L9.94019 15.0668L9.94787 23.9999Z" fill="#C5221F" />
                        <path
                            d="M9.94014 8.52428L8.37646 7.39406C5.60179 5.91025 5 9.17716 5 9.17716V11.4654L9.94014 15.0669V8.52428Z"
                            fill="#C5221F" />
                        <path d="M9.94019 8.52417V15.0668L9.94787 15.0731V8.53048L9.94019 8.52417Z" fill="#C5221F" />
                        <path
                            d="M5 11.4666V22.6589C5.07646 23.8902 6.15673 24 6.15673 24H9.94877L9.94014 15.0669L5 11.4666Z"
                            fill="#4285F4" />
                    </svg>
                    <p class="inline-block text-sm md:text-base">
                        contact@kynesia.id
                    </p>
                </div>
            </div>
            <div>
                <div class="shadow-md h-24 md:h-32 flex items-center justify-center bg-bg-color rounded-md">
                    <svg class="inline-block h-7 md:h-14" width="50" height="50" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 11.9556C2 8.47078 2 6.7284 2.67818 5.39739C3.27473 4.22661 4.22661 3.27473 5.39739 2.67818C6.7284 2 8.47078 2 11.9556 2H20.0444C23.5292 2 25.2716 2 26.6026 2.67818C27.7734 3.27473 28.7253 4.22661 29.3218 5.39739C30 6.7284 30 8.47078 30 11.9556V20.0444C30 23.5292 30 25.2716 29.3218 26.6026C28.7253 27.7734 27.7734 28.7253 26.6026 29.3218C25.2716 30 23.5292 30 20.0444 30H11.9556C8.47078 30 6.7284 30 5.39739 29.3218C4.22661 28.7253 3.27473 27.7734 2.67818 26.6026C2 25.2716 2 23.5292 2 20.0444V11.9556Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M24 12.8116L23.9999 12.8541C23.9998 12.872 23.9996 12.8899 23.9994 12.9078C23.9998 12.9287 24 12.9498 24 12.971C24 16.3073 21.4007 19.2604 19.6614 21.2367C19.1567 21.8101 18.7244 22.3013 18.449 22.6957C17.4694 24.0986 16.9524 25.6184 16.8163 26.2029C16.8163 26.6431 16.4509 27 16 27C15.5491 27 15.1837 26.6431 15.1837 26.2029C15.0476 25.6184 14.5306 24.0986 13.551 22.6957C13.2756 22.3013 12.8433 21.8101 12.3386 21.2367C10.5993 19.2604 8 16.3073 8 12.971C8 12.9498 8.0002 12.9287 8.0006 12.9078C8.0002 12.8758 8 12.8437 8 12.8116C8 8.49736 11.5817 5 16 5C20.4183 5 24 8.49736 24 12.8116ZM16 15.6812C17.7132 15.6812 19.102 14.325 19.102 12.6522C19.102 10.9793 17.7132 9.62319 16 9.62319C14.2868 9.62319 12.898 10.9793 12.898 12.6522C12.898 14.325 14.2868 15.6812 16 15.6812Z"
                            fill="#34A851" />
                        <path
                            d="M23.1052 9.21856C22.1256 7.37546 20.4159 5.96177 18.3502 5.34277L13.7556 10.5615C14.3205 9.98352 15.1172 9.62346 16 9.62346C17.7132 9.62346 19.102 10.9796 19.102 12.6524C19.102 13.3349 18.8709 13.9646 18.4809 14.4711L23.1052 9.21856Z"
                            fill="#4285F5" />
                        <path
                            d="M12.4314 21.3422C12.4008 21.3074 12.3698 21.2723 12.3386 21.2368C11.1921 19.9342 9.67195 18.207 8.76889 16.2255L13.5442 10.8015C13.139 11.3134 12.898 11.9553 12.898 12.6523C12.898 14.3252 14.2868 15.6813 16 15.6813C16.8678 15.6813 17.6524 15.3333 18.2154 14.7725L12.4314 21.3422Z"
                            fill="#F9BB0E" />
                        <path
                            d="M9.89288 7.76567C8.71207 9.12689 8 10.8881 8 12.8117C8 12.8438 8.0002 12.8759 8.0006 12.9079C8.0002 12.9288 8 12.9499 8 12.9712C8 14.1083 8.30196 15.2009 8.76889 16.2255L13.5362 10.8107L9.89288 7.76567Z"
                            fill="#E74335" />
                        <path
                            d="M18.3502 5.34254C17.6071 5.11988 16.8179 5 16 5C13.5518 5 11.3604 6.07387 9.89291 7.76553L13.5362 10.8105L13.5441 10.8015C13.6104 10.7178 13.6811 10.6375 13.7558 10.5611L18.3502 5.34254Z"
                            fill="#1A73E6" />
                    </svg>
                    <p class="inline-block text-sm md:text-base">
                        Jl. XXX XXX <br>
                        Bandung, Jawa Barat
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')

@endsection