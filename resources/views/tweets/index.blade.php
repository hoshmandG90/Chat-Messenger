<div>

    <form wire:submit.prevent="tweets"
        class="bg-white dark:bg-gray-400 text-gray-900 dark:text-white text-gray-600 dark:text-gray-400 border border-blue-500 rounded-lg py-6 px-8 mb-4">

        <textarea wire:model.defer="body"
            class="w-full p-2 @error('body') border border-red-500 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400"
            placeholder="what's up Doc?" id="" cols="30" rows="5" autofocus></textarea>

        @error('body')


        <span class="mt-2 mb-1 text-xs text-red-500 font-semibold">{{$message}}</span>
        @enderror

        <div class="flex justify-between">
            <div>


                <div class="flex items-center space-x-2">
                    <img src="{{auth()->user()->avatar}}" class="w-10 h-10 rounded-full object-cover" alt="">

                    <label
                        class=" flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full bg-gray-200 text-blue-300">

                        <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">

                            </path>

                        </svg>
                        <input type="file" wire:model.defer="photos" class="hidden">

                    </label>
                </div>




            </div>
            <div>
                <button type="submit"
                    class="bg-blue-400 rounded-full text-white shadow-sm px-2 py-2">Tweet-a-roo!</button>
            </div>

        </div>
    </form>


    @foreach ($tweets as $tweet)

    <div class=" flex items-centr justify-center  mb-2">


        <div class="w-full max-w-xl border border-gray-300 rounded-2xl py-3 px-5">
            <a href="{{route('profile',$tweet->user)}}" class="flex">
                <div class="mr-2">
                    <img class="w-12 h-12 rounded-full" src="{{$tweet->user->avatar}}" /></div>
                <div>
                    <div class="flex space-x-1">
                        <span class="font-bold text-sm capitalize">{{$tweet->user->name}}</span>
                        <span class="text-blue-500">
                            <svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>

                        </span>
                    </div>
                    <div class="text-gray-500 leading-4 text-xs">{{$tweet->created_at->format('M d, Y')}}</div>
                </div>
                <div class="text-blue-500 ml-auto">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <g>
                            <path
                                d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z">
                            </path>
                        </g>
                    </svg>
                </div>
            </a>
            <div class="py-3">
                <img src="upload/Tweets/{{$tweet->photos}}" class="object-cover rounded my-2" alt="">
                <p class="text-lg " style="font-family: serif">{!!$tweet->body!!}</p>
                <div class="flex">
                    <p class="text-gray-500 pt-1">{{$tweet->created_at->format(' H:i A')}} ·
                        {{$tweet->created_at->format('M d, Y')}}</p>
                    <svg class="w-6 h-6 ml-auto text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                        <g>
                            <path
                                d="M12 18.042c-.553 0-1-.447-1-1v-5.5c0-.553.447-1 1-1s1 .447 1 1v5.5c0 .553-.447 1-1 1z">
                            </path>
                            <circle cx="12" cy="8.042" r="1.25"></circle>
                            <path
                                d="M12 22.75C6.072 22.75 1.25 17.928 1.25 12S6.072 1.25 12 1.25 22.75 6.072 22.75 12 17.928 22.75 12 22.75zm0-20C6.9 2.75 2.75 6.9 2.75 12S6.9 21.25 12 21.25s9.25-4.15 9.25-9.25S17.1 2.75 12 2.75z">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>

            <div class="flex space-x-5 pt-3 text-gray-500 border-t border-gray-300">
                <div wire:click.prevent="store('{{$tweet->id}}')"    class="flex   space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  {{$tweet->isLikedBy(auth()->user()) ? 'text-gray-500' : 'text-blue-500'}}" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                    </svg>

                    <span>
						
					{{$tweet->likes ? : 0}} 
					</span>
				</div>
                <div wire:click.prevent="destroy('{{$tweet->id}}')"   class="flex space-x-2 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg"  class="h-5 w-5 {{$tweet->isdisLikedBy(auth()->user()) ? 'text-blue-500' : 'text-gray-500'}}" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M18 9.5a1.5 1.5 0 11-3 0v-6a1.5 1.5 0 013 0v6zM14 9.667v-5.43a2 2 0 00-1.105-1.79l-.05-.025A4 4 0 0011.055 2H5.64a2 2 0 00-1.962 1.608l-1.2 6A2 2 0 004.44 12H8v4a2 2 0 002 2 1 1 0 001-1v-.667a4 4 0 01.8-2.4l1.4-1.866a4 4 0 00.8-2.4z" />
                    </svg>

                    <span>
						{{$tweet->dislike ?: 0}}
					</span>
				</div>

             
            </div>
        </div>
    </div>

    @endforeach
</div>
