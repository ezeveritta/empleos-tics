<?php

namespace Database\Factories;

use App\Models\Busquedas;
use App\Models\Rubros;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusquedasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Busquedas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rubros_id' => Rubros::factory(),
            'empresa' => $this->faker->company,
            'titulo' => $this->faker->jobTitle,
            'descripcion' => $this->faker->paragraph(7) . '<br><br>' . $this->faker->paragraph(3) . '<br><br><br>' . $this->faker->paragraph()
        ];
    }
}
