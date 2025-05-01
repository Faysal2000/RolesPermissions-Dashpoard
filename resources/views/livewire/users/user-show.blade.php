<div>
    
    
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show User') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('form for show user') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
        
   
    


    <div>

            <a href="{{route("users.index")}}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-600 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-600">
                Back
            </a>    
            <div class="w-150">
                 <p class="mt-2"><strong>Name:   </strong>{{$user->name}}</p>
                 <p class="mt-2"><strong>Email:   </strong>{{$user->email}}</p> 
                 <p class="mt-2"><strong>Role:   </strong>{{$user->name}}</p>     
            </div> 

    </div>
    

</div>
