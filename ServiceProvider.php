<?php 

// namespace App\Plugins\YourPluginName;

use App\Plugins\ServiceProvider as CoreServiceProvider;

class ServiceProvider extends CoreServiceProvider 
{
 
 	/**
 	 * registers the plugin
 	 * @return void
 	 */
    public function register()
    {
        // parent::register('yourPluginName');
    }
 

    public function boot()
    {
        // parent::boot('yourPluginName');
    }

    //add more methods if required
}
