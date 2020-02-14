<?php
function connection ($db){
session_start();
if(isset($_POST['login']) && isset($_POST['password']))
{
    //Recupération des infos de la BDD
    $db=mysqli_connect("localhost","root","","partiel");

    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Connexion échouée " . mysqli_connect_error();
    }
    $login = ($_POST['login']); 
    $password = ($_POST['password']);
    
    //condition
    if($login !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM partiel where 
              login = '".$login."' and password = '".$password."' ";
        $requete = mysqli_query($db,$requete);
        $reponse = mysqli_fetch_array($requete);


        $count = $reponse['count(*)'];
        if($count!=0)// si ok alors affichage de index
        {
           $_SESSION['login'] = $login;
           header('Location: /index.php');
        }
        else // sinon affichage d'une page précisant que le login est erroné
        {
           header('Location: /badlogin.php'); //Page de badlogin
        }
    }
}
mysqli_close($db); //fermeture connection
}
?>