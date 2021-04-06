<!--<%@ page language="java" contentType="text/html; charset=UTF-8"
pageEncoding="UTF-8"%>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style>
      html{
            height: 100%;
            width: 100%;
      }
      body{
           background-image: url('img/background.jpg');
           background-repeat: no-repeat;
           background-size: 100% 100%;
           width: 100%;
           height: 100%;
           margin: 0% 0%;
           padding: 0% 0%;
           
      }
     .position{
     		width:100%;
            position: absolute;
            top: 20%;
      }
      .information{
            background-color: transparent;
            width: 100%;
            height: 40px;
            border: 0px ;
            border-bottom: rgba(56, 88, 129, 255) 1px solid;
            font-size: 20px;
            font-family: serif;
      }
      #textContent{
            font-family: "黑体";
            font-size: 25px;
      }
      #submitButton{
            border-radius: 30px;
            margin-top: 50px;
            background-color:rgba(70, 114, 137, 0.3) ;
           	width: 100%;
            height: 50px;
           	border: 0px;
           	font-size: 20px;
            font-family: "仿宋";
      }
		.navi{
            width:100%;
            height: 60px;
            margin-top: 0px;
            font-size:22px;
        }
        .navi ul{
            float: left;
            color: silver;
            padding: 0px;
            margin-left: 70px;
        }
        
        .backColor{
        	background-color:rgba(240, 255, 255, 0.25) ;
        	height:450px;
        }
 				.
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>****系统-登录注册</title>
<!-- <script src="js/jquery-3.5.1.js"></script> -->
<script>
	function onMouseOver(){
            lo.style.cursor = 'pointer';
            re.style.cursor = 'pointer';
        }
	
        function changePage(val){
            var login_div = document.getElementById("login");
            var register_div = document.getElementById("register");
            if(val == 'login'){
                login_div.style.display = 'block';    // 要显示的 display设置为 block
                register_div.style.display = 'none';  // 要隐藏的盒子的 display 设置为 none
 
                lo.style.borderBottom = '3px solid #45718A';
                re.style.borderBottom = '';
 
            }else if(val == 'register'){
                login_div.style.display = 'none';
                register_div.style.display = 'block';
 
                lo.style.borderBottom = '';
                re.style.borderBottom = '3px solid #45718A';
            }
        }
    </script>
<!--
<script>
$(function(){
	$(":checkbox").click(function(){
	$(this).attr("checked",true);
	$(this).siblings().attr("checked",false);
	});
});
</script>

	<script>
		if('${errorInformation}'!=''&&'${errorInformation}'!=null){
		alert('${errorInformation}');
	}
</script>
-->
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<div class="position ">
		<div class="container">
		<div class="row">
			<div class="col-md-7 col-md-offset-3 backColor"></div>
		</div>
		</div>
	</div>
<div class="position"">
	</br>
	<div class='container navi'>
		<div class="row">
			<div class="col-md-2 col-md-offset-3 ">&nbsp;</div>
			<div class="col-md-2">
				<li class="text-center" id='lo' style='border-bottom:3px solid #45718A;' onmouseover='onMouseOver()' onclick="changePage('login')" >登录</li>
			</div>
			<div class="col-md-2 ">
				<li class="text-center" id='re' onmouseover='onMouseOver()' onclick="changePage('register')" >注册</li>
			</div>
		</div>
	</div>

<!--登录页面-->
	<div id="login">
	<div class="container" >	
	<form action="" method="">	
		<div class="row">
				<div class="col-md-2 col-md-offset-3 text-right" id="textContent">
					用户名:&nbsp;&nbsp;
				</div>
				<div class="col-md-4">
					<input class="information" name="loId" type="text" value="" />
				</div>
			</div></br>
		<div class="row">
				<div class="col-md-2 col-md-offset-3 text-right" id="textContent">
					密码:&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
				<div class="col-md-4">
					<input class="information" name="loId" type="text" value="" />
				</div>
		</div></br>
		<div class="row" style="position: relative;top: 5px;">
				<div class="col-md-2 col-md-offset-3 text-right" id="textContent" >
					记住密码:
				</div>
				<div class="col-md-4">
					<input name="loId" type="checkbox"  />
				</div>
		</div>
		<div class="row" style="position: relative;top:10px;">
				<div class="col-md-4 col-md-offset-5">
					<input id="submitButton" type="submit" value="登录">
				</div>
		</div>
	</form>
	</div>
	</div>
<!--注册页面-->
	<div id="register" style="display: none;">
	<div class="container" >	
	<form action="" method="">	
		<div class="row">
				<div class="col-md-2 col-md-offset-3 text-right" id="textContent">
					用户名:&nbsp;&nbsp;
				</div>
				<div class="col-md-4">
					<input class="information" name="loId" type="text" value="" />
				</div>
		</div></br>
		<div class="row">
				<div class="col-md-2 col-md-offset-3 text-right" id="textContent">
					<p>邮箱:&nbsp;&nbsp;&nbsp;&nbsp;</p>
				</div>
				<div class="col-md-4">
					<input class="information" name="loId" type="text" value="" />
				</div>
		</div></br>


		<div class="row">
				<div class="col-md-2 col-md-offset-3 text-right" id="textContent">
					<p>密码:&nbsp;&nbsp;&nbsp;&nbsp;</p>
				</div>
				<div class="col-md-4">
					<input class="information" name="loId" type="text" value="" />
				</div>
		</div></br>
		<div class="row">
				<div class="col-md-2 col-md-offset-3 text-right" id="textContent">
					确认密码:
				</div>
				<div class="col-md-4">
					<input class="information" name="loId" type="text" value="" />
				</div>
		</div>
		<div class="row">
				<div class="col-md-4 col-md-offset-5">
					<input id="submitButton" type="submit" value="注册">
				</div>
		</div>
	</form>
	</div>
	</div>

</div>
</body>
</html>
