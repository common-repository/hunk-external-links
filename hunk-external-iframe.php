<?php
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>redirect | uicss.cn</title>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<meta name="robots" content="noodp,noydir" />
<link type="text/css" rel="stylesheet" href="/wp-content/plugins/hunk-external-links/redirect.css" />
</head>
<body class="UIFramedPage">
<table style="height: 100%;" id="page_table" class="page_table unknown_page" cellpadding="0" cellspacing="0">
<tbody>
<tr>
	<td class="header_cell" id="header_cell">
	<div class="url_bar unknown_url">
	<a title="Remove Frame" class="remove_link" href="'.$_GET['hr'].'">&nbsp;</a><!--这是那个X号的链接地址，也就是外部链接-->
	Return to: <a title="Remove frame and go to this web address." class="url_fragment" href="'.$_SERVER['HTTP_REFERER'].'">'.$_SERVER['HTTP_REFERER'].'</a><!--这是回去的链接-->
	</div>
	</td>
</tr>
<tr>
	<td class="content_cell" id="content_cell">
		<div class="content_cell_inner_shadow">&nbsp;</div>
		<iframe id="content_iframe" class="content_iframe" name="content_iframe" src="'.$_GET['hr'].'" scrolling="auto" frameborder="0"></iframe>
	</td>
</tr>
</tbody>
</table>
</body>
</html>';
?>