<?php 
  require('../box.php');
  showBox("echo",__LINE__);
  echo "<h2>Hello World!</h2>";
  echo "<h2>Hello World!", " ", "<span>SPAN</span>", "</h2>";

  $hello = "Hello World!";
  $span = "<span>SPAN</span>";

  echo "<h2>$hello and $span</h2>";

  // privando variavel

  $day = "dia";
  echo "<h2>1 $day</h2>";
  echo "<h2>5 {$day}s</h2>";
  ?>

<h1><?= "{$day}" ;?></h1>
<?php
showBox("print",__LINE__);
// o print funciona como o echo, porém não se pode usar ,
print( $hello );
print( $span );
showBox("print_r",__LINE__);
// print_r é usado para mostrar arrays

$array = array(
  "nome" => "João",
  "idade" => "20",
  "cidade" => "São Paulo"
);

print_r($array);
echo "<pre>", print_r($array, true), "</pre>";

showBox("printf",__LINE__);
// passa argumetos para strting trocando %s, %d, %f para os repectivos valores

$article = "<article>
  <p>Nome = %s</p> 
  <p>Idade = %d</p>
  <p>Cidade = %s</p>
</article>";

$nome = "João";
$idade = 20;
$cidade = "São Paulo";

printf($article, $nome, $idade, $cidade);
// sprintf retorna a string formatada
echo sprintf($article, $nome, $idade, $cidade);

showBox("vprintf",__LINE__);
// vprintf é usado para mostrar varios valores, ou seja, varios argumentos que estão dentro de um array
vprintf($article, $array);

// vsprintf retorna a string formatada
$var = vsprintf($article, $array);
echo $var;

showBox("var_dump",__LINE__);
// var_dump mostra o tipo de dado e o valor, usada para debug
echo "<pre>";
  var_dump($array, $hello, $span);
echo "</pre>";
?>