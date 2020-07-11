<?php 

namespace Eelcol\LaravelBootstrapAlerts\Facade;

use Illuminate\Support\Facades\Facade;

class BootstrapAlerts extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'BootstrapAlerts'; }
}