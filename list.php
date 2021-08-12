<?php
$list = json_decode(file_get_contents("invites.json"));
for($i = 0;$i < count($list);$i++){
    echo '<p class="lista">'. $list[$i]->name."  templo: ".$list[$i]->templo." Fiesta: ".$list[$i]->fiesta."</p>";
}
?>
<style>
    .lista{
        color: red
    }
</style>