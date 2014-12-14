 <!DOCTYPE html>
 
<html>
	<head>
	
		<!--META TAGs-->
		<meta name="Description" CONTENT="臺灣師範大學學生自治會的官方網頁，學生會主軸為校務參與、權益爭取、企劃執行和校外交流。"> <!-- 描述 -->
		<meta name="KeyWords" content="NTNUSA,師大學生會,臺師大,學生自治會,Student Association 18th">  <!-- 關鍵字, 協助SEO -->
		<meta name="Author" CONTENT="學生會資訊部">  <!-- 作者 -->
		<meta name="Generator" CONTENT="Notepad++">	 <!-- 生產的工具 -->
		<meta http-equiv="Pragma" CONTENT="no_cache">  <!-- Cache -->		
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />  <!-- 網站文字編碼 -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">   <!-- RWD -->
		<link rev="made" href="https://www.facebook.com/NTNUstudentA"> <!-- 製作團隊 -->
		<!-- ./META TAGs-->
		
		<title>師大學生會 - NTNUSA</title>    <!-- Title 標題 -->
		
		<!-- bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		
		<link type="image/x-icon" rel="shortcut icon" href="IMG/favicon.ico" />   <!-- title 前的圖片 -->
       <link type="text/css" media="screen" rel="stylesheet" href="css/style.css"/>   <!-- 主要樣式表 -->
		<link type="text/css" media="screen" rel="stylesheet" href="css/index_style.css"/>   <!-- 主頁樣式表 -->
		<link type="text/css" media="screen" rel="stylesheet" href="css/nav_bar.css"/>  <!-- nav_bar 樣式表 -->
		<link type="text/css" rel='stylesheet'  href='css/fullcalendar.css'/>	<!-- 行事曆樣式表 -->
		
		<!-- CAROUSEL styles -->
		
		<link href="css/carousel.css" type="text/css" media="screen" rel="stylesheet"/>
	
		
		
		<!-- 引入jquery -->
		<script src='javascript/jquery.min.js'></script>
		<script src="javascript/bootstrapSourceJS"></script>
		<!-- nav_bar 的javascript 相關程式碼  -->
		<script type="text/javascript" src="javascript/nav_bar.js"></script>
        <script type="text/javascript" src="javascript/nav_bar_function.js"></script>
		
		<style>
		
@media only screen and (max-width: 720px) {
	.BBODY{
		height:auto;
	}
	.content{
		height:auto;
	}

}
@media only screen and (min-width: 720px) {
	.BBODY{
		height:1740px;
	}
	.content{
		height:770px;
	}
}




		</style>
		
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			defaultDate: '2014-12-10',
			editable: false,
			eventLimit: true, // 允許"more"標籤
			events: 
				<?php include 'activity.json'?>
		});
		
	});

</script>


	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/Scripts/bootstrap/html5shiv.js"></script>
    <![endif]-->
