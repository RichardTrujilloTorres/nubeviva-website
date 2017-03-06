<?php

use App\Cast;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CastsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cast::create([
        	'title' => 'Symfony 101',
        	'description' => 'A symfony 3 introduction.',
            'published' => false,
        ]);

        Cast::create([
        	'title' => 'Laravel Package Development',
        	'description' => 'A exhaustive introduction to package development in Laravel.',
        	'published' => true,
        	'published_at' => Carbon::now(),
        ]);
    }
}
