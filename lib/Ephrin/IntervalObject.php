<?php
/*
 * This file is part of the Hotels24.ua project.
 *
 * (c) Hotels24.ua 2007-2014
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ephrin;

/**
 * @class IntervalObject
 *
 * @author lazycommit <lazycommit@hotels24.ua>
 */
class IntervalObject extends TimerObject
{
    function __construct(callable $fn, $delay = 0, array $args = [])
    {
        parent::__construct($fn, true, $delay, $args);
    }
}