<?php

use PHPUnit\Framework\TestCase;

class HandleEventsDaemonCommandTest extends TestCase

{
    public function testGetCurrentTime()
        {
            $handleEventsDaemonCommandTest = new \App\Commands\HandleEventsDaemonCommand(new \App\Application(dirname(__DIR__)));
    
            self::assertEquals(
                $handleEventsDaemonCommandTest->getCurrentTime(),
                [

                ]
            );
        }
}