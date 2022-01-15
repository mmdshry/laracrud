<?php

namespace Mmdshry\Laracrud;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mmdshry\Laracrud\Skeleton\SkeletonClass
 */
class LaracrudFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laracrud';
    }
}
