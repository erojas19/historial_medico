<?php

use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $url_file = base_path()."/database/seeds/csv/MunicipiosBolivia.csv";
      $file = fopen($url_file,'r');
      fgetcsv($file, 0, ",");
      while (($data = fgetcsv($file, 0, ",")) !== FALSE) {
      	$row = ["departamento"=> $data[0],"provincia"=>$data[1],"municipio"=>$data[2],"localidad"=>$data[3]];
      	DB::table('municipios')->insert($row);
      }
    }
}
