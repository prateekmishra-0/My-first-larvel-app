<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SongsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testSongsStaticNotFound(): void
    {
        $response = $this->get('/songs_static');

        $response->assertStatus(200); 
    }

    public function testSongsSpotifyNotFound(): void
    {
        $response = $this->get('/songs_spotify');

        $response->assertStatus(200); 
    }
}
