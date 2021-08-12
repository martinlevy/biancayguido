<?php
if($_POST){
    $json = file_get_contents("invites.json");
    $invites = json_decode($json);

    $invite["name"] = $_POST["name"];
    $invite["templo"] = $_POST["templo"];
    $invite["fiesta"] = $_POST["fiesta"];


    $invites[] = $invite;
    file_put_contents("invites.json",json_encode($invites));
    //var_dump($invites);
}
?>
<html>
    <h2>gracias</h2>
</html>