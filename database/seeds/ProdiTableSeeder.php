<?php

use Illuminate\Database\Seeder;
use App\Models\ProgramStudy;

class ProdiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodi = new ProgramStudy();
        $prodi->name = 'Sistem Informasi';
        $prodi->save();
    }
}
