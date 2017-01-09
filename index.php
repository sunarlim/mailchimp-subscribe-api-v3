<html>
<head>
	<title>MailChimp (API v3) Sign-Up Form</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			// jQuery Validation
			$("#signup").validate({
				// if valid, post data via AJAX
				submitHandler: function(form) {
					$.post("subscribe.php", { fname: $("#fname").val(), lname: $("#lname").val(), email: $("#email").val() }, function(data) {
						$('#response').html(data);
					});
				},
				// all fields are required
				rules: {
					fname: {
						required: true
					},
					lname: {
						required: true
					},
					email: {
						required: true,
						email: true
					}
				}
			});
		});
	</script>
</head>

<body>
	<div id="wrapper">
		<form id="signup" class="formee" action="subscribe.php" method="post">
			<fieldset>
				<legend>Sign Up</legend>
				<div>
					<label for="fname">First Name *</label> <input name="fname" id="fname" type="text" />
				</div>
				<div>
					<label for="lname">Last Name *</label> <input name="lname" id="lname" type="text" />
				</div>
				<div>
					<label for="email">Email Address *</label> <input name="email" id="email" type="text" />
				</div>
				<div>
					<input class="right inputnew" type="submit" title="Send" value="Send" />
				</div>
			</fieldset>
		</form>
		<div id="response"></div>
	</div>
</body>
</html>
