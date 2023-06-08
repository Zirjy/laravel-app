<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   
    protected $model = Siswa::class;

    public function definition()
    {
        $kelas = ['10 RPL', '10 TKJ', '10 DMM', '10 A', '10 B', '10 C'];
        $randomKelas = $this->faker->randomElement($kelas);

        $keterangan = ['Sakit', 'Izin', 'Alpha'];
        $randomKeterangan = $this->faker->randomElement($keterangan);
    
        return [
            'nama_siswa' => $this->faker->name(),
            'kelas' => $randomKelas,
            'keterangan' => $randomKeterangan,
        ];
    }
    }

