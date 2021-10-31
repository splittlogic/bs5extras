<?php

namespace splittlogic\bs5extras;

use Illuminate\Support\ServiceProvider;

class bs5extrasServiceProvider extends ServiceProvider
{


	public function boot()
	{
		$this->loadViewsFrom(__DIR__.'/../resources/views', 'bs5extras');
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');

		if ($this->app->runningInConsole()) {
			$this->bootForConsole();
		}
	}


	public function register()
	{
		$this->mergeConfigFrom(__DIR__.'/../config/bs5extras.php', 'bs5extras');

		$this->app->singleton('bs5extras', function ($app) {
			return new bs5extras;
		});
	}


	public function provides()
	{
		return ['bs5extras'];
	}


	protected function bootForConsole()
	{
		// Publishing the configuration file.
		$this->publishes([
			__DIR__.'/../config/bs5extras.php' => config_path('bs5extras.php'),
		], 'bs5extras.config');

		// Publishing the views.
    $this->publishes([
        __DIR__.'/../resources/views' => base_path('resources/views/vendor/splittlogic'),
    ], 'bs5extras.views');

    // Publishing assets.
    $this->publishes([
        __DIR__.'/../resources/assets' => public_path('vendor/splittlogic'),
    ], 'public');

	}


}
