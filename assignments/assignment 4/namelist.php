<?php

require_once('helper.php');
$textArea = '';

    if(!empty($_REQUEST)){
        $help = new Helper();
        $reversedName = $help->reverseName($_REQUEST['text']);
        $textArea = $help->addName($_REQUEST['textArea'], $reversedName);
    }
?>


<form method="POST">
<label for="fname">Enter name</label><br>
    <input type="text" name="text">
    <br><br>
    <label for="lname">List of Names</label><br>
    <textarea name="textArea" rows="10" cols="30"><?=$textArea?></textarea>
    <br><br>
    <input type="submit" value="Add Name">
  <input type="reset" value="Clear Names">
    
    <br><br>

</body>
</html>