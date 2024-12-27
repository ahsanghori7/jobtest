<?php

return [
    'emp1' => [
        'name' => 'Existing Employee',
        'email' => 'existinguser@example.com',
        'password' => CPasswordHelper::hashPassword('correctpassword'),
    ],
    'emp2' => [
        'name' => 'Second Employee',
        'email' => 'seconduser@example.com',
        'password' => CPasswordHelper::hashPassword('anotherpassword'),
    ],
];
