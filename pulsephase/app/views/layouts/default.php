<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PulsePhase:100</title>
<!-- <link rel="stylesheet" href="<?=PROOT?>" media="screen" title="no title" charset="utf-8"> -->
<!-- <script src="<?=PROOT?>js/script"></script> -->

<?= $this->content('head'); ?>
<!-- Bootstrap css -->
<link href="<?=PROOT?>css/pulse100.css" rel="stylesheet">

</head>

<body>

<!-- var_dump($this); -->
<!-- each view layout contains a controllerAction with which to specify a view layout action method -->
<link href="<?=PROOT?>css/body_styles.css" rel="stylesheet">
<div style="width:100%;">

<div style="position:float; left:5px; top: 5px;">
<h1 style="margin-top:2em;">Sovereign Search: <?php echo $this->getPulse(); ?></h1>
<form>
<input id="sovereignSearch" type="text" placeholder="find someone/something" class="sovereignSearch"/><br>
<center><input type="button" value="Search" class="searchB" onclick="searchS()"/></center>
</div>
<br><br>
</div>
<img src="<?php echo isset($_SESSION['Root']) ? '../' : PROOT;?>ruonA.png" style="width:28%; position:fixed; top:0px; left:72%;" />
<?php echo "<script>
function searchS(){
	window.location.href = '".PROOT."media/respond/' + document.getElementById('sovereignSearch').value;
}
</script>";

?>
<?= $this->content('body'); ?>
</body>

</html>

