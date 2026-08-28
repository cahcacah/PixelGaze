<?php
/**
 * Tests for PixelGaze
 */

use PHPUnit\Framework\TestCase;
use Pixelgaze\Pixelgaze;

class PixelgazeTest extends TestCase {
    private Pixelgaze $instance;

    protected function setUp(): void {
        $this->instance = new Pixelgaze(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pixelgaze::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
