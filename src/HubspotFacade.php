<?php

namespace ComputanPackages\Hubspot;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ComputanPackages\Hubspot\Skeleton\SkeletonClass
 */
class HubspotFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ComputanPackages\Hubspot\Hubspot';
    }
}
