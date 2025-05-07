<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            [
                'title' => 'Аренда игровой консоли',
                'description' => 'Вы можете арендовать игровую консоль с доступом к топовым играм.',
            ],
            [
                'title' => 'Продажа аксессуаров',
                'description' => 'Наушники, мышки, клавиатуры и другие геймерские аксессуары в продаже.',
            ],
            [
                'title' => 'Почасовая аренда зала',
                'description' => 'Аренда зала для проведения турниров или корпоративных мероприятий.',
            ],
        ]);
    }
}
