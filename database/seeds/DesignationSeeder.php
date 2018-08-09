<?php

use Illuminate\Database\Seeder;
use Vanguard\Designation;
class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {
        Designation::create([
            'name' => 'Ui Designer',
        ]);
        Designation::create([
            'name' => 'Executive',
        ]);
        Designation::create([
            'name' => 'Project Manager',
        ]);
        Designation::create([
            'name' => 'Software Engineer',
        ]);
        Designation::create([
            'name' => 'R&D',
        ]);

        Designation::create([
            'name' => 'SEO',
        ]);

        Designation::create([
            'name' => 'CEO',
        ]);
        Designation::create([
            'name' => 'CTO',
        ]);


    }
}
