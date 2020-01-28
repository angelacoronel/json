<?php
$json = file_get_contents('http://192.168.64.2/json/json-1.php');

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
        <li><?php echo $value['artist'];?></li>
        <li><?php echo $value['genre'];?></li>
        <li><?php echo $value['album'];?></li>
    </ul>
 
<?php
}
?>
