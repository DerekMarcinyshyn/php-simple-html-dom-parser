<?php namespace Monashee\PhpSimpleHtmlDomParser;

use Illuminate\Support\ServiceProvider;

/**
 * Class PhpSimpleHtmlDomParserServiceProvider
 * @package Monashee\PhpSimpleHtmlDomParser
 */
class PhpSimpleHtmlDomParserServiceProvider extends ServiceProvider {

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
		$this->package('monashee/php-simple-html-dom-parser');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
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
