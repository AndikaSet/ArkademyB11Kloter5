<?php 
//function hitung huruf vokal
    function count_vowels($string){
        $kata = strtolower($string);
        $pecah = str_split($kata); 
        $count=0;
        for ($i=0;$i<sizeof($pecah);$i++){
        if ($pecah[$i]== "a" || $pecah[$i]== "i" || $pecah[$i]== "u" || $pecah[$i]==  "e"|| $pecah[$i] == "o"){
                $count++;
            }
        }
       
        echo $count;
    }

    echo ("hitung huruf vokal : <br>");
    echo ("programmer <br>");
    //hitung huruf vokal programmer
    count_vowels("programmer <br>");

    echo "<br>hmmm..<br>";

    //hitung huruf vokal hmmm..
    count_vowels("hmmm..<br>");
   
?>