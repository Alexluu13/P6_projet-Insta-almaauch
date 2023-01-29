<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mes posts') }}
        </h2>
    </x-slot>

    <!-- Message de réussite / open modal -->
    @if (session()->has('success'))
        <div class="modal fade fixed top-0 inset-y-1/2  w-1/4 outline-none overflow-x-hidden overflow-y-auto"
        id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog relative w-auto pointer-events-none">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-yellow-50 bg-clip-padding rounded-md outline-none text-current">
                <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-grey-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-amber-700" id="exampleModalLabel">
                    Notification
                </h5>
                <button type="button" id="btn-close"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4 text-amber-800">
                    {{ session('success') }}
                </div>
                <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                    <button type="button"
                        class="inline-block px-6 py-2.5 bg-yellow-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-300 hover:shadow-lg focus:bg-yellow-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out" id="closeButton"
                        data-bs-dismiss="modal">@lang('Close')</button>
                    {{-- <button type="button"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">Understood</button> --}}
                </div>
            </div>
            </div>
        </div>
        <script type="text/javascript">
            if(document.getElementById("closeButton")){
                document.getElementById("closeButton").onclick=function(){
                    document.getElementById("staticBackdrop").classList.toggle("hidden");
                } 
            }      
            </script>

    @endif



    
    <div class="grid gap-4 grid-cols-3 mx-8">
        @foreach ($posts as $post)
            <x-post-card>
                <div class="header" >
                    <img src="https://images.unsplash.com/photo-1617077644557-64be144aa306?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="object-cover bg-yellow-500 rounded-full w-10 h-10" />
                    <div>
                        <time datetime="06-08-21" class="text-gray-500 text-xs">
                            {{ date('D j M, Y', strtotime($post->updated_at)) }}
                        </time>
                    </div>
                    <b class="mb-2 capitalize">{{Auth::user()->name}}</b>
                </div>
                <div class="main">
                    <div class="whitespace-pre-wrap mt-7">{{$post->description}}</div>

                    <div class="mt-5 flex gap-2	 justify-center border-b pb-4 flex-wrap">
                        <a href="{{ route('posts.show', $post->id) }}" class="">
                        <img class="object-scale-down h-96 flex-auto md:h-80" src="{{ $post->img_url }}" alt="photo-lego">
                        </a>
                    </div>
                </div>
                <div class="footer">
                    <div class="h-24 border-b  flex items-center justify-around">

                        <div class="flex items-center gap-2">
                            <div class="text-sm">10</div>
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
                            
                        <div class="flex items-center gap-1">
                            <div class="text-sm ml-4">20</div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>                       

                        {{-- <div class="bg-gray-100	rounded-full h-3.5 flex	items-center justify-center ml-8">
                            <span>category</span>
                        </div>  --}}

                        
                        <!-- Buttons modify and delete -->

                        <div class="grid gap-1 grid-cols-1 grid-rows-2">
                            <a href="{{ route('posts.edit', $post->id) }}">
                            <x-button>@lang('Modify')</x-button>
                            </a>


                            <form id="destroy{{ $post->id }}" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                
                                <x-danger-button>
                                    @lang('Delete')
                                </x-danger-button>
                            </form>
                        </div>

                    </div>
                </div>
            </x-post-card>
        @endforeach
    </div>



{{-- ----- Pagination ------   --}}

<div>
<footer class="card-footer">
    {{$posts->links()}}
</footer>
</div>


</x-app-layout>