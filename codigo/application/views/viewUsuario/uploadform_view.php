
<html>
<head>
<title>Upload Form</title>
</head>
<body>
<?php echo form_open_multipart('controladorUsuario/imageupload/doupload');?>
<input name="userfile[]" id="userfile" type="file" multiple="" /><br>
<input name="userfile[]" id="userfile" type="file" multiple="" /><br>
<input type="submit" value="upload" />
<?php echo form_close() ?>
</body>
</html>