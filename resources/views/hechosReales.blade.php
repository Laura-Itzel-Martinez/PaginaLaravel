@extends('layout.plantilla')
@section('titulo' , 'Historias')
@section('TituloPagina', 'Historias Reales de niños')

@section('contenido')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <p class="text-center"><h1 class="display-4">Historias Reales de niños</h1></p>
        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('img/amelia.png')}}" alt="">
            </a>
            </div>
            <div class="col-md-5">
            <h3>Amalia no quiere jugar con el tío</h3>
            <p>
                Amalia tiene hoy dieciseis años. En sus ojos negros y su piel morena se
                esconden la tristeza y los recuerdos de una niñez llena de momentos
                de violencia sexual. Cuando tenía ocho años, su tío Gustavo,
                hermano de su madre perdió su trabajo y no tenía dónde ir a vivir.
                Por eso la mamá de Amalia ofreció a Gustavo un cuarto en su casa
                para él y su familia.
                Cada vez que su madre salía para realizar trámites o compras, su
                tío materno aprovechaba para “jugar” con Amalia, como él lo
                llamaba. Pero todo lo que iniciaba como un juego terminaba en
                una secuencia de abusos y violaciones sexuales.
            </p>
            </div>
        </div>
        
    
        <hr>
    
        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('img/roberto.png')}}" alt="">
            </a>
            </div>
            <div class="col-md-5">
            <h3>Roberto, una amistad que nunca existió</h3>
            <p>
                Con quince años, Marlene abandonó la escuela para ayudar a su mamá
                que estaba enferma, a los pocos meses se quedó huérfana. Desde niña
                ella nunca supo quién era su padre biológico, vivía junto a su madre y su
                padrastro. Después de la muerte de su mamá, su abuelita la mandó a La
                Paz con su tía Paulina que vive en El Alto.
                Marlene se quedó viviendo con su tía, su esposo y sus hijos, pero al poco
                tiempo de su llegada de los Yungas, su tía le consiguió un empleo con
                una familia en un edifcio al sur de La Paz. 
            </p>
            </div>
        </div>
       
    
        <hr>
    
        
        <div class="row">
            <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('img/mama.png')}}" alt="">
            </a>
            </div>
            <div class="col-md-5">
            <h3>Se metían en mi cama </h3>
            <p>
                Paulina experimentó desde sus seis años lo que es la violencia sexual,
                aunque no sabía que así se llamaba. Vivió repleta de sobresaltos y
                desconciertos. Hoy, con once años, la niña es capaz de describir los
                momentos de violencia sexual vividos en el seno de su propia familia
                con una frialdad y claridad sorprendente. 
            </p>
            </div>
        </div>
       
    
        <hr>
    
        <!-- Project Four -->
        <div class="row">
    
            <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('img/mama2.png')}}" alt="">
            </a>
            </div>
            <div class="col-md-5">
            <h3>A veces siento que mi mamá lo sabía </h3>
            <p>
                Después del fallecimiento de su padre, la madre de Karina formó una
                nueva pareja. Se casaron y de esa relación nacieron dos hermanos
                varones. Según los relatos de Karina, su padrastro Alberto le decía
                siempre que aspiraba a ser su nuevo papá.
                Alberto apareció un día en la casa con una nueva televisión para
                la familia, enorme y de pantalla plana. Fue justamente a partir de
                ese regalo el inicio del calvario que Karina llevará siempre en sus
                recuerdos. 
            </p>
            
            </div>
        </div>

    </div>
  </div>
</div>
@endsection

