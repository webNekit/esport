<?php

namespace Database\Seeders;

use App\Models\Place;
use App\Models\PlaceSpec;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $place = Place::create([
                'name' => 'Место #' . $i,
                'description' => 'Игровое место с мощным ПК и аксессуарами',
                'price_per_hour' => rand(150, 300),
                'is_active' => true,
            ]);

            // Добавим характеристики
            $specs = [
                'Процессор' => 'Intel Core i7-' . rand(8700, 12700),
                'Видеокарта' => 'NVIDIA RTX ' . (rand(3060, 4090)),
                'ОЗУ' => rand(16, 64) . ' GB',
                'Монитор' => rand(24, 32) . '" Full HD 144Hz+',
                'Геймпад' => (rand(0, 1) ? 'Да' : 'Нет'),
            ];

            foreach ($specs as $key => $value) {
                PlaceSpec::create([
                    'place_id' => $place->id,
                    'key' => $key,
                    'value' => $value,
                ]);
            }
        }
    }
}
