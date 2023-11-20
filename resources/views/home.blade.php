@extends('layouts.landing')


@section('title','home')
    

@section('content',)
    @component('_components.heros')
    @slot('title1','EL MEJOR')
    @slot('title2','CONSULTORIO ')
    @slot('title3','VETERINARIO')
    @slot('parrafoheros1','"Dedicados al bienestar de tus amigos peludos."
    ')
    @slot('img','images\undraw_welcome_cats_thqn.svg')
    @endcomponent

    @component('_components.card-list')
    @endcomponent
    
    @component('_components.calltoaction')
    @endcomponent

   

    @component('_components.certifacte')
    @endcomponent

    @component('_components.testimony')
    @endcomponent


@endsection

