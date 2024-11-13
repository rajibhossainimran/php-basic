
<?php

$mark = 87;
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


echo $_SERVER['SERVER_PORT'];
echo '<br>';
echo $_SERVER['SERVER_ADDR'];
echo '<br>';
echo $_SERVER['SCRIPT_NAME'];
echo '<br>';
echo $_SERVER['REQUEST_METHOD'];
echo '<br>';
echo $_SERVER['PHP_SELF'];
?>