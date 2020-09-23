<?php 

$tanya=readline("Pilih mana (yes/no) ?");

if ($tanya=="yes")
{
    echo "Kamu memilih yes";
}elseif($tanya=="no") //jika memilih no
{
    echo "jika memilih no";
}elseif($tanya=="maybe") // jika memilih maybe
{
    echo "jika memilih maybe";
}
else //jika tidak memilih yes/no/maybe ( tidak dalam pilihan yang tersedia)
{
    echo "kamu tidak memilih pilihan yang tersedia !!!!!!"; 
}

echo PHP_EOL;

$menu=readline("pilih angka 1-3 ?");

//pilih input yang akan diuji