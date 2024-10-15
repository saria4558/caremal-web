<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Caremal>
 */
class CaremalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dokter_nama' => "dokter D",
            'dokter_JK' => "Laki laki",
            'dokter_Ttl' => "BWI, 30 Juni 1990",
            'dokter_NIK' => "34906765789",
            'telepon' => "08535434521",
            'alamat'=>"banyuwangi",
            'email' => "dokterd@gmail.com",
            'username' => "doktera12634",
            'password' => "1234567890",
        ];
    }
}
