<?php 

use Eelcol\LaravelBootstrapAlerts\Facade\BootstrapAlerts;

if (!function_exists('success')) {
	function success(string $text)
	{
		BootstrapAlerts::addSuccess($text);
	}
}

if (!function_exists('error')) {
	function error(string $text)
	{
		BootstrapAlerts::addError($text);
	}
}

if (!function_exists('info')) {
	function alert(string $text)
	{
		BootstrapAlerts::addInfo($text);
	}
}

if (!function_exists('display_messages')) {
	/**
	* The display_messages method is still included
	* For legacy purposes
	*/
	function display_messages()
	{
		return BootstrapAlerts::view();
	}
}

if (!function_exists('display_bootstrap_alerts')) {
	function display_bootstrap_alerts()
	{
		return BootstrapAlerts::view();
	}
}

if (!function_exists('display_success')) {
	function display_success($text)
	{
		return BootstrapAlerts::displaySuccess($text);
	}
}

if (!function_exists('display_error')) {
	function display_error($text)
	{
		return BootstrapAlerts::displayError($text);
	}
}

if (!function_exists('display_info')) {
	function display_info(string $text)
	{
		return BootstrapAlerts::displayInfo($text);
	}
}