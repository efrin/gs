<?php


namespace Ephrin;


class Axon
{
    private $started = false;


    function __construct($interactive = false)
    {
        if(!$interactive){
            register_shutdown_function([$this, 'shutdown']);
        }

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

    private function loop(){




    }

    public function shutdown()
    {
        if(!$this->started){
            $this->loop();
        }


        echo PHP_EOL . '---shutdown---' . PHP_EOL;
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