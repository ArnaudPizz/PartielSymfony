<?php
function connection ($db){
session_start();
if(isset($_POST['login']) && isset($_POST['password']))
{
    $db=mysqli_connect("localhost","root","","partiel");

    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Connexion échouée " . mysqli_connect_error();
    }
    $login = ($_POST['login']); 
    $password = ($_POST['password']);
    
    if($login !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM partiel where 
              login = '".$login."' and password = '".$password."' ";
        $requete = mysqli_query($db,$requete);
        $reponse = mysqli_fetch_array($requete);


        $count = $reponse['count(*)'];
        if($count!=0)
        {
           $_SESSION['login'] = $login;
           header('Location: /index.php');
        }
        else
        {
           header('Location: /badlogin.php'); //Page de badlogin
        }
    }
}
mysqli_close($db); //fermeture connection
}
?>