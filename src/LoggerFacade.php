<?php

namespace Mh97m\Laravelogger;

use Illuminate\Support\Facades\Facade;

/**
 * @see \:vendor_namespace\Skeleton\SkeletonClass
 */
class Logger extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelogger';
    }
}
