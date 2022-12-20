<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SpahamilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama'=>$this->faker->name(),
            'alamat'=>$this->faker->address(),
            'telp'=>$this->faker->phoneNumber(),
            'beratbadan'=>$this->faker->numberBetween(40,100),
            'usiakehamilan'=>$this->faker->numberBetween(4,12),
            'kehamilan_ke'=>$this->faker->numberBetween(4,12),
            'menggunakan_pen'=>$this->faker->sentence(),
            'ada_keluhan'=>$this->faker->sentence(),
            'kondisi_plasenta'=>$this->faker->sentence(),
            'kram_tubuh'=>$this->faker->numberBetween(4,12),
            'pendarahan'=>$this->faker->sentence(),
            'stretchmark'=>$this->faker->sentence(),
            'lokasi_perawatan'=>$this->faker->sentence(),
            'gerai'=>$this->faker->name(),
        ];
    }
}
