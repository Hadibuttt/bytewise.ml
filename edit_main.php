<?php
$user=$_GET['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="img/B_icon.png" rel="icon">
    <title>Edit Main Page </title>

</head>
<body>

<?php
include("Php and Database Connection.php");
?>

<?php
echo "<table style='border:1px solid black;'>
<thead>
<tr>
<th style='border:1px solid black;'>Vision</th>
<th style='border:1px solid black;'>Color Variants</th>
<th style='border:1px solid black;'>Parallex Background</th>
<th style='border:1px solid black;'>Clean Code</th>
<th style='border:1px solid black;'>About Paragraph#2</th>
<th style='border:1px solid black;'>Unlimited Variant</th>
<th style='border:1px solid black;'>Responsive Layout</th>
<th style='border:1px solid black;'>Clean Design</th>
<th style='border:1px solid black;'>Animated Elements</th>
<th style='border:1px solid black;'>Many More</th>
<th style='border:1px solid black;'>Edit</th>
</tr>
</thead>
<tbody>";

$sql="SELECT * FROM main WHERE ID='1'";
$result=$conn->query($sql);
    if($result->num_rows>0)
         {
             while($row=$result->fetch_assoc())
                    {
                        $ID=$row['ID'];
                        $Vision=$row['Vision'];
                        $Color_Variants=$row['Color_Variants'];
                        $Parallex_Background=$row['Parallex_Background'];
                        $Clean_Code=$row['Clean_Code'];
                        $About_Paragraph2=$row['About2'];
                        $Unlimited_Variant=$row['Unlimited_Variant'];
                        $Responsive_Layout=$row['Responsive_Layout'];
                        $Clean_Design=$row['Clean_Design'];
                        $Animated_Elements=$row['Animated_Elements'];
                        $Many_More=$row['Many_More'];

                        echo "
                        <tr>
                        <td style='border:1px solid black;'>$Vision</td>
                        <td style='border:1px solid black;'>$Color_Variants</td>
                        <td style='border:1px solid black;'>$Parallex_Background</td>
                        <td style='border:1px solid black;'>$Clean_Code</td>
                        <td style='border:1px solid black;'>$About_Paragraph2</td>
                        <td style='border:1px solid black;'>$Unlimited_Variant</td>
                        <td style='border:1px solid black;'>$Responsive_Layout</td>
                        <td style='border:1px solid black;'>$Clean_Design</td>
                        <td style='border:1px solid black;'>$Animated_Elements</td>
                        <td style='border:1px solid black;'>$Many_More</td>                                                                     
                        <td style='border:1px solid black;'><a href='edit_main.php?edit=$ID'>Edit</a></td>
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
    $sql="SELECT * FROM main WHERE ID='1'";
    $result=$conn->query($sql);
        if($result->num_rows>0)
             {
                 while($row=$result->fetch_assoc())
                        {
                            $Vision=$row['Vision'];
                            $Color_Variants=$row['Color_Variants'];
                            $Parallex_Background=$row['Parallex_Background'];
                            $Clean_Code=$row['Clean_Code'];
                            $About_Paragraph2=$row['About2'];
                            $Unlimited_Variant=$row['Unlimited_Variant'];
                            $Responsive_Layout=$row['Responsive_Layout'];
                            $Clean_Design=$row['Clean_Design'];
                            $Animated_Elements=$row['Animated_Elements'];
                            $Many_More=$row['Many_More'];
                            ?>

<form action="" method="post">
<br>

<strong>
    <a href="dashboard.php?user=<?php echo $user; ?>" style="float:right;">Click Here to return to dashboard!</a>
</strong>

<textarea name="1" cols="30" rows="10"><?php echo $Vision;?></textarea> 
<br>

<textarea name="2" cols="30" rows="10"><?php echo $Color_Variants;?></textarea> 
<br>

<textarea name="3" cols="30" rows="10"><?php echo $Parallex_Background;?></textarea> 
<br>

<textarea name="4" cols="30" rows="10"><?php echo $Clean_Code;?></textarea> 
<br>

<textarea name="6" cols="30" rows="10"><?php echo $About_Paragraph2;?></textarea> 
<br>

<textarea name="7" cols="30" rows="10"><?php echo $Unlimited_Variant;?></textarea> 
<br>

<textarea name="8" cols="30" rows="10"><?php echo $Responsive_Layout;?></textarea> 
<br>

<textarea name="9" cols="30" rows="10"><?php echo $Clean_Design;?></textarea> 
<br>

<textarea name="10" cols="30" rows="10"><?php echo $Animated_Elements;?></textarea> 
<br>

<textarea name="11" cols="30" rows="10"><?php echo $Many_More; ?></textarea> 
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
    $Vision= $_POST['1'];
    $Color_Variants= $_POST['2'];
    $Parallex_Background= $_POST['3'];
    $Clean_Code= $_POST['4'];
    $About_Paragraph2= $_POST['6'];
    $Unlimited_Variant= $_POST['7'];
    $Responsive_Layout= $_POST['8'];
    $Clean_Design= $_POST['9'];
    $Animated_Elements= $_POST['10'];
    $Many_More= $_POST['11'];

    $sql="UPDATE main SET Vision='$Vision',Color_Variants='$Color_Variants',Parallex_Background='$Parallex_Background',Clean_Code='$Clean_Code',About2='$About_Paragraph2',Unlimited_Variant='$Unlimited_Variant',Responsive_Layout='$Responsive_Layout',Clean_Design='$Clean_Design',Animated_Elements='$Animated_Elements',Many_More='$Many_More' WHERE ID='1'";
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