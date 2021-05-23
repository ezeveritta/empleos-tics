@props(['rubro'])
<?php
    $colores = ['blue', 'green', 'yellow', 'pink', 'purple', 'red', 'brown'];
    $color = 'bg-c-' . $colores[random_int(0, 6)];
?>

<a class="col-md-4 col-xl-3" href="/busquedas/{{ $rubro->descripcion }}">
    <div class="card {{$color}} order-card">
        <div class="card-block">
            <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>{{ $rubro->descripcion }}</span></h2>
            <p class="m-b-0">Cantidad de búsquedas<span class="f-right">{{ count($rubro->busquedas) }}</span></p>
        </div>
    </div>
</a>