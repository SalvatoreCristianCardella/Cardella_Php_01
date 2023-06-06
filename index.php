<?php
/*ES1
Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array*/
/*$array = [2,3,6,4,8,9,78,345,123,678,901];
$i=0;
$sum=0;
foreach($array as $element){
    if ($element%2==0) {
        $i++;
        $sum += $element;
        echo $element . "\n";
    }
}
echo $sum . " somma \n";
$media = $sum/$i;
echo $media . " media \n";*/

/*ES2
Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere*/
/*$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ['name' => 'Andrea', 'surname' => 'Palermo', 'gender' => 'M'],
  ['name' => 'Luis', 'surname' => 'Rodriguez', 'gender' => 'M'],
  ['name' => 'Federico', 'surname' => 'Melucci', 'gender' => 'F'],
];
foreach ($users as $person) {
    if ($person["gender"]=='M') {
        echo "Buongiorno Sig. " . $person["name"] . " " . $person["surname"] . "\n";
    }
    else if($person["gender"]=='F'){
        echo "Buongiorno Sig.ra " . $person["name"] . " " . $person["surname"] . "\n";
    }
    else{
        echo "Buongiorno Signorina " . $person["name"] . " " . $person["surname"] . "\n";
    }
}*/


/*ES3
Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY66".*/
/*for ($i=1; $i < 101; $i++) { 
    if ($i%3==0 && $i%5==0) {
        echo "HACKADEMY77 \n";
    }else if ($i%5==0) {
       echo "JAVASCRIPT \n";
    }else if ($i%3==0) {
        echo "PHP \n";
    }else{
        echo $i . "\n";
    }
}*/

/*ES4
Pushate su Github chiamando la repository php_01_nome_cognome e inviate il link sul canale presente su discord*/

?>