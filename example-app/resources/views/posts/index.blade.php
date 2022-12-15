@include('posts.navbar')
<x-guest-layout>

    @foreach ($posts as $post) 
    <div class="w-1/3 h-1/3">
        <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div class="flex justify-center md:justify-end -mt-16">
                <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="https://media.fds.fi/product_image/800/119RoomCopenhagen_iso_TH.jpg" alt="portrait">
            </div>
                <div class=" border-2  h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-50 overflow-hidden">
                    <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="{{$post->img_url}}" alt="blog">
                </div>
                <div>
                    {{-- <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2> --}}
                    <p class="mt-2 text-gray-600">{{$post->description}}</p>
                    </div>
                    <div class="flex mt-4">
                    <a href="#" class="text-xl font-medium text-indigo-500">{{$post->user->name}}</a>
                </div>
            </div>
        </div>  
        @endforeach
      
  

</x-guest-layout>