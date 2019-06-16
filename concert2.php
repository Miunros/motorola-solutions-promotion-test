<?php
$name=$_POST['name'];

/*
fopen('檔案名稱,開啟模式');
fwrite('檔案名稱,寫入內容');
fclose=(檔案名稱);
*/
$file=fopen('p4-2.txt,"a');
fwrite($file,"$name");
fclose=($file);
?>