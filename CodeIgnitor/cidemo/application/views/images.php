<html>
<head>
<title>Upload Form</title>
</head>
<body>


<form action="<?=base_url('user/imageupload')?>" method="post" enctype="multipart/form-data">
<input type="text" name="" />
<input type="file" name="NomineeSignature" />
<?= form_error('NomineeSignature');?>
<?= form_error('uname');?>
<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>