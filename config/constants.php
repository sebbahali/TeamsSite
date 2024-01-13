<?php
return [

    'technicalRoles' => [
                [ 'id'=> 1, 'name' => \App\Enums\AssistantsRole::Coach->value],
                ['id'=>2, 'name'=> \App\Enums\AssistantsRole::CoachAssistant->value] ,
                ['id'=>3,'name' => \App\Enums\AssistantsRole::Therapist->value] ,
                ['id'=>4, 'name'=> \App\Enums\AssistantsRole::TeamManager->value] ,
                ['id'=>5,'name' => \App\Enums\AssistantsRole::Administrative->value] ,
                ['id'=>6, 'name'=> \App\Enums\AssistantsRole::GoalkeeperCoach->value] ,
                ['id'=>7,'name' => \App\Enums\AssistantsRole::MissionOfficer->value] ,
                ['id'=>8,'name' => \App\Enums\AssistantsRole::Media->value] ,
                ['id'=>9,'name' => \App\Enums\AssistantsRole::PublicOfficial->value] ,
                ['id'=>10,'name' => \App\Enums\AssistantsRole::FitnessTrainer->value] ,
                ['id'=>11, 'name'=> \App\Enums\AssistantsRole::Massager->value] ,
    ],
    'functionalRoles'=>[
                ['id'=>1, 'name'=> \App\Enums\TeamMangeRole::Secretary->value],
                ['id'=>2, 'name'=> \App\Enums\TeamMangeRole::Leader->value] ,
                ['id'=>3,'name' => \App\Enums\TeamMangeRole::ViceLeader->value] ,
                ['id'=>4, 'name'=> \App\Enums\TeamMangeRole::Member->value] ,
]
];