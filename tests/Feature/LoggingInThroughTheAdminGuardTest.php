<?php

namespace Tests\Feature;

use App\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoggingInThroughTheAdminGuardTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_is_returned_from_the_request_correctly_when_logging_in_using_the_test()
    {
        $admin = factory(Admin::class)->create(['name' => 'Admin User']);

        $response = $this->actingAs($admin, 'admin')->get(route('test'));

        $response->assertOk();
        $this->assertEquals('Admin User', $response->viewData('user')->name);
    }
}
