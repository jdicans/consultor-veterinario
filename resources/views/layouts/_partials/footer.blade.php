
<style>
    footer {
        background-color: #ffff !important;
        padding-left: 10px;
        padding-right: 10px;
        
    }
</style>


<footer class="bg-white dark:bg-dark-900">
    <div class="container flex flex-col items-center justify-between px-6 py-8 mx-auto lg:flex-row">
        <a href="#">
            <img class="w-auto h-7" src="images/logo.jpg" alt="">
        </a>

        <div class="flex flex-wrap items-center justify-center gap-4 mt-6 lg:gap-6 lg:mt-0">
            <a href="{{route('rhome')}}" class="text-sm text-black transition-colors duration-300 dark:text-black hover:text-blue-500 dark:hover:text-blue-400">
                home
            </a>

            <a href="{{route('rabout')}}" class="text-sm text-black transition-colors duration-300 dark:text-black hover:text-blue-500 dark:hover:text-blue-400">
                about
            </a>

            <a href="{{route('rcontact')}}" class="text-sm text-black transition-colors duration-300 dark:text-black hover:text-blue-500 dark:hover:text-blue-400">
                contact
            </a>

            <a href="{{route('rservices')}}" class="text-sm text-black transition-colors duration-300 dark:text-black hover:text-blue-500 dark:hover:text-blue-400">
                servicies
            </a>
        </div>

        <p class="mt-6 text-sm text-black lg:mt-0">© Copyright 2023 Consultoria Veterinaria. </p>
    </div>
</footer>
