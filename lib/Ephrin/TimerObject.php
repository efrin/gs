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
 * @class TimerObject
 *
 * @author lazycommit <lazycommit@hotels24.ua>
 */
class TimerObject
{
    /** @var integer */
    public $start;
    /** @var callable */
    public $onTimeout;
    /** @var int */
    public $delay;
    /** @var bool */
    public $repeat;

    /** * @var TimerObject */
    public $next;
    /** * @var TimerObject */
    public $prev;

    /**
     * @param callable $fn
     * @param boolean $repeat
     * @param integer $delay
     * @param $args
     */
    function __construct(callable $fn, $repeat, $delay = 0, array $args = [])
    {
        $this->onTimeout = function () use ($fn, $args) {
            return call_user_func_array($fn, $args);
        };

        $this->delay = $delay;
        $this->created = Axon::now();
        $this->start =  $this->created + $delay;

        $this->repeat = $repeat;
    }


} 