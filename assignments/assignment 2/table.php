<?php
$row = 15;
$col = 5;
?>

<table border = "1">
<?php  for ($r = 1; $r<= $row; $r++ ) { ?> 
    <tr>
    <?php  for ($c = 1; $c<= $col; $c++ ) { ?> 
        <td>
        <?php
        echo("row $r col $c"  )
        ?>
        </td> 
    <?php  } ?>
    </tr> 
<?php  } ?>

</table>