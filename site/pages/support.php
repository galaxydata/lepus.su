<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/private/config.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/private/init/mysql.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/private/init/memcache.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/private/init/session.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/private/func.main.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/private/auth.php');
if(empty($user)){
	header('refresh: 3; url=http://lepus.dev');
	die;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Lepus - интернет хостинг</title>
		<meta name="description" content="Виртуальный хостинг, быстрые VPS, выделенные серверы по привлекательной цене." />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="yandex-verification" content="6940b644b3235f76" />
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="/css/alertify.core.css" />
		<link rel="stylesheet" type="text/css" href="/css/alertify.bootstrap.css" />
		<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.10/integration/bootstrap/3/dataTables.bootstrap.css">
		<style>
			td,th { text-align: center; vertical-align: middle; }
			.myLabel { font-size: 85%; }
		</style>
		<script src="/js/jquery.min.js"></script>
		<script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
		<script src="//cdn.datatables.net/plug-ins/1.10.10/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script type="text/javascript" charset="utf-8"> $(document).ready(function() { $('#supportList').dataTable({ "order": [[ 0, "desc" ]] }); }); </script>
		<script src="/js/alertify.js"></script>
		<script src="/js/lepus.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/private/pages/menu.php'); ?>
			<div class="logo"></div>
			<div class="information">
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/private/pages/news.php'); ?>
			</div>
			<div class="container">
				<div class="content-box">
					<div class="content-info">
						<div class="content-text">
							<div class="page-title">Техническая поддержка</div>
							<div class="row">					
								<div class="col-lg-12">
									Дорогие пользователи, мы работаем без выходных и праздников с 10.00 до 20.00
									<hr>
									<textarea class="form-control" rows="5" id="comment" style="resize:vertical;"></textarea>
									<input class="btn btn-sm btn-danger btn-block" data-dns-domain-add="" style="margin-top: 2px;" type="submit" value="Открыть новый тикет">
									
									<hr>	
									<table id="supportList" class="table table-striped table-bordered" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>ID</th>
												<th>Тема</th>
												<th>Создан</th>
												<th>Ответ</th>
												<th>Назначен</th>
												<th>Статус</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="background-color: #d9edf7;"><a href="./cp-support.html?id=6&amp;tid=276" title="Открыть" rel="tooltip">#275</a></td>
												<td>Сервер мне запили!</td>
												<td>12/10/2015 00:33</td>
												<td>12/10/2015 16:22</td>
												<td>support5</td>
												<td style="padding-top: 11px;"><span class="label label-pill label-danger myLabel">Закрыт</span></td>
											</tr>
											<tr>
												<td style="background-color: #d9edf7;"><a href="./cp-support.html?id=6&amp;tid=276" title="Открыть" rel="tooltip">#276</a></td>
												<td>Сервер мне запили!</td>
												<td>12/10/2015 00:33</td>
												<td>12/10/2015 16:22</td>
												<td>support5</td>
												<td style="padding-top: 11px;"><span class="label label-pill label-warning myLabel">В обработке</span></td>
											</tr>
											<tr>
												<td style="background-color: #d9edf7;"><a href="./cp-support.html?id=6&amp;tid=276" title="Открыть" rel="tooltip">#277</a></td>
												<td>Сервер мне запили!</td>
												<td>12/10/2015 00:33</td>
												<td>12/10/2015 16:22</td>
												<td>support5</td>
												<td style="padding-top: 11px;"><span class="label label-pill label-success myLabel">Ответ получен</span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php require_once($_SERVER['DOCUMENT_ROOT'].'/private/pages/navi.php'); ?>
			</div>
		</div>
		<?php require_once($_SERVER['DOCUMENT_ROOT'].'/private/pages/footer.php'); ?>
		<?php require_once($_SERVER['DOCUMENT_ROOT'].'/private/pages/modal.php'); ?>
		<script src="//www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
	</body>
</html>
