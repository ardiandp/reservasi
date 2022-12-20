<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\gerai>
 */
class geraiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode_gerai'=>$this->faker->numberBetween(1111,2222),
            'nama_gerai'=>$this->faker->name(),
            'alamat'=>$this->faker->streetAddress(),
            'whatsapp'=>$this->faker->phoneNumber(),
            'telp'=>$this->faker->phoneNumber(),
            'gambar'=>$this->faker->name(),
        ];
    }
}
