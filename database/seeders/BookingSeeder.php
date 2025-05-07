<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Place;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $places = Place::all();

        foreach ($places as $place) {
            // Генерируем 2-3 случайные брони на каждый ПК
            $bookingCount = rand(2, 3);

            for ($i = 0; $i < $bookingCount; $i++) {
                $start = Carbon::now()->addDays(rand(0, 5))->setHour(rand(10, 20))->setMinute(0);
                $durationHours = rand(1, 3);
                $end = (clone $start)->addHours($durationHours);

                Booking::create([
                    'place_id' => $place->id,
                    'customer_name' => 'Игрок ' . fake()->firstName(),
                    'customer_phone' => '+79' . rand(100000000, 999999999),
                    'start_time' => $start,
                    'end_time' => $end,
                    'total_price' => $place->price_per_hour * $durationHours,
                    'status' => 'active',
                ]);
            }
        }
    }
}
