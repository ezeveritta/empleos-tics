<?php

namespace Database\Factories;

use App\Models\Rubros;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class RubrosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rubros::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->unique()->randomElement([
                'Programador', 'Enseñanza', 'Medicina', 
                'Transporte', 'Vivienda', 'Ocio y cultura', 
                'Menaje', 'Textil', 'Administrativo', 'Vendedora', 
                'Chofer', 'Atención al cliente', 'Camarera',
                'Recepcionista', 'Cajera', 'Secretaria'
                ])
        ];
    }
}
