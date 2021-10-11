<div>
    <!-- component -->

    <div class="h-screen w-full flex antialiased text-gray-200 bg-gray-900 overflow-hidden">
        <div class="flex-1 flex flex-col">
            <div class="border-b-2 border-gray-800 p-2 flex flex-row z-20">
                <div class="bg-red-600 w-3 h-3 rounded-full mr-2"></div>
                <div class="bg-yellow-500 w-3 h-3 rounded-full mr-2"></div>
                <div class="bg-green-500 w-3 h-3 rounded-full mr-2"></div>
            </div>
            <main class="flex-grow flex flex-row min-h-0">

                <section class="flex flex-col flex-auto border-l border-gray-800">
                    <div class="chat-header px-6 py-4 flex flex-row flex-none justify-between items-center shadow">
                        <div class="flex">
                            <div class="w-12 h-12 mr-4 relative flex flex-shrink-0">
                                <img class="shadow-md rounded-full w-full h-full object-cover"
                                    src="{{$user->avatar}}" alt="" />
                            </div>
                            <div class="text-sm">
                                <p class="font-bold truncate capitalize">{{$user->name}}</p>
                                <p>Joined {{$user->created_at->diffForHumans()}}</p>
                            </div>
                        </div>

                    </div>
                    <div class="chat-body p-4 flex-1 overflow-y-scroll">
                        <div class="mb-4">

                            <div class="text-sm flex mt-5 justify-center items-center  ">
                             <div class="">
                                 <img class="shadow-md rounded-full w-20 h-20  object-cover" 
                                     src="{{$user->avatar}}" alt="" />
                             </div>
             
                         </div>
                         <p class="text-xl font-bold flex mt-2 justify-center items-cente truncate capitalize">{{$user->name}}</p>
                         <p class="text-xs text-gray-100  flex mt-2 justify-center items-cente">You're not friends on Twitter</p>
                         <p class="text-xs text-gray-100  flex mt-2 justify-center items-cente">Lives In Sulaimania, As Sulaymaniyah,Iraq</p>  
                         </div>

                        <div class="flex flex-row justify-start mb-2 mt-3">
                            <div class="w-8 h-8 relative flex flex-shrink-0 mr-4">
                                <img class="shadow-md rounded-full w-full h-full object-cover"
                                    src="https://randomuser.me/api/portraits/women/33.jpg" alt="" />
                            </div>
                            <div class="messages text-sm text-gray-700 grid grid-flow-row gap-2">
                                <div class="flex items-center group">
                                    <p
                                        class="px-6 py-3 rounded-lg l bg-gray-800 max-w-xs lg:ma-w-md text-gray-200">
                                        Hey! How are you?</p>

                                </div>

                            </div>
                        </div>
                        <div class="flex flex-row justify-end mt-3 mb-2">
                            <div class="messages text-sm text-white grid grid-flow-row gap-2">
                                <div class="flex items-center flex-row-reverse group">
                                    <p class="px-6 py-3 rounded-lg bg-blue-700 max-w-xs lg:max-w-md">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, repellendus?
                                        Ex doloremque hic animi maxime laborum voluptatibus quaerat ipsa, incidunt
                                        pariatur aperiam tempora, quasi omnis nesciunt blanditiis repudiandae veritatis
                                        quia!?</p>

                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="chat-footer flex-none">
                        <div class="flex flex-row items-center p-4">


                            <div class="relative flex-grow">
                                <label>
                                    <input
                                        class="rounded-full py-2 pl-3 pr-10 w-full border border-gray-800 focus:border-gray-700 bg-gray-800 focus:bg-gray-900 focus:outline-none text-gray-200 focus:shadow-md transition duration-300 ease-in"
                                        type="text" value="" placeholder="Aa" />
                                    <button type="button"
                                        class="absolute top-0 right-0 mt-2 mr-3 flex flex-shrink-0 focus:outline-none block text-blue-600 hover:text-blue-700 w-6 h-6">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path
                                                d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM6.5 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm7 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm2.16 3a6 6 0 0 1-11.32 0h11.32z" />
                                        </svg>
                                    </button>
                                </label>
                            </div>
                            <button type="button"
                                class="flex flex-shrink-0 focus:outline-none mx-2 block text-blue-600 hover:text-blue-700 w-6 h-6">
                                <svg class="w-5 h-5 transform -rotate-90 -mr-px" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</div>
