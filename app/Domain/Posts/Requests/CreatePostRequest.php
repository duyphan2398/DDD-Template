<?php

namespace App\Domain\Posts\Requests;

use App\Domain\Posts\DataTransferObject\PostData;
use Illuminate\Http\Client\Request;
use Spatie\LaravelData\WithData;

class CreatePostRequest extends Request
{
    use WithData;

    protected function dataClass(): string
    {
        return PostData::class;
    }
}
