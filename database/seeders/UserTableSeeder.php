<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (! User::whereEmail('admin@admin.com')->get()) {
            info('The Admin Seeded');
        }

        $club = Club::whereSlug('qurayat')->first();

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'club_id'  => $club->id,
        ]);

     $user->attachRole('superadministrator');
    }
}
