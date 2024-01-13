<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Seeder;

class ClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Club::first()) {
            info('club data is seeded.');
            return;
        }

        Club::create([
            'slug' => 'qurayat',
            'name' => 'نادي قريات',
            'email' => 'contact@example.com',
            'facebook_link' => '#',
            'twitter_link' => '#',
            'instagram_link' => '#',
            'phone' => '23423423',
            'vision' => 'شراكة مجتمعية نحو تنمية رياضية وثقافية مستدامة',
            'message' => 'صرح مجتمعي يتطلع الى تعزيز المبادئ والقيم وتنمية المجالات الرياضية والثقافية وزيادة العوائد الاستثمارية في قالب يرتكز على الشراكة والعمل المؤسسي المتميز',
            'philosphoy' => 'الادراك ان الانجازات والمراكز المشرفة التي نتطلع لها لا تتحقق الا من خلال رسم خطط واضحة ورصينة ترتكز على دراسة الواقع الحقيق بكافة امكانياته وتحدياته وتبني منهجيات واضحة لمشاركة ابناء المجتمع',
            'description' => 'صرح مجتمعي يتطلع الى تعزيز المبادئ والقيم وتنمية المجالات الرياضية والثقافية وزيادة العوائد الاستثمارية في قالب يرتكز على الشراكة والعمل المؤسسي المتميز',
        ]);
    }
}
