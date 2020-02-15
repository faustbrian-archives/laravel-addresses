<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Addresses.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Addresses\Tests\Unit;

use Illuminate\Foundation\Auth\User;
use KodeKeep\Addresses\Concerns\HasAddresses;

class ClassThatHasAddresses extends User
{
    use HasAddresses;

    public $table = 'users';

    public $guarded = [];
}
