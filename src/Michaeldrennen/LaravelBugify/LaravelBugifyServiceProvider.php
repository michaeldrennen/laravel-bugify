<?php namespace Michaeldrennen\LaravelBugify;

use Illuminate\Support\ServiceProvider;

class LaravelBugifyServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('michaeldrennen/laravel-bugify');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register(){

		$this->app['bugify_api'] = $this->app->share(function($app)
		{
			return new BugifyApi;
		});

		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('BugifyApi', 'Michaeldrennen\LaravelBugify\Facades\BugifyApi');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
