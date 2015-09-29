<?php
/**
 * Created by Daniel Vidmar.
 * Date: 2/16/2015
 * Time: 9:14 PM
 * Version: Beta 2
 * Last Modified: 2/16/2015 at 9:14 PM
 * Last Modified by Daniel Vidmar.
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