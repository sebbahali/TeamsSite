<?php

namespace App\Enums;

enum PlayerApproveStatus: string
{
case Draft = 'draft';
case SendToClub = 'send_to_club';
case ClubApprove = 'club_approve';
case Paid = 'paid';
case Approved = 'approved';
    }
