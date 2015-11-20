<?php
/**
 * Created by creatorfromhell.
 * Date: 11/20/15
 * Time: 10:10 AM
 * Version: Beta 1
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