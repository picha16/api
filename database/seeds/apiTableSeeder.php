<?php

use Illuminate\Database\Seeder;
use App\Poblacio;
class apiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = 1;
		if (($handle = fopen("poblacion.csv", "r")) !== FALSE) {
			$columnes = fgetcsv($handle, 1000, ",");
			
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        echo "[REG:$num] ";
		        $row++;
		        for ($c=2; $c < $num; $c++) {
		            $pobl = new Poblacio();
		            $pobl->Intervalos_edad = $data[0];
		            $pobl->Hombres = $data[1];
		            $pobl->Mujeres = $data[2];
		            $pobl->Total = $data[3];
		            $pobl->De = $data[4];
		            $pobl->Hasta = $data[5];
		            $pobl->save();
		        }
		    }
		    fclose($handle);
		}
    }
}
