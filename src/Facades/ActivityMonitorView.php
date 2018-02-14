<?php

namespace Uatthaphon\ActivityMonitor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the authorizer facade class.
 */
class ActivityMonitorView extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'ActivityMonitorView';
    }
}
