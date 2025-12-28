<?php

namespace Devcode6\PackageToolkit\Tests\Feature;

use Devcode6\PackageToolkit\Tests\TestCase as TestCase;

class HealthRouteTest extends TestCase {
    /** @test */
    public function health_route_returns_success_response(): void
    {
        $response = $this->get('/package-toolkit/health');

        $response->assertStatus(200);
        $response->assertJson([
            'status' => 'Package Toolkit is running',
        ]);
    }
}