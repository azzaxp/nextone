<?php
if($_POST['page']){
    $fp=fopen("sample.html","w");
    if (!$fp)
        echo 'open file error\n';
    fputs($fp,$_POST['page']);
    echo 'Succeed!';
}
else{
    echo 'Failed';
}
?>
