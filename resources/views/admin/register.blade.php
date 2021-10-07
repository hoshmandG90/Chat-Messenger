<div>
    @section('title','Registration')

    <section class="flex flex-col md:flex-row h-screen items-center">

        <div class="bg-indigo-600  lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            <img src="https://images.pexels.com/photos/691668/pexels-photo-691668.jpeg?cs=srgb&dl=pexels-eberhard-grossgasteiger-691668.jpg&fm=jpg"
                alt="" class="w-full h-full object-cover img-fluid img-responsive">
        </div>

        <div class="bg-white  h-full w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center">

            <div class="w-full h-100">


                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Registration to your account</h1>

                <form wire:submit.prevent="register" class="mt-6">
                    <div>
                        <label class="block text-gray-700">Full Name</label>
                        <input  type="text" wire:model.defer="FullName" placeholder="Enter your name"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                            autofocus  >
                             @error('FullName')<span class="text-xs mt-1 text-red-500 font-semibold">{{$message}}</span>  @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700">Email Address</label>
                        <input type="email" wire:model.defer="Email" placeholder="Enter Email Address"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                              >
                            @error('Email')<span class="text-xs mt-1 text-red-500 font-semibold">{{$message}}</span>  @enderror

                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700">Password</label>
                        <input type="password" wire:model.defer="Password" placeholder="Enter Password"  class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                  focus:bg-white focus:outline-none" >
                  @error('Password')<span class="text-xs mt-1 text-red-500 font-semibold">{{$message}}</span>  @enderror

                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700">Confirm Password</label>
                        <input wire:model.defer="PasswordConfirmation" type="password" placeholder="Enter Confirm Password"  class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                  focus:bg-white focus:outline-none" >
                  @error('PasswordConfirmation')<span class="text-xs mt-1 text-red-500 font-semibold">{{$message}}</span>  @enderror

                    </div>

                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload
                            Photo</label>
                        <div class='flex items-center justify-center w-full'>
                            <label
                                class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                <div class='flex flex-col items-center justify-center pt-7'>
                                    <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                          <img src="{{$Avatars->temporaryUrl()}}" width="150px" class="img-responsive shadow-sm rounded-lg">
                          @endif

                          @error('Avatars')<span class="text-xs mt-2 text-red-500 font-semibold">{{$message}}</span>  @enderror

                    </div>



                    <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
                px-4 py-3 mt-6">Create New Account</button>
                </form>

                <hr class="my-6 border-gray-300 w-full">

                <a href="{{route('login')}}"
                    class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                          </svg>
                           <span class="ml-4 capitalize">back to login page</span>
                    </div>
                </a>




            </div>
        </div>

    </section>
 
</div>
