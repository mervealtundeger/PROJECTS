<?
$dir = "D:\wamp64\www\STAJ\images";
$re = "/\.(png)$/";
$inOneRow = 4;
?>
<script language="javascript">
	function loadWindow(imgPath, width, height) {
		var msgWindow = window.open("", "Window_" + Math.floor(Math.random() * 10000000), "width=" + width + ",height=" + height + "");
		msgWindow.document.write("<html>\n<head>\n<meta http-equiv='Content-Type' content='text/html; charset=windows-1256'>\n<title>Picture preview</title>\n</head>\n<body>\n");
		msgWindow.document.write("<table width='100%' height='100%' border='1' cellpadding='10' cellspacing='5' bordercolor='#0066FF'>\n<tr>\n<td align='center' valign='middle'>\n");
		msgWindow.document.write("<img src='" + imgPath + "'>");
		msgWindow.document.write("</td></tr></table></body>\n</html>\n");
		msgWindow.focus();
		return true;
	}
</script>

<?
function popup_window($imgPath)
{
	if (file_exists($imgPath)) {
		$size = @getimagesize($imgPath);
		$width = $size[0];
		$height = $size[1];
		$width = ($width < 200 ? 250 : ($width + 50));
		$height = ($height < 300 ? 350 : ($height + 50));
		$popup = "<a href='#' onClick=\"javascript:loadWindow('" . $imgPath . "', " . $width . ", " . $height . ");\"><img src='$imgPath' height=120 width=90 alt='View Image' border=0></a>";
		return $popup;
	}
}
if (is_dir($dir)) {
	$allFiles = opendir($dir);
	while ($file = readdir($allFiles)) {
		if (!is_dir($dir . '/' . $file)) {
			if (preg_match($re, strtolower($file))) {
				$thumbs[] = popup_window($dir . '/' . $file);
			}
		}
	}
	closedir($allFiles);
}

$totalThumbs = count($thumbs);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
	<title>Image Gallery</title>
	<style type="text/css">
		<!--
		.style2 {
			color: #006699;
			font-family: Verdana, Arial, Helvetica, sans-serif;
		}

		.style3 {
			color: #FFFFFF;
			font-family: Verdana, Arial, Helvetica, sans-serif;
			font-size: 11px;
		}
		-->
	</style>
</head>

<body>

	<h1><span class="style2">Resim Galerisi</span>
		<hr>
	</h1>
	<table border="0" bordercolor="#CCCCCC">
		<?
		$j = 0;
		for ($i = 0; $i < $totalThumbs; $i++) {
			if ($i == $j) {
				$j += $inOneRow;
				echo "<tr>";
			}
		?>

			<td width="115" align="left">
				<table width="110" height="142" border="1" cellpadding="5" cellspacing="0" bordercolor="#006699">
					<tr align="center">
						<td height="120" valign="middle"><? echo $thumbs[$i] ?></td>
					</tr>
					<tr align="center">
						<td valign="middle" bgcolor="#006699"><span class="style3"><? echo "Resim " . ($i + 1) ?></span></td>
					</tr>
				</table>
			</td>
		<?
		}
		?>
		</tr>
	</table>
</body>

</html>