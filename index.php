
<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>(주)서우트리밍</title>
	<!-- viewport : 화면에 보이는 영역을 제어하는 기술   -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">
<meta name="format-detection" content="telephone=no"> <!-- 전화번호 오인 방지 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">  
	
<!-- XE icon사용 local 에서 사용하면 http 넣어야 함, 웹엔 없어도 됨   -->
<script  src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>	
<script  src="js/default.js"></script> 
	<!-- swiper Touch Slider 사용 위한 library import 3가지   -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script  src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!--[if it IE 9]  -->  
  <script src="js/html5shiv.js"></script> 
<!-- [endif] -->	

	<!-- media query : 웹사이트를 변경하는 기술  -->
<link href="css/default.css" rel="stylesheet" type="text/css" >
<link href="css/index.css" rel="stylesheet" type="text/css" >
<!--<link href="css/sub.css" rel="stylesheet" type="text/css" >	-->
<!--<link href="css/tablet.css" rel="stylesheet" type="text/css" media="( min-width:799px) and ( max-width:1000px )"> -->
<link href="css/mobile.css" rel="stylesheet" type="text/css"  media="( max-width:798px )"> 
</head>
	
<body>
<a href="#content" class="skip">본문 바로가기</a>	
	<header id="header">
		<div class="line"> <!-- 위아래 선넣기 -->
			<div class="suhwoo"><!-- 가로크기 넣기-->
				<div class="main_logo ">
					<h1><a href="#header" class=" ">서우트리밍</a></h1>
				</div>
				<div class="left clear">
					<a href="#a" class="all">all Menu</a> <!-- mobile 단계에서 클릭시 nav 구현 전체메뉴 로고넣기  -->
					<div class="nav"> <!- tablet 부터 사라지게 하기위해  -->
						<h2>mobile logo</h2><!-- mobile 단계에서 일승상사 로고넣기 -->
						<nav>	
							<ul>
								<li><a href="./sub_html/Webpub.php">웹퍼블리싱</a></li>	
								<li><a href="./sub_html/gallery_website.php">홈페이지제작</a></li>	
								<li><a href="./sub_html/SiteCollection.php">참조사이트</a></li>
								<li><a href="https://hwanheo.cafe24.com/bootstrap/index.html">포트폴리오</a></li>
								<li><a href="#a"><p>제작사이트</p>
								 	<select onchange="if(this.value)location.href=(this.value)">
										<option value="http://swtrimming.com/lunch_cafe">런치카페
										<option value="http://swtrimming.com/ilsung">일승상사
										<option value="http://swtrimming.com/swiper_new.html">전자앨범											
										<option value="https://hwanheo.cafe24.com/Kona/Kona.html">Kona
										<option value="https://hwanheo.cafe24.com/Starbucks_res">스타벅스
										<option value="https://hwanheo.cafe24.com/gallery_res">갤러리	
										<option value="http://hwanheo.cafe24.com/trafficCorp/trafficCorp.html">대구부산고속
										<option value="https://hwanheo.cafe24.com/hansolWebSite">한솔	
										<option value="https://hwanheo.cafe24.com/centreville">센트레빌
										<option value="https://hwanheo.cafe24.com/WooriBank">우리은행
									</select>
								</a>
							</li>
							</ul>		
						</nav><!-- mobile 단계에서 별도 구현 , pc에서는 hide-->
						<div> 
								<?php
									if(!isset($_SESSION["userid"])){
								?>
								<a href="./login/login_input.php">로그인</a>
								<a href="./member/member_join.php">회원가입</a>
								<?php
								}
								else{  // 갖고온 사용자 아이디가 있으면 
								?>
								<!-- <?=$_SESSION["name"]?>님, 모바일 에서 화면이 작아 필요 없음  -->
								<a href="./login/logout.php">로그아웃</a> | <a href="./member/update_member.php?id=<?=$_SESSION["userid"]?>">정보수정</a>
								<?php
								}
								?>
						</div>
						<a href="#a" class="close">Close</a> <!-- mobile 단계에서  X 구현 ,pc에서는 hide-->
					</div> <!-- end of nav  -->		
				</div><!-- end of left -->
				<ul>
					<?php
						if(!isset($_SESSION["userid"])){
					?>
					<li class="join" ><a href="./login/login_input.php" >로그인</a></li> <!-- 모바일에서는 join만 사람모양으로, 나머지 없앰-->	
					<li class="join" ><a href="./member/member_join.php" >회원가입</a></li> <!-- 모바일에서는 join만 사람모양으로, 나머지 없앰-->	
					<?php
					}
					else{  // 갖고온 사용자 아이디가 있으면 
					?>
					<li class="sessin"><?=$_SESSION["name"]?>님</li> <!--   -->
					<li class="sessin"><a href="./login/logout.php" >로그아웃</a></li> 
					<li class="sessin"><a href="./member/update_member.php?id=<?=$_SESSION["userid"]?>">정보수정</a></li>
					<?php
					}
					?>
				
					<div class="mypage">
					   <a href="./member/update_member.php?id=<?=$_SESSION["userid"]?>"  class="xi-user-o" ><span>마이페이지</span></a> 
								<!-- 모바일에서는 사람모양 mypage-->	
					</div>
				</ul>	
			</div> <!-- end of suhwoo -->
		</div><!-- end of line -->
		<div class="dim"></div> 
	</header>
	



<section class="banner">
	<div>
		<img src="img/2020_sunset.jpg" alt="">
		<div class="">
			<p> 행사기간, 홈페이지 <em>무료 제작 서비스 중입니다.</em>
			  <span>기간 : 2020.9.1~2021.12.31</span></p>
		</div>
	</div>
