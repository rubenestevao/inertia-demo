<?php

namespace App\Providers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerLengthAwarePaginator();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    protected function registerLengthAwarePaginator()
    {
        $this->app->bind(LengthAwarePaginator::class, function ($app, $values) {
            $items = Arr::get($values, 'items');
            $total = Arr::get($values, 'total');
            $perPage = Arr::get($values, 'perPage');
            $currentPage = Arr::get($values, 'currentPage', null);
            $options = Arr::get($values, 'options', []);

            return new class($items, $total, $perPage, $currentPage, $options) extends LengthAwarePaginator {
                public function toArray()
                {
                    return array_merge(parent::toArray(), [
                       'elements' => $this->elements()
                    ]);
                }
            };
        });
    }
}
