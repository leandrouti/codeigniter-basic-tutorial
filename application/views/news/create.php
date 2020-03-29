<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
<label for="title">Title</label>
<input type="text" name="title" id="title"> <br />

<label for="text">Text</label>
<textarea name="text" id="text"></textarea><br />

<input type="submit" value="Create news item">