<?php
/**
 * Class Plugin
 */
abstract class Plugin {

    /**
     * @return mixed
     */
    public abstract function enable();

    /**
     * @return mixed
     */
    public abstract function disable();
}