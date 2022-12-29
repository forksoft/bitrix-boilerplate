<?php

declare(strict_types=1);

namespace App\TestDomain;

class FooBar
{
    public function __invoke()
    {
        echo 'FooBar';
    }
}
