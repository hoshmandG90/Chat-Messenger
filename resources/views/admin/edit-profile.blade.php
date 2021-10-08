<div>

    <div>

        <section class="flex flex-col   items-center">


            <div class="  h-full w-full  px-6 
              flex items-center justify-center">

                <div class="w-full ">


                    <span class="flex text-xl md:text-2xl font-bold leading-tight mt-12 capitalize truncate">

                        <a href="{{route('profile',auth()->user()->username)}}"
                            class=" text-2xl font-medium rounded-full text-blue-400 hover:bg-gray-800 hover:text-blue-300 float-right">
                            <svg class="mr-1 h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <g>
                                    <path
                                        d="M20 11H7.414l4.293-4.293c.39-.39.39-1.023 0-1.414s-1.023-.39-1.414 0l-6 6c-.39.39-.39 1.023 0 1.414l6 6c.195.195.45.293.707.293s.512-.098.707-.293c.39-.39.39-1.023 0-1.414L7.414 13H20c.553 0 1-.447 1-1s-.447-1-1-1z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                        Edit Profile {{$user->name}}

                    </span>

                    <form wire:submit.prevent="SaveUser('{{$user->id}}')" class="mt-6">
                        <div class="mb-2">
                            <label class="block mb-1 mt-1 ">username</label>
                            <input type="text" wire:model.defer="UserName" placeholder="Enter your username"
                                class="w-full  pr-2  text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                                autofocus>
                            @error('UserName')<span class="text-xs mt-1 text-red-500 font-semibold">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-4">
                            <label class="mb-1 mt-1 ">Full Name</label>
                            <input type="text" wire:model.defer="FullName" placeholder="Enter your name"
                                class="w-full  pr-2  text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
                            @error('FullName')<span class="text-xs mt-1 text-red-500 font-semibold">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-4">
                            <label class="mb-1 mt-1 ">Email Address</label>
                            <input type="email" wire:model.defer="Email" placeholder="Enter Email Address"
                                class="w-full  pr-2  text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
                            @error('Email')<span class="text-xs mt-1 text-red-500 font-semibold">{{$message}}</span>
                            @enderror

                        </div>

                        <div class="mb-2 mt-4">
                            <label class="blocmb-1 mt-1k ">Password</label>
                            <input type="password" wire:model.defer="Password" placeholder="Enter Password"
                                class="w-full  pr-2  text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
                            @error('Password')<span class="text-xs mt-1 text-red-500 font-semibold">{{$message}}</span>
                            @enderror

                        </div>

                        <div class="mt-4">
                            <label class="mb-1 mt-1 ">Confirm Password</label>
                            <input wire:model.defer="PasswordConfirmation" type="password"
                                placeholder="Enter Confirm Password"  class="w-full  pr-2  text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                                >
                            @error('PasswordConfirmation')<span
                                class="text-xs mt-1 text-red-500 font-semibold">{{$message}}</span> @enderror

                        </div>

                        <div class="mb-2 mt-4">
                            <label class="mb-1 mt-1 ">Edit Bio</label>
                            <textarea name="" wire:model.defer="EditBio"
                                class="w-full  pr-2  text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                                id="" cols="30" rows="10" placeholder="write something to your profile"></textarea>
                            @error('EditBio')<span class="text-xs mt-1 text-red-500 font-semibold">{{$message}}</span>
                            @enderror

                        </div>

                        <div class="grid grid-cols-1 mt-5 mx-7">
                            <label
                                class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload
                                Photo</label>
                            <div class='flex items-center justify-center w-full'>
                                <label
                                    class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                    <div class='flex flex-col items-center justify-center pt-7'>
                                        <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        <p
                                            class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                            Select a photo</p>
                                        <input wire:model.defer="Avatars" type="file" class="hidden">
                                    </div>
                                </label>

                            </div>
                            @if ($Avatars)

                            Photo Preview:
                            <img src="{{$Avatars->temporaryUrl()}}" width="150px"
                                class="img-responsive shadow-sm rounded-lg">

                                @else
                                Image Preview:
                                <img src="{{auth()->user()->avatar}}" width="150px"
                                class="img-responsive shadow-sm rounded-lg">


                            @endif

                            @error('Avatars')<span class="text-xs mt-2 text-red-500 font-semibold">{{$message}}</span> @enderror

                        </div>




                        <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
                    px-4 py-3 mt-6">update user account</button>
                    </form>





                </div>
            </div>

        </section>

    </div>

</div>
