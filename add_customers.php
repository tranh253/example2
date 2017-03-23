<?php include "menu.php"; ?>
<h2>Add Customer</h2>
<form class="" action="insert_customers.php" method="post">
<label for="fn">Fistname</label><br />
<input type="text" name="fn" id="fn" value="" required=""><br>

<label for="ln">Lastname</label><br />
<input type="text" name="ln" id="ln" value="" required=""><br>

<label for="ad">Streetaddress</label><br />
<input type="text" name="ad" id="ad" value=""><br>

<input type="submit" name="btnAdd" value="Add">
</form>


<?php include "footer.php"; ?>
