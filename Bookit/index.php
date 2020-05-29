<?php include('header.php'); ?>

	<!-- this is for welcome -->
	<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">BOOK IT</h1>
  <p class="w3-xlarge">Booking Doctors Online is now easier with BOOKIT</p>
  <button onclick="document.location = '/bookit/patient_login.php'" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">BOOK NOW</button>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>PATIENT</h1>
      <h5 class="w3-padding-32"><A></A> patient who is hospitalized for less than 24 hours. Even if the patient will not be formally admitted with a note as an outpatient, they are still registered, and the provider will usually give a note explaining the reason for the service, procedure, scan, or surgery, which should include the names and titles and IDs of the participating personnel, the patient's name and date of birth and ID and signature of informed consent, estimated pre- and post-service time for a history and exam (before and after), any anesthesia or medications needed, and estimated time of discharge absent any (further) complications. Treatment provided in this fashion is called ambulatory care.</h5>
    </div>

    <div class="w3-third w3-center">
	<img src="https://bookit-1.s3.amazonaws.com/patient.jpg" alt="Trulli" width="300" height="300" style="margin-left:0px;">
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
	<img src="https://bookit-1.s3.amazonaws.com/header_img.jpg" alt="Trulli" width="300" height="300" style="margin-left:0px;">
    </div>

    <div class="w3-twothird">
      <h1>DOCTOR</h1>
      <h5 class="w3-padding-32">A physician (American English), medical practitioner (Commonwealth English), medical doctor, or simply doctor, is a professional who practises medicine, which is concerned with promoting, maintaining, or restoring health through the study, diagnosis, prognosis and treatment of disease, injury, and other physical and mental impairments. Physicians may focus their practice on certain disease categories, types of patients, and methods of treatment known as specialitiesor they may assume responsibility for the provision of continuing and comprehensive medical care to individuals, families, and communitiesknown as general practice. Medical practice properly requires both a detailed knowledge of the academic disciplines, such as anatomy and physiology, underlying diseases and their treatment—the science of medicine—and also a decent competence in its applied practice—the art or craft of medicine.</h5>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: Live Life</h1>
</div>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

<!-- Footer -->
<?php include('footer.php'); ?>
	 	
</div>	<!--  containerFluid Ends -->
	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
</body>
</html>