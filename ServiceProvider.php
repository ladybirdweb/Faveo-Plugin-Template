<?php

namespace App\Plugins\TestPluginTemplate;

use App\Plugins\SyncPluginToLatestVersion;

class ServiceProvider extends \App\Plugins\ServiceProvider
{
    public function boot()
    {
        (new SyncPluginToLatestVersion())->sync('TestPluginTemplate');

        $trans = app_path('Plugins' . DIRECTORY_SEPARATOR . 'TestPluginTemplate' . DIRECTORY_SEPARATOR . 'lang');
        $this->loadTranslationsFrom($trans, 'TestPluginTemplate');

        $view_path = app_path('Plugins' . DIRECTORY_SEPARATOR . 'TestPluginTemplate' . DIRECTORY_SEPARATOR . 'views');
        $this->loadViewsFrom($view_path, 'TestPluginTemplate');

        if (class_exists('Breadcrumbs')) {
            require __DIR__ . DIRECTORY_SEPARATOR . 'breadcrumbs.php';
        }

        parent::boot('TestPluginTemplate');
    }

    public function register()
    {
        parent::register('TestPluginTemplate');
    }
}