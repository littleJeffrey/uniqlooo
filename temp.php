<?php include('process.php') ?>
<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Uniqloooo by FCU</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-xlarge.css" />
    </head>
    <style>
  
    .wrapper {
        margin: 140px 0 140px auto;
        width: 884px;
    }
    
    .loginBox {
        background-color: #F0F4F6;
        /*上divcolor*/
        border: 1px solid #BfD6E1;
        border-radius: 5px;
        color: #444;
        font: 14px 'Microsoft YaHei', '微軟雅黑';
        margin: 0 auto;
        position: absolute;
        left: 50%;
        top: 50%;
        margin-top: -150px;
        margin-left: -150px;
        width: 388px
    }
    
    .loginBox .loginBoxCenter {
        border-bottom: 1px solid #DDE0E8;
        padding: 24px;
    }
    
    .loginBox .loginBoxCenter p {
        margin-bottom: 10px
    }
    
    .loginBox .loginBoxButtons {
        /*background-color: #F0F4F6;*/
        /*下divcolor*/
        border-top: 0px solid #FFF;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        line-height: 28px;
        overflow: hidden;
        padding: 20px 24px;
        vertical-align: center;
        filter: alpha(Opacity=80);
        -moz-opacity: 0.5;
        
    }
    
    .loginBox .loginInput {
        border: 1px solid #D2D9dC;
        border-radius: 2px;
        color: #444;
        font: 12px 'Microsoft YaHei', '微軟雅黑';
        padding: 8px 14px;
        margin-bottom: 8px;
        width: 310px;
    }
    
    .loginBox .loginInput:FOCUS {
        border: 1px solid #B7D4EA;
        box-shadow: 0 0 8px #B7D4EA;
    }
    
    .loginBox .loginBtn {
        background-image: -moz-linear-gradient(to bottom, blue, #29a9e0);
        border: 1px solid #98CCE7;
        border-radius: 20px;
        box-shadow: inset rgba(255, 255, 255, 0.6) 0 1px 1px, rgba(0, 0, 0, 0.1) 0 1px 1px;
        color: #444;
        /*登入*/
        cursor: pointer;
        float: right;
        font: bold 13px Arial;
        padding: 10px 50px;
    }
    
    .loginBox .loginBtn:HOVER {
        background-image: -moz-linear-gradient(to top, blue, #85CFEE);
    }
    
    .loginBox a.forgetLink {
        color: #ABABAB;
        cursor: pointer;
        float: right;
        font: 11px/20px Arial;
        text-decoration: none;
        vertical-align: middle;
        /*忘記密碼*/
    }
    
    .loginBox a.forgetLink:HOVER {
        color: #000000;
        text-decoration: none;
        /*忘記密碼*/
    }
    
    .loginBox input#remember {
        vertical-align: middle;
    }
    
    .loginBox label[for="remember"] {
        font: 11px Arial;
    }
</style>

	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">Uniqloooo</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="generic.html">Generic</a></li>
						<li><a href="elements.html">Elements</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.php" class="button special">Sign Up</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
			<form method="post" action="register.php" id="register_form" align="center">	
  			<h1><font color="white">註冊帳號</font></h1>
  			<div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
	  		<input type="text" name="username"  placeholder="Username" value="<?php echo $username; ?>">
	  			<?php if (isset($name_error)): ?>
	  			<span><?php echo $name_error; ?></span>
	  			<?php endif ?>
  			</div>
  			<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
      			<input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
      				<?php if (isset($email_error)): ?>
      				<span><?php echo $email_error; ?></span>
      				<?php endif ?>
  			</div>
  			<div>
  				<input type="password"  placeholder="Password" name="password">
	  		</div>
            <div>
            <select name="identity">
                <option value="null"selected>請選擇您的身分</option>
                <option value="Store">我是店家</option>
                <option value="Normal" >我是一般使用者</option>
            </select>
		  	</div>	
  			<div>
  				<button type="submit" name="register" id="reg_btn">註冊帳號</button>
  			</div>
  		</form>	
            </section>
  		    
	</body> 		
</body>
</html>