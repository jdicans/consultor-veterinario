@extends('layouts.landing')


@section('title','contact')
    

@section('content',)
<style>
    section {
        background-color: #03316E !important;
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<section class="bg-white dark:bg-blak-900">
    <div class="container px-6 py-12 mx-auto">
        <div class="text-center">
            <p class="font-medium text-black-500 dark:text-blue-400">Contactanos.</p>

            <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">Tú mascota en las mejores manos.</h1>

            <p class="mt-3 text-gray-500 dark:text-gray-400">Agenda tu cita.</p>
        </div>

        <img class="object-cover w-full h-64 mt-10 rounded-lg lg:h-96" src="images\lissete-laverde-0YciUvyZfME-unsplash.jpg" alt="">

        <section class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-12 mx-auto">
                <div>
                    <p class="font-medium text-blue-500 dark:text-blue-400">Contactanos.</p>

                    <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">Agenda tu cita.</h1>

                    <p class="mt-3 text-gray-500 dark:text-gray-400">Tú mascota en las mejores manos.</p>
                </div>

                <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-3">
                    <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-1">
                        <div>
                            <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </span>

                            <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Correo electronico.</h2>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Nuestro equipo esta aqui para ayudarte.</p>
                            <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">consultoriaveterinaria@veterinaria.com</p>
                        </div>

                        <div>
                            <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </span>

                            <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Nuestra oficina.</h2>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Venga asaludarnos a nuestra oficina.</p>
                            <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">Medellin/Antioquia</p>
                        </div>

                        <div>
                            <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.970 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                            </span>

                            <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Phone</h2>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Atendemos de 7:00 AM a 7:00 PM</p>
                            <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">(+51)312-456-7890</p>
                        </div>
                    </div>

                    <div class="overflow-hidden rounded-lg lg:col-span-2 h-96 lg:h-auto">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126916.69980807435!2d-75.6636136595124!3d6.2443676958856535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4428dfb80fad05%3A0x42137cfcc7b53b56!2sMedell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1697486036121!5m2!1ses!2sco" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

@endsection