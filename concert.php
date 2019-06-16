<?php
//判斷 $_GET 內容
if($_GET){
	echo '使用了<font color="red">get</font>方式傳遞資料,請看「<font color="red">網址列</font>」上顯示的網址內容<br /><br />';
	if($_GET['name']!=''){echo '聯絡人姓名'.$_GET['name'].'<br />';}else{echo '無名氏<br />';}
	if($_GET['companyname']!=''){echo '公司名稱'.$_GET['companyname'].'<br />';}else{echo '無公司<br />';}
	if($_GET['mail']!=''){echo '電子郵件地址'.$_GET['mail'].'<br />';}else{echo '無郵件<br />';}
	if($_GET['companyphone']!=''){echo '辦公室電話'.$_GET['companyphone'].'<br />';}else{echo '無公司電話<br />';}
	if($_GET['mobile-phone']!=''){echo '手機號碼'.$_GET['mobile-phone'].'<br />';}else{echo '不同意<br />';}
	if($_GET['agreement']!=''){echo '是的，請您的經銷商與我聯繫。'.$_GET['agreement'].'<br />';}else{echo '無公司<br />';}
	if($_GET['dealer']!=''){echo '經銷商名稱'.$_GET['dealer'].'<br />';}else{echo '無經銷商<br />';}
	
	echo '<p style="color:red">送出的資料將會是以「陣列」方式儲存在 $_GET 變數當中，<br />可使用 var_dump($_GET) 或 print_r($_GET) 涵數查詢內容如下:</p>';
	echo '<p>';
	var_dump($_GET);
	echo '</p>';
}


echo '<p><a href="a.html">返回</a></p>';