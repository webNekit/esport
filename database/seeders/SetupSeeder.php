<?php

namespace Database\Seeders;

use App\Models\Setup;
use App\Models\Zone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zones = Zone::all();

        foreach ($zones as $zone) {
            Setup::create([
                'zone_id' => $zone->id,
                'name' => 'Игровое место 2',
                'image' => null,
                'cpu' => 'Intel Core i7-13700K',
                'gpu' => 'NVIDIA RTX 4080',
                'ram' => '32GB DDR5',
                'storage' => '1TB NVMe SSD',
                'monitor' => '27" 240Hz ASUS ROG',
                'keyboard' => 'SteelSeries Apex Pro',
                'mouse' => 'Logitech G Pro X Superlight',
            ]);

            Setup::create([
                'zone_id' => $zone->id,
                'name' => 'Игровое место 1',
                'image' => null,
                'cpu' => 'AMD Ryzen 7 7800X3D',
                'gpu' => 'AMD Radeon RX 7900 XTX',
                'ram' => '32GB DDR5',
                'storage' => '2TB NVMe SSD',
                'monitor' => '32" 165Hz LG UltraGear',
                'keyboard' => 'Razer Huntsman V2',
                'mouse' => 'Razer Viper V2 Pro',
            ]);
        }
    }
}
