<?php

namespace App\Queue;

interface Queue
{
    public function sendMessage($message): void;

    public function getMessage(): ?sring;

    public function ackLastMessage(): void;
}