## mysql examples

For these examples make sure that you have started both apache and mysql in xampp

1. Use phpmyadmin to create a database called proshop
2. Create a database user called myprouser and set his password as password
3. in phpmyadmin go to the proshop database and select the import tab
4. select the proshop.sql file and click go.  This will create and 
populate a table called products in your proshop database

### Selecting and displaying products in a web page

1. In your browser run the products.php page.  This page will use dbconnection.php to open a connection to the mysql server and your database.  It will also use selectProducts.php to read all product information and then generate an HTML representation of that information



