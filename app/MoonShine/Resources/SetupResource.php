<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Setup;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Setup>
 */
class SetupResource extends ModelResource
{
    protected string $model = Setup::class;

    protected string $title = 'Комплектующие';

    public function label(): string
    {
        return 'Комплектующие';
    }

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('Зал', 'zone', 'name'),
            Text::make('Название', 'name')->required(),
            Image::make('Изображение', 'image')->disk('public'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make('Основная информация', [
                BelongsTo::make('Зал', 'zone', 'name')->required(),
                Text::make('Название', 'name')->required(),
                Image::make('Изображение', 'image')->disk('public')->removable(),
            ]),
            Box::make('Характеристики', [
                Text::make('Процессор', 'cpu')->required(),
                Text::make('Видеокарта', 'gpu')->required(),
                Text::make('Оперативная память', 'ram')->required(),
                Text::make('Накопитель', 'storage')->required(),
                Text::make('Монитор', 'monitor')->required(),
                Text::make('Клавиатура', 'keyboard')->required(),
                Text::make('Мышь', 'mouse')->required(),
            ]),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
        ];
    }

    /**
     * @param Setup $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
