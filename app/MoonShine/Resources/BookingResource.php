<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\DateRange;
use MoonShine\UI\Fields\Enum;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Booking>
 */
class BookingResource extends ModelResource
{
    protected string $model = Booking::class;

    protected string $title = 'Бронирование';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('Место', 'place', 'name'),
            Text::make('Имя', 'customer_name'),
            Text::make('Телефон', 'customer_phone'),
            Date::make('Начало', 'start_time')->withTime()->format('H:i'),
            Date::make('Конец', 'end_time')->withTime()->format('H:i'),
            Number::make('Сумма', 'total_price'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                BelongsTo::make('Место', 'place', 'name'),
                Text::make('Имя', 'customer_name'),
                Text::make('Телефон', 'customer_phone'),
                DateRange::make('Время бронирования')
                    ->fromTo('start_time', 'end_time')
                    ->withTime()
                    ->format('H:i'),
                Number::make('Сумма', 'total_price'),
                Enum::make('Статус', 'status')->options([
                    'active' => 'Активен',
                    'cancelled' => 'Отменен',
                    'completed' => 'Завершен',
                ]),
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            BelongsTo::make('Место', 'place', 'name'),
            Text::make('Имя', 'customer_name'),
            Text::make('Телефон', 'customer_phone'),
            Text::make('Начало', 'start_time'),
            Text::make('Конец', 'end_time'),
            Number::make('Сумма', 'total_price'),
        ];
    }

    /**
     * @param Booking $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
