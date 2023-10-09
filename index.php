<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Darbelis 2023 10 02</h1>

    <?php
    #1
    echo '<h4>#1</h4>';
        $array1 = array(
            4.3, 7.6, 6.3, 10, 6.7
        );
        $KlasesAverage = array_sum($array1)/count($array1);
        echo 'array1 vidurkiu vidurkis: '. $KlasesAverage;
        echo '<br> <br> <br> ';


    #2
    echo '<h4>#2</h4>';
        $Vardai = array(
            'Donatas'=>5.6,
            'Rita'=>9.2,
            'Arturas'=>4.3,
            'Herkus'=>6.7,
            'Milda'=>3.2
        );

        foreach ($Vardai as $name => $value) {
            if($value > 4){
                $PositiveVidurkis = 'Teigiamas'
                ;}else{
                    $PositiveVidurkis = 'Neigiamas'
                    ;}
            echo $name , ': ' , $value ,'  -  ', $PositiveVidurkis, '<br>';
        }

        // echo '<br>';
        // $VardaiVidurkis = array_sum($Vardai)/count($Vardai);
        // echo $VardaiVidurkis;
            
    #3
    echo '<h4>#3</h4>';
    //ideksuotas dvimatis array
    $Vardai3 = array(
        $Donatas = array('Donatas', ),
        $Rita =>9.2,
        $Arturas =>4.3,
        $Herkus =>6.7,
        $Milda =>3.2
    );

        
            

    ?>



</body>
</html>