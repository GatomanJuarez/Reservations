<?php
$servidor = "localhost";
$usuario = "root";
$contra = "";
$bd = "graduacion";

// Creando la conexion a la bd
$conexion = new mysqli($servidor, $usuario, $contra, $bd);
$conexion->set_charset("utf8");
// Checando la conexion
if ($conexion->connect_error) {
    die("Conexion Fallida: " . $conexion->connect_error);
}else{
    $sql_alumnos = "SELECT * FROM sillas ";
    $res_alumnos = $conexion->query($sql_alumnos);
    $estadoValor=array();
    while ($fila = mysqli_fetch_array($res_alumnos)){
        if($fila != NULL){
            $estado= $fila['alumno_id']; 
            file_put_contents('txt/reservados.txt', $estado."\r\n", FILE_APPEND);
            array_push($estadoValor, $estado);
    }
}
//echo $estadoValor[0];
$configuracion = file ('txt/reservados.txt');
            foreach ($configuracion as $pisos) {
            //echo $pisos ."<br>";
            }
file_put_contents('txt/1/reservados1.txt', $estadoValor[0]."\r\n");
file_put_contents('txt/1/reservados2.txt', $estadoValor[1]."\r\n");
file_put_contents('txt/1/reservados3.txt', $estadoValor[2]."\r\n");
file_put_contents('txt/1/reservados4.txt', $estadoValor[3]."\r\n");
file_put_contents('txt/1/reservados5.txt', $estadoValor[4]."\r\n");
file_put_contents('txt/1/reservados6.txt', $estadoValor[5]."\r\n");
file_put_contents('txt/1/reservados7.txt', $estadoValor[6]."\r\n");
file_put_contents('txt/1/reservados8.txt', $estadoValor[7]."\r\n");
file_put_contents('txt/1/reservados9.txt', $estadoValor[8]."\r\n");
file_put_contents('txt/1/reservados10.txt', $estadoValor[9]."\r\n");
file_put_contents('txt/1/reservados11.txt', $estadoValor[10]."\r\n");
file_put_contents('txt/1/reservados12.txt', $estadoValor[11]."\r\n");

file_put_contents('txt/2/reservados13.txt', $estadoValor[12]."\r\n");
file_put_contents('txt/2/reservados14.txt', $estadoValor[13]."\r\n");
file_put_contents('txt/2/reservados15.txt', $estadoValor[14]."\r\n");
file_put_contents('txt/2/reservados16.txt', $estadoValor[15]."\r\n");
file_put_contents('txt/2/reservados17.txt', $estadoValor[16]."\r\n");
file_put_contents('txt/2/reservados18.txt', $estadoValor[17]."\r\n");
file_put_contents('txt/2/reservados19.txt', $estadoValor[18]."\r\n");
file_put_contents('txt/2/reservados20.txt', $estadoValor[19]."\r\n");
file_put_contents('txt/2/reservados21.txt', $estadoValor[20]."\r\n");
file_put_contents('txt/2/reservados22.txt', $estadoValor[21]."\r\n");
file_put_contents('txt/2/reservados23.txt', $estadoValor[22]."\r\n");
file_put_contents('txt/2/reservados24.txt', $estadoValor[23]."\r\n");

file_put_contents('txt/3/reservados25.txt', $estadoValor[24]."\r\n");
file_put_contents('txt/3/reservados26.txt', $estadoValor[25]."\r\n");
file_put_contents('txt/3/reservados27.txt', $estadoValor[26]."\r\n");
file_put_contents('txt/3/reservados28.txt', $estadoValor[27]."\r\n");
file_put_contents('txt/3/reservados29.txt', $estadoValor[28]."\r\n");
file_put_contents('txt/3/reservados30.txt', $estadoValor[29]."\r\n");
file_put_contents('txt/3/reservados31.txt', $estadoValor[30]."\r\n");
file_put_contents('txt/3/reservados32.txt', $estadoValor[31]."\r\n");
file_put_contents('txt/3/reservados33.txt', $estadoValor[32]."\r\n");
file_put_contents('txt/3/reservados34.txt', $estadoValor[33]."\r\n");
file_put_contents('txt/3/reservados35.txt', $estadoValor[34]."\r\n");
file_put_contents('txt/3/reservados36.txt', $estadoValor[35]."\r\n");

file_put_contents('txt/4/reservados37.txt', $estadoValor[36]."\r\n");
file_put_contents('txt/4/reservados38.txt', $estadoValor[37]."\r\n");
file_put_contents('txt/4/reservados39.txt', $estadoValor[38]."\r\n");
file_put_contents('txt/4/reservados40.txt', $estadoValor[39]."\r\n");
file_put_contents('txt/4/reservados41.txt', $estadoValor[40]."\r\n");
file_put_contents('txt/4/reservados42.txt', $estadoValor[41]."\r\n");
file_put_contents('txt/4/reservados43.txt', $estadoValor[42]."\r\n");
file_put_contents('txt/4/reservados44.txt', $estadoValor[43]."\r\n");
file_put_contents('txt/4/reservados45.txt', $estadoValor[44]."\r\n");
file_put_contents('txt/4/reservados46.txt', $estadoValor[45]."\r\n");
file_put_contents('txt/4/reservados47.txt', $estadoValor[46]."\r\n");
file_put_contents('txt/4/reservados48.txt', $estadoValor[47]."\r\n");

file_put_contents('txt/5/reservados49.txt', $estadoValor[48]."\r\n");
file_put_contents('txt/5/reservados50.txt', $estadoValor[49]."\r\n");
file_put_contents('txt/5/reservados51.txt', $estadoValor[50]."\r\n");
file_put_contents('txt/5/reservados52.txt', $estadoValor[51]."\r\n");
file_put_contents('txt/5/reservados53.txt', $estadoValor[52]."\r\n");
file_put_contents('txt/5/reservados54.txt', $estadoValor[53]."\r\n");
file_put_contents('txt/5/reservados55.txt', $estadoValor[54]."\r\n");
file_put_contents('txt/5/reservados56.txt', $estadoValor[55]."\r\n");
file_put_contents('txt/5/reservados57.txt', $estadoValor[56]."\r\n");
file_put_contents('txt/5/reservados58.txt', $estadoValor[57]."\r\n");
file_put_contents('txt/5/reservados59.txt', $estadoValor[58]."\r\n");
file_put_contents('txt/5/reservados60.txt', $estadoValor[59]."\r\n");

file_put_contents('txt/6/reservados61.txt', $estadoValor[60]."\r\n");
file_put_contents('txt/6/reservados62.txt', $estadoValor[61]."\r\n");
file_put_contents('txt/6/reservados63.txt', $estadoValor[62]."\r\n");
file_put_contents('txt/6/reservados64.txt', $estadoValor[63]."\r\n");
file_put_contents('txt/6/reservados65.txt', $estadoValor[64]."\r\n");
file_put_contents('txt/6/reservados66.txt', $estadoValor[65]."\r\n");
file_put_contents('txt/6/reservados67.txt', $estadoValor[66]."\r\n");
file_put_contents('txt/6/reservados68.txt', $estadoValor[67]."\r\n");
file_put_contents('txt/6/reservados69.txt', $estadoValor[68]."\r\n");
file_put_contents('txt/6/reservados70.txt', $estadoValor[69]."\r\n");
file_put_contents('txt/6/reservados71.txt', $estadoValor[70]."\r\n");
file_put_contents('txt/6/reservados72.txt', $estadoValor[71]."\r\n");

file_put_contents('txt/8/reservados73.txt', $estadoValor[72]."\r\n");
file_put_contents('txt/8/reservados74.txt', $estadoValor[73]."\r\n");
file_put_contents('txt/8/reservados75.txt', $estadoValor[74]."\r\n");
file_put_contents('txt/8/reservados76.txt', $estadoValor[75]."\r\n");
file_put_contents('txt/8/reservados77.txt', $estadoValor[76]."\r\n");
file_put_contents('txt/8/reservados78.txt', $estadoValor[77]."\r\n");
file_put_contents('txt/8/reservados79.txt', $estadoValor[78]."\r\n");
file_put_contents('txt/8/reservados80.txt', $estadoValor[79]."\r\n");
file_put_contents('txt/8/reservados81.txt', $estadoValor[80]."\r\n");
file_put_contents('txt/8/reservados82.txt', $estadoValor[81]."\r\n");
file_put_contents('txt/8/reservados83.txt', $estadoValor[82]."\r\n");
file_put_contents('txt/8/reservados84.txt', $estadoValor[83]."\r\n");

file_put_contents('txt/9/reservados85.txt', $estadoValor[84]."\r\n");
file_put_contents('txt/9/reservados86.txt', $estadoValor[85]."\r\n");
file_put_contents('txt/9/reservados87.txt', $estadoValor[86]."\r\n");
file_put_contents('txt/9/reservados88.txt', $estadoValor[87]."\r\n");
file_put_contents('txt/9/reservados89.txt', $estadoValor[88]."\r\n");
file_put_contents('txt/9/reservados90.txt', $estadoValor[89]."\r\n");
file_put_contents('txt/9/reservados91.txt', $estadoValor[90]."\r\n");
file_put_contents('txt/9/reservados92.txt', $estadoValor[91]."\r\n");
file_put_contents('txt/9/reservados93.txt', $estadoValor[92]."\r\n");
file_put_contents('txt/9/reservados94.txt', $estadoValor[93]."\r\n");
file_put_contents('txt/9/reservados95.txt', $estadoValor[94]."\r\n");
file_put_contents('txt/9/reservados96.txt', $estadoValor[95]."\r\n");

file_put_contents('txt/10/reservados97.txt', $estadoValor[96]."\r\n");
file_put_contents('txt/10/reservados98.txt', $estadoValor[97]."\r\n");
file_put_contents('txt/10/reservados99.txt', $estadoValor[98]."\r\n");
file_put_contents('txt/10/reservados100.txt', $estadoValor[99]."\r\n");


///////////////////////////////

file_put_contents('txt/11/reservados101.txt', $estadoValor[100]."\r\n");
file_put_contents('txt/11/reservados102.txt', $estadoValor[101]."\r\n");
file_put_contents('txt/11/reservados103.txt', $estadoValor[102]."\r\n");
file_put_contents('txt/11/reservados104.txt', $estadoValor[103]."\r\n");
file_put_contents('txt/11/reservados105.txt', $estadoValor[104]."\r\n");
file_put_contents('txt/11/reservados106.txt', $estadoValor[105]."\r\n");
file_put_contents('txt/11/reservados107.txt', $estadoValor[106]."\r\n");
file_put_contents('txt/11/reservados108.txt', $estadoValor[107]."\r\n");
file_put_contents('txt/11/reservados109.txt', $estadoValor[108]."\r\n");
file_put_contents('txt/11/reservados110.txt', $estadoValor[109]."\r\n");
file_put_contents('txt/11/reservados111.txt', $estadoValor[110]."\r\n");
file_put_contents('txt/11/reservados112.txt', $estadoValor[111]."\r\n");
file_put_contents('txt/11/reservados113.txt', $estadoValor[112]."\r\n");

file_put_contents('txt/12/reservados114.txt', $estadoValor[113]."\r\n");
file_put_contents('txt/12/reservados115.txt', $estadoValor[114]."\r\n");
file_put_contents('txt/12/reservados116.txt', $estadoValor[115]."\r\n");
file_put_contents('txt/12/reservados117.txt', $estadoValor[116]."\r\n");
file_put_contents('txt/12/reservados118.txt', $estadoValor[117]."\r\n");
file_put_contents('txt/12/reservados119.txt', $estadoValor[118]."\r\n");
file_put_contents('txt/12/reservados120.txt', $estadoValor[119]."\r\n");
file_put_contents('txt/12/reservados121.txt', $estadoValor[120]."\r\n");
file_put_contents('txt/12/reservados122.txt', $estadoValor[121]."\r\n");
file_put_contents('txt/12/reservados123.txt', $estadoValor[122]."\r\n");
file_put_contents('txt/12/reservados124.txt', $estadoValor[123]."\r\n");
file_put_contents('txt/12/reservados125.txt', $estadoValor[124]."\r\n");

file_put_contents('txt/13/reservados126.txt', $estadoValor[125]."\r\n");
file_put_contents('txt/13/reservados127.txt', $estadoValor[126]."\r\n");
file_put_contents('txt/13/reservados128.txt', $estadoValor[127]."\r\n");
file_put_contents('txt/13/reservados129.txt', $estadoValor[128]."\r\n");
file_put_contents('txt/13/reservados130.txt', $estadoValor[129]."\r\n");
file_put_contents('txt/13/reservados131.txt', $estadoValor[130]."\r\n");
file_put_contents('txt/13/reservados132.txt', $estadoValor[131]."\r\n");
file_put_contents('txt/13/reservados133.txt', $estadoValor[132]."\r\n");
file_put_contents('txt/13/reservados134.txt', $estadoValor[133]."\r\n");
file_put_contents('txt/13/reservados135.txt', $estadoValor[134]."\r\n");
file_put_contents('txt/13/reservados136.txt', $estadoValor[135]."\r\n");
file_put_contents('txt/13/reservados137.txt', $estadoValor[136]."\r\n");

file_put_contents('txt/14/reservados138.txt', $estadoValor[137]."\r\n");
file_put_contents('txt/14/reservados139.txt', $estadoValor[138]."\r\n");
file_put_contents('txt/14/reservados140.txt', $estadoValor[139]."\r\n");
file_put_contents('txt/14/reservados141.txt', $estadoValor[140]."\r\n");
file_put_contents('txt/14/reservados142.txt', $estadoValor[141]."\r\n");
file_put_contents('txt/14/reservados143.txt', $estadoValor[142]."\r\n");
file_put_contents('txt/14/reservados144.txt', $estadoValor[143]."\r\n");
file_put_contents('txt/14/reservados145.txt', $estadoValor[144]."\r\n");
file_put_contents('txt/14/reservados146.txt', $estadoValor[145]."\r\n");
file_put_contents('txt/14/reservados147.txt', $estadoValor[146]."\r\n");
file_put_contents('txt/14/reservados148.txt', $estadoValor[147]."\r\n");
file_put_contents('txt/14/reservados149.txt', $estadoValor[148]."\r\n");

file_put_contents('txt/15/reservados150.txt', $estadoValor[149]."\r\n");
file_put_contents('txt/15/reservados151.txt', $estadoValor[150]."\r\n");
file_put_contents('txt/15/reservados152.txt', $estadoValor[151]."\r\n");
file_put_contents('txt/15/reservados153.txt', $estadoValor[152]."\r\n");
file_put_contents('txt/15/reservados154.txt', $estadoValor[153]."\r\n");
file_put_contents('txt/15/reservados155.txt', $estadoValor[154]."\r\n");
file_put_contents('txt/15/reservados156.txt', $estadoValor[155]."\r\n");
file_put_contents('txt/15/reservados157.txt', $estadoValor[156]."\r\n");
file_put_contents('txt/15/reservados158.txt', $estadoValor[157]."\r\n");
file_put_contents('txt/15/reservados159.txt', $estadoValor[158]."\r\n");
file_put_contents('txt/15/reservados160.txt', $estadoValor[159]."\r\n");
file_put_contents('txt/15/reservados161.txt', $estadoValor[160]."\r\n");

file_put_contents('txt/16/reservados162.txt', $estadoValor[161]."\r\n");
file_put_contents('txt/16/reservados163.txt', $estadoValor[162]."\r\n");
file_put_contents('txt/16/reservados164.txt', $estadoValor[163]."\r\n");
file_put_contents('txt/16/reservados165.txt', $estadoValor[164]."\r\n");
file_put_contents('txt/16/reservados166.txt', $estadoValor[165]."\r\n");
file_put_contents('txt/16/reservados167.txt', $estadoValor[166]."\r\n");
file_put_contents('txt/16/reservados168.txt', $estadoValor[167]."\r\n");
file_put_contents('txt/16/reservados169.txt', $estadoValor[168]."\r\n");
file_put_contents('txt/16/reservados170.txt', $estadoValor[169]."\r\n");
file_put_contents('txt/16/reservados171.txt', $estadoValor[170]."\r\n");
file_put_contents('txt/16/reservados172.txt', $estadoValor[171]."\r\n");
file_put_contents('txt/16/reservados173.txt', $estadoValor[172]."\r\n");

file_put_contents('txt/17/reservados174.txt', $estadoValor[173]."\r\n");
file_put_contents('txt/17/reservados175.txt', $estadoValor[174]."\r\n");
file_put_contents('txt/17/reservados176.txt', $estadoValor[175]."\r\n");
file_put_contents('txt/17/reservados177.txt', $estadoValor[176]."\r\n");
file_put_contents('txt/17/reservados178.txt', $estadoValor[177]."\r\n");
file_put_contents('txt/17/reservados179.txt', $estadoValor[178]."\r\n");
file_put_contents('txt/17/reservados180.txt', $estadoValor[176]."\r\n");
file_put_contents('txt/17/reservados181.txt', $estadoValor[180]."\r\n");
file_put_contents('txt/17/reservados182.txt', $estadoValor[181]."\r\n");
file_put_contents('txt/17/reservados183.txt', $estadoValor[182]."\r\n");
file_put_contents('txt/17/reservados184.txt', $estadoValor[183]."\r\n");
file_put_contents('txt/17/reservados185.txt', $estadoValor[184]."\r\n");

file_put_contents('txt/18/reservados186.txt', $estadoValor[185]."\r\n");
file_put_contents('txt/18/reservados187.txt', $estadoValor[186]."\r\n");
file_put_contents('txt/18/reservados188.txt', $estadoValor[187]."\r\n");
file_put_contents('txt/18/reservados189.txt', $estadoValor[188]."\r\n");
file_put_contents('txt/18/reservados190.txt', $estadoValor[189]."\r\n");
file_put_contents('txt/18/reservados191.txt', $estadoValor[190]."\r\n");
file_put_contents('txt/18/reservados192.txt', $estadoValor[191]."\r\n");
file_put_contents('txt/18/reservados193.txt', $estadoValor[192]."\r\n");
file_put_contents('txt/18/reservados194.txt', $estadoValor[193]."\r\n");
file_put_contents('txt/18/reservados195.txt', $estadoValor[194]."\r\n");
file_put_contents('txt/18/reservados196.txt', $estadoValor[195]."\r\n");
file_put_contents('txt/18/reservados197.txt', $estadoValor[196]."\r\n");

file_put_contents('txt/19/reservados198.txt', $estadoValor[197]."\r\n");
file_put_contents('txt/19/reservados199.txt', $estadoValor[198]."\r\n");
file_put_contents('txt/19/reservados200.txt', $estadoValor[199]."\r\n");






$conexion->close();
header("location:mesas.php");
    }



