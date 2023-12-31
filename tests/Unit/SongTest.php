<?php

use PHPUnit\Framework\TestCase;
use Practicals\Song;

class SongTest extends TestCase
{
    public function testSetTempo()
    {
        $song = new Song();
        $song->setTempo(60);
        $this->assertEquals(60, $song->getTempo());
    }

    public function testSetTempoAcceptsIntegerString()
    {
        $song = new Song();
        $song->setTempo("60");
        $this->assertEquals(60, $song->getTempo());
    }

    public function testSetTempoRejectsAlphabetString()
    {
        $this->expectException(InvalidArgumentException::class);
        
        $song = new Song();
        $song->setTempo("60 BPM");
    }

    public function testSetTempoRejectsFloat()
    {
        $this->expectException(InvalidArgumentException::class);

        $song = new Song();
        $song->setTempo(60.5);
    }
}

