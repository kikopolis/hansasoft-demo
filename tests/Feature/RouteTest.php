<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteTest extends TestCase {
    use RefreshDatabase;

    public function testHome(): void {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testPrescriptions(): void {
        $response = $this->get('/api/prescriptions');
        $response->assertStatus(200);
    }

    public function testPrescription(): void {
        $response = $this->get('/api/prescriptions/1');
        $response->assertStatus(200);
    }

    public function testIdCheckInvalid(): void {
        $response = $this->post('/api/id-check', [
            'id' => '123456789',
        ], [
            'Accept' => 'application/json',
        ]);
        $response->assertStatus(422);
    }

    public function testIdCheck(): void {
        $response = $this->post('/api/id-check', [
            'id' => '12345678901',
        ], [
            'Accept' => 'application/json',
        ]);
        $response->assertStatus(200);
    }
}
