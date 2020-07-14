<?php

// SNACK #1
// Creiamo un array 'matches' contenente altri array 
// i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
// Ogni array della partita avrà una squadra di casa e una squadra ospite, 
// punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60 


// Creo array 
$array_matches = [
  [ 'team1' => 'Olimpia Milano',
    'team2' => 'Cantù',
    'score1' => 55,
    'score2' => 60,
  ],

  [ 'team1' => 'Lecce',
    'team2' => 'Juve',
    'score1' => 50,
    'score2' => 50,
  ],

  [ 'team1' => 'Milan',
    'team2' => 'Inter',
    'score1' => 30,
    'score2' => 0,
  ],
];

var_dump($array_matches);


// SNACK #2 
// Passare come parametri GET name, mail e age e verificare 
// (cercando i metodi che non conosciamo nella documentazione) che:
//   1. name sia più lungo di 3 caratteri, 
//   2. che mail contenga un punto e una chiocciola
//   3. e che age sia un numero.
//   Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”  


$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

var_dump($name);
var_dump($mail);
var_dump($age);

if ( empty($name) || empty($mail) || empty($age) ) {
  echo 'Accesso negato';
} elseif ( strlen($name) <= 3 ) {
  echo 'Accesso negato';
} elseif ( strpos($mail, '@') === false || strpos($mail, '.') === false ) {
  echo 'Accesso negato';
} elseif (is_numeric($age) === false) {
  echo 'Accesso negato';
} else {
  echo 'Accesso risucito';
}

?>




<!-- SNACK #1 -->
<ul>
<?php for ($i=0; $i < count($array_matches); $i++) { ?>
  <?php $this_match = $array_matches[$i]; ?>
  
  <li>
    <?php echo $this_match['team1']?> - <?php echo $this_match['team2']?> | <?php echo $this_match['score1']?>-<?php echo $this_match['score2']?>
  </li>
<?php } ?>
</ul>


