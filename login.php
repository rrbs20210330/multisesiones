<?php 
session_start();
if(!isset($_SESSION['user'])){
    $_SESSION['user'] = $_POST['usuario'];
}
echo '<h2>Bienvenido '.$_SESSION["user"].'</h2>';
echo '<h2>'.$_POST['usuario'].'</h2>';
if(!isset($_SESSION['id'])){
    session_regenerate_id();
    $_SESSION['id']=session_id();
}
echo $_SESSION['id'];
echo '<a href="logout.php" type="button" title="Logout" >Logout</a>';