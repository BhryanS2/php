<?php 
  require("../box.php");
  showBox("variáveis", __LINE__);
  // É recomendado escrever as variveis em snake_case ou camelCase
  $userFirstName = "Bhryan";
  $userLastName = "Stepenhen";
  echo "<h2>Meu nome é $userFirstName $userLastName</h2>";
  // variavel variavel
  $userName = "user";
  echo "<h2>Meu nome é $userName [ userName ]</h2>";
  $$userName = "teste";
  echo "<h2>Meu nome é $user [ user ]</h2>";

  // referencias de variaveis
  $calcA = 10;
  $calcB = 20;
  $calcB = &$calcA;

  echo "<pre>";
  var_dump([
    "a" =>  $calcA,
    "b" =>  $calcB,
  ]);
  echo "</pre>";
  $calcB = 50;

  echo "<pre>";
  var_dump([
    "a" =>  $calcA,
    "b" =>  $calcB,
  ]);
  echo "</pre>";

  showBox("booleano", __LINE__);
  // tipos de dados
  $isTrue = true;
  $isFalse = false;

  echo "<pre>";
  var_dump([
    "true" =>  $isTrue,
    "false" =>  $isFalse,
    "condition" =>  $isTrue && $isFalse,
  ]);
  echo "</pre>";

  showBox("callback", __LINE__);
  // tem um retono que é executado
  $code = "<span>Hello World!span>";
  $newCode = call_user_func("strip_tags", $code);
  var_dump($newCode);

  showBox("outros tipos", __LINE__);

  $isNull = null;
  $isString = "Bhryan";
  $isArray = [1, 2.0, 3.00000];
  $isObject = new stdClass();
  $isObject->name = "Bhryan";
  $isObject->age = 17;
  $isObject->isMale = true;
  echo "<pre>";
  var_dump([
    "true" =>  $isTrue,
    "false" =>  $isFalse,
    "null" =>  $isNull,
    "string" =>  $isString,
    "array" =>  $isArray,
    "object" =>  $isObject,
  ]);
  echo "</pre>";