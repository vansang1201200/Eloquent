<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArray = [];
        for ($i=0 ; $i<20; $i++) {
            array_push($dataArray,[
                'name' => Str::random(10),
                'dob' => date("Y-m-d", mt_rand(1, time())),
                'email' =>Str::random(10)
            ]);
        }
        DB::table("customers")->insert($dataArray);

    }
}
