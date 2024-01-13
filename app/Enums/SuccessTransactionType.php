<?php

namespace App\Enums;

enum SuccessTransactionType: string
{
case RegisterPlayer = 'register_player';
case LoanRequest = 'loan_request';
case TransferRequest = 'transfer_request';
case YearUpdate = 'year_update';
case OutLoanPlayer = 'out_loan_player';
case CompetitionTeam = 'competition_team';
    }
