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
					header("Location: search.php?c=stores&s=".$_POST[$inputname]."");
				}else{
					return "
					<div class='frame location'>
						<div class='infotop'>
							".$title."
						</div>
						<div class='contentarea'>
							<p class='melding'>U moet een geldige zoekterm opgeven!</p>
							<p>".$information."</p>
							<form method='post' style='padding-bottom:10px;'>
							<input type='text' name='".$inputname."'><input type='submit' name='".$submit."' value='ZOEKEN'>
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
						<input type='text' name='".$inputname."'><input type='submit' name='".$submit."' value='ZOEKEN'>
						</form>
					</div>
				</div>
			";
			}



		}
		public function search($title, $information, $submit, $inputname, $selectname)
		{
			if($information == ""){
				$information = "";
			}
			if($title == ""){
				$title = "";
			}
			$returnthis = "";
			$categorien = array("Pizza", "Pasta", "Salades", "Deserts", "Drinks");

			if(isset($_POST[$submit])){
				if(!empty($_POST[$inputname]) && $_POST[$inputname] != ""){
					if(in_array($categorie, $selectname)){
						header("Location: search.php?s=".$_POST[$inputname]."");
					}
				}else{
					$returnthis .= "
					<div class='frame location'>
						<div class='infotop'>
							".$title."
						</div>
						<div class='contentarea'>
							<p class='melding'>U moet een geldige zoekterm opgeven!</p>
							<p>".$information."</p>
							<form method='post' style='padding-bottom:10px;'>
							<input type='text' name='".$inputname."'><br/>
							<select name='".$selectname."'>";
					$i = 1;
					foreach($categorien as $data){
						 $returnthis .= "<option value='".$i++."'>".$data."</option>";
					}
					$returnthis .= "</select>
							<input type='submit' name='".$submit."' value='ZOEKEN'>
							</form>
						</div>
					</div>";
			return $returnthis;

				}
			}else{
				$returnthis .= "
					<div class='frame location'>
						<div class='infotop'>
							".$title."
						</div>
						<div class='contentarea'>
							<p>".$information."</p>
							<form method='post'>
							<input type='text' name='".$inputname."'><br/>
							<select name='".$selectname."'>";
					$i = 1;
					foreach($categorien as $data){
						 $returnthis .= "<option value='".$i++."'>".$data."</option>";
					}
					$returnthis .= "</select>
							<input type='submit' name='".$submit."' value='ZOEKEN'>
							</form>
						</div>
					</div>";

			return $returnthis;
			}
		}

	}
?>