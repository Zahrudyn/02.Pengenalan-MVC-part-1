<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">	
	<!-- Begin page content -->
	<main role="main" class="container">

		<h1>Tulis Blog Baru</h1>

		<?php echo validation_errors(); ?>

		<?php echo form_open('blog/create'); ?>

		    <label for="title">Judul</label>
		    <input type="input" name="title" /><br />

		    <label for="text">Konten</label>
		    <textarea name="text"></textarea><br />

		    <input type="submit" name="submit" value="Post artikel" />

		</form>

	</main>
</div>