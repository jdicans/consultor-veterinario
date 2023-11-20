<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="grid gap-10 lg:grid-cols-2">
    <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg">
      <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-teal-accent-400">
        <svg class="text-teal-900 w-7 h-7" viewBox="0 0 24 24">
          <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points=" 8,5 8,1 16,1 16,5" stroke-linejoin="round"></polyline>
          <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="9,15 1,15 1,5 23,5 23,15 15,15" stroke-linejoin="round"></polyline>
          <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="22,18 22,23 2,23 2,18" stroke-linejoin="round"></polyline>
          <rect x="9" y="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="6" height="4" stroke-linejoin="round"></rect>
        </svg>
      </div>
      <div class="max-w-xl mb-6">
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
          {{$titlecontent}}<br class="hidden md:block" />
          {{$titlecontent2}}
          <span class="inline-block text-deep-purple-accent-400">{{$titlecontent3}}</span>
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
          {{$parrafocontent}}
        </p>
      </div>
      
    </div>
    <div class="flex items-center justify-center -mx-4 lg:pl-8">
      <div class="flex flex-col items-end px-3">
        <img
          class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56"
          src="{{$img1}}"
          alt=""
        />
        <img class="object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40" src="{{$img2}}" alt="" />
      </div>
      <div class="px-3">
        <img class="object-cover w-40 h-40 rounded shadow-lg sm:h-64 xl:h-80 sm:w-64 xl:w-80" src="{{$img3}}" alt="" />
      </div>
    </div>
  </div>
</div>