<?php
include_once("header.php");

?>
<section class="contct">
	<h1>
		<center>Have Questions? Reach Out</center>
	</h1>
	<div class="container">
		<div class="row con">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="map1">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.8879940323463!2d73.89616097501346!3d18.533962982562176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1078e536e7f%3A0x67eec0f4ebb1d396!2sThe%20Sassy%20Spoon%20Pune!5e0!3m2!1sen!2sin!4v1740207873469!5m2!1sen!2sin"
						width="100%" height=730" style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<form method="POST" enctype="multipart/form-data" id="contactform" class="contactf"
					action="submit_contact.php">
					<div class="conform">
						<div class="row">

							<div class="form-group col-12">

								<input type="text" class="form-control" id="name" name="name" placeholder="Name *"
									onkeyup="document.getElementById('nameErr').innerHTML=''" required>

								<label class="text-danger " id="nameErr"></label>

							</div>

							<div class="form-group col-12">

								<input type="text" class="form-control" id="email" name="email"
									placeholder="Your Email *"
									onkeyup="document.getElementById('emailErr').innerHTML=''" required>

								<label class="text-danger" id="emailErr"></label>

							</div>

							<div class="form-group col-12">

								<input type="number" class="form-control" id="phone" name="phone"
									placeholder="Mobile Number *"
									onkeyup="document.getElementById('phoneErr').innerHTML=''" required>

								<label class="text-danger" id="phoneErr"></label>

							</div>
							<div class="form-group col-12">

								<input type="text" class="form-control" id="subject" name="subject"
									placeholder="Your subject *"
									onkeyup="document.getElementById('subjectErr').innerHTML=''" required>

								<label class="text-danger" id="subjectErr"></label>

							</div>

							<div class="form-group col-12">

								<textarea id="message" name="message" class="form-control" rows="3"
									placeholder="Your Message *"
									onkeyup="document.getElementById('messageErr').innerHTML=''"
									required="required"></textarea>

								<label class="text-danger" id="messageErr"></label>

							</div>
						</div>
						<div class="submit">
							<p class="btnform">


								<button type="submit" id="btnSubmit" class=" more_btn button">Send Message</button>
							</p>
						</div>


						<div id="mail-status"></div>
					</div>
				</form>


				<script>
					$(document).ready(function () { // we can use this function then only run j-query file

						$("#btnSubmit").click(function (event) {

							event.preventDefault();

							var data = new FormData($('#contactform')[0]); //creating a onject *--- save all data ---* get data store in array 

							if ($('#name').val().trim() == '') { //remove all blank space

								document.getElementById("nameErr").innerHTML = "Please provide Name";

								document.getElementById("name").focus(); //provide a outline

								return; //break because fill this first then next block

							}

							if ($('#email').val().trim() == '') {

								document.getElementById("emailErr").innerHTML = "Please provide Email";

								document.getElementById("email").focus();

								return;

							}

							if ($('#phone').val().trim() == '') {

								document.getElementById("phoneErr").innerHTML = "Please provide Mobile Number";

								document.getElementById("phone").focus();

								return;

							}
							if ($('#subject').val().trim() == '') {

								document.getElementById("subjectErr").innerHTML = "Please provide subject";

								document.getElementById("subject").focus();

								return;

							}

							if ($('#message').val().trim() == '') {

								document.getElementById("messageErr").innerHTML = "Please provide Message";

								document.getElementById("message").focus();

								return;

							}

							$("#btnSubmit").prop("disabled", true); //button is desable if error message show --* .prop add any attribut *--





							//alert(dataString);

							//var form = $(this);

							$.ajax({ //function for send data

								type: "POST",

								url: "send_email.php",
								url: "submit_contact.php", //pass action hear

								data: data,

								processData: false,

								contentType: false,

								cache: false,

								success: function (data) {
									console.log(data);
									$("#mail-status").removeClass('text-danger');

									$("#mail-status").addClass('text-success');

									$("#mail-status").html("We have received your enquiry successfully!");

									$("#btnSubmit").prop("disabled", false);

									$('#name').val('');

									$('#email').val('');

									$('#phone').val('');
									$('#subject').val('');

									$('#message').val('');

								},

								error: function (error) {

									$("#mail-status").removeClass('text-success');

									$("#mail-status").addClass('text-danger');

									$("#mail-status").html("Something went wrong..Please try again!");

								}
							});

						});

					});
				</script>
			</div>
		</div>
</section>

<?php
include_once("footer.php")
	?>