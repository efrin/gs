<?php


namespace Ephrin;


use Symfony\Component\Console\Output\OutputInterface;

class Axon
{

    private $file;
    private $dir;
    /**
     * @var \Symfony\Component\Console\Output\OutputInterface
     */
    private $output;

    /**
     * @param string $file
     * @param string $dir
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     */
    function __construct($file, $dir, OutputInterface $output)
    {
        $this->file = $file;
        $this->dir = $dir;
        $this->output = $output;

        register_shutdown_function([$this, 'sd']);
        register_tick_function([$this, 'tk']);
    }

    public function touch()
    {

        if (preg_match('/^\\' . DIRECTORY_SEPARATOR . '/', $this->file)) {
            $file = $this->file;
        } elseif (preg_match('/^\.\\' . DIRECTORY_SEPARATOR . '/', $this->file)) {
            $file = preg_replace('/^\.\\' . DIRECTORY_SEPARATOR . '/', $this->dir . '/', $this->file);
        } else {
            $file = $this->dir . DIRECTORY_SEPARATOR . $this->file;
        }

        declare(ticks = 1){

        include $file;
        include $file;

        }


    }

    public function tk()
    {
        $this->output->writeln('ok');
    }

    public function sd()
    {
        $this->output->writeln(__METHOD__);
    }
}