<?php

namespace App\Enums;

enum TeamMangeRole: string
{
case Secretary = 'أمين السر';
case Leader = 'رئيس مجلس الادارة';
case ViceLeader = 'نائب رئيس مجلس الادارة';
case Member = 'عضو مجلس الادارة';
    }
