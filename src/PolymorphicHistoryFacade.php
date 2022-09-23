<?php

namespace AjayJoshi\PolymorphicHistory;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AjayJoshi\PolymorphicHistory\Skeleton\SkeletonClass
 */
class PolymorphicHistoryFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'polymorphic-history';
    }
}
