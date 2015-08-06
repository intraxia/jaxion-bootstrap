<?php
namespace Plugin_Name\Test;

use Plugin_Name\App;

class AppTest extends \PHPUnit_Framework_TestCase
{
    public function testAppStarted()
    {
        $this->assertInstanceOf('Plugin_Name\App', App::get());
    }
}
