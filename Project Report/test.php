<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <div id=drop>
    <?php
      //session_start();
      if (!empty ($_SESSION['login']) )
      {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "railway";
        $username=$_SESSION['username'];
        $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
        $SELECT = "SELECT `p_id`, CONCAT(`first_name`,`mid_name`,`last_name`) as name, `gender`, `DOB`, `mobile`, `email`, `city` FROM `passenger` WHERE p_id= '$username';";
        $result=mysqli_query($conn,$SELECT);
        $row=mysqli_fetch_assoc($result);
          ?><table> 
                <tr>
                  <td><?php echo $row['p_id'];   ?> </td>
                  <td><?php echo $row['name'];     ?> </td>
                  <td><?php echo $row['email'];     ?> </td>
                  <td><?php echo $row['DOB'];?>  </td>
                  <td><?php echo $row['city'] ;      ?> </td>
                </tr>
              </table> 
            <?php
      }			
    ?>		
  </div>
</body>
</html>