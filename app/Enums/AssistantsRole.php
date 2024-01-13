<?php

namespace App\Enums;

enum AssistantsRole: string
{
case Coach = 'مدرب';
case CoachAssistant = 'مساعد مدرب';
case Therapist = 'اخصائي علاج';
case TeamManager = 'مدير الفريق';
case Administrative = 'اداري';
case GoalkeeperCoach = 'مدرب الحراس';
case MissionOfficer = 'مسؤول مهمات';
case Media = 'إعلامي';
case PublicOfficial = 'مسؤول الجماهير';
case FitnessTrainer = 'مدرب لياقة بدنية';
case Massager = 'مدلك';
    }
