<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'clubs' => 'c,r,u,d',
            'teams' => 'c,r,u,d',
            'mettings' => 'c,r,u,d',
            'players' => 'c,r,u,d',
            'year_updates' => 'c,r,u,d',
            'club_messages' => 'c,r,u,d',
            'club_team_messages' => 'c,r,u,d',
            'posts' => 'c,r,u,d',
            'feedbacks' => 'c,r,u,d',
            'competitions' => 'c,r,u,d',
            'out_loan_players' => 'c,r,u,d',
        ],
        'club_leader' => [
            'club_team_messages' => 'c,r,u,d',
        ],
        'club_vice_leader' => [
            'mettings' => 'r,u,d',
        ],
        'club_member' => [
            'mettings' => 'r,u,d',
        ],
        'competition_manger' => [
            'competitions' => 'r,u',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
