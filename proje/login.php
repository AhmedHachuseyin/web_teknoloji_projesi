<?php
$user = 'g211210586@sakarya.edu.tr';
$pass = 'g211210586';

if(isset($_POST[username])){
    $username = $_POST['username'];
    $password = $_POST['password'];

   if( $username==$user && $password==$pass){
        echo "Hoşgeldiniz g211210586";
   }
   else{
       echo "Hatalı giriniz";
   }
}
?>