<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PascamelahirkanFactory extends Factory
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
           'no_hp'=>$this->faker->phoneNumber(),
           'alamat'=>$this->faker->address(),
           'rencana_lahiran'=>$this->faker->name(),
           'hpl'=>$this->faker->dateTime(),
           'berat_badan'=>$this->faker->numberBetween(40,100),
           'anak_ke'=>$this->faker->numberBetween('1,8'),
           'proses_lahiran'=>$this->faker->randomElement('Normal','Sesar','tabung'),
           'rencana_asi'=>$this->faker->randomElement('Ya','Tidak'),
           'implan'=>$this->faker->randomElement('Ya','Tidak'),
           'perawatan'=>$this->faker->randomElement('Slimming','Pasca','Tanya Dulu'),
           'slimming'=>$this->faker->randomElement('Ya','Tidak'),
           'riwayat_penyakit'=>$this->faker->name(),
           'status'=>$this->faker->randomElement('Baru','Proses','Selesai'),
        ];
    }
}
