@props(['busqueda', 'rubro'])
<?php
    $colores = ['blue', 'green', 'yellow', 'pink', 'purple', 'red', 'brown'];
    $color = 'bg-c-' . $colores[random_int(0, 6)];
?>

<article class="mt-5 busqueda-simplificado w-100" id="busqueda_{{ $busqueda->id }}">
    <div class="d-flex">
        <!-- FOTOGRAFIA EMPRESA -->
        <section class="empresa d-flex align-items-center justify-content-center">
            <div class="rounded-circle text-center {{ $color }}">
                {{ $busqueda->empresa }}
            </div>
        </section>

        <!-- DESCRIPCION BUSQUEDA -->
        <section class="descripcion bg-white w-100 p-3">
            <header>
                <h2>{{ $busqueda->titulo }}</h2>
                <div class="text-muted">・publicado hace {{ $busqueda->created_at->diffForHumans() }}</div>
            </header>

            <section class="descripcion-texto">
                <p class="my-3 text-muted">
                    {!! $busqueda->descripcion !!}
                </p>
            </section>

            <section class="accordion" id="accordionPanelsStayOpenExample">
                <!-- INSCRIBIRSE -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panel_inscribirse_{{ $busqueda->id }}">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapse_panel_inscribirse_{{ $busqueda->id }}" 
                                aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Inscribirse!
                        </button>
                    </h2>

                    <div id="collapse_panel_inscribirse_{{ $busqueda->id }}" class="accordion-collapse collapse show" aria-labelledby="panel_inscribirse_{{ $busqueda->id }}">
                        <div class="accordion-body">

                            <form action="{{url('inscribirse')}}" method="POST" class="w-75 m-auto">
                                @csrf
                                <div class="form-group p-2">
                                    <label for="nombre_{{ $busqueda->id }}">Nombre</label>
                                    <input type="text" name="nombre" id="nombre_{{ $busqueda->id }}" class="form-control" placeholder="Ingresa tu nombre.." required>
                                </div>

                                <div class="form-group p-2">
                                    <label for="apellido_{{ $busqueda->id }}">Apellido</label>
                                    <input type="text" name="apellido" id="apellido_{{ $busqueda->id }}" class="form-control" placeholder="Ingresa tu apellido.." required>
                                </div>

                                <input type="hidden" name="busquedas_id" value="{{ $busqueda->id }}">
                                <input type="hidden" name="rubro_nombre" value="{{ $rubro }}">

                                <div class="form-group p-2 clearfix">
                                    <button class="btn btn-outline-secondary float-end">Inscribirse</button>
                                    <input type="reset" value="Limpiar" class="btn btn-outline-danger float-end mx-2">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- FIN INSCRIBIRSE -->

                <!-- INSCRIPTOS -->
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="panel_inscriptos_{{ $busqueda->id }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapse_panel_inscriptos_{{ $busqueda->id }}" aria-expanded="false" 
                                aria-controls="collapse_panel_inscriptos_{{ $busqueda->id }}">
                            Ver inscriptos
                        </button>
                    </h2>

                    <div id="collapse_panel_inscriptos_{{ $busqueda->id }}" class="accordion-collapse collapse" aria-labelledby="panel_inscriptos_{{ $busqueda->id }}">
                        <div class="accordion-body">
                            <section class="inscriptos text-muted">
                                @if (count($busqueda->inscripciones) > 0)

                                    @foreach($busqueda->inscripciones as $inscripto)
                                        <p>・{{ $inscripto->created_at->diffForHumans() }} - {{ $inscripto->nombre.' '.$inscripto->apellido }}</p>
                                    @endforeach

                                @else
                                    <p class="text-center">¡Aún no hay inscriptos!</p>
                                @endif
                            </section>
                        </div>
                    </div>
                </div>
                <!-- FIN INSCRIPTOS -->

            </section>

            <button class="btn btn-primary rounded-circle m-auto btn-cerrar-busquedas border-0">x</button>
        </section>
        <!-- FIN DESCRIPCION BUSQUEDA -->
    </div>
</article>