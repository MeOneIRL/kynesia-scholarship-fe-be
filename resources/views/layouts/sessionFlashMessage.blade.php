@if($message = Session::get('message'))
<div class="flex items-end justify-center px-4 pointer-events-none sm:py-6 sm:px-0 sm:items-start z-50">
    <div x-data="{ show: false }" x-init="() => {
                    setTimeout(() => show = true, 500);
                    setTimeout(() => show = false, 5000);
                  }" x-show="show" x-description="Notification panel, show/hide based on alert state."
        @click.away="show = false" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90" class="w-full bg-white shadow-lg pointer-events-auto">
        <div class="p-4 flex items-center bg-primary-color bg-opacity-10 border-l-4 border-primary-color text-primary-color text-sm font-bold px-4 py-3"
            role="alert">
            <div class="flex-shrink-0">
                <svg class="fill-current text-primary-color w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path
                        d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                </svg>
            </div>
            <div class="ml-3 w-0 flex-1 pt-0.5">
                <p class="leading-5 font-medium">
                    {{ $message }}
                </p>
            </div>
            <div class="ml-4 flex-shrink-0 flex">
                <button @click="show = false"
                    class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                    <svg class="fill-current tet-primary-color" width="16" height="16" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z"
                            fill="#13B0BE" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
@endif