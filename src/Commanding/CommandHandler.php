<?php

namespace NiNaCoder\Chat\Commanding;

interface CommandHandler
{
    public function handle($command);
}
