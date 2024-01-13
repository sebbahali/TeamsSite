<?php

namespace App\Enums;

enum ClubTeamMessageTarget: string
{
case ClubSecretary = 'امين سر النادي';
case ClubLeader = 'رئيس مجلس الادارة';
case TeamLeader = 'رئيس الفريق';
case TeamSecretary = 'امين سر الفريق';
    }
