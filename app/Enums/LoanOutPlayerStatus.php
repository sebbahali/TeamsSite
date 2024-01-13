<?php

namespace App\Enums;

enum LoanOutPlayerStatus: string
{
case Draft = 'draft';
case SendToClub = 'send_to_club';
case ClubApprove = 'club_approve';
case Done = 'done';
case Expired = 'expired';
    }
