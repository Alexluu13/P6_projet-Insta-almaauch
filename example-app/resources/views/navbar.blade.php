<div class="grid grid-cols-2 relative flex gap-4  h-16 bg-gray-100 dark:bg-gray-900">

    <div class="ml-8 w-fit h-fit self-center">
        <a href="{{ route('welcome') }}">
            <img class="w-12 rounded-full" src="https://media.fds.fi/product_image/800/119RoomCopenhagen_iso_TH.jpg" alt="tête de lego"/>
        </a>
    </div>

    <div class="place-self-end pb-4 pr-8">
        <a href="{{ url('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline hover:text-yellow-500 mr-4">@lang('Log in')</a>

        <a href="{{ url('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline hover:text-yellow-500">@lang('Register')</a>
    </div>
</div>
