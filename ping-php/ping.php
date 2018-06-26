<p>ping</p> 
<form method="POST"> 
  <input type="text" name="ip" placeholder="ip">
  <input type="submit" value="send">
</form> 
<textarea style="width: 500px; height: 500px" placeholder="result"> 
<?php 
if (isset($_POST['ip'])) { 
  $ip = $_POST['ip'];
  @system("timeout 2 bash -c 'ping -c 1 $ip' 2>&1");
}
?>
</textarea>
