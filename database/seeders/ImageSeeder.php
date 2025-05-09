<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 50000; $i++) {
            Image::create([
                'path' => 'images/sample_' . $i . '.jpg',
                'locality_id' => ($i <= 5423) ? $i : (($i - 1) % 5423 + 1),
                'date' => Carbon::now()->subDays(rand(0, 36500)),  // Fecha aleatoria del último año
                'name' => 'Imagen ' . Str::random(10),
            ]);
        }
    }
}
