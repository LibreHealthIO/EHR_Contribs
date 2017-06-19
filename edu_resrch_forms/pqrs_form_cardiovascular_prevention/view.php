<?php
/**
 * PQRS Cardiovascular Prevention Group Direct Data Entry
 *
 * Copyright (C) 2016      Suncoast Connection
 *
 * @package librehealthehr
 * @link    http://suncoastconnection.com
 * @author  Suncoast Connection
 * Mozilla Public License Version 2.0, Bryan Lee, <leebc>
 */

include_once("../../globals.php");
require_once($GLOBALS['fileroot']."/library/acl.inc");
?>
<html><head>
<?php  html_header_show();?>
<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">
</head>
<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<font size=2>
<?php
include_once("$srcdir/api.inc");

$obj = formFetch("pqrs_form_cardiovascular_prevention", $_GET["id"]);

?>
<form method=post action="<?php echo $rootdir?>/forms/pqrs_form_cardiovascular_prevention/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<span class="title"><center><b>Cardiovascular Prevention Quality Reporting</b></center></span><br><br>
<center>
<?php if($obj{"finalize"}!="on" OR acl_check('admin', 'super') ){?>
<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[Don't Save Changes]</a><br>
 <input type=checkbox name='finalize' <?php if ($obj{"finalize"} == "on") {echo "checked";};?>>&nbsp;<b>Check here to finalize this note and add CPT2 codes to fee sheet:</b><br>
 <?php }else{
	  echo"This form has been finalized and may not be edited!<br>";?>
 <a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[RETURN TO ENCOUNTER]</a>
 <?php }?>
 </center>
<br>

<table>
<?php $res = sqlStatement("SELECT fname,mname,lname,DOB FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res); ?>

<tr>	<td>
<b><u>Client and Service Information</u></b><br><br>
<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?> 
</td>	</tr>

<tr>	<td>	<br>
<b><u>Purpose of Form</u></b><br>
<textarea cols=120 rows=3 wrap=virtual name="purpose" ><?php  echo stripslashes($obj{"purpose"});?></textarea>
<br><br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0130 
	 <a target="_blank" href="#" title="(NQF #0419)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Documentation of Current Medications in the Medical Record 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Patient Safety"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Are current medications documented in the patient's medical record? 
	 <a target="_blank" href="#" title="Patient’s medications obtained, updated, or reviewed, and documented."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Cardiovascular_Prevention0130" value="G8427" <?php if ($obj{"Cardiovascular_Prevention0130"} == "G8427") { echo 'checked=checked'; } ?> > Current (or no) medications documented in the patient's medical record. 
	 <a target="_blank" href="#" title="(G8427) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0130" value="G8430" <?php if ($obj{"Cardiovascular_Prevention0130"} == "G8430") { echo 'checked=checked'; } ?> > Patient is not eligible. 
	 <a target="_blank" href="#" title="(G8430) (Other Performance Exclusion( (emergent or urgent situation)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0130" value="G8428" <?php if ($obj{"Cardiovascular_Prevention0130"} == "G8428") { echo 'checked=checked'; } ?> > Current list of medications not documented, NOS. 
	 <a target="_blank" href="#" title="(G8428) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0204 
	 <a target="_blank" href="#" title="(NQF 0068)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Ischemic Vascular Disease (IVD): Use of Aspirin or Another Antithrombotic 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient discharged for AMI, CABG, or PCI, and instructed to use aspirin or another antithrombotic theray? 
	 
	<p></b>


	<input type="radio" name="Cardiovascular_Prevention0204" value="G8598" <?php if ($obj{"Cardiovascular_Prevention0204"} == "G8598") { echo 'checked=checked'; } ?> > Aspirin or another antithrombotic therapy used. 
	 <a target="_blank" href="#" title="(G8598) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0204" value="G8599" <?php if ($obj{"Cardiovascular_Prevention0204"} == "G8599") { echo 'checked=checked'; } ?> > Aspirin or another antithrombotic therapy not used, reason not given. 
	 <a target="_blank" href="#" title="(G8599) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0226 
	 <a target="_blank" href="#" title="(NQF #0028)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Tobacco Use: Screening and Cessation Intervention 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community / Population Health"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Within the last 12 months: 
	 
	<p></b>


	<input type="radio" name="Cardiovascular_Prevention0226" value="4004F" <?php if ($obj{"Cardiovascular_Prevention0226"} == "4004F") { echo 'checked=checked'; } ?> > Patient screened for tobacco use AND received tobacco cessation intervention if identified as a tobacco user. 
	 <a target="_blank" href="#" title="(4004F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0226" value="1036F" <?php if ($obj{"Cardiovascular_Prevention0226"} == "1036F") { echo 'checked=checked'; } ?> > Current tobacco non-user. 
	 <a target="_blank" href="#" title="(1036F) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0226" value="4004F:1P" <?php if ($obj{"Cardiovascular_Prevention0226"} == "4004F:1P") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not screening for tobacco use. 
	 <a target="_blank" href="#" title="(4004F:1P) (Medical Performance Exclusion) (eg, limited life expectancy, other medical reasons)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0226" value="4004F:8P" <?php if ($obj{"Cardiovascular_Prevention0226"} == "4004F:8P") { echo 'checked=checked'; } ?> > Tobacco screening OR tobacco cessation intervention not performed, NOS. 
	 <a target="_blank" href="#" title="(4004F:8P) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0236 
	 <a target="_blank" href="#" title="(NQF #0018)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Controlling High Blood Pressure 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Is blood pressure adequately controlled? 
	 <a target="_blank" href="#" title="Is blood pressure &lt; 140/90 mmHg for patients aged 21 to 85 years of age who had a diagnosis of essential hypertension?"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	<p></b>


	<input type="radio" name="Cardiovascular_Prevention0236" value="G8752 G8754" <?php if ($obj{"Cardiovascular_Prevention0236"} == "G8752 G8754") { echo 'checked=checked'; } ?> > Most recent systolic blood pressure &lt; 140 mmHg AND Most recent diastolic blood pressure &lt; 90 mmHg 
	 <a target="_blank" href="#" title="(G8752 G8754) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0236" value="G8753 G8754" <?php if ($obj{"Cardiovascular_Prevention0236"} == "G8753 G8754") { echo 'checked=checked'; } ?> > Most recent systolic blood pressure &ge; 140 mmHg AND Most recent diastolic blood pressure &lt; 90 mmHg 
	 <a target="_blank" href="#" title="(G8753 G8754) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0236" value="G8752 G8755" <?php if ($obj{"Cardiovascular_Prevention0236"} == "G8752 G8755") { echo 'checked=checked'; } ?> > Most recent systolic blood pressure &lt; 140 mmHg AND Most recent diastolic blood pressure &ge; 90 mmHg 
	 <a target="_blank" href="#" title="(G8752 G8755) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0236" value="G8753 G8755" <?php if ($obj{"Cardiovascular_Prevention0236"} == "G8753 G8755") { echo 'checked=checked'; } ?> > Most recent systolic blood pressure &ge; 140 mmHg AND Most recent diastolic blood pressure &ge; 90 mmHg 
	 <a target="_blank" href="#" title="(G8753 G8755) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0236" value="G8756" <?php if ($obj{"Cardiovascular_Prevention0236"} == "G8756") { echo 'checked=checked'; } ?> > Blood Pressure Measurement not Documented, Reason not Given 
	 <a target="_blank" href="#" title="(G8756) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0317 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Preventive Care and Screening: Screening for High Blood Pressure and Follow-Up Documented 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Community/Population Health NOTE: To meet the intent of this measure, BP screening and follow-up must be performed once per measurement period. For patients with Normal blood pressure a follow-up plan is not required."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Was patient screened for high blood pressure and is indicated follow-up documented? 
	 
	<p></b>


	<input type="radio" name="Cardiovascular_Prevention0317" value="G8783" <?php if ($obj{"Cardiovascular_Prevention0317"} == "G8783") { echo 'checked=checked'; } ?> > Normal blood pressure reading documented, follow-up not required. 
	 <a target="_blank" href="#" title="(G8783) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0317" value="G8950" <?php if ($obj{"Cardiovascular_Prevention0317"} == "G8950") { echo 'checked=checked'; } ?> > Pre-Hypertensive or Hypertensive blood pressure reading documented, AND the indicated follow-up is documented. 
	 <a target="_blank" href="#" title="(G8950) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0317" value="G8784" <?php if ($obj{"Cardiovascular_Prevention0317"} == "G8784") { echo 'checked=checked'; } ?> > Patient not eligible. 
	 <a target="_blank" href="#" title="(G8784) (Other Performance Exclusion) (eg, active diagnosis of hypertension, patient refuses, urgent or emergent situation)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0317" value="G8785" <?php if ($obj{"Cardiovascular_Prevention0317"} == "G8785") { echo 'checked=checked'; } ?> > Blood pressure reading not documented, reason not given. 
	 <a target="_blank" href="#" title="(G8785) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0317" value="G8952" <?php if ($obj{"Cardiovascular_Prevention0317"} == "G8952") { echo 'checked=checked'; } ?> > Pre-Hypertensive or Hypertensive blood pressure reading documented, indicated follow-up not documented, reason not given. 
	 <a target="_blank" href="#" title="(G8952) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

<tr>	<td> <br><p><br>

	<b>
	Measure #0438 
	 <a target="_blank" href="#" title="(NQF #0000)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	 -- Statin Therapy for the Prevention and Treatment of Cardiovascular Disease 
	 <a target="_blank" href="#" title="National Quality Strategy Domain: Effective Clinical Care NOTE: In order to meet the measure, a current statin medication therapy use must be documented in the current medication list."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a> 
	</b>
	<p><b>
	Question: Is patient a current statin therapy user or received a prescription for statin therapy? 
	 
	<p></b>


	<input type="radio" name="Cardiovascular_Prevention0438" value="G9664)" <?php if ($obj{"Cardiovascular_Prevention0438"} == "G9664)") { echo 'checked=checked'; } ?> > Patient is a current statin therapy user or received a prescriptionfor statin therapy. 
	 <a target="_blank" href="#" title="(G9664) (Performance Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0438" value="G9667" <?php if ($obj{"Cardiovascular_Prevention0438"} == "G9667") { echo 'checked=checked'; } ?> > Documentation of medical reason(s) for not currently being a statin therapy user or receive an order. 
	 <a target="_blank" href="#" title="(G9667) (Medical Performance Exclusion) (eg, adverse effect, allergy or intolerance to statin medication therapy, pregnancy breastfeeding, patients who are receiving palliative care, active liver, hepatic disease, ESRD, or diabetes)."><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>


	<input type="radio" name="Cardiovascular_Prevention0438" value="G9665" <?php if ($obj{"Cardiovascular_Prevention0438"} == "G9665") { echo 'checked=checked'; } ?> > Patients who are not currently statin therapy users or did not receive an order for statin therapy. 
	 <a target="_blank" href="#" title="(G9665) (Performance Not Met)"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Tango-style_question_icon.svg" height="13px"/></a>	<br>

	<tr>	<td>
		<b>Additional notes and recommendations:</b><br>
		<textarea cols=83 rows=1 wrap=virtual  name="recommendation" ><?php echo stripslashes($obj{"recommendation"});?></textarea>
	</td>	</tr>
</table>
<br><br>

<center>
<?php if($obj{"finalize"}!="on" OR acl_check('admin', 'super') ) {?>
<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[Save]</a>
<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[Don't Save Changes]</a><br>
 <b>You must check the Finalize box at the top of the form to prevent future editing.</b><br>
 <?php }else{echo"This form has been finalized and may not be edited!<br>";?>
 <a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link"
 onclick="top.restoreSession()">[RETURN TO ENCOUNTER]</a>
 <?php }?>
 </center>
</form>
<?php
formFooter();
?>
