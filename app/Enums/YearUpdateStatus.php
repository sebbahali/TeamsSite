<?php

namespace App\Enums;

enum YearUpdateStatus: string
{
case UnApprove = 'غير معتمد';
case Approve = 'معتمد';
case Updated = 'مجدد';
    }
