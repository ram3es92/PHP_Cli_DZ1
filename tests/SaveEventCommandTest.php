<?php

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertStringNotEqualsFileIgnoringCase;

class SaveEventCommandTest extends TestCase
{
    /**
    * @dataProvider isNeedHelpDataProvider
    */
    public function testIsNeedHelp(array $options, bool $isNeedHelp)
    {
        $saveEventsCommand = new \App\Commands\SaveEventCommand(new \App\Application(dirname(__DIR__)));

        $result = $saveEventsCommand->isNeedHelp($options);

        self::assertEquals($result, $isNeedHelp);
    }

    public function isNeedHelpDataProvider()
    {
        return [
            [
                [
                    'name' => "some-name",
                    'text' => "some-text",
                    'receiver' => "some-receiver",
                    'cron' => "some-cron",
                   // 'help',
                   // 'h'
                ],
                false
            ],
            [
                [
                    'name' => "some-name",
                    'text' => "some-text",
                    'receiver' => "some-receiver",
                    'cron' => "some-cron",
                    'help'=> "some-help",
                    'h' => null
                ],
                true
            ],
            ];
    }
}