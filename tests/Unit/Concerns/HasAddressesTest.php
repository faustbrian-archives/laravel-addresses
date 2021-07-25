<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Addresses.
 *
 * (c) Konceiver <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\Addresses\Tests\Unit\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Konceiver\Addresses\Tests\TestCase;
use Konceiver\Addresses\Tests\Unit\ClassThatHasAddresses;

/**
 * @covers \Konceiver\Addresses\Concerns\HasAddresses
 */
class HasAddressesTest extends TestCase
{
    /** @test */
    public function morphs_to_an_addressable(): void
    {
        $this->loadLaravelMigrations(['--database' => 'testbench']);
        $this->artisan('migrate', ['--database' => 'testbench'])->run();

        $class = ClassThatHasAddresses::create([
            'name'     => 'John Doe',
            'email'    => 'john@doe.com',
            'password' => 'password',
        ]);

        $this->assertInstanceOf(MorphMany::class, $class->addresses());
    }
}
