<?php

namespace Database\Seeders;

use App\Models\Admin\Permiso;
use Illuminate\Database\Seeder;

class TablaPermisoSeeder extends Seeder
{
    public function run(): void
    {
        Permiso::factory()->count(50)->create();
    }
}
