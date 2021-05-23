<x-layout>
    <!-- Buscador -->
    <x-home-header :informacion="$informacion" />

    <!-- Listado de Rubros -->
    <main class="container mt-2">
        <section class="mt-4 row">

            <h2 class="mb-3">Listado de rubros</h2>

            @foreach ($rubros as $rubro)
                <x-rubro-simplificado :rubro="$rubro" />
            @endforeach

        </section>
    </main>

</x-layout>