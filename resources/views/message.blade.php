<div>
    <!-- component -->
    <div class="border-b-2 bg-gray-00 border-gray-800 p-2 flex flex-row z-20">
        <div class="bg-red-600 w-3 h-3 rounded-full mr-2"></div>
        <div class="bg-yellow-500 w-3 h-3 rounded-full mr-2"></div>
        <div class="bg-green-500 w-3 h-3 rounded-full mr-2"></div>
    </div>
    <div class="h-screen w-full flex antialiased text-gray-200 bg-gray-900">

        </section>
        
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
         
           




            <div class="chat-body p-4 flex-1 overflow-y-scroll mb-4 rounded-lg">
                <div>

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

                     
                <div class="flex mt-4 flex-row justify-start">
                    <div class="w-8 h-8 relative flex flex-shrink-0 mr-4">
                        <img class="shadow-md rounded-full w-full h-full object-cover"
                            src="{{$user->avatar}}" alt="" />
                    </div>
                    <div class="messages text-sm text-gray-700 grid grid-flow-row gap-1">


                        <div class="flex items-center group">
                            <p class="px-6 py-3  bg-gray-800 max-w-xs lg:max-w-md  text-gray-200">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit.
                               Neque laboriosam enim incidunt laudantium atque quasi architecto eius, 
                              natus unde adipisci! Beatae nisi recusandae porro quasi. Mollitia magni rem nemo fugit?.</p>

                        </div>
                    </div>
                </div>

                <p class="p-4 text-center text-sm text-gray-500">FRI 3:04 PM</p>
                @foreach ($messages as $message)

                <div class="flex flex-row justify-end">
                    <div class="messages text-sm text-white grid grid-flow-row gap-2">


                        <div class="flex items-center flex-row-reverse group mb-2">
                            <div class="w-8 h-8 relative flex flex-shrink-0 mr-2 mx-4">
                                <img class="shadow-md rounded-full w-full h-full object-cover"
                                    src="{{auth()->user()->avatar}}" alt="" />
                            </div>
                            <p class="px-6 py-3 rounded-lg  bg-blue-700 max-w-xs lg:max-w-md">
                                {{$message->text}}.</p>


                        </div>
                    </div>
                </div>
                @endforeach
          

            </div>
            <form wire:submit.prevent="store" class="chat-footer flex-none">
                <div class="flex flex-row items-center p-4">




                    <div class="relative flex-grow">
                        <input  wire:model.defer="message"
                        class="rounded-full py-2 pl-3 pr-10 w-full border border-gray-800 focus:border-gray-700 bg-gray-800 focus:bg-gray-900 focus:outline-none text-gray-200 focus:shadow-md transition duration-300 ease-in"
                        type="text" value="" placeholder="Aa" />
                        <label>
                        
                            <label 
                            
                                class="absolute top-0 right-0 mt-2 mr-3 flex flex-shrink-0 focus:outline-none block text-blue-600 hover:text-blue-700 w-6 h-6">
                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                    <path
                                        d="M11,13 L8,10 L2,16 L11,16 L18,16 L13,11 L11,13 Z M0,3.99406028 C0,2.8927712 0.898212381,2 1.99079514,2 L18.0092049,2 C19.1086907,2 20,2.89451376 20,3.99406028 L20,16.0059397 C20,17.1072288 19.1017876,18 18.0092049,18 L1.99079514,18 C0.891309342,18 0,17.1054862 0,16.0059397 L0,3.99406028 Z M15,9 C16.1045695,9 17,8.1045695 17,7 C17,5.8954305 16.1045695,5 15,5 C13.8954305,5 13,5.8954305 13,7 C13,8.1045695 13.8954305,9 15,9 Z" />
                                </svg>
                                <input wire:model.defer="photos" type="file" hidden>

                            </label>
                        </label>
                    </div>
                    <button type="submit"
                        class="flex flex-shrink-0 focus:outline-none mx-2 block text-blue-600 hover:text-blue-700 w-6 h-6">
                        <svg class="w-5 h-5 transform -rotate-90 -mr-px" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </section>
        </main>
    </div>
</div>
</div>
