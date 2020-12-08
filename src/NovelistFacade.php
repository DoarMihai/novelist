<?php

namespace InvataProgramare\Novelist;

use Illuminate\Support\Facades\Facade;

/**
 * @see \InvataProgramare\Novelist\Skeleton\SkeletonClass
 */
class NovelistFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'novelist';
    }
}
