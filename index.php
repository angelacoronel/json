<?php
$json = file_get_contents('https://coronel-app.herokuapp.com/json-1.php');

$data = json_decode($json,true);
$list = $data['Tracks'];
//$list = $data['pets'][1];
?>
<h1> Tracks </h1>
<?php
foreach($list as $value){
    ?>
    <ul>
        <h2><?php echo $value['title'];?></h2>
        <li>Artist: <?php echo $value['artist'];?></li>
        <li>Genre: <?php echo $value['genre'];?></li>
        <li>Alubm: <?php echo $value['album'];?></li>
    </ul>
 
<?php
}
?>
