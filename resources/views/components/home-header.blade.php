@props(['informacion'])

<div class="header-container text-center text-white">
    <!-- Imagen: https://unsplash.com/photos/MYbhN8KaaEc -->
    <div class="buscador">
        <form class="form-group">
            <label for="form_input" class="h1">¡Busca un rubro aquí!</label>
            <input type="text" id="form_input" class="mt-1" placeholder="Escribe un rubro para listar sus búsquedas..">
            <button class="">Buscar</button>
        </form>

        <div class="informacion mt-4">
            <span class="mx-4">Rubros: {{ $informacion['Rubros'] }}</span>
            <span class="mx-4">Búsquedas laborales: {{ $informacion['Busquedas'] }}</span>
            <span class="mx-4">Inscripciones: {{ $informacion['Inscripciones'] }}</span>
        </div>
    </div>
</div>