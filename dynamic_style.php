
}
<?php
$biru ="#0000FF";
$hijau ="#00ff00";

if(date("h")>12) {
    $bg_color = $biru;
}
else{
    $bg_color = $hijau
}

?>
<style>
body {
    background-color: <?=$bg_color?>;
}
</style>