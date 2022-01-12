<?php
// Como obter os valores hush dunha cadea -string-
// neste caso un contrasinal

// MODO 1
// echo password_hash("contrasinal",  PASSWORD_BCRYPT, ['cost'=>12]) 

// MODO 2
/**
 * $value = "contrasinal";  // definir unha variable que conterá a cadea - contrasinal- de interes
 * $hash = password_hash($value, PASSWORD_BCRYPT, ['cost'=>12]); // outra variable que obten o hush da anterior
 * echo $hash // amosar o valor adquirido da segunda variable
 */

/** usar para cada unha das contrasinais dos usuarios operador1, operador2 */
// MODO 3
$password = 'admin'; /* podemos usar diferentes modos de obter o mesmo */  
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
var_dump($hashed_password);
?>


<!-- INSERT INTO usuarios VALUES
    (1,"admin","$2y$10$jLNQ9dxhxi9AFzElR8cWJegOdgB7BMp/gztXg.nhZoUZ0Ch9c53CC",null,1,1,1),
    (2,"operador1","$2y$10$rFhvZ2GiwDYBRuTIAI/0PuA6M1y/9oVQzCKAX/0cntaerVyhRUbxu",null,1,0,1),
    (3,"operador2","$2y$10$w0P45dSrQ3j0eFax1f4Wp.Cq8FRfaJw/bsbSVd.S0dmdoezxB9Ioy",null,0,0,1)
; -->

