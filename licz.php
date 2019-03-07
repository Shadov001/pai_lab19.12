<?php

if (isset($_POST['pocz'])) 
{ 
    // echo "dziala";

    $poczatek = $_POST['pocz'];
    $koniec = $_POST['kon'];
    $ilosc_losowan = 1000;
    // $h = $_POST['h'];
     
    $dl_przedzialu = abs($koniec - $poczatek);
    $suma = 0.0;
    $n = 0;
    // for($i = $poczatek; $i < $koniec; $i += $h)
    // {
    //     $suma += (sin($i) + sin($i + $h))/2;
    // }
     
    for($i = 0; $i < $ilosc_losowan; $i++  )
    {
        $X = (double)rand($poczatek,$koniec);
        $y = (double)rand(-1.0,1.0);
     
        if(sin($x) * $y >= 0)
        {
            if(sin($x) > 0 )
            {
                if(sin($x)>$y)
                {
                    $n++;
                }
            }
            else
            {
                if(sin($x)<$y)
                {
                    $n++;
                }
            }
        }
    }


    $suma = $dl_przedzialu * 2 * ($n/$ilosc_losowan);



    echo $suma;
}

?>