<?php
    echo '<h3 style="color:red"> id:'.$id. '</h3>';
    echo '<h3 style="color:red"> title:'.$title. '</h3>';
    $linkList = route($controllerName);
?> 
<a href="<?php echo $linkList; ?>" target="_blank">Back</a>   