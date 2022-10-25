<?php

namespace Database\Seeders;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('posts')->insert([
                'title' => "Download The Latest Zip",
                'body' => ". Go to https://dl.mongodb.org/dl/win32/x86_64, find the latest zip available and download it. ...
                Extract and Move To Laragon MongoDB Directory. Extract the zip file, it will result a single folder with the name of the version downloaded. ...
                Run the MongoDB Server.",
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]);
        }
    }
}
