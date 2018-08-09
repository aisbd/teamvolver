<?php
use Vanguard\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Vanguard\User::class, 50)->create()->each(function($u){
            $u->projects()->save(factory(Vanguard\Project::class)->make());
        });
    }
}
