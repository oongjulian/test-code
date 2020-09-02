
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post" name="form1">
        <tr> 
            <td>value</td>
            <td><input type="text" name="value"></td>
        </tr>
        <td><input type="submit" name="Submit" value="Add"></td>
    </form>
</body>
</html>

<?php
if(isset($_POST['Submit'])) {
$value=$_POST['value'];
if ($value == '153') {
    echo 'true';
} else {
    echo 'false';
}
}
?>