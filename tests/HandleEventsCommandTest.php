<?php

use PHPUnit\Framework\TestCase;

class HandleEventsCommandTest extends TestCase
{
    /**
    * @dataProvider eventDtoDataProvider
    */
    public function testShouldEventBeRanReceiveEventDtoAndReturnCorrectBool(array $event, bool $shouldEventBeRan): void
    {
        $handleEventsCommand = new \App\Commands\HandleEventsCommand(new \App\Application(dirname(__DIR__)));

        $result = $handleEventsCommand->shouldEventBeRan($event);

        self::assertEquals($result, $shouldEventBeRan);
    }

    public static function eventDtoDataProvider(): array
    {
        return [
            [
                [
                    'minute' => date("i"),
                    'hour' => date("H"),
                    'day' => date("d"),
                    'mount' => date("m"),
                    'day_of_week' => date("w")
                ],
                true
            ]
            
        ];
    }
}