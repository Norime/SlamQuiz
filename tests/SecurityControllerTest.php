<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{

    private $client = null;

    public function setUp() 
    {
        $this->client = static::createClient();
    }

    public function testSomething()
    {
        $this->assertTrue(true);
    }
}
