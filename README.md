Inventory-Tracker
=================

A simple way to see mysql tables in your browser


This project was initially created to help me keep my sql skills sharp, hence the lack of a user controls for the project (All updates and inserts must be done in the mysql terminal).  The php will list all contents of a given table, minus the first column (ID columns in my case).  A sample table would look like this:



+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| ID       | int(11)      | NO   | PRI | NULL    | auto_increment |
| Output   | decimal(4,1) | NO   |     | NULL    |                |
| Quantity | int(11)      | NO   |     | NULL    |                |
| LDO      | binary(1)    | NO   |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+


