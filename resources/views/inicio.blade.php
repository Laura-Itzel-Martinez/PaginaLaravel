
@extends('layout.plantilla')
@section('titulo' , 'Pedofilia')
@section('TituloPagina', 'Pedofilia')

@section('contenido')
<div class="container ">
  <div class="row" >
    <div class="col mt-5">
      <p><h1 class="text-center">Pedofilia</h1></p>
    </div>
  </div>  
  <div class="row mt-4">
    <div class="col">
      <img class="img-fluid" src="{{asset('img/Pedofilia.jpg')}}" alt="">
    </div>
    <div class="col">
      <h3 class="mt-3">¿Qué es Pedofilia?</h3>
        <p class="text-justify">
          La pedofilia se trata de un tipo de perversión donde sólo se encuentra perturbado el objeto de la 
          tendencia sexual. Es la presencia de fantasiosas conductas que implican actividad sexual entre un 
          adulto y un niño. El sujeto debe presentar por al menos seis meses, deseos sexuales intenso y recurrentes
          hacia menores de trece años.
        </p>
        <p class="text-justify">
          Las conductas de la pedofilia van del simple exhibicionismo hasta la penetración, el adulto suele ganarse la confianza y el cariño del niño y, por lo general, es alguien conocido o familiar .
          Se distinguen dos variantes en la pedofilia: la sentimental homoerótica y la agresiva heterosexual.
        </p>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col">
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                1. ¿EN QUÉ CONSISTE LA ENFERMEDAD?
              </button>
            </h2>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              La pedofilia es un trastorno psiquiátrico en el que el afectado tiene excitación o placer sexual a través 
              de actividades o fantasías sexuales con niños o jóvenes, con frecuencia entre 8 y 12 años. Pueden dirigirse
               a algunos del sexo contrario del pedófilo o del mismo.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                2. ¿PODRÍA HABERLA EVITADO?
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Lo mejor es que si alguien tiene esos impulsos acuda al psiquiatra. A veces son personas que han sufrido 
              abusos sexuales en la infancia, y puede iniciarse en jóvenes que buscan en internet imágenes de niños desnudos.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                3. ¿QUÉ DEBO HACER PARA MEJORARME?
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              Cuando vas al psiquiatra este puede ofrecer varios tratamientos. Por ej. psicoterapia cognitivo-conductual, 
              o que tomen medicamentos, lo que supone una castración química, que consiste en tomar hormonas que disminuyan
              la producción de testosterona y con ello los deseos sexuales. O hacerlo a través de una castración quirúrgica,
              que elimine los testículos con el mismo fin.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFour">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                4. ¿CUÁL ES EL PRONÓSTICO?
              </button>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
              General es pobre porque la persona puede recurrir. Es una enfermedad en la que el daño lo sufre el otro, y 
              que fue objeto del pedófilo, en ocasiones puede ser incluso violado.
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>
</div> 
    
@endsection
