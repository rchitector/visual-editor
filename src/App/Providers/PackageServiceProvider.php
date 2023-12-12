<?php declare(strict_types=1);

namespace Rchitector\VisualEditor\App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Rchitector\VisualEditor\App\Http\Middleware\VisualEditorAdminMiddleware;
use Rchitector\VisualEditor\App\Http\Middleware\VisualEditorMiddleware;

class PackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Регистрация зависимостей и сервисов
    }

    public function boot()
    {
        $SRC_PATH = __DIR__.'/../../';

        Blade::anonymousComponentPath($SRC_PATH.'components', 'visual-editor');

        // Views
        $this->loadViewsFrom($SRC_PATH.'resources/views', 'visual-editor');

        //Routes
        $this->loadRoutesFrom($SRC_PATH.'routes/visual-editor.php');

        // Middlwares
        $this->app['router']->aliasMiddleware('visual-editor', VisualEditorMiddleware::class);
        $this->app['router']->aliasMiddleware('visual-editor-admin', VisualEditorAdminMiddleware::class);

        // Migrations
        $this->loadMigrationsFrom($SRC_PATH.'database/migrations');

        $this->publishes([
//            $SRC_PATH.'database/seeds' => database_path('seeds'),
            $SRC_PATH.'config/visual-editor.php' => config_path('visual-editor.php'),
            // $SRC_PATH.'public/css/tailwind.min.css' => public_path('css/visual-editor/tailwind.min.css'),
        ], 'laravel-assets');
    }
}
