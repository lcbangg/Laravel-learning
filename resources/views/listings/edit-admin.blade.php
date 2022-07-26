<x-layout-admin>
    <header class="text-center">
        <h2 class="">
            Edit Gig
        </h2>
        <p class="mb-4">Edit: {{$listing->title}}</p>
    </header>
    <form class="form-group" method="POST" action="/lavarel2/public/admin/listings/{{$listing->id}}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="ps-5">
            <label for="company" class="inline-block text-lg mb-2">Company Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" 
            value="{{$listing->company}}"/>
        
        @error('company')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            
        @enderror

        </div>

        <div class="ps-5">
            <label for="title" class="inline-block text-lg mb-2">Job Title</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                placeholder="Example: Senior Laravel Developer" 
                value="{{$listing->title}}"/>
            
        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            
        @enderror
        </div>

        <div class="ps-5">
            <label for="location" class="inline-block text-lg mb-2">Job Location</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                placeholder="Example: Remote, Boston MA, etc" 
                value="{{$listing->location}}"/>
                @error('location')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    
                @enderror
        </div>

        <div class="ps-5">
            <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" 
            value="{{$listing->email}}"/>
            @error('email')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                
            @enderror
        </div>

        <div class="ps-5">
            <label for="website" class="inline-block text-lg mb-2">
                Website/Application URL
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" 
            value="{{$listing->website}}"/>
            @error('website')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                
            @enderror
        </div>

        <div class="ps-5">
            <label for="tags" class="inline-block text-lg mb-2">
                Tags (Comma Separated)
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                placeholder="Example: Laravel, Backend, Postgres, etc" 
                value="{{$listing->tags}}"/>
                @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    
                @enderror
        </div>

        <div class="ps-5">
            <label for="logo" class="inline-block text-lg mb-2">
                Company Logo
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
            <img
                            class="w-48 mr-6 mb-6"
                            src="{{$listing->logo ? asset ('storage/'.$listing->logo): asset('/images/no-image.png')}}"
                            alt=""
                        />
            @error('logo')
                <p class="text-red text-xs mt-1">{{$message}}</p>
                    
                @enderror
        </div>

        <div class="ps-5">
            <label for="description" class="inline-block text-lg mb-2">
                Job Description
            </label>
            <div class="">
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                placeholder="Include tasks, requirements, salary, etc">{{$listing->description}}</textarea>
                @error('description')
                <p class="text-red text-xs mt-1">{{$message}}</p>
                    
                @enderror
            </div>
        </div>

        <div class="ps-5">
            <button class="py-2 p-4 btn-success">
                Update Gig
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</x-layout-admin>
