<?php
	include_once("includes/header.php");
	echo $_SESSION['START'];
	$sessionClass->checkSession();

	if($_SESSION['USER_ID'] == ""){
		$_SESSION['USER_ID'] = "";
	}else{
		$_SESSION['USER_ID'] = $_SESSION['USER_ID'];
	}

?>
<script type='text/javascript'>
$( document ).ready(function() {
	$('#login').submit(function (e) {
	e.preventDefault();
	var action_url = $(this).attr('action');
	var form_data = $(this).serializeArray();
	$.ajax({
		url: action_url,
		data: form_data,
		type: 'post',
		dataType: 'json',
		success: function (data) {
			if(data.success === false){
				$( "#msg" ).fadeIn();
				$( "#msg" ).html(data.msg);

			} else if (data.success === true){
				$( "#msg" ).fadeIn();
				$( "#msg" ).html(data.msg);
				/*window.onload = function() {
					setTimeout(function() {
						window.location = "nav.php";
					}, 5);
				};*/

			}
		}
	});

	return false;
	});
});
</script>
<div id='wrapper_content'>
    <!-- <div class='twocolumnarea'>
		<div class='frame'>
            <div class='infotop'>Login</div>
            <div class='contentarea'>
                <div id='msg'></div>
                <form method='post' action="ajax/check_login.php" id="login">
               		<input type='text' name='email' placeholder="E-Mail"><br/>
                    <input type='password' name='pass' placeholder="Wachtwoord"><br/>
                    <input type='submit' name='login' value='LOGIN'>
                </form>
            </div>
        </div>
	</div>
    <div class='clearfix'></div> -->


<!-- Order lijst -->
	<div class="samenstellen">
		<div class="infotop">LOGIN</div>
		<div class="content">
			 <div id='msg'></div>
            <form method='post' action="ajax/check_login.php" id="login">
           		<input type='text' name='email' placeholder="E-Mail"><br/>
                <input type='password' name='pass' placeholder="Wachtwoord"><br/>
                <input type='submit' name='login' value='LOGIN'>
            </form>
		</div>
	</div>
	<div class='clearfix'></div>
<?php
	if($sessionClass->checkSession() == true){
?>
<div class='twocolumnarea'>
    <div class='frame'>
        <div class='infotop'>
            U bent ingelogd als
        </div>
        <div class='contentarea'>
			 Welkom
        </div>
    </div>
</div>
<div class='clearfix'></div>
<?php
	}else{
?>

<div class='twocolumnarea'>
    <div class='frame'>
        <div class='infotop'>
            Login
        </div>
        <div class='contentarea'>
            <div id='msg'></div>
            <form method='post' action="ajax/check_login.php" id="login">
                <input type='text' name='email' placeholder="E-Mail"><br/>
                <input type='password' name='pass' placeholder="Wachtwoord"><br/>
                <input type='submit' name='login' value='LOGIN'>
            </form>
        </div>
    </div>
</div>
<div class='clearfix'></div>
<?php
	}
?>
</div>
<?php
	include_once("includes/footer.php");
?>