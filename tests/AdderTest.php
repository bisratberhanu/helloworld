<?php
use PHPUnit\Framework\TestCase;
use Helloworld_Public_Greetings\Helloworld_Public_Greetings;

class AdderTest extends TestCase {
    public function test_adder() {
        // Create an instance of the class containing the helloworld_adder method
        $greetings = new Helloworld_Public_Greetings();

        // Call the method and capture the output
        $result = $greetings->helloworld_adder();

        // Assert that the output is as expected
        $this->assertEquals("The sum of 10 and 20 is 30", $result);
    }
}