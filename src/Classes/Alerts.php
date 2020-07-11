<?php

namespace Eelcol\LaravelBootstrapAlerts\Classes;

use Illuminate\Support\Facades\Session;

class Alerts {

	/* @var array [string]: [string] */
	protected $alerts = [];

	/**
	* Success messages
	*/
	protected $success = [];

	/**
	* Get array from flash data
	*/
	public function __construct()
	{
		$this->alerts   = request()->session()->pull('bootstrap_alerts', []);
	}

	/**
	* @method addError
	* @param $text string
	*/
	public function addError(string $text)
	{
		$this->addAlert($text, 'danger');
	}

	/**
	* @method addSuccess
	* @param $text string
	*/
	public function addSuccess(string $text)
	{
		$this->addAlert($text, 'success');
	}

	/**
	* @method addInfo
	* @param $text string
	*/
	public function addInfo(string $text)
	{
		$this->addAlert($text, 'info');
	}

	/**
	* @method view
	* This methods returns the rendered HTML
	*/
	public function view()
	{
		return view("laravel-bootstrap-alerts::index", [
			'alerts' => $this->alerts 
		]);
	}

	/**
	* @method displaySuccess
	* @param text string
	* Directly returns HTML for a success message
	*/
	public function displaySuccess(string $text)
	{
		return view("laravel-bootstrap-alerts::alert", ['type' => 'success', 'text' => $text]);
	}

	/**
	* @method displayError
	* @param text string
	* Directly returns HTML for an error message
	*/
	public function displayError(string $text)
	{
		return view("laravel-bootstrap-alerts::alert", ['type' => 'danger', 'text' => $text]);
	}

	/**
	* @method displayInfo
	* @param text string
	* Directly returns HTML for an info message
	*/
	public function displayInfo(string $text)
	{
		return view("laravel-bootstrap-alerts::alert", ['type' => 'info', 'text' => $text]);
	}

	private function addAlert(string $text, string $type)
	{
		$this->alerts[$type] = $this->alerts[$type] ?? [];

		$this->alerts[$type][] = $text;

		$this->updateSession();
	}

	private function updateSession()
	{
		Session::flash('bootstrap_alerts', $this->alerts);
	}

}