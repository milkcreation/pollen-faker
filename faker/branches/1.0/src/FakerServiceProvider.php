<?php

declare(strict_types=1);

namespace Pollen\Faker;

use Pollen\Container\BootableServiceProvider;

class FakerServiceProvider extends BootableServiceProvider
{
    /**
     * @var string[]
     */
    protected $provides = [
        FakerInterface::class
    ];

    /**
     * @inheritDoc
     */
    public function register(): void
    {
        $this->getContainer()->share(FakerInterface::class, function () {
            return new Faker([], $this->getContainer());
        });
    }
}
