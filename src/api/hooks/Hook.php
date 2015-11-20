<?php

/**
 * Created by creatorfromhell.
 * Date: 11/20/15
 * Time: 10:10 AM
 * Version: Beta 1
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