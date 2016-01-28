<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title><?php echo $title ?> </title>
        <script type="text/javascript" src="/js/jquery-2.2.0.min.js"></script>
<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
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

	.name {
    	text-align: left;
		font-size: 14px;
		display:inline-block;margin-right:380px;
		color:black;
		margin-left:40px;
		margin-top:-2px !important;


 	}
 	.date {
 		text-align:left;
 		margin-left:500px;
		font-size: 14px;
		color:black;
		margin-bottom: -6px;
 	}
 	.amount {
    	text-align: left;
		font-size: 14px;
		display:inline-block;
		color:black;

 	}
 	.words {
    	text-align: left;
		font-size: 14px;
		color:black;
		margin-left: 40px;
		margin-top:8px !important;


 	}
}

	</style>
	<style type="text/css" media="print">
	.dontprint
{ display: none; }
</style>
</head>

<body>

<div class='form' >
<div class='dontprint' >
<?php 
echo heading($title , 3);

	$banks = array(
			'bpi' => 'BPI',
			'metro' => 'Metrobank',
			'eastwest' => 'EastWest'

			);

	$url_sent_from = current_url();
	echo '<div id="printableArea">';?>

	<?php if (isset($name) && isset($banks)){
		echo validation_errors();?>
		</div>

</div>
<div class='result' >
<div class='date' >
<?php	
		echo strtoupper($date);
		echo '</div>';?>
		</div>
<div class='name' >
<?php 	echo strtoupper('**' . $name . '**');?>
		</div>
<div class='amount' >
<?php	

		echo br(1);
		echo '**' . $amount . '**';?>
		</div>

<div class='words' >
<?php	
		echo strtoupper('**' . $words . '**');?>
		</div>


<div class='dontprint' >
<?php	echo br(1);
		echo '<button onClick="window.print()">Print</button>' ?>
		</div>
		</div>
<?php 	} else {

	echo validation_errors();
	
	echo form_open();
	echo form_hidden('url', $url_sent_from);
	echo br(2);
	echo 'Input Name';
	echo br(1);
	echo form_input('name');
	echo br(2);
	echo 'Input Amount';
	echo br(1);
	echo form_input('amount');
	echo br(2);
	echo 'Input Amount in Words';
	echo br(1);
	echo form_input('words');
	echo br(2);
	echo 'Input Date';
	echo br(1);
	echo form_input('date');
	echo br(2);
	echo form_submit('mysubmit', 'Submit');
	echo form_close();
	}
?>
</body>