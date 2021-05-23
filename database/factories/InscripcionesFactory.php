<?php

namespace Database\Factories;

use App\Models\Busquedas;
use App\Models\Inscripciones;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class InscripcionesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inscripciones::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create('es_ES');
        return [
            'busquedas_id' => Busquedas::factory(),
            'nombre' => $faker->firstName(),
            'apellido' => $faker->lastName
        ];
    }
}
