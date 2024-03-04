<?php

return [
    'ADMIN_EMAIL'       =>  'admin@gmail.com', // Admin email address
    'ADMIN_PASSWORD'    =>  'Admin@123', // Admin password

    'TEMP_PASSWORD'     =>  '123456789', // Admin password

    'FRONTEND_URL'                      => env('FRONTEND_URL'),
    'FRONTEND_FORGET_PASSWORD_URL'      => env('FRONTEND_FORGET_PASSWORD_URL'),
    'FRONTEND_VERIFICATION'             => 'email-verification',

    'APPROVED'          => 'Approved',
    'REJECTED'          => 'Rejected',

    'STATUS' => [
        'invited'       => 'I', // Status code for invited
        'pending'       => 'P', // Status code for pending
        'approved'      => 'A', // Status code for approved
        'rejected'      => 'R', // Status code for rejected
    ],

    'USER_ROLE' => [
        'admin'         => 'A', // Role code for admin users
        'manager'       => 'M', // Role code for manager users
        'customer'      => 'C', // Role code for customer users
    ],
];
