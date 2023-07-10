<div class="row">
    <x-authentication-page-vector/>

    <div class="items-center pt-6 main-div col-lg-6 vh-100 p-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg text-gray-500">
            <div class="text-center">
                {{ $logo }}
            </div>
            {{ $slot }}
        </div>
    </div>
</div>
