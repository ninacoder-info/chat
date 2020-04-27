<?php

namespace NiNaCoder\Chat\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateParticipation extends FormRequest
{
    public function authorized()
    {
        return true;
    }

    public function rules()
    {
        return [
            'settings' => 'array',
        ];
    }
}