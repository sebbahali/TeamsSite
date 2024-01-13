<?php

namespace App\Enums;

enum MettingStatus: string
{
case Draft = 'draft';
case SendToMember = 'send_to_member';
case Approve = 'approve';
    }
