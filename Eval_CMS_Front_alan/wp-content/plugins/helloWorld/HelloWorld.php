<?php /* Plugin Name: hello world
Description: ecrit Hello World
Author: Alan
Version: 1.0 */
class HelloWorld_Plugin
{
    public function __construct()
    {
        include_once plugin_dir_path(__FILE__) . '/helloClass.php';
        new HelloClass();
        //Instalation
        register_activation_hook(__FILE__, array('helloclass', 'install'));
        //desinstalation
        register_deactivation_hook(__FILE__, array('helloclass', 'uninstall'));
    }
}
new HelloWorld_Plugin();
// on cree le plugin 
