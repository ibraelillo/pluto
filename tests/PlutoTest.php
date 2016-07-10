<?php
/**
 * Created by PhpStorm.
 * User: ibra
 * Date: 10/07/2016
 * Time: 10:38
 */

namespace Pluto\Tests;


use Pluto\Pluto;

class PlutoTest extends \PHPUnit_Framework_TestCase
{

    public function testSayWuaaaou()
    {


        $dog  = new Pluto();

        ob_start();
        $dog->sayWuaou();

        $wuaou = ob_get_contents();
        ob_get_clean();


        $this->assertNotNull($wuaou);


    }

}
