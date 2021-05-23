<x-layout>
    <main class="container pb-5">
        <h1>Búsquedas laborales para <i><u>{{ $rubro }}</u></i></h1>

        <!-- Listado de búsquedas según el rubro -->
        <section class="mt-5 w-75 m-auto">

            @if (count($busquedas) > 0)
                <div class="listado">
                    @foreach ($busquedas as $busqueda)
                    <x-busqueda :busqueda="$busqueda" :rubro="$rubro" />
                    @endforeach
                </div>
            @else
                <div class="mt-5 alert alert-primary">
                    <span>¡Aún no hay búsquedas para este rubro!</span>
                </div>
            @endif
        </section>

    </main>

    <script>
        $(function(){
            $('.listado article').on('click', function(){
                $('.listado article').removeClass('abierto');
                $(this).addClass('abierto');
            });
            
            $('.btn-cerrar-busquedas').on('click', function(e){
                e.stopPropagation();
                $('.listado article').removeClass('abierto');
            });
            
        });
    </script>

</x-layout>