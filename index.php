<!DOCTYPE html>

<html lang="ar" >
	<head>
	<title>(QR) Code Generator</title>
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="libs/style.css">
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1256">
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-6">
	<META HTTP-EQUIV="Content-language" CONTENT="ar">
	<META CONTENT="text/html; charset=UTF-8">
	<meta charset="utf-8">
	</head>
	<body>
		<div class="myoutput">
			<h2 dir='rtl'><strong>صانع كود الـ(QR)</strong></h2>
			<div class="input-field">
			<h3>:ابعاد الكود</h3>
				<form action="qrcode.php" method="POST">
					<select name="size" class="form-control" dir="rtl">
						<option value="50"'.(($size==50)?).'>50x50</option>
						<option value="100"'.(($size==100)?' selected':'').'>100x100</option>
						<option value="150"'.(($size==150)?' selected':'').'>150x150</option>
						<option value="200"'.(($size==200)?' selected':'').'>200x200</option>
						<option value="250"'.(($size==250)?' selected':'').'>250x250</option>
						<option value="500"'.(($size==500)?' selected':'').'>500x500</option>
					</select>
					<br >
					<h3>:النص المراد تحويله</h3>
					<textarea dir="rtl" name="text" placeholder="ادخل النص هنا بحيث لا يزيد عن 200 حرف" rows="3" class="form-control" maxlength="200" required></textarea>
					<br >
					<button type="submit" class="btn btn-primary submitBtn" style="width:290px; margin:5px 0;" name="generate">إنشاء الكود <span class="glyphicon glyphicon-qrcode"></span></button>
				
				</form>
			
			</div>
			<?php
			if(!isset($filename)){
				$filename = "blank";
			}
			?>
			<div class="qr-field">
			<h3>:(QR)كود الـ</h3>
			<center>
					<div class="qrframe" id="qrframe" style="border:2px; width:210px; height:210px;">
							<?php							
							if(ISSET($_GET['file'])){
								
								echo '<div id="img-align"><img align="middle" src="images/'.$_GET['file'].'" style="max-width:200px; max-height:200px;"></div><br></div>'; 
								echo '<a class="btn btn-primary submitBtn" class="bi bi-save" style="width:210px; margin:5px 0;" href="download.php?file='.$_GET['file'].'">حفظ الكود <span class="glyphicon glyphicon-cloud-download"></span></a>';
							} ?>
					
					
					</div>

			</center>
		
		</div>
			
		</div>
	</body>
	<footer></footer>
</html>
