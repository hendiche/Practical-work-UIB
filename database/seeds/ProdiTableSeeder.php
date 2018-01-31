<?php

use Illuminate\Database\Seeder;
use App\Models\Program_study;

class ProdiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodi = new Program_study();
        $prodi->name = 'Sistem Informasi';
        $prodi->save();
    }
}