</section>	
<section>
	<div class="service">
		<div class="adv">
				
					<p>도메인과 서버호스팅 비용으로<br>
					 홈페이지를 독립적으로 소유할 수 있습니다.<br>
					<span>02-477-3331</span><br>
					<em>고객의 비지니스 성공을 위하여 최선을 다합니다.</em>
				
		</div>
	</div>
</section>
<section class="visual slide"> <!--다중 class -->
<!-- --------------------------------------    -->
	<article class="">
		 <!-- 영역 덩어리 가 slide로 돼있는 영역,script함 -->
				 <!-- Swiper -->
			<div class="swiper-container slider1"> <!-- 한페이지에 여러개 slider 다중 클래스 -->
					<div class="swiper-wrapper">
						  <div class="swiper-slide">
<!-- touch slider 기능http://swiperjs.com   ----------------------------------  -->
									<div class="adv">
									  <img src="img/webDesign_02.jpg" alt="">
										<div class="txt1">
												온라인 광고는<br>
												Website 제작으로,
												<p>최소비용으로 최대 효과를 만들어 드립니다</p>
										 </div> 
									  </div>
								      <div class="control">
										<button class="start">시작</button>
										<button class="stop">정지</button>
								<!--	<div class="swiper-button-next"></div>
										<div class="swiper-button-prev"></div>  -->
							        </div>
							</div>
						  <div class="swiper-slide">
<!-- touch slider 기능http://swiperjs.com   ----------------------------------  -->
									<div class="adv">
									  <img src="img/webDesign_03.jpg" alt="">
										<div class="txt2">
												데스크탑, 태블릿 &amp; 휴대폰 웹사이트를 <br>
												<p>한번에 구축하여 드립니다.</p>
										 </div> 
										 </div>
									 <div class="control">
										<button class="start">시작</button>
										<button class="stop">정지</button>
								<!--	<div class="swiper-button-next"></div>
										<div class="swiper-button-prev"></div>  -->
							        </div>
							</div>
<!-- touch slider 기능http://swiperjs.com   ----------------  -->	
						  <div class="swiper-slide">
<!-- touch slider 기능http://swiperjs.com   ----------------------------------  -->
									<div class="adv">
									  <img src="img/programmer_04.jpg" alt="">
										<div class="txt3">
												귀사의 매출신장과 성공을 위하여 <br>
												<p>최선을 다하겠습니다</p>
										 </div> 
									  </div>
									  <div class="control">
											<button class="start">시작</button>
											<button class="stop">정지</button>
									   <!--	<div class="swiper-button-next"></div>
											<div class="swiper-button-prev"></div>  -->
									  </div>
							</div>
 <!-- touch slider 기능http://swiperjs.com   ----------------  -->	
						<div class="swiper-slide">
<!-- touch slider 기능http://swiperjs.com   ----------------------------------  -->
									<div class="adv">
									  <img src="img/webDesign_05.jpg" alt="">
										<div class="txt4">
												현대인의 광고는 Website 에서,<br>
												
												<p>최소비용으로 최대 효과를 만들어 드립니다.</p>
										 </div> 
									  </div>
									  <div class="control">
											<button class="start">시작</button>
											<button class="stop">정지</button>
									   <!--	<div class="swiper-button-next"></div>
											<div class="swiper-button-prev"></div>  -->
									  </div>
							</div>
<!-- touch slider 기능http://swiperjs.com   ----------------  -->	
						<div class="swiper-slide">
<!-- touch slider 기능http://swiperjs.com   ----------------------------------  -->
									<div class="adv">
									  <img src="img/webDesign_07.jpg" alt="">
										<div class="txt5">
												IT 전문가로, <br>
												
												<p>고객과 함께 성장하여 나가겠습니다.</p>
										 </div> 
									  </div>
									  <div class="control">
											<button class="start">시작</button>
											<button class="stop">정지</button>
									   <!--	<div class="swiper-button-next"></div>
											<div class="swiper-button-prev"></div>  -->
									  </div>
							</div>						
			    	<script>
					var swiper = new Swiper('.swiper-container', {
					  navigation: {
						nextEl: '.stop',
						prevEl: '.start',	
				   //  nextEl: '.swiper-button-next', 
				   //  prevEl: '.swiper-button-prev',  
					  },
					  autoplay: { delay: 4000,
        			  disableOnInteraction: false,  <!-- 사용자가 멈추게 해도 안되게  -->
      				}
					});
					$('.start').on('click',function(){
					  swiper.autoplay.start();
					  return false;   // false경우 나머지 기능 안되고 시작 기능만 가능 
					 })
					 $('.stop').on('click',function(){
					  swiper.autoplay.stop();
					  return false;
					 })
				</script>
			<!--	<a href="#a" class="btn_more" >자세히보기<i class="xi-angle-right-min"></i></a>  -->
				</div>
		</article>
</section>
<footer>
	<div class="clear">
		<a href="#header" class="top xi-arrow-top">맨위로</a>
		<div class="">
			<a href="./login/logout.php">로그아웃</a>
			<a href="sub_html/agreement.html">이용약관</a>
			<a href="sub_html/use_agree.html">개인정보처리방침</a>
			<a href="sub_html/site_map.php">위치안내</a>
		</div>
		<div class="bottom">	
		<P>(주)서우트리밍</P>
			<ul>
				<li>서울시 강동구 강동대로 177,현대코랄빌딩 202호(성내동)</li>
				<li>Tel:82-2-477-3331</li>
				<li><a href="mailto:hheo@swtrimming.com">e.mail:hheo@swtrimming.com</a></li>
			</ul>
				<address> &copy;Copyright 2020 swtrimming All rights reserved.</address>
					<!-- &특수기호  &치면 특수기호 selection   -->
   		</div>
	</div>
</footer>
<!-- </div>	<!-- end of all section -->
</body>
</html>
