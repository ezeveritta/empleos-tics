<?php

namespace Database\Seeders;

use App\Models\Busquedas;
use App\Models\Inscripciones;
use App\Models\Rubros;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Defino cantidades a crear
        $cantidad_rubros = random_int(1, 12);

        Rubros::factory($cantidad_rubros)->create();

        $busquedas_totales = 0;
        
        // para cada id de Rubros, agrego una cantidad random de búsquedas y guardo en un arreglo
        for ($i = 1; $i <= $cantidad_rubros; $i++)
        {
            $cantidad_temporal = random_int(0, 12);
            Busquedas::factory($cantidad_temporal)->create(['rubros_id' => $i]);
            $busquedas_totales += $cantidad_temporal;
        }
        
        // para cada id Búsquedas, agrego una cantidad random de inscripciones
        for ($i = 1; $i <= $busquedas_totales; $i++)
        {
            Inscripciones::factory(random_int(0, 6))->create([ 'busquedas_id' => $i]);
        }
    }
}
