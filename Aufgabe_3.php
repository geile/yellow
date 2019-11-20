<link rel="stylesheet" type="text/css" href="style.css">
<?php $i = 0;
?>

<table>
    <tr>
        <?php while($i<3):?>
            <td>
                <?php echo $i;?>
                <?php $i++; ?>
            </td>
        <?php endwhile; ?>
    </tr>
</table>
