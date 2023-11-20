<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid gap-10 lg:grid-cols-2">
      <div class="lg:pr-10">
        <a href="/" aria-label="Go Home" title="Logo" class="inline-block mb-5">
          <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-50">
            <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </a>
        <h5 class="mb-4 text-4xl font-extrabold leading-none">
          {{$titlecontent}}<br class="hidden md:block" />
          
          <span class="inline-block text-deep-purple-accent-400">{{$titlecontent2}}</span>
        </h5>
        <p class="mb-6 text-gray-900">
          {{$parrafocontent}}
        </p>
        <hr class="mb-5 border-gray-300" />
        <div class="flex items-center space-x-4">
          
        </div>
      </div>
      <div>
        <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96" src="{{$img}}" alt="" />
      </div>
    </div>
  </div>