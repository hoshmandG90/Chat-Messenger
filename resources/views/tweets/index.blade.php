<div>
    
<form wire:submit.prevent="tweets"  class="bg-white dark:bg-gray-400 text-gray-900 dark:text-white text-gray-600 dark:text-gray-400 border border-blue-500 rounded-lg py-6 px-8 mb-4">

    <textarea wire:model.defer="body" class="w-full p-2 @error('body') border border-red-500 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400" placeholder="what's up Doc?" id="" cols="30" rows="5" autofocus></textarea>

	@error('body')
		

	<span class="mt-2 mb-1 text-xs text-red-500 font-semibold">{{$message}}</span>
	@enderror

    <div class="flex justify-between">
        <div>

         
            <div class="flex items-center space-x-2">
                <img src="{{auth()->user()->avatar}}" class="w-10 h-10 rounded-full object-cover" alt="">

                <label class=" flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full bg-gray-200 text-blue-300">

                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">

                    </path>

                </svg>
                <input type="file" wire:model.defer="photos" class="hidden">

              </label>
            </div>
                

     
       
    </div>
    <div>
        <button type="submit" class="bg-blue-400 rounded-full text-white shadow-sm px-2 py-2">Tweet-a-roo!</button>
    </div>

    </div>
</form>


@foreach ($tweets as $tweet)

<div class=" flex items-centr justify-center  mb-2">

    
	<div class="w-full max-w-xl border border-gray-300 rounded-2xl py-3 px-5">
		<a href="{{route('profile',$tweet->user->id)}}" class="flex">
			<div class="mr-2">
				<img class="w-12 h-12 rounded-full" src="{{$tweet->user->avatar}}"  /></div>
				<div>
					<div class="flex space-x-1">
						<span class="font-bold text-sm capitalize">{{$tweet->user->name}}</span>
						<span class="text-blue-500">	
							<svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>

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
					<p class="text-gray-500 pt-1">{{$tweet->created_at->format(' H:i A')}} · {{$tweet->created_at->format('M d, Y')}}</p> 
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
				<div class="flex space-x-2"><svg viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6" style="">
						<g>
							<path
								d="M12 21.638h-.014C9.403 21.59 1.95 14.856 1.95 8.478c0-3.064 2.525-5.754 5.403-5.754 2.29 0 3.83 1.58 4.646 2.73.814-1.148 2.354-2.73 4.645-2.73 2.88 0 5.404 2.69 5.404 5.755 0 6.376-7.454 13.11-10.037 13.157H12zM7.354 4.225c-2.08 0-3.903 1.988-3.903 4.255 0 5.74 7.034 11.596 8.55 11.658 1.518-.062 8.55-5.917 8.55-11.658 0-2.267-1.823-4.255-3.903-4.255-2.528 0-3.94 2.936-3.952 2.965-.23.562-1.156.562-1.387 0-.014-.03-1.425-2.965-3.954-2.965z">
							</path>
						</g>
					</svg><span>783.9k</span></div>
				<div class="flex space-x-2"><svg viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
						<g>
							<path
								d="M14.046 2.242l-4.148-.01h-.002c-4.374 0-7.8 3.427-7.8 7.802 0 4.098 3.186 7.206 7.465 7.37v3.828c0 .108.044.286.12.403.142.225.384.347.632.347.138 0 .277-.038.402-.118.264-.168 6.473-4.14 8.088-5.506 1.902-1.61 3.04-3.97 3.043-6.312v-.017c-.006-4.367-3.43-7.787-7.8-7.788zm3.787 12.972c-1.134.96-4.862 3.405-6.772 4.643V16.67c0-.414-.335-.75-.75-.75h-.396c-3.66 0-6.318-2.476-6.318-5.886 0-3.534 2.768-6.302 6.3-6.302l4.147.01h.002c3.532 0 6.3 2.766 6.302 6.296-.003 1.91-.942 3.844-2.514 5.176z">
							</path>
						</g>
					</svg><span>139.7k</span></div>
				<div class="flex space-x-2"><svg viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6" style="">
						<g>
							<path
								d="M11.96 14.945c-.067 0-.136-.01-.203-.027-1.13-.318-2.097-.986-2.795-1.932-.832-1.125-1.176-2.508-.968-3.893s.942-2.605 2.068-3.438l3.53-2.608c2.322-1.716 5.61-1.224 7.33 1.1.83 1.127 1.175 2.51.967 3.895s-.943 2.605-2.07 3.438l-1.48 1.094c-.333.246-.804.175-1.05-.158-.246-.334-.176-.804.158-1.05l1.48-1.095c.803-.592 1.327-1.463 1.476-2.45.148-.988-.098-1.975-.69-2.778-1.225-1.656-3.572-2.01-5.23-.784l-3.53 2.608c-.802.593-1.326 1.464-1.475 2.45-.15.99.097 1.975.69 2.778.498.675 1.187 1.15 1.992 1.377.4.114.633.528.52.928-.092.33-.394.547-.722.547z">
							</path>
							<path
								d="M7.27 22.054c-1.61 0-3.197-.735-4.225-2.125-.832-1.127-1.176-2.51-.968-3.894s.943-2.605 2.07-3.438l1.478-1.094c.334-.245.805-.175 1.05.158s.177.804-.157 1.05l-1.48 1.095c-.803.593-1.326 1.464-1.475 2.45-.148.99.097 1.975.69 2.778 1.225 1.657 3.57 2.01 5.23.785l3.528-2.608c1.658-1.225 2.01-3.57.785-5.23-.498-.674-1.187-1.15-1.992-1.376-.4-.113-.633-.527-.52-.927.112-.4.528-.63.926-.522 1.13.318 2.096.986 2.794 1.932 1.717 2.324 1.224 5.612-1.1 7.33l-3.53 2.608c-.933.693-2.023 1.026-3.105 1.026z">
							</path>
						</g>
					</svg><span>Copy link to tweet</span></div>
			</div>
		</div>
	</div>
        
@endforeach
</div>
