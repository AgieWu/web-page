<!-- Dane konfiguracyjne oraz łączenie z bazą danych -->
<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'toor1');
   define('DB_DATABASE', 'kucharzenie');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>