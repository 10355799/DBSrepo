<HTML>
<BODY>
<?php
echo "Hello World!";
if(!empty($_GET['name'])){
	echo "<BR>And a special shout out to ".$_GET['name'];
}
?>
</BODY>

</HTML>