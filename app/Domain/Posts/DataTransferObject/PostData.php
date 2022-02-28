<?php

namespace App\Domain\Posts\DataTransferObject;

use Spatie\LaravelData\Data;

class PostData extends Data
{
    public function __construct(
        public string $title,

        public string $artist,
    ) {
    }

    public static function fromString(string $string): self
    {
        [$title, $artist] = explode('|', $string);

        return new self($title, $artist);
    }
}
