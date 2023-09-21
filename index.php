<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "strlen() - Devuelve la longitud de una cadena";
echo "<br>";
echo strlen("Hello world!");
echo "<br>";
echo "str_word_count() - Contar palabras en una cadena";
echo "<br>";
echo str_word_count("Hello world!");
echo "<br>";
echo "strrev() - Invertir una cadena";
echo "<br>";
echo strrev("Hello world!");
echo "<br>";
echo "strpos() - Buscar un texto dentro de una cadena";
echo "<br>";
echo strpos("Hello world!", "world");
echo "<br>";
echo "str_replace() - Reemplazar texto dentro de una cadena";
echo "<br>";
echo str_replace("world", "Dolly", "Hello world!");
echo "<br>";
?> 
</body>
</html>