<?php

use App\Enums\MettingStatus;
use App\Models\Assistant;
use App\Models\OutLoanPlayer;
use App\Models\Player;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * Function to get image
 *
 * @param string $path
 * @return string
 */
function getImg(string $path): string
{
    return '/storage/' . $path;
}

/**
 * Return Team Auth
 *
 * @return Authenticatable
 */
function team():Authenticatable
{
    return auth()->guard('team')->user();
}

function calcAge($date): int
{
    return intval(date('Y', time() - strtotime($date))) - 1970;
}

/**
 * Formate Message Number
 *
 * @param string $teamCode
 * @param int $year
 * @param int $id
 * @return string
 */
function messageNumber(string $teamCode, int $year, int $id): string
{
    $id = str_pad((string)$id, 4, "0", STR_PAD_LEFT);

    return "$teamCode-$id-$year";
}

/**
 * Get Status Value in Arabic
 *
 * @param MettingStatus $status
 * @return string
 */
function mettingStatus(MettingStatus $status): string
{
    return match($status){
    MettingStatus::Draft => 'مسودة',
        MettingStatus::SendToMember => 'مرسلة للاعضاء',
        MettingStatus::Approve => 'معتمدة',
    };
}

function functionalRoles($role, $type = 'text'): string
{
    if ($type == 'text') {
        return match($role){
        '1' => \App\Enums\TeamMangeRole::Secretary->value,
        '2' => \App\Enums\TeamMangeRole::Leader->value,
        '3' =>  \App\Enums\TeamMangeRole::ViceLeader->value,
        '4' => \App\Enums\TeamMangeRole::Member->value,
    };
    } else {
        return match($role){
         \App\Enums\TeamMangeRole::Secretary->value => '1',
         \App\Enums\TeamMangeRole::Leader->value => '2',
         \App\Enums\TeamMangeRole::ViceLeader->value  => '3',
         \App\Enums\TeamMangeRole::Member->value => '4',
         };
    }
return '';
}

    function technicalRoles($role, $type = 'text'): string
    {
        if ($type == 'text') {
            return match($role){
            '1' => \App\Enums\AssistantsRole::Coach->value,
                '2' => \App\Enums\AssistantsRole::CoachAssistant->value ,
                '3' => \App\Enums\AssistantsRole::Therapist->value ,
                '4' => \App\Enums\AssistantsRole::TeamManager->value,
                '5' => \App\Enums\AssistantsRole::Administrative->value ,
                '6' => \App\Enums\AssistantsRole::GoalkeeperCoach->value ,
                '7' => \App\Enums\AssistantsRole::MissionOfficer->value ,
                '8' => \App\Enums\AssistantsRole::Media->value ,
                '9' => \App\Enums\AssistantsRole::PublicOfficial->value,
                '10' => \App\Enums\AssistantsRole::FitnessTrainer->value ,
                '11' => \App\Enums\AssistantsRole::Massager->value ,
    };
    } else {
            return match($role){
                \App\Enums\AssistantsRole::Coach->value => '1' ,
                \App\Enums\AssistantsRole::CoachAssistant->value =>'2',
                \App\Enums\AssistantsRole::Therapist->value =>'3' ,
                \App\Enums\AssistantsRole::TeamManager->value=>'4',
                \App\Enums\AssistantsRole::Administrative->value=>'5',
                \App\Enums\AssistantsRole::GoalkeeperCoach->value=>'6',
                \App\Enums\AssistantsRole::MissionOfficer->value=>'7',
                \App\Enums\AssistantsRole::Media->value=>'8',
                \App\Enums\AssistantsRole::PublicOfficial->value=>'9',
                \App\Enums\AssistantsRole::FitnessTrainer->value=>'10' ,
                \App\Enums\AssistantsRole::Massager->value=>'11' ,
    };
        }
        return '';
    }

    function registerNumber()
    {
        $number = rand(111111, 999999);

        $count = Player::where('register_number', $number)->count();

        if ($count != 0) {
            registerNumber();
        }

        return $number;
    }


    function getAssistant($id)
    {
        return Assistant::find($id);
    }

    function getPlayer($id)
    {
        return Player::where('card_id', $id)->with('team')->first();
    }

    function getOutPlayer($id)
    {
        return OutLoanPlayer::where('card_id', $id)->with('team')->first();
    }
