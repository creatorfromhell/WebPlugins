<?php
/**
 * Created by creatorfromhell.
 * Date: 11/20/15
 * Time: 10:10 AM
 * Version: Beta 1
 */

/**
 * Class InvalidPluginInfoException
 */
class InvalidPluginInfoException extends Exception {

    public function __construct($plugin_name, $code = 0) {
        $message = $plugin_name."'s info is either missing, or the format is invalid.";
        parent::__construct($message, $code);
    }
}