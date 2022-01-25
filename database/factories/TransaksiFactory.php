<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tanggal'   => $this->faker->dateTimeBetween('-2 Years'),
            'menu_id'   => rand(1,10),
            'jumlah'    => rand(1,5),
        ];
    }
}
