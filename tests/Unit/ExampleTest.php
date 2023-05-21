<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testLoadHomePage()
    {
        $response = $this->get('food-shop/index');
        $response->assertOk();
    }
}
