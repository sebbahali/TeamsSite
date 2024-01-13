<?php

namespace App\Enums;

enum CompetitionStatus: string
{
case Draft = 'draft';
case Active = 'active';
case TeamApprove = 'team_approve';
case SendToMange = 'send_to_mange';
case Done = 'done';
    }
