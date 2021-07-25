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

namespace Konceiver\Addresses\Tests\Unit;

use Illuminate\Foundation\Auth\User;
use Konceiver\Addresses\Concerns\HasAddresses;

class ClassThatHasAddresses extends User
{
    use HasAddresses;

    public $table = 'users';

    public $guarded = [];
}
