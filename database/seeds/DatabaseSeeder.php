<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        if (DB::table('users')->count() == 0) {


            DB::table('users')->insert([
                'name' => 'admin',
                'password' => '$2y$10$fA8uqm0zXkD8w.vCmP.Qhenbtkx2b/7CjYjIhzPwn.vT4/cG/gEbG',
            ]);
        }

    }
}
