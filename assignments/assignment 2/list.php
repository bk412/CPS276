<?php

$out = 4;
$in = 5;

?>
<ul>

        <?php  for ($o = 1; $o<= $out; $o++ ) { ?>
        <li>  <?php  echo($o) ?>
        <ul> 
              <?php  for ($i = 1; $i<= $in; $i++ ) { ?>
                <li>  <?php  echo($i) ?> </li>
                <?php  } ?>
              </ul>
              </li>
        <?php  } ?>

</ul>
