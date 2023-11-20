@extends('layouts.landing')


@section('title','services')
    

@section('content',)
    @component('_components.heros')
    @slot('title1','NUESTROS')
    @slot('title2','SERVICIOS')
    @slot('title3','VETERINARIOS')
    @slot('parrafoheros1','los mejores servicios para las mejores mascotas')
    @slot('img','images\undraw_good_doggy_re_eet7.svg')
     @endcomponent

     @component('_components.conten-normal')
     @slot('titlecontent','')
     @slot('titlecontent2','')
     @slot('titlecontent3','Nuestra consultoría veterinaria se distingue por su enfoque profesional y el compromiso con la excelencia en cada aspecto de nuestro trabajo, garantizando la salud y el bienestar de los animales a los que servimos.')
     @slot('parrafocontent','')
     @endcomponent

     @component('_components.grid-list-img')
     @slot('title1','Nuestros')
     @slot('title2','Servicios')
     @slot('name1','Urgencia')
     @slot('paragraph1',' Este servicio se enfoca en atender situaciones médicas críticas y emergencias, como accidentes, ataques cardíacos o lesiones graves. Los pacientes son atendidos de manera inmediata para estabilizar su condición y proporcionar el tratamiento necesario.')
     @slot('name2','Medicina General')
     @slot('paragraph2','La medicina general se encarga de brindar atención médica primaria y de rutina. Los médicos generales diagnostican y tratan una amplia variedad de problemas de salud, ofrecen consejos de prevención y remiten a especialistas si es necesario.')
     @slot('name3','Control')
     @slot('paragraph3','Este servicio implica un seguimiento médico periódico para evaluar la evolución de una condición de salud o para mantener el bienestar. Puede incluir chequeos médicos regulares, pruebas de laboratorio y ajustes en el tratamiento, si es necesario.')
     @slot('name4','Limpieza')
     @slot('paragraph4','implica el aseo y cuidado de mascotas, incluyendo baños, cepillado, limpieza de orejas, uñas y otros cuidados necesarios para mantener a los animales en un estado de higiene óptimo.')
     @endcomponent

     @component('_components.conten-normal')
     @slot('titlecontent','')
     @slot('titlecontent2','')
     @slot('titlecontent3','la excelencia es nuestra norma. Nuestro equipo de veterinarios altamente capacitados y experimentados se esfuerza por proporcionar un nivel de servicio profesional inigualable en la industria.')
     @slot('parrafocontent','')
     @endcomponent

     @component('_components.card-k')
     @slot('title','Servicios especiales ')
     @slot('coment','')
     @slot('name','Cirugía: ')
     @slot('paragraph','Este servicio implica procedimientos médicos invasivos para tratar condiciones de salud. Los cirujanos realizan operaciones que van desde extracciones de apéndice hasta cirugía cardíaca, con el objetivo de corregir o aliviar problemas de salud específicos.

     ')
     @slot('name1','Terapia:')
    @slot('paragraph1','La terapia se refiere a una variedad de enfoques para el tratamiento de problemas de salud mental, emocional o física. Esto puede incluir terapia física para lesiones, terapia ocupacional para mejorar la funcionalidad, terapia de conversación para problemas emocionales, entre otros.')
     
     @endcomponent

     @component('_components.conten-normal')
     @slot('titlecontent','')
     @slot('titlecontent2','')
     @slot('titlecontent3','La excelencia y el profesionalismo son el corazón de nuestra consultoría veterinaria. Cada día, trabajamos incansablemente para mantener los más altos estándares en el cuidado y asesoramiento animal, brindando a nuestros clientes la tranquilidad de que sus mascotas están en las mejores manos.')
     @slot('parrafocontent','')
     @endcomponent

     @component('_components.team')
   
     @endcomponent
@endsection