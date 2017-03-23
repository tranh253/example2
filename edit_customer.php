<?php include "menu.php";?>
<h2>Edit Customer</h2>
<form class="" action="update_all_customers.php" method="post">
  <table border="0">
    <tr>
      <TH>Firstname</TH><TH>Lastname</TH><TH>Streetaddress</TH>
    </tr>

  <?php
  include "connection.php";
  $myquery="SELECT firstname,lastname,streetaddress,id_customers FROM customers";
  $customers_data=$db->query($myquery);

  foreach ($customers_data as $row) {
    echo '<tr><td><input type ="text" name="fn[]" value="'.$row['firstname'].'"/></td>';
    echo '<td><input type ="text" name="ln[]" value="'.$row['lastname'].'"/></td>';
    echo '<td><input type ="text" name="ad[]" value="'.$row['streetaddress'].'"/></td>';
    echo '<input type="hidden" name ="id[]" value="'.$row['id_customers'].'"/>';
    echo '</tr>';
  }
  ?>
  </table>
  <input type="submit" name="btnUpdateAll" value="Update">
</form>
<?php include "footer.php"; ?>
