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

namespace Konceiver\Addresses\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Config;

trait HasAddresses
{
    public function addresses(): MorphMany
    {
        return $this->morphMany(Config::get('addresses.models.address'), 'addressable');
    }
}
