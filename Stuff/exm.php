<html>
<?php
echo "<strong>NAME:",$_POST["name"];
echo "<br>E-mail:",$_POST["email"];
echo "</strong>";
?>
<br>
<form action="\result.php" method=post>
<fieldset>
<legend>Q-1</legend>
What is this " 1 " number?
<br>
<input type="radio" name="op1" value="A">one
<input type="radio" name="op1" value="B">two
<input type="radio" name="op1" value="C">three
<input type="radio" name="op1" value="D">four
</fieldset>
<br>
<fieldset>
<legend>Q-2</legend>
What is this " 2 " number?
<br>
<input type="radio" name="op2" value="2A" >one
<input type="radio" name="op2" value="2B">two
<input type="radio" name="op2" value="2C">three
<input type="radio" name="op2" value="2D">four
</fieldset>
<br>
<fieldset>
<legend>Q-3</legend>
What is this " 3 " number?
<br>
<input type="radio" name="op3" value="3A">one
<input type="radio" name="op3" value="3B" >two
<input type="radio" name="op3" value="3C">three
<input type="radio" name="op3" value="3D">four
</fieldset>
<input type="submit">
</form>
</html>