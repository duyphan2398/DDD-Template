<?php

namespace App\Domain\Posts\Models;

use App\Domain\Posts\DataTransferObject\PostData;
use Spatie\LaravelData\WithData;

class Post extends Model
{
    use WithData;

    protected $dataClass = PostData::class;
}
