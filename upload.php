<?php
if($_POST['page']){
    $fp=fopen($_POST['name'].".html","w");
    fputs($fp,$_POST['page']);
    $fp2=fopen("page_record.txt","a");
    fwrite($fp2,$_POST['name']);
    fwrite($fp2,".html\n");
    echo 1;
}
else{
    echo 0;
}
fclose($fp);
fclose($fp2);
?>
