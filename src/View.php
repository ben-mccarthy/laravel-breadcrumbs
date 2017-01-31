<?php namespace IsmUk\Breadcrumbs;

use Illuminate\Contracts\View\Factory as ViewFactory;

class View {

	protected $factory;

	public function __construct(ViewFactory $factory)
	{
		$this->factory = $factory;
	}

	public function render($view, $breadcrumbs)
	{
		if (!$view)
			throw new Exception('Breadcrumbs view not specified (check the view in config/breadcrumbs.php, and ensure IsmUk\Breadcrumbs\ServiceProvider is loaded before any dependants in config/app.php)');

		return $this->factory->make($view, compact('breadcrumbs'))->render();
	}

}
