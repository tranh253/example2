<?php include "menu.php"; ?>
<h2>SQL-code for the database</h2>
<pre>
  CREATE DATABASE company;

  GRANT ALL ON company.* TO 'webuser'@'localhost' IDENTIFIED BY 'webpass';
  USE company;

  CREATE TABLE customers(
  id_customers SMALLINT PRIMARY KEY auto_increment,
  firstname VARCHAR(30),
  lastname VARCHAR(30),
  streetaddress VARCHAR(20)
  ) Engine=InnoDB;

  INSERT INTO customers(firstname,lastname) VALUES('Ann','Smith');
  INSERT INTO customers(firstname,lastname) VALUES('Tom','Jones');

  CREATE TABLE cats(
    id_cats SMALLINT PRIMARY KEY auto_increment,
    name VARCHAR(30),
    color VARCHAR(20),
    id_customers SMALLINT,
    FOREIGN KEY (id_customers) REFERENCES customers(id_customers)
      ON DELETE RESTRICT ON UPDATE CASCADE) Engine=InnoDB;

</pre>
<?php include "footer.php"; ?>
