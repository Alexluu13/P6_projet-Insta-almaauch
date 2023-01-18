<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Modify a post')
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
        <form action="{{ route('posts.update', $post->id) }}" method="post">
            @method('put')
            @csrf

                <!-- Description (input) -->
                <div>
                    <x-input-label for="description" :value="__('Nouvelle description')" />
                    <x-text-input  id="description" class="block mt-1 w-full" type="text" name="description" value="{{$post->description}}" required autofocus />

                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <!-- Image (input) -->
                <div>
                    <x-input-label for="img_url" :value="__('Nouvelle imageUrl')" />
                    <x-text-input  id="img_url" class="block mt-1 w-full" type="text" name="img_url" value="{{$post->img_url}}" required autofocus />

                    <x-input-error :messages="$errors->get('img_url')" class="mt-2" />
                </div>
                
                <!-- validation (button) -->
                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-3">
                        {{ __('Send') }}
                    </x-button>
                </div>
        </form>
    </x-tasks-card>
</x-app-layout>
