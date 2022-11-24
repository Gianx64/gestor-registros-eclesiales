<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MarriageSeeder::class);
        $this->call(ConfirmationSeeder::class);
        $this->call(BaptismSeeder::class);
        $this->call(CertificateSeeder::class);
    }
}
