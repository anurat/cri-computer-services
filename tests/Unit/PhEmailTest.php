<?php

namespace CRI\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use CRI\Tests\TestCase;
use CRI\Models\PhStaff;
use CRI\Models\PhEmail;

class PhEmailTest extends TestCase
{
    use RefreshDatabase;

    public function testCanAccessDatabase()
    {
        $staff = PhStaff::first();
        // $staff = PhStaff::factory()->create(['staff_firstname' => 'Anurat']);
        $email = PhEmail::factory()->create(['email_address' => 'anurat@cri.or.th']);
        $this->assertInstanceOf(PhEmail::class, $email);
    }
}
