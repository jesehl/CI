<h1> THis is the one</h1>


<h3>Name</h3>

<?php echo form_input('recipient'); ?>


<h3>Amount</h3>

<?php echo form_input('amount'); ?>

<h3>Bank</h3>

<?php $banks = array(
                  'bpi'  => 'BPI',
                  'metrobank'    => 'Metrobank',
                ); 
echo form_dropdown('banks', $banks, 'bpi'); ?>