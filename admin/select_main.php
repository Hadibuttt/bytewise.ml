<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select Main Page </title>
</head>
<body>
    
<?php
include("Php and Database Connection.php");
?>

<!--Select Query of whole database-->
<?php
echo "<table style='border:1px solid black;height:100px;'>
<thead>
<tr>
    <th style='border:1px solid black;'>Vision</th>
    <th style='border:1px solid black;'>Color Variants</th>
    <th style='border:1px solid black;'>Parallex Background</th>
    <th style='border:1px solid black;'>Clean Code</th>
    <th style='border:1px solid black;'>About Paragraph#1</th>
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
?>

<?php
$sql="SELECT * FROM main";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
       {
           $ID=$row['ID'];
           $Vision=$row['Vision'];
           $Color_Variants=$row['Color_Variants'];
           $Parallex_Background=$row['Parallex_Background'];
           $Clean_Code=$row['Clean_Code'];
           $About_Paragraph1=$row['About_Paragraph1'];
           $About_Paragraph2=$row['About_Paragraph2'];
           $Unlimited_Variant=$row['Unlimited_Variant'];
           $Responsive_Layout=$row['Responsive_Layout'];
           $Clean_Design=$row['Clean_Design'];
           $Animated_Elements=$row['Animated_Elements'];
           $Many_More=$row['Many_More'];
       }
?>

<?php
echo "
<tr>
<td style='border:1px solid black;'>$Vision</td>
<td style='border:1px solid black;'>$Color_Variants</td>
<td style='border:1px solid black;'>$Parallex_Background</td>
<td style='border:1px solid black;'>$Clean_Code</td>
<td style='border:1px solid black;'>$About_Paragraph1</td>
<td style='border:1px solid black;'>$About_Paragraph2</td>
<td style='border:1px solid black;'>$Unlimited_Variant</td>
<td style='border:1px solid black;'>$Responsive_Layout</td>
<td style='border:1px solid black;'>$Clean_Design</td>
<td style='border:1px solid black;'>$Animated_Elements</td>
<td style='border:1px solid black;'>$Many_More</td>                                                                     
<td style='border:1px solid black;'><a href='edit_main.php?edit=$ID'>Edit</a></td>
</tr>";   


echo "</tbody>
</table>";
?>

</body>
</html>