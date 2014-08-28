<?php


namespace Ephrin;


use Symfony\Component\Console\Output\OutputInterface;

class Axon
{


    function __construct()
    {
        register_shutdown_function([$this, 'shutdown']);
    }


    public function timeout(TimeoutObject $object)
    {

    }

    public function interval(IntervalObject $object)
    {

    }

    public function immediate(ImmediateObject $object)
    {

    }

    public function shutdown()
    {
        echo '---shutdown---';
    }

    public function timeoutClear(TimeoutObject $object)
    {
    }

    public function intervalClear(IntervalObject $object)
    {

    }

    public static function now()
    {
        return microtime(1) * 10000;
    }
}