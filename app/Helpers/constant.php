<?php

namespace App\Helpers;

class Constant
{
    // public const TICKET_STATUS = [
    //     'open'   => 1,
    //     'closed' => 2,
    // ];

    public const TABLE_LOCATION = [
        'Front' => 'front',
        'Inside' => 'inside',
        'Outside' => 'outside'
    ];

    public const TABLE_STATUS = [
        'Pending' => 'pending',
        'Available' => 'available',
        'Unavailable' => 'unavailable'
    ];
}
