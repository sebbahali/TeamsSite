<?php

namespace App\Enums;

enum ClubMangeRole: string
{
case Secretary = 'أمين السر';
case ClubManger = 'رئيس النادي';
case Leader = 'رئيس مجلس الادارة';
case ViceLeader = 'نائب رئيس مجلس الادارة';
case Member = 'عضو مجلس الادارة';
    }
