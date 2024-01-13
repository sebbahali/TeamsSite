<?php

namespace App\Enums;

enum CompetitionTeamStatus: string
{
case Draft = 'draft';
case Unsubscripe = 'un_subscripe';
case Subscripe = 'subscripe';
case Register = 'register';
case Paid = 'paid';
case Done = 'done';
    }
