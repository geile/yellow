<link rel="stylesheet" type="text/css" href="style.css">
<?php $i = 0;
?>
<html>
<head>

</head>
<body>
<table>
    <?php while($i<3):?>
    <tr>

            <td>
                <?php echo $i;?>
                <?php $i++; ?>
            </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>