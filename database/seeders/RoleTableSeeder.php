<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Str;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['libelle' => 'admin' , 'slug' =>Str::slug('admin')]);
        Role::create(['libelle' => 'professeur' , 'slug' =>Str::slug('professeur')]);
        Role::create(['libelle' => 'parent' , 'slug' =>Str::slug('parent')]);
    }
}
