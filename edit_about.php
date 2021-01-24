<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit About Page </title>
    <link href="img/B_icon.png" rel="icon">
</head>
<body>
<?php
$user=$_GET['user'];
?>
<?php
include("Php and Database Connection.php");
?>

<?php
echo "<table style='border:1px solid black;'>
<thead>
<tr>
<th style='border:1px solid black;'>About Us</th>
<th style='border:1px solid black;'>Team Bytewise</th>
<th style='border:1px solid black;'>Our Vision</th>
<th style='border:1px solid black;'>Paragraph#1</th>
<th style='border:1px solid black;'>Paragraph#2</th>
<th style='border:1px solid black;'>Edit</th>
</tr>
</thead>
<tbody>";

$sql="SELECT * FROM about WHERE ID='1'";
$result=$conn->query($sql);
    if($result->num_rows>0)
         {
             while($row=$result->fetch_assoc())
                    {
                        $ID=$row['ID'];
                        $About_us=$row['About_us'];
                        $Team_Bytewise=$row['Team_Bytewise'];
                        $Our_vision=$row['Our_vision'];
                        $A=$row['A'];
                        $About_2=$row['About_2'];
                        
                        echo "
                        <tr>
                        <td style='border:1px solid black;'>$About_us</td>
                        <td style='border:1px solid black;'>$Team_Bytewise</td>
                        <td style='border:1px solid black;'>$Our_vision</td>
                        <td style='border:1px solid black;'>$A</td>
                        <td style='border:1px solid black;'>$About_2</td>
                        <td style='border:1px solid black;'><a href='edit_about.php?edit=$ID'>Edit</a></td>
                        </tr>";   
                    }
                    
                              }

                              else
                              {
                                  echo "ERROR";
                              }
                       
                              echo "</tbody>
                              </table>";
                   ?>
<?php
    $sql="SELECT * FROM about WHERE ID='1'";
    $result=$conn->query($sql);
        if($result->num_rows>0)
             {
                 while($row=$result->fetch_assoc())
                        {
                            $About_us=$row['About_us'];
                            $Team_Bytewise=$row['Team_Bytewise'];
                            $Our_vision=$row['Our_vision'];
                            $A=$row['A'];
                            $About_2=$row['About_2'];
                            ?>
                            
                            <form action="" method="post">
                            <br>

                            <strong>
    <a href="dashboard.php?user=<?php echo $user; ?>" style="float:right;">Click Here to return to dashboard!</a>
</strong>
                            
                            <textarea name="1" cols="30" rows="10"><?php echo $About_us;?></textarea> 
                            <br>
                            
                            <textarea name="2" cols="30" rows="10"><?php echo $Team_Bytewise;?></textarea> 
                            <br>
                            
                            <textarea name="3" cols="30" rows="10"><?php echo $Our_vision;?></textarea> 
                            <br>
                            
                            <textarea name="4" cols="30" rows="10"><?php echo $A;?></textarea> 
                            <br>
                            
                            <textarea name="5" cols="30" rows="10"><?php echo $About_2;?></textarea> 
                            <br>

                            <br>
                            <input type="submit" name="btn" value="Submit"/>
                            </form>
<?php
    }
}
?>

<?php
if(isset($_POST['btn']))
{
    $About_us= $_POST['1'];
    $Team_Bytewise= $_POST['2'];
    $Our_vision= $_POST['3'];
    $A= $_POST['4'];
    $About_2= $_POST['5'];

    $sql="UPDATE about SET About_us='$About_us',Team_Bytewise='$Team_Bytewise',Our_vision='$Our_vision', About_2='$About_2', A='$A' WHERE ID='1'";
    if($conn->query($sql)===TRUE)
        {
            echo "DATA EDITED SUCCESSFULLY";
        }

        else
        {
            echo "DATA EDITED SUCCESSFULLY";
        }
}
?> 

</body>
</html>