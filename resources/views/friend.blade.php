<div>
       <!--people suggetion to follow section-->
       <div class=" rounded-lg dark:text-gray-800  overflow-y-auto bg-white dark:bg-gray-800   shadow-lg m-4">
        <div class="flex justify-between">
            <div class="flex-1 m-2">
                <h2 class="px-4 py-2 text-xl w-48 font-semibold ">You might Know </h2>
                
            </div>
        </div>
    
    
            
  
        <hr class="border-gray-800 t">
    
        <!--first person who to follow-->
    
        @foreach ($users as $user)
            
       
        <div class="flex flex-shrink-0 px-2 py-1">
            <div class="flex-1 ">
                <div class="flex items-center w-48">
                    <div>
                        <img class="inline-block h-10 w-10 object-cover rounded-full ml-2 mt-2 " src="{{$user->avatar}}" alt="">
                    </div>
                    <div class="ml-3 mt-3">
                        <p class="text-base leading-6 font-medium truncate capitalize">
                           {{$user->name}}
                        </p>
                        <p class="text-sm leading-5 font-medium text-gray-600 group-hover:text-gray-300 transition ease-in-out duration-150">
                            {{$user->created_at->format('M ,d Y')}}
                        </p>
                    </div>
                </div>
    
            </div>
            <div wire:click.prevent="store('{{$user->id}}')" class="flex-1 px-4 py-2 m-2">
                <a href="" class=" float-right">
                    <button class="bg-transparent bg-gray-800  font-semibold text-white py-2 px-4 border border-white border-transparent rounded-lg">
                    Follow
                    </button>
                </a>
    
            </div>
        </div>
        @endforeach
     
        <hr class="border-gray-800">
    
        <!--second person who to follow-->
    
      
    
    
    
    </div>
</div>
