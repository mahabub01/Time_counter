<?php
session_start();



$_SESSION['duration'] = 12;
$_SESSION['start_time'] = date('Y-m-d H:i:s');

$end_time = date('Y-m-d H:i:s',strtotime('+'.$_SESSION['duration'].'minutes',strtotime($_SESSION['start_time'])));

$_SESSION['end_time'] = $end_time;

?>

<script type="text/javascript">
	window.location = "index.php";
</script>