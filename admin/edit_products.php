<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product Page</title>
</head>
<body>

<?php
include("Php and Database Connection.php");
?>

<?php
echo "<table style='border:1px solid black;'>
<thead>
<tr>
<th style='border:1px solid black;'>Our Products</th>
<th style='border:1px solid black;'>Finest Work</th>
<th style='border:1px solid black;'>Color Variants</th>
<th style='border:1px solid black;'>Parallax Background</th>
<th style='border:1px solid black;'>Clean Code</th>
<th style='border:1px solid black;'>Edit</th>
</tr>
</thead>
<tbody>";

$sql="SELECT * FROM products WHERE ID='1'";
$result=$conn->query($sql);
    if($result->num_rows>0)
         {
             while($row=$result->fetch_assoc())
                    {
                        $ID=$row['ID'];
                        $Our_Products=$row['Our_Products'];
                        $Finest_Work=$row['Finest_Work'];
                        $Color_Variants=$row['Color_Variants'];
                        $Parallax_Background=$row['Parallax_Background'];
                        $Clean_Code=$row['Clean_Code'];
                        
                        echo "
                        <tr>
                        <td style='border:1px solid black;'>$Our_Products</td>
                        <td style='border:1px solid black;'>$Finest_Work</td>
                        <td style='border:1px solid black;'>$Color_Variants</td>
                        <td style='border:1px solid black;'>$Parallax_Background</td>
                        <td style='border:1px solid black;'>$Clean_Code</td>
                        <td style='border:1px solid black;'><a href='edit_products.php?edit=$ID'>Edit</a></td>
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
    $sql="SELECT * FROM products WHERE ID='1'";
    $result=$conn->query($sql);
        if($result->num_rows>0)
             {
                 while($row=$result->fetch_assoc())
                        {
                            $Our_Products=$row['Our_Products'];
                            $Finest_Work=$row['Finest_Work'];
                            $Color_Variants=$row['Color_Variants'];
                            $Parallax_Background=$row['Parallax_Background'];
                            $Clean_Code=$row['Clean_Code'];
                            ?>
                            
                            <form action="" method="post">
                            <br>
                            
                            <textarea name="1" cols="30" rows="10"><?php echo $Our_Products;?></textarea> 
                            <br>
                            
                            <textarea name="2" cols="30" rows="10"><?php echo $Finest_Work;?></textarea> 
                            <br>
                            
                            <textarea name="3" cols="30" rows="10"><?php echo $Color_Variants;?></textarea> 
                            <br>
                            
                            <textarea name="4" cols="30" rows="10"><?php echo $Parallax_Background;?></textarea> 
                            <br>
                            
                            <textarea name="5" cols="30" rows="10"><?php echo $Clean_Code;?></textarea> 
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
    $Our_Products= $_POST['1'];
    $Finest_Work= $_POST['2'];
    $Color_Variants= $_POST['3'];
    $Parallax_Background= $_POST['4'];
    $Clean_Code= $_POST['5'];

    $sql="UPDATE products SET Our_Products='$Our_Products',Finest_Work='$Finest_Work',Color_Variants='$Color_Variants',Parallax_Background='$Parallax_Background',Clean_Code='$Clean_Code' WHERE ID='1'";
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