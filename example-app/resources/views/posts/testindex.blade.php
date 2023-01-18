{{-- @include('posts.navbar') --}}
{{-- <x-guest-layout> --}}


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

{{-- </x-guest-layout> --}}



@section('contenu')
        <div class="border-2 container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
            <a rel="noopener noreferrer" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
                <img src="https://i.pinimg.com/736x/13/dc/4b/13dc4b9ae4172c8d752ecd50e8a069f0.jpg" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
                <div class="p-6 space-y-2 lg:col-span-5">
                    <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Noster tincidunt reprimique ad pro</h3>
                    <span class="text-xs dark:text-gray-400">February 19, 2021</span>
                    <p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert putent doctus id.</p>
                </div>
            </a>
        </div>
            @foreach ($posts as $post)
                <div class="flex flex-row flex-wrap">
                    <a rel="noopener noreferrer" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                        <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="{{$post->img_url}}">
                        <div class="p-6 space-y-2">
                            <h5 class="text-2xl font-semibold group-hover:underline group-focus:underline">{{$post->user->name}}</h3>
                            <span class="text-xs dark:text-gray-400">January 21, 2021</span>
                            <p>{{$post->description}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
         
@endsection




<!-- component show card -->
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">From the blog</h1>

        <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
            <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-72 lg:h-96" src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"alt="">

            <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                <p class="text-sm text-blue-500 uppercase">category</p>

                <a href="#" class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white md:text-3xl">
                    All the features you want to know
                </a>

                <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt,
                    laudantium quia tempore delect
                </p>

                <a href="#" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read more</a>

                <div class="flex items-center mt-6">
                    <img class="object-cover object-center w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">

                    <div class="mx-4">
                        <h1 class="text-sm text-gray-700 dark:text-gray-200">Amelia. Anderson</h1>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Lead Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- component -->
<!-- Create By Joker Banny -->
{{-- <div class="min-h-screen flex justify-center items-center bg-gray-50">
    <div class="max-w-xs container bg-white rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl m-10">
      <div> --}}
        
            {{-- <h4 class="text-2xl mt-2 ml-4 font-bold text-gray-800 cursor-pointer hover:text-gray-900 transition duration-100">{{$post->description}}</h4> --}}
            {{-- <p class="ml-4 mt-1 mb-2 text-gray-700">{{$post->description}}</p>
      </div>
            <a href="{{ route('posts.show', $post->id) }}" class="">
                <img class="w-full cursor-pointer" src="{{$post->img_url}}" alt="" />
            </a>  
        <div class="flex p-4 justify-between">
            <div class="flex items-center space-x-2">
                <img class="w-10 rounded-full" src="https://d2qp0siotla746.cloudfront.net/img/use-cases/profile-picture/template_3.jpg" alt="sara" />
                <h2 class="text-gray-800 font-bold">{{$post->user->name}}</h2>
            </div>
        <div class="flex space-x-2">
            <div class="flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-600 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                </span>
                <span>22 </span>
            </div>
          <div class="flex space-x-1 items-center">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-red-500 hover:text-red-400 transition duration-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
              </svg>
            </span>
            <span>20 </span>
          </div>
        </div>
      </div>
    </div>
  </div> --}}



  <!-- component lego pain d'épice / création de post -->
<body class="font-mono bg-gray-400">
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div
                    class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                    style="background-image: url('https://i.gifer.com/C00Z.gif')">
                </div>
                <!-- Col -->
                <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <div class="px-8 mb-4 text-center">
                        <h3 class="pt-4 mb-2 text-2xl">Création d'un post !</h3>
                        <p class="mb-4 text-sm text-gray-700">
                            N'oubliez pas la légende de votre photo.
                        </p>
                    </div>
                    <form action="{{route('posts.store')}}" method="POST" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                        @csrf
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="description">
                                Post : 
                            </label>
                            <textarea class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="description" placeholder="Description photo...">{{ old('description') }}</textarea>
                        </div>
                        <!-- un message d'erreur est envoyé si le champs est mal saisis -->
                        @error('description')
                            <p class="help is-danger">{{$message}}</p>
                        @enderror
                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-red-500 rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline"
                                type="button">
                                Envoyer
                            </button>
                        </div>
                    </form>

                    <!-- loading picture -->
                    <div class="max-w-2xl mx-auto">
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div> 
                    </div>
                    <!-- end loading picture -->

                </div>
            </div>
        </div>
    </div>
</body>





@foreach ($posts as $post)
<main class="inline-block">

<div class="border max-w-xs bg-white mt-6 rounded-2xl p-4 shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl m-10">
    <div class="flex items-center justify-between">
        <div class="gap-3.5	flex items-center">
            <img src="https://images.unsplash.com/photo-1617077644557-64be144aa306?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="object-cover bg-yellow-500 rounded-full w-10 h-10" />
            <div class="flex flex-col">
                <b class="mb-2 capitalize">{{$post->user->name}}</b>
                <time datetime="06-08-21" class="text-gray-400 text-xs">06 August at 09.15 PM
                </time>
            </div>
        </div>
        <div class="bg-gray-100	rounded-full h-3.5 flex	items-center justify-center">
            <span>category</span>
        </div>
    </div>
    <div class="whitespace-pre-wrap mt-7">{{$post->description}}</div>
    <div class="mt-5 flex gap-2	 justify-center border-b pb-4 flex-wrap	">
        <a href="{{ route('posts.show', $post->id) }}" class="">
        <img class="w-full cursor-pointer" src="{{ $post->img_url }}" class="bg-red-500 rounded-2xl w-1/3 object-cover h-96 flex-auto" alt="photo-user">
        </a>
    </div>
        <div class="h-16 border-b  flex items-center justify-around">
            <div class="flex items-center	gap-3">
                <div class="text-sm	">10</div>
                <svg width="20px" height="19px" viewBox="0 0 20 19" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="?-Social-Media" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Square_Timeline" transform="translate(-312.000000, -746.000000)">
                            <g id="Post-1" transform="translate(280.000000, 227.000000)">
                                <g id="Post-Action" transform="translate(0.000000, 495.000000)">
                                    <g transform="translate(30.000000, 21.000000)" id="Comment">
                                        <g>
                                            <g id="ic_comment-Component/icon/ic_comment">
                                                <g id="Comments">
                                                    <polygon id="Path" points="0 0 24 0 24 25 0 25"></polygon>
                                                    <g id="iconspace_Chat-3_25px"
                                                        transform="translate(2.000000, 3.000000)" fill="#92929D">
                                                        <path
                                                            d="M10.5139395,15.2840977 L6.06545155,18.6848361 C5.05870104,19.4544672 3.61004168,18.735539 3.60795568,17.4701239 L3.60413773,15.1540669 C1.53288019,14.6559967 0,12.7858138 0,10.5640427 L0,4.72005508 C0,2.11409332 2.10603901,0 4.70588235,0 L15.2941176,0 C17.893961,0 20,2.11409332 20,4.72005508 L20,10.5640427 C20,13.1700044 17.893961,15.2840977 15.2941176,15.2840977 L10.5139395,15.2840977 Z M5.60638935,16.5183044 L9.56815664,13.4896497 C9.74255213,13.3563295 9.955971,13.2840977 10.1754888,13.2840977 L15.2941176,13.2840977 C16.7876789,13.2840977 18,12.0671403 18,10.5640427 L18,4.72005508 C18,3.21695746 16.7876789,2 15.2941176,2 L4.70588235,2 C3.21232108,2 2,3.21695746 2,4.72005508 L2,10.5640427 C2,12.0388485 3.1690612,13.2429664 4.6301335,13.28306 C5.17089106,13.297899 5.60180952,13.7400748 5.60270128,14.2810352 L5.60638935,16.5183044 Z"
                                                            id="Path"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="flex items-center	gap-3">
                <div class="text-sm">5</div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            {{-- <div class="flex items-center	gap-3">
                <a href="{{ route('posts.index') }}">
                    <div class="text-sm">Retour</div>
                </a>
            </div> --}}
          </div>

          </div>
</div>
</div>


@endforeach

</main>
{{-- <a href="{{ route('posts.create') }}">
<span>Créer un post</span>
</a> --}}



<!-- component nav-bar -->
<div class="bg-white shadow">
    <div class="container mx-auto px-4">
      <div class="flex items-center justify-between py-4">
        <div>
          <img class="w-1/12 rounded-full" src="https://media.fds.fi/product_image/800/119RoomCopenhagen_iso_TH.jpg" alt="tête de lego"/>
        </div>

        {{-- <div class="hidden sm:flex sm:items-center">
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Accueil</a>
        </div> --}}

        <div class="hidden sm:flex sm:items-center">
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Sign in</a>
          <a href="#" class="text-gray-800 text-sm font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign up</a>
        </div>
      </div>
      
      <div class="block sm:hidden bg-white border-t-2 py-2">
        <div class="flex flex-col">
          
          <div class="flex justify-between items-center border-t-2 pt-2">
            <a href="{{ route('register') }}" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">@lang('Log in')</a>

            <a href="{{ route('login') }}" class="text-gray-800 text-sm font-semibold border px-4 py-1 rounded-lg hover:text-purple-600 hover:border-purple-600">@lang('Register')</a>
          </div>
        </div>
      </div>
    </div>
  </div>
