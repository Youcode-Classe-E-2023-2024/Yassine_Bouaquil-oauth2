<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_user()
    {
        $user = User::factory()->create([
            'name' => 'yassine',
            'email' => 'yassine@example.com',
            'password' => bcrypt('password'),
        ]);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals('yassine', $user->name);
        $this->assertEquals('yassine@example.com', $user->email);
    }
}
