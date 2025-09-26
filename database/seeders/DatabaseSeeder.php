<?php

namespace Database\Seeders;

use App\Models\MenuTumpeng;
use App\Models\Testimoni;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $menus = config('menutumpeng');
        $testimonis = config('testimoni');

        foreach ($menus as $menu) {
            MenuTumpeng::create($menu);
        }

        foreach ($testimonis as $testimoni) {
            Testimoni::create($testimoni);
        }
    }
}
