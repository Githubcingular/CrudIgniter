<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Forma_pgto</title>
</head>
<body>
	<h1>Forma_pgto - Add</h1>
	<form action="<?php echo site_url('forma_pgto/do_add'); ?>" method="post">
		<p>
			<label for="nome">Nome</label>
			<input type="text" value="<?php echo set_value('nome'); ?>"name="nome" id="nome" />
			<?php echo form_error('nome'); ?>
		</p>
		<p>
			<label for="do_action">Add</label>
			<input type="submit" value="Add" id="do_action" name="do_action" />
		</p>
	</form>
</body>
</html>