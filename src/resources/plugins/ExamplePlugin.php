<?php

/**
 * Class ExamplePlugin
 * @name Example Plugin
 * @version 1.0.1
 * @author creatorfromhell
 * @license GNU AGPL
 * @link http://examplepluginsite.com
 */
class ExamplePlugin extends Plugin {

    /**
     * @return mixed
     */
    public function enable()
    {
        echo "Example Plugin enabled";
    }

    /**
     * @return mixed
     */
    public function disable()
    {
        // TODO: Implement disable() method.
    }

    /**
     * @hook-callback
     * @hook example_hook
     * @priority 1
     */
    public function ExampleHookCallback(&$hook_arguments) {
        $hook_arguments['data'] = "Changed hook data via plugin!";
        $hook_arguments['extra'] = "Added some extra data :3";
    }
}