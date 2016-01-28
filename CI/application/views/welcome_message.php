<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
        <script type="text/javascript" src="/js/jquery-2.2.0.min.js"></script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	.printableArea{
		display:none;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

@media print
    {
    	#non-printable { display: none; }
    	#printable { display: block; }
    }
}

	</style>
</head>
<body>

<div id="container">
	<h1>Cheque Writer</h1>



	<?php echo $title; ?>

<?php

	foreach ($banks as $object) {

		echo $object->name;



	}

?>


	<div id="body">
		<?php 
		$this->load->helper('form');

		$options = array(
                  'bpi'  => 'BPI',
                  'metrobank'    => 'Metrobank',
                );
		?>
	<form name ="userinput" action="welcome.php" method="post">
		<h4>Select Date</h4>
		<?php echo form_input('date'); 
		?>

		<h4>Enter Name</h4>
		<?php echo form_input('recipient'); 
		?>
		<h4>Enter Amount</h4>
		<?php echo form_input('amount'); ?>

 	</form>
		<h4>Select Bank</h4>
		<?php echo form_dropdown('banks', $options, 'bpi'); ?><br><br>
		<div id="non-printable">


    </div>

    <div id="printable">
<?php 
//Access them like so
echo $title.$heading.$message; ?>
    </form>
    </div>
<input type="button" onclick="window.print()" value="Print Invoice" />
<div id="form_input">
<?php

// Open form and set URL for submit form
echo form_open('form/data_submitted');

// Show Name Field in View Page
echo form_label('User Name :', 'u_name');
$data= array(
'name' => 'u_name',
'placeholder' => 'Please Enter User Name',
'class' => 'input_box'
);
echo form_input($data);

// Show Email Field in View Page
echo form_label('User email:', 'u_email');
$data= array(
'type' => 'email',
'name' => 'u_email',
'placeholder' => 'Please Enter Email Address',
'class' => 'input_box'
);
echo form_input($data);
?>
</div>

// Show Update Field in View Page
<div id="form_button">
<?php
$data = array(
'type' => 'submit',
'value'=> 'Submit',
'class'=> 'submit'
);
echo form_submit($data); ?>
</div>

// Close Form
<?php echo form_close();?>

// Display Entered values in View Page

<?php if(isset($user_name) && isset($user_email_id)){
echo "<div id='content_result'>";
echo "<h3 id='result_id'>You have submitted these values</h3><br/><hr>";
echo "<div id='result_show'>";
echo "<label class='label_output'>Entered User Name : </label>".$user_name;
echo "<label class='label_output'>Entered Email: </label>".$user_email_id;
echo "<div>";
echo "</div>";
} ?>
</div>
</div>
</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>