<?php
/**
 * Tests for LearnLink
 */

use PHPUnit\Framework\TestCase;
use Learnlink\Learnlink;

class LearnlinkTest extends TestCase {
    private Learnlink $instance;

    protected function setUp(): void {
        $this->instance = new Learnlink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Learnlink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
