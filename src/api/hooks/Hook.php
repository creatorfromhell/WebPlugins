<?php

/**
 * Class Hook
 */
abstract class Hook {

    /**
     * @var string
     */
    public $friendly_name;

    /**
     * @var array
     */
    public $arguments;

    public $web = false;

    public $cancelled = false;

    /**
     * @param $name
     * @param $arguments
     */
    public function __construct($name = "generic_hook", $arguments = array()) {
        $this->friendly_name = $name;
        $this->arguments = $arguments;
    }
}