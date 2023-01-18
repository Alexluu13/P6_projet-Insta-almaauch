<div class="max-w-2xl mx-auto">

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white">
        <div class="border max-w-screen-md bg-white mt-6 rounded-2xl p-4">
        <div>
            {{ $logo }}
        </div>
        <div>
            <img class="w-1/6 rounded-full" src="https://media.fds.fi/product_image/800/119RoomCopenhagen_iso_TH.jpg" alt="tête de lego"/>
        </div>    
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>

</div>
