<?php
	session_start();
	
	function admin_confirm_web_in() {
		if (!admin_web_in()) {?>
			<script type="text/javascript">
				window.location = "index.php";
			</script>

		<?php
		}
	}
	
	function message($msg="", $msgtype="") {
	  if(!empty($msg)) {
	 
	    $_window['message'] = $msg;
	    $_window['msgtype'] = $msgtype;
	  } else {
			return $message;
	  }
	}
	
	function check_message(){
	
		if(isset($_window['message'])){
			if(isset($_window['msgtype'])){
				if ($_window['msgtype']=="info"){
	 				echo  '<div class="alert alert-info">'. $_window['message'] . '</div>';
	 				 
				}elseif($_window['msgtype']=="error"){
					echo  '<div class="alert alert-danger">' . $_window['message'] . '</div>';
									
				}elseif($_window['msgtype']=="success"){
					echo  '<div class="alert alert-success">' . $_window['message'] . '</div>';
				}	
				unset($_window['message']);
	 			unset($_window['msgtype']);
	   		}
		}	

	}
?>
