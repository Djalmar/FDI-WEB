@extends('app')
@section('content')
    <div class="">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active red">
                    <img class="slide-image third-slide" src="/img/img4.png">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Nuevo Fondo de Desarrollo Indigena</h1>

                            <p>
                                El Fondo de Desarrollo Indígena – FDI, creado mediante Decreto Supremo N° 2493; tiene la
                                finalidad de gestionar, financiar, ejecutar de manera directa y fiscalizar programas y
                                proyectos para el desarrollo productivo de los Pueblos Indígena Originario Campesinos,
                                Comunidades Campesinas, Interculturales y Afrobolivianas
                            </p>

                        </div>
                    </div>
                </div>
                <div class="item yellow">
                    <img class="slide-image  third-slide" src="/img/img1.png">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Plan Sectorial de Desarrollo Agropecuario 2014-2018 “HACIA EL 2025”</h1>

                            <p style="color: darkslategray">
                                La visión de desarrollo del sector, se orienta en función de los lineamientos a largo
                                plazo de la Agenda Patriótica al 2025, la misma que señala: “El Estado Boliviano dispone
                                de productos agropecuarios, alimentos diversos y de calidad para la población boliviana,
                                la cual cuenta con seguridad alimentaria bajo un marco de soberanía nacional¨.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item green">
                    <img class="slide-image  third-slide" src="/img/img2.png">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Politicas del Plan Sectorial de Desarrollo Agropecuario</h1>

                            <p>
                                El FDI como Institución Descentralizada bajo tuición del Ministerio de Desarrollo Rural
                                y Tierras, enmarcará su planificación en las diferentes políticas definidas en el Plan
                                de Desarrollo Sectorial, con énfasis más específico con la política ¨Producción
                                Agropecuaria, Pesquera, Forestal para la Seguridad Alimentaria con Soberanía¨ y la
                                política ¨Gestión Territorial Indígena Originario Campesina¨.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- /.carousel --></div>

@endsection