<?php declare(strict_types=1);

namespace Rchitector\VisualEditor\App\Providers;

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

        // Views
        $this->loadViewsFrom($SRC_PATH.'resources/views', 'visual-editor');

        //Routes
        $this->loadRoutesFrom($SRC_PATH.'routes/visual-editor.php');

        // Middlwares
        $this->app['router']->aliasMiddleware('visual-editor', VisualEditorMiddleware::class);
        $this->app['router']->aliasMiddleware('visual-editor-admin', VisualEditorAdminMiddleware::class);

        // Migrations
        $this->loadMigrationsFrom($SRC_PATH.'database/migrations');

        // Seeds
        $this->publishes([$SRC_PATH.'database/seeds' => database_path('seeds')], 'seeds');
    }
}
