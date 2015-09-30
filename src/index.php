<?php
/**
 * Created by creatorfromhell.
 * Date: 9/29/15
 * Time: 12:03 PM
 * Version: Beta 2
 */
define('base_directory', rtrim(realpath(__DIR__), '/').'/');

define('hook_files', false);

//Autoload our classes
function auto_load_api($class) {
    $root = rtrim(realpath(__DIR__), '/').'/';
    if(file_exists($root.$class.".php")) {
        require_once($root.$class.".php");
        return true;
    } else if(file_exists($root."api/".$class.".php")) {
        require_once($root."api/".$class.".php");
        return true;
    } else if(file_exists($root."api/hooks/".$class.".php")) {
        require_once($root."api/hooks/".$class.".php");
        return true;
    }
    return false;
}

spl_autoload_register("auto_load_api");

$plugin_manager = new PluginManager(base_directory);

//Example method of triggering hooks
$data = array('data' => 'Example Plugin Data');
$example_hook = new GenericHook('example_hook', $data);
$example_hook->web = true;

$plugin_manager->trigger($example_hook);

var_dump($example_hook->arguments);