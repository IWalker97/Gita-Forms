<?php include 'connection_input_mentee.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>GITA Forms</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100" style="background-image: url(GITA.png); background-size: 100%; background-repeat: no-repeat; background-position-y:center; background-position-x:78px">
			<form class="contact100-form validate-form"  name="myform" method="POST" action="success_mentee.php">
				<span class="contact100-form-title">
					After Program Survey - Mentee
				</span>

				<div class="wrap-contact100-form-radio col-md-6 col-sm-6" style="width: auto;">
						<span class="label-input100">Do you think that the meetings occurred as frequently as needed?</span>

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio1" type="radio" name="question1" value="Yes">
							<label class="label-radio100" for="radio1">
								Yes
							</label>
						</div>
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="question1" value="No">
							<label class="label-radio100" for="radio2">
								No
							</label>
						</div>
					</div>

					<div class="wrap-contact100-form-radio col-md-6 col-sm-6" style="width: auto;">
						<span class="label-input100">Did your Mentor help you identify and reach your goals?</span>


						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio3" type="radio" onclick="show1();" name="question2" value="yes">
							<label class="label-radio100" for="radio3">
								Yes
							</label>
						</div>
					

						
						<div class="contact100-form-radio " >
							<input type="radio" class="input-radio100" onclick="show2();" id="radio4" name="question2" value="no">
							<label class="label-radio100 col-lg-6 col-md-6" for="radio4">
								No
							</label>
									
						
						

</div>
											<div style=" width: 100%; " class="wrap-input100 validate-input bg0 rs1-alert-validate m-t-15 col-lg-12 " id="drop" data-validate = "Please Type Your Message">
					<span  class="label-input100">What recommendations would you make to improve this program?</span>
					<textarea  class="input100" name="message" placeholder="Your message here..."></textarea>
				</div>
							
						
					
						


					</div>


					<div class="wrap-contact100-form-radio col-md-6 col-sm-6" style="width: auto;">
						<span class="label-input100">Did you have enough time in your meetings?</span>

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio5" type="radio" name="question3" value="Yes">
							<label class="label-radio100" for="radio5">
								Yes
							</label>
						</div>
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio6" type="radio" name="question3" value="No">
							<label class="label-radio100" for="radio6">
								No
							</label>
						</div>
					</div>


					<div class="wrap-contact100-form-radio col-md-6 col-sm-6" style="width: auto;">
						<span class="label-input100">Was your Mentor available when you needed their help?</span>

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio7" type="radio" name="question4" value="Yes">
							<label class="label-radio100" for="radio7">
								Yes
							</label>
						</div>
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio8" type="radio" name="question4" value="No">
							<label class="label-radio100" for="radio8">
								No
							</label>
						</div>
					</div>


					<div class="wrap-input100 validate-input bg0 rs1-alert-validate m-t-15" data-validate = "Please Type Your Message">
					<span class="label-input100">What recommendations would you make to improve this program?</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>





				 
			</form>
		</div>
	</div>
<script src="Survey.js"></script>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>

	
<script>
		//ensures no more than two expertise fields are checked
		$(document).ready(function () {
		   $("input[type='checkbox']").change(function () {
			  var maxAllowed = 2;
			  var cnt = $("input[type='checkbox']:checked").length;
			  if (cnt == maxAllowed) 
			  {

				$("input[type='checkbox']:not(:checked)").attr('disabled', 'disabled');
				
			 }else {
			 	
			 	$("input[type='checkbox']").removeAttr('disabled');
			 }
		  });
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<?php if(isset($_POST['submit'])){
	 require 'mentee_validation.php';

 }
 ?>


</body>
</html>