<style type="text/css" id="holderjs-style">.holderjs-fluid {font-size:16px;font-weight:bold;text-align:center;font-family:sans-serif;margin:0}</style></head>

	</head>
	
	<body>
	<center>  <!--全版面置中-->	
		<!--頂端圖和按鈕部分-->
		<?php include'html/header.html' ?>
		<!--活動展示以及行事曆...之類的部分-->
		<div class="BBODY">
			<div class="content">
			
				<!--左側-->
				<div class="LEFT">
					<!-- Carousel
					================================================== -->
					<div id="myCarousel" class="carousel slide">
						<div class="carousel-inner">
							<div class="item active">
								<img src="IMG/slide/slide-01.jpg" alt="">
								<div class="container">
									<div class="carousel-caption">
										<h1>［12月自由影展］</h1>
										<p class="lead">自由對你來說是什麼？看似能夠無憂無慮的做自己想做的事，但真的是如此嗎？</p>
										<a class="btn btn-large btn-primary" href="http://on.fb.me/1qhfD6k">不自由毋寧死!</a>
									</div>
								</div>
							</div>
							<div class="item">
								<img src="IMG/slide/slide-02.jpg" alt="">
								<div class="container">
									<div class="carousel-caption">
										<h1>【師大藝磚節】</h1>
										<p class="lead">每年春天，各個校園藝術季不停地開花，鄰近的學校們享受著自己的藝術慶典，那師大呢？</p>
										<a class="btn btn-large btn-primary" href="https://fb.me/NTNUAHF">加入我們吧！</a>
									</div>
								</div>
							</div>
							<div class="item">
								<img src="IMG/slide/slide-03.jpg" alt="">
								<div class="container">
									<div class="carousel-caption">
										<h1>【12月叩叩叩資訊站】</h1>
										<p class="lead">這是學期的最後一次資訊站囉~~最新一期的師大錄可以到攤位免費索取~</p>
										<a class="btn btn-large btn-primary" href="http://on.fb.me/1z506Hp">我也要拿!</a>
									</div>
								</div>
							</div>
							<div class="item">
								<img src="IMG/slide/slide-04.jpg" alt="">
								<div class="container">
									<div class="carousel-caption">
										<h1>【萬用師大卡!!】</h1>
										<p class="lead">身為師大人的各位都拿到這張傳說中看電影可以立馬省70元的師大卡了嗎？</p>
										<a class="btn btn-large btn-primary" href="http://on.fb.me/1xo9Riq">更多優惠！</a>
									</div>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
					</div>
					<!-- /.carousel -->
					
					<div class="every_dep">
						<img src="IMG/720_340.jpg">
					</div>
					
				</div>
				
				<!-- 右側 -->
				<div class="RIGHT">
				
					<!-- 聯絡我們 & 搜尋  -->
					<div class="right_up">
						<div class="contact">
							<!-- Facebook 專頁 -->
							<a href="https://www.facebook.com/NTNUstudentA"><img src="IMG/facebook.png" alt="facebook"></a>
							<!-- e-mail -->
							<a href="mailto:NTNUStudentA@gmail.com"><img src="IMG/email.png" alt="email"></a>
							
							<!-- search form -->
							<form>
								<div style="position:relative;top:5px;display:inline-block;"><input class="search_bar" type="text" id="search" placeholder="search"></div> 
							</form>
						</div>
							<!-- 使用 javascript 來做搜尋? -->
					</div>
					
					<!--申訴表單-->
					<div class="appeal">
						<a href="http://goo.gl/5TQrPu"><div class="complain">申訴表單</div></a>
					</div>
					
					<!-- 各部門連結 -->
					<div class="Departments">
						<div class="Dep_title">各部門 Departments</div>
						<div class="dep_list">
								<ul>
									<li><a href="president.php">會長 / 副會長</a></li>
									<li><a href="secretariat.php">秘書處</a></li>
									<li><a href="public.php">公關部</a></li>
									<li><a href="activity.php">活動部</a></li>
									<li><a href="right.php">權益部</a></li>
									<li><a href="newsdp.php">新聞部</a></li>
									<li><a href="academic.php">學術部</a></li>
									<li><a href="finance.php">財務部</a></li>
									<li><a href="publication.php">文宣部</a></li>
									<li><a href="info.php">資訊部</a></li>
								</ul>
						</div>
					</div>
				</div>
			</div>
			
			<!--行事曆及任務表單-->
			<div class="time_content">
				<h2 class="calendar_title">活動行事曆</h2>
				<hr />
				<div id='calendar' class="calendar"></div>
				
			</div>
			
		</div>
		
		<!--版權聲明-->
		<?php include 'html/footer.html'; ?>
		

		<script>
			!function ($) {
				$(function () {
					$('#myCarousel').carousel()
				})
			}(window.jQuery)
		</script>
		<script src="javascript/holder.js"></script>
	
		 <!-- 行事曆的 javascript code -->		 
		<script src='javascript/moment.min.js'></script> 
		<script src='javascript/fullcalendar.min.js'></script>
       
	</center>
	</body>
</html> 