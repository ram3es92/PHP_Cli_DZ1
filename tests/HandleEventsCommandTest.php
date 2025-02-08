<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class HandleEventsCommandTest extends TestCase
{
    #[DataProvider('eventDtoDataProvider')]
    public function testShouldEventBeRanReceiveEventDtoAndReturnCorrectBool(EvenDto $dto, bool $shouldEventBeRan): void
    {
        $handleEventsCommand = new \App\Command\HandleEventsCommand(new \App\Application(dirname(__DIR__)));

        $result = $handleEventsCommand->shouldEventBeRan($dto);

        self::assertEquals($result, $shouldEventBeRan);
    }

    public static function eventDtoDataProvider(): array
    {
        return [

        ];
    }
}