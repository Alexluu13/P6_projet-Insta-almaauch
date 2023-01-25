<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a post') }}
        </h2>
    </x-slot>

    <x-tasks-card>

        <!-- Message de réussite si formulaire bien validé -->
        @if (session()->has('success'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif

        <!-- Envoi des données à la BD -->
        <form action="{{ route('posts.create') }}" method="post">
            @csrf

            <!-- Description (input) -->
            <div>
                <x-input-label for="description" :value="__('Description')" />
                <x-text-input  id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />

                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <!-- Image (input) -->
            <div>
                <x-input-label for="imageUrl" :value="__('ImageUrl')" />
                <x-text-input  id="imageUrl" class="block mt-1 w-full" type="text" name="imageUrl" :value="old('imageUrl')" required autofocus />

                <x-input-error :messages="$errors->get('imageUrl')" class="mt-2" />
            </div>

            
            <!-- Upload Image example2 -->
            {{-- <label for="imageLego"></label>

            <input type="file"
                id="imageLego" name="imageLego"
                accept="image/png, image/jpeg"> --}}


            <!-- validation (button) -->
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Send') }}
                </x-button>
            </div>
        </form>
    </x-tasks-card>
</x-app-layout>