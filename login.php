<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <style type="text/css">
        .passwordImgs, .repasswordImgs {
            width: 30px;
            height: 30px;
        }

        .canvas {
            width: 120px;
            height: 42px;
            border: 1px solid #000000;
        }

    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sign in and Sign up</title>


    <script src="js/jquery.min.js"></script>
    <script src="js/login.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <?php
    require '../../../wp-blog-header.php';
    $road = get_template_directory_uri();
    ?>
</head>
<body>
<div class="position ">
    <div class="container">
        <div class="row">
            <div id="back" class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 backColor"
                 style="height: 400px"></div>
        </div>
    </div>
</div>
<div class="position">
    </br>
    <div class='container navi'>
        <div class="row">
            <div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2 ">&nbsp;</div>
            <div class="col-md-2 col-sm-2">
                <p class="text-center" id='lo' style='border-bottom:3px solid #45718A;' onmouseover='onMouseOver()'
                   onclick="changePage('login')">Sign in
                </p>
            </div>
            <div class="col-md-2 col-sm-2">
                <p class="text-center" id='re' onmouseover='onMouseOver()' onclick="changePage('register')">Sign up</p>
            </div>
        </div>
    </div>

    <!--登录页面-->
    <div id="login">
        <div class="container">
            <?php echo "<form action=\"$road/loginaction.php\" method=\"post\">"; ?>
            <div class="row">
                <div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2 text-right" id="textContent">
                    User Name&nbsp;&nbsp;
                </div>
                <div class="col-md-4 col-sm-4">
                    <input class="information" name="user_login" type="text" value=""/>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2 text-right" id="textContent">
                    Password&nbsp;&nbsp;

                </div>
                <div class="col-md-4 col-sm-4">
                    <input class="information password" name="user_pass" type="password" value=""/>

                </div>
                <div class="col-md-1 col-sm-1">
                    <img class="passwordImgs" src='img/hidePassword.png'>
                </div>
            </div>
            </br>
            <div class="row">
                <div class=" col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2 text-right" id="textContent">
                    CAPTCHA&nbsp;&nbsp;
                </div>
                <div class="col-md-3 col-sm-3">
                    <input class="information canValue-login" type="text" value="" placeholder="Case Insensitive">
                </div>
                <div class="col-md-2 col-sm-2">
                    <canvas class="canvas" id="canvas-login"></canvas>
                </div>
            </div>
            </br>
            <div class="row" style="position: relative;top: 5px;">
                <div class="col-md-2 col-md-offset-2  col-sm-2 col-sm-offset-2 text-right" id="textContent">
                </div>
                <div class="col-md-4 col-sm-4">
                    <input name="remember" type="checkbox"/>
                    Remember Password:
                </div>
            </div>
            <div class="row" style="position: relative;top:10px;">
                <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                    <input class="submitButton" id="submitButton-login" type="button" value="Sign in">

                </div>
            </div>
            </form>
        </div>
    </div>
    <!--注册页面-->
    <div id="register" style="display: none;">
        <div class="container">

            <?php echo "<form action=\"$road/registeraction.php\" method=\"post\">"; ?>
            <div class="row">
                <div class="col-md-2 col-md-offset-2  col-sm-2 col-sm-offset-2 text-right" id="textContent">
                    User Name&nbsp;&nbsp;
                </div>
                <div class="col-md-4 col-sm-4">
                    <input class="information" name="user_login" type="text" value=""/>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2 text-right" id="textContent">
                    <p>E-mail&nbsp;&nbsp;</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <input class="information" name="email" type="text" value=""/>
                </div>
            </div>
            </br>

            <div class="row">
                <div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2 text-right" id="textContent">
                    Password&nbsp;&nbsp;
                </div>
                <div class="col-sm-4 col-sm-4">
                    <input class="information password" id="password" name="user_pass" type="password"/>
                </div>
                <div class="col-md-1 col-sm-1">
                    <img class="passwordImgs" src='img/hidePassword.png'>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2 text-right" id="textContent">
                    Confirm&nbsp;&nbsp;
                </div>
                <div class="col-md-4 col-sm-4">
                    <input class="information repassword" id="rePassword" name="re_password" type="password"
                           onkeyup="checkPassword()"/>
                    <span id="notice"></span>
                </div>
                <div class="col-md-1 col-sm-1">
                    <img class="repasswordImgs" src='img/hidePassword.png'>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2 text-right" id="textContent">
                    CAPTCHA&nbsp;&nbsp;
                </div>
                <div class="col-md-3 col-sm-3">
                    <input class="information canValue-register" type="text" value="" placeholder="Case Insensitive">
                </div>
                <div class="col-md-2 col-sm-2">
                    <canvas class="canvas" id="canvas-register"></canvas>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                    <input class="submitButton" id="submitButton-register" type="button" value="Sign up">
                </div>
            </div>
            </form>
        </div>
    </div>

</div>

<script>
    function changePage(val) {
        var login_div = document.getElementById("login");
        var register_div = document.getElementById("register");
        if (val == 'login') {
            login_div.style.display = 'block';    // 要显示的 display设置为 block
            register_div.style.display = 'none';  // 要隐藏的盒子的 display 设置为 none
            $("#back").css("height", "400");
            lo.style.borderBottom = '3px solid #45718A';
            re.style.borderBottom = '';

        } else if (val == 'register') {
            login_div.style.display = 'none';
            register_div.style.display = 'block';
            $("#back").css("height", "485");
            lo.style.borderBottom = '';
            re.style.borderBottom = '3px solid #45718A';
        }
    }

    $(function () {
        var show_num_login = [];
        var show_num_register = [];
        draw(show_num_login, "login");
        draw(show_num_register, "register");
        $("#canvas-login").on('click', function () {
            draw(show_num_login, "login");
        })
        $("#canvas-register").on('click', function () {
            draw(show_num_register, "register");
        })
        //验证码
        $("#submitButton-login").on('click', function () {
            var val = $(".canValue-login").val().toLowerCase();
            var num = show_num_login.join("");
            if (val == '') {
                alert('Please enter the CAPTCHA！');
                $("#submitButton-login").attr("type", "button");
            } else if (val == num) {
                //alert('提交成功！');
                $("#submitButton-login").attr("type", "submit");
                $(".canValue-login").val('');
            } else {
                alert('The CAPTCHA is wrong！Try again！');
                $("#submitButton-login").attr("type", "button");
                $(".canValue-login").val('');
            }
        })
        $("#submitButton-register").on('click', function () {
            var val = $(".canValue-register").val().toLowerCase();
            var num = show_num_register.join("");
            if (val == '') {
                alert('Please enter the CAPTCHA！');
                $("#submitButton-register").attr("type", "button");
            } else if (val == num) {
                //alert('提交成功！');
                $("#submitButton-register").attr("type", "submit");
                $(".canValue-register").val('');
            } else {
                alert('The CAPTCHA is wrong！Try again！');
                $("#submitButton-register").attr("type", "button");
                $(".canValue-register").val('');
            }
        })
    })

    function draw(show_num, from) {
        var canvas_width;
        var canvas_height;
        var canvas;
        if (from == "login") {
            canvas = document.getElementById("canvas-login")
            canvas_width = $('#canvas-login').width();
            canvas_height = $('#canvas-login').height();
        } else if (from == "register") {
            canvas = document.getElementById("canvas-register")
            canvas_width = $('#canvas-register').width();
            canvas_height = $('#canvas-register').height();
        }

        var context = canvas.getContext("2d");
        canvas.width = canvas_width;
        canvas.height = canvas_height;
        var sCode = "a,b,c,d,e,f,g,h,i,j,k,m,n,p,q,r,s,t,u,v,w,x,y,z,A,B,C,E,F,G,H,J,K,L,M,N,P,Q,R,S,T,W,X,Y,Z,1,2,3,4,5,6,7,8,9,0";
        var aCode = sCode.split(",");
        var aLength = aCode.length;
        for (var i = 0; i < 4; i++) {
            var j = Math.floor(Math.random() * aLength);
            var deg = Math.random() - 0.5;
            var txt = aCode[j];
            show_num[i] = txt.toLowerCase();
            var x = 10 + i * 20;
            var y = 20 + Math.random() * 8;
            context.font = "bold 23px 微软雅黑";
            context.translate(x, y);
            context.rotate(deg);
            context.fillStyle = randomColor();
            context.fillText(txt, 0, 0);
            context.rotate(-deg);
            context.translate(-x, -y);
        }
        for (var i = 0; i <= 5; i++) {
            context.strokeStyle = randomColor();
            context.beginPath();
            context.moveTo(Math.random() * canvas_width, Math.random() * canvas_height);
            context.lineTo(Math.random() * canvas_width, Math.random() * canvas_height);
            context.stroke();
        }
        for (var i = 0; i <= 30; i++) {
            context.strokeStyle = randomColor();
            context.beginPath();
            var x = Math.random() * canvas_width;
            var y = Math.random() * canvas_height;
            context.moveTo(x, y);
            context.lineTo(x + 1, y + 1);
            context.stroke();
        }
    }

    function randomColor() {
        var r = Math.floor(Math.random() * 256);
        var g = Math.floor(Math.random() * 256);
        var b = Math.floor(Math.random() * 256);
        return "rgb(" + r + "," + g + "," + b + ")";
    }

    var pimg = $(".passwordImgs");
    pimg.mouseover(function () {
        $(this).attr("src", "img/showPassword.png");
        $(".password").attr("type", "text");
    });
    pimg.mouseout(function () {
        $(this).attr("src", "img/hidePassword.png");
        $(".password").attr("type", "password");
    });

    var repimg = $(".repasswordImgs");
    repimg.mouseover(function () {
        $(this).attr("src", "img/showPassword.png");
        $(".repassword").attr("type", "text");
    });
    repimg.mouseout(function () {
        $(this).attr("src", "img/hidePassword.png");
        $(".repassword").attr("type", "password");
    });
</script>
</body>
</html>
