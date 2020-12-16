<?php 
#El nombre del host
$host='localhost';
#El nombre de la base de datos
$db_name='list_sales';
#El nombre del usuario de la base de datos
$username='root';
#La contraseña
$password='';
#Se intenta hacer ...
try{
    #Para conectarse... 
        #Donde PDO significa Php Data Objects (PDO)
        #Es para acceder a los datos de una bd
    $con=new PDO("mysql=host{$host};dbname={$db_name}",$username,$password);
}
#En caso que algo salga mal
catch(PDOException $exeption){
    #Muestra el mensaje
    echo "Connection error:".$exeption->getMessage();
}
?>