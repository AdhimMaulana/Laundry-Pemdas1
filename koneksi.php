<?php

$user = $_POST['username'];

if ($user =='ujilsp' && $_POST['pass'] =='lsp') {
   echo "";
   header("location: home.php");
}
else {
   echo "Gagal Login";
   header("location: index.php");
} 
?>