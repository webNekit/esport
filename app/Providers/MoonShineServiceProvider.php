<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\ServiceResource;
use App\MoonShine\Resources\SetupResource;
use App\MoonShine\Resources\ZoneResource;
use App\MoonShine\Resources\PlaceResource;
use App\MoonShine\Resources\PlaceSpecResource;
use App\MoonShine\Resources\BookingResource;
use App\MoonShine\Resources\GalleryResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        // $config->authEnable();

        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                ServiceResource::class,
                SetupResource::class,
                ZoneResource::class,
                PlaceResource::class,
                PlaceSpecResource::class,
                BookingResource::class,
                GalleryResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ])
        ;
    }
}
