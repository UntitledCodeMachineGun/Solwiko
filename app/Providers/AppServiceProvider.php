<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;
use App\Http\Repositories\ElasticsearchRepo;
use App\Http\Repositories\ElasticsearchRepository;
use App\Http\Repositories\IProductsRepository;
use App\Http\Repositories\EloquentRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {




        $this->app->bind(
            IProductsRepository::class,
            function ($app) {
                if (! config('services.search.enabled')) {
                    return new EloquentRepository();
                }
                return new ElasticsearchRepository (
                    $app->make(Client::class)
                );
            }
        );

        $this->bindSearchClient();
    }

    private function bindSearchClient()
    {
        $this->app->bind(
            Client::class,
            function($app)
            {
                return ClientBuilder::create()
                    ->setHosts($app['config']->get('services.search.hosts'))
                    ->build();
            }
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        Blade::directive('routeactive', function ($route) {
            return "<?php echo Route::currentRouteNamed($route) ? 'active' : '' ?>";
        });

        Blade::if('admin', function() {
            return Auth::check() && Auth::user()->isAdmin();
        });
    }
}
