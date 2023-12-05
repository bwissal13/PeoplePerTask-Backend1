<?php
include "conex.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   <table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>jobs</th>
        <th>hobies</th>
    </tr>
    <?php
    $sql ="Select * from users";
    $result=mysqli_query($conn,$sql);
    if($result){
         while ($row = mysqli_fetch_assoc($result)){
             echo "<tr>

        <td>" . $row['id'] . "</td>
        <td>" . $row['full_name'] . "</td>
        <td>" . $row['jobs'] . "</td>
        <td>" . $row['hobies'] . "</td>
        <td>'<button type='button'> <a href=''>delete</a></button>'</td>
    </tr>";
         }
    };
   
    ?>
   </table> 
</body>
</html>