<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slimming>
 */
class SlimmingFactory extends Factory
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
        'no_hp'=>$this->faker->numberBetween(11111111,55555555),
        'alamat'=>$this->faker->address(),
        'berat_badan'=>$this->faker->numberBetween(40,100),
        'lokasi_perawatan'=>$this->faker->sentence(),
        'gerai'=>$this->faker->sentence(),
        'riwayat_penyakit'=>$this->faker->sentence(),
        'keterangan_lain' =>$this->faker->sentence(),   
        ];
    }
}
