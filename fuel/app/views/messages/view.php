<h2>Viewing <span class='muted'>#<?php echo $message->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $message->name; ?></p>
<p>
	<strong>Message:</strong>
	<?php echo $message->message; ?></p>

<?php echo Html::anchor('messages/edit/'.$message->id, 'Edit'); ?> |
<?php echo Html::anchor('messages', 'Back'); ?>