<?php

namespace NiNaCoder\Chat\Eventing;

use NiNaCoder\Chat\Models\Conversation;

class AllParticipantsClearedConversation
{
    public $conversation;

    public function __construct(Conversation $conversation)
    {
        $this->conversation = $conversation;
    }
}
