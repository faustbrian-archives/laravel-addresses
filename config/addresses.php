<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Badges.
 *
 * (c) Konceiver <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Konceiver\Addresses\Models\Address;

return [

    'models' => [

        'address' => Address::class,

    ],

    'tables' => [

        'addresses' => 'addresses',
    ],

];
