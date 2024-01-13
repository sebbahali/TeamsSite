<?php

namespace App\Enums;

enum LoanStatus: string
{
case SendToBasicTeam = 'مرسل الى الفريق الاساسي';
case BasicTeamApprov = 'وافق عليه الفريق الاساسي';
case ClubApprove = 'وافق عليه النادي';
case Done = 'جارية';
case Expired = 'منتهي';
    }
