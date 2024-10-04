<?php
 include('connection.inc.php');
 /*
 $sql1="CREATE TABLE user(id INTEGER PRIMARY KEY AUTO_INCREMENT, username varchar(255) NOT NULL, pass varchar(255) NOT NULL,u_role TINYINT (1))";
 if(!mysqli_query($conn,$sql1))
 {
    echo "Error".mysqli_connect_error($conn); 
 }

 $sql2="CREATE TABLE category (category_id INTEGER PRIMARY KEY AUTO_INCREMENT, category_name varchar(255) NOT NULL)";
 if(!mysqli_query($conn,$sql2))
 {
    echo "Error".mysqli_connect_error($conn); 
 }

 $sql3 ="CREATE TABLE products ( product_id INT PRIMARY KEY AUTO_INCREMENT,
                                 category_id INT REFERENCES category(category_id),
                                 company_id INT REFERENCES company(company_id),
                                 product_name VARCHAR (255) NOT NULL,
                                 mrp INT ,
                                 saleing_price INT,
                                 short_desc VARCHAR(255),
                                 long_desc VARCHAR(255),
                                 stock INT, 
                                 add_date  TIMESTAMP ,
                                 product_status TINYINT (1)   
                                  )" ;
if(!mysqli_query($conn,$sql3))
   {
      echo "Error".mysqli_connect_error($conn); 
  }   
  else{
     echo "Table created";
  } 
  $sql31="ALTER TABLE products AUTO_INCREMENT=100";
  if(!mysqli_query($conn,$sql31))
   {
      echo "Error".mysqli_connect_error($conn); 
  } 
  $sql4="CREATE TABLE company(company_id INTEGER PRIMARY KEY AUTO_INCREMENT, company_name varchar(255) NOT NULL)";
 if(!mysqli_query($conn,$sql4))
 {
    echo "Error".mysqli_connect_error($conn); 
 }
 $sql41="ALTER TABLE company AUTO_INCREMENT=200";
 if(!mysqli_query($conn,$sql41))
  {
     echo "Error".mysqli_connect_error($conn); 
 } 

$sql5="CREATE TABLE address(address_id INTEGER PRIMARY KEY AUTO_INCREMENT,user_id INT REFERENCES user(id), bname varchar(255) NOT NULL,street varchar(255) NOT NULL,locality varchar(255) NOT NULL,city varchar(255) NOT NULL,pincode INTEGER)";
if(!mysqli_query($conn,$sql5))
{
   echo "Error".mysqli_connect_error($conn); 
}

$sql6="CREATE TABLE orders(order_id INTEGER PRIMARY KEY AUTO_INCREMENT,user_id INT REFERENCES user(id),prod_id INT,
qty MEDIUMINT, total INT ,buy_date DATE)";
if(!mysqli_query($conn,$sql6))
{
   echo "Error".mysqli_connect_error($conn); 
}


$sql7="CREATE TABLE cart(cart_id INTEGER PRIMARY KEY AUTO_INCREMENT,prod_id INT,
qty MEDIUMINT, total INT )";
if(!mysqli_query($conn,$sql7))
{
   echo "Error".mysqli_connect_error($conn); 
}
*/
?>