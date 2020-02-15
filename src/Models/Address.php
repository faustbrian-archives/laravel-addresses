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

namespace KodeKeep\Addresses\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Address extends Model
{
    protected $fillable = [
        'type',
        'name',
        'address_line_1',
        'address_line_2',
        'city',
        'state',
        'zip',
        'country',
    ];

    public function addressable(): MorphTo
    {
        return $this->morphTo('addressable');
    }
}
