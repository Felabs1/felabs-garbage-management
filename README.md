# felabs-garbage-management

## Tech Stack

- Linux
- Apache
- Mysql
- PHP

## Front End

- HTML
- Css
- Javascript
- JQuery
- w3css

## Installation instructions
### Windows
1. Download Xampp ``` https://www.apachefriends.org/download.html ```
2. run xampp control
3. Start Apache and mysql
4. copy the folder containing the files to htdocs
5. in the folder open ```front_connection.php``` file.
6. change the connection variables based on your database preferences on this line
7. ```php
8. $crud = new Crud("localhost", "root", "", "garbage");
9. ```
10. go to the browser and visit ```http://localhost/phpmyadmin```
