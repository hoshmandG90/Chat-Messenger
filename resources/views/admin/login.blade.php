<div>
    @section('title','Login')

    <section class="flex flex-col md:flex-row h-screen items-center">

        <div class="bg-indigo-600  lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            <img src="https://images.pexels.com/photos/691668/pexels-photo-691668.jpeg?cs=srgb&dl=pexels-eberhard-grossgasteiger-691668.jpg&fm=jpg"
                alt="" class="w-full h-full object-cover">
        </div>

        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center">

            <div class="w-full h-100">


                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log In to your account</h1>

                <form wire:submit.prevent="Login" class="mt-6" >
                    @if ($check)
                        
                 
                   <div class="text-center text-sm text-red-500 capitalize">{{$check}}</div>
                   @endif
                    <div>
                        <label class="block text-gray-700">Email Address</label>
                        <input wire:model="email" type="email" placeholder="Enter Email Address"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                            autofocus >
                            @error('email')<span class="text-xs mt-1 text-red-500 font-semibold">{{$message}}</span>  @enderror

                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700">Password</label>
                        <input wire:model="password" type="password" placeholder="Enter Password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                  focus:bg-white focus:outline-none" >
                  @error('password')<span class="text-xs mt-1 text-red-500 font-semibold">{{$message}}</span>  @enderror

                    </div>

                 



                    <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
                px-4 py-3 mt-6">Log In</button>
                </form>

                <hr class="my-6 border-gray-300 w-full">

                <a href="{{route('register')}}"
                    class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z" />
                          </svg>
                           <span class="ml-4 capitalize">haven't you registered yet?</span>
                    </div>
                </a>




            </div>
        </div>

    </section>
    
</div>
