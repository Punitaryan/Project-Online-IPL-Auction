<?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        echo "Connections are made successfully::";
      $selected = mysql_select_db("test_db", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM teamlist ");
      
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row\['Team_ID'\]}</td>
              <td>{$row\['Team_Name'\]}</td>
              <td>{$row\['Owner_Name'\]}</td>
              <td>{$row\['Remaining_Credits'\]}</td>
              <td>{$row\['Total_Amount'\]}</td>
            </tr>\n";
          }
      
      mysql_close($connector); 
?>