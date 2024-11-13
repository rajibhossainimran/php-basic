
<?php

$mark = 80;
if($mark>=80){
    echo "Your mark $mark .You got A+";
    echo '<br>';
}elseif($mark>=70){
    echo "Your mark $mark .You got A";
    echo '<br>';
}elseif($mark>=60){
    echo "Your mark $mark .You got B";
    echo '<br>';
}elseif($mark<60){
    echo "Your mark $mark .You are failed";
    echo '<br>';
}

?>