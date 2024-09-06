<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://bisratberhanu.me
 * @since      1.0.0
 *
 * @package    Helloworld
 * @subpackage Helloworld/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Helloworld
 * @subpackage Helloworld/public
 * @author     bisrat <bisratbnegus@gmail.com>
 */
namespace Helloworld_Public_Greetings;

class Helloworld_Public_Greetings{

    public function helloworld_greetings(){
        ob_start();

        echo "Hello world";

		include_once plugin_dir_path( dirname( __FILE__ ) ) . 'partials/front/index.php';


        return ob_get_clean();
    }

    public function helloworld_adder(){
        ob_start();
        $num1 = 10;
        $num2= 20;
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is $sum";
        return ob_get_clean();
    }
}
