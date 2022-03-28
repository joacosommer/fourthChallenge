<?php

namespace Database\Factories;

use App\Models\Aerolinea;
use App\Models\Ciudad;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vuelo>
 */
class VueloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
//        $ciudades = Ciudad::all();
//        $origen = $ciudades->random()->id;
//        $destino = $ciudades->except($origen)->random()->id;
        return [
            'origen_id'=>Ciudad::factory()->create(),
            'destino_id'=>Ciudad::factory()->create(),
            'aerolinea_id'=>Aerolinea::factory()->create(),
            'horaDespegue'=>$this->faker->time,
            'horaLlegada'=>$this->faker->time
        ];
    }
}
