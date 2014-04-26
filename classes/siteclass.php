<?php
 	class siteFunctions
	{
		protected $active;
		
		public function sitetitle()
		{
			return "Pizzatoday";	
		}
		
		function curPageName() 
		{
			 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
		}
			
		public function menuActive()
		{
			$active = curPageName();
			
		}
		
		public function storeLocator($title, $information, $submit, $inputname)
		{
			if($information == ""){
				$information = "Vul hier je woonplaats in";
			}
			if($title == ""){
				$title = "StoreLocator";	
			}
			
			if(isset($_POST[$submit])){
				if(!empty($_POST[$inputname]) && $_POST[$inputname] != ""){
					header("Location: search.php?s=".$_POST[$inputname]."");
				}else{
					return "
					<div class='frame location'>
						<div class='infotop'>
							".$title."
						</div>
						<div class='contentarea'>
							<p><font style='color: red; font-weight: bold;'>U moet een zoekterm opgeven!</font></p>
							<p>".$information."</p>
							<form method='post'>
							<input type='text' name='".$inputname."'><input type='submit' name='".$submit."'>
							</form>
						</div>
					</div>
				";	
				}
			}else{
				return "
				<div class='frame location'>
					<div class='infotop'>
						".$title."
					</div>
					<div class='contentarea'>
						<p>".$information."</p>
						<form method='post'>
						<input type='text' name='".$inputname."'><input type='submit' name='".$submit."'>
						</form>
					</div>
				</div>
			";
			}
			
			
			
		}
			
	}
?>