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
				window.onload = function() {
					setTimeout(function() {
						window.location = "nav.php";
					}, 5);
				};
			
			}
		}
	});
	return false;
	});
});
</script>
<?php 
	include_once("includes/header.php");
?>
<div id='wrapper_content'>
    <div class='twocolumnarea'>
		<div class='frame location'>
            <div class='infotop'>
                Login
            </div>
            <div class='contentarea'>
                <div id='msg'></div>
                <form method='post' action="check_login.php">
               		<input type='text' name='email' placeholder="E-Mail"><br/>
                    <input type='password' name='pass' placeholder="Wachtwoord"><br/><input type='submit' name='login' id='login' value='LOGIN'>
                </form>
            </div>
        </div>
	</div>
    <div class='clearfix'></div>
</div>

<?php 
	include_once("includes/footer.php");
?>