<br><br><br>

<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>

    <label for="title">Title</label>
    <input class="form-control" type="input" name="title" /><br />

    <label for="body">Text</label>
    <textarea class="form-control" name="body"></textarea><br />

    <input class="btn btn-default" type="submit" name="submit" value="Create news item" />

</form>