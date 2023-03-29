<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AppTest extends TestCase
{

    public function test_user_logged_out_when_no_employee_id_present(): void
    {
        $user = User::factory()->create();
        $user->wonde_employee_id = null;

        $response = $this
            ->actingAs($user)
            ->get('/dashboard');

        $response->assertStatus(302);
        $this->assertFalse(Auth::check());
    }

    public function test_dashboard_page_is_displayed_when_logged_in(): void
    {
        $user = User::factory()->create();
        $response = $this
            ->actingAs($user)
            ->get('/dashboard');

        $response->assertStatus(200);
    }

    public function test_dashboard_page_no_employee_id(): void
    {
        $user = User::factory()->create();
        $user->wonde_employee_id = 'doesntexist';

        $response = $this
            ->actingAs($user)
            ->get('/dashboard');

        $response->assertStatus(200);
        $response->assertSessionHas('error');
    }

    public function test_lessons_page_404(): void
    {
        $user = User::factory()->create();
        $response = $this
            ->actingAs($user)
            ->get('/lesson/doesntexist');

        $response->assertStatus(404);
    }
}
