<?php

namespace App\Enums;

enum PlayerJoinStatus: string
{
case UnJoin = 'غير منتسب';
case Affiliated = 'منتسب';
case Loan = 'معار';
case Stoped = 'موقف';
    }
