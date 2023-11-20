@extends('layouts.landing')


@section('title','about')
    

@section('content',)
    @component('_components.heros')
    @slot('title1','SOBRE ')
    @slot('title2','NOSOTROS')
    @slot('title3','')
    @slot('parrafoheros1','Un podezo de nuestra historia por el cuidado de los animales')
    @slot('img','images\undraw_playing_fetch_cm19.svg')
    
    
    @endcomponent

    @component('_components.conten-normal')
    @slot('titlecontent',' ')
    @slot('titlecontent2','')
    @slot('titlecontent3','"Desde una pequeña oficina hasta ser líder en asesoramiento veterinario."')
    @slot('parrafocontent','Hace una década, el veterinario Carlos, de Valle Verde, decidió abrir "Valle pet Consultores" para ofrecer asesoramiento en salud y cuidado animal. Inicialmente, atendía consultas individuales, pero pronto expandió su negocio, contratando a otros veterinarios. Ofrecían servicios en línea y presenciales, ayudando a dueños de mascotas y ganado. Con el tiempo, se convirtieron en una fuente valiosa de conocimiento en su comunidad y más allá')
    
    @endcomponent


    @component('_components.content-img')
    @slot('titlecontent','VISION')
    @slot('titlecontent2','')
    @slot('parrafocontent','Nos esforzamos por ser líderes en la industria de la consultoría veterinaria, forjando un futuro donde los animales sean tratados con el más alto nivel de atención y respeto en todo el mundo. Visualizamos un mundo en el que cada mascota y animal de granja reciba la atención y el cuidado necesarios para llevar una vida plena y saludable.

    Deseamos ser conocidos no solo por la excelencia en la asistencia veterinaria que proporcionamos, sino también por nuestra influencia positiva en la comunidad y en la sociedad en general. Queremos inspirar a las personas a adoptar prácticas de cuidado responsable para sus mascotas y animales de granja, y ser un faro de conocimiento, compasión y apoyo en el campo de la salud animal.')
    @slot('img','images\karlo-tottoc-ybZ5hRxaWS4-unsplash.jpg')
    @endcomponent


    @component('_components.content-center')
    @slot('titlecontent','MISION')
    @slot('titlecontent2','')
    @slot('titlecontent3','')
    @slot('parrafocontent','Nuestra misión es proporcionar asesoramiento veterinario de alta calidad y soluciones personalizadas para dueños de mascotas y ganado. A través de la experiencia de nuestro equipo de veterinarios apasionados, promovemos la salud y el bienestar de los animales, educando a la comunidad y brindando un apoyo constante a nuestros clientes.')
    @slot('img1','images\karlo-tottoc-y_EbiAIQrp4-unsplash.jpg')
    @slot('img2','images\werzk-luuuuuuu-tDlo2ZPlQlU-unsplash.jpg')
    @slot('img3','images\pexels-tima-miroshnichenko-6235233.jpg')
    
    @endcomponent
   
    @component('_components.cuadro-heros')
    @slot('titlecontent','VALORES')
    @slot('coment','"En nuestra consultoría veterinaria, nos guiamos por valores fundamentales, que incluyen el bienestar animal, el compromiso con nuestros clientes, la ética profesional, la educación, la innovación, el trabajo en equipo, la sostenibilidad y la responsabilidad social."')

    @slot('title1','Bienestar Animal:')
    @slot('paragraph1',' Promovemos el bienestar y la salud de los animales como nuestra máxima prioridad.')

    @slot('title2','Compromiso')
    @slot('paragraph2','Estamos dedicados a brindar un servicio excepcional a nuestros clientes y a la comunidad.')

    @slot('title3','Ética Profesional:')
    @slot('paragraph3','Cumplimos con los más altos estándares éticos y profesionales en todo momento.')

    @slot('title4','Educación:')
    @slot('paragraph4','Valoramos la educación y nos esforzamos por empoderar a los propietarios de mascotas con conocimientos para cuidar a sus animales.')

    @slot('title5','Innovación:')
    @slot('paragraph5','Buscamos continuamente nuevas soluciones y enfoques para mejorar la calidad de vida de los animales.')

    @slot('title6','Trabajo en Equipo:')
    @slot('paragraph6',' Fomentamos un ambiente colaborativo y de apoyo entre nuestro equipo y con nuestros clientes.')
    @endcomponent
    
@endsection