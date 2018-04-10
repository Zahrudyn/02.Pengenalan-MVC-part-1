<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">	
	<!-- Begin page content -->
	<main role="main" class="container">
		
		<h1>My Blog</h1>

		<?php if( !empty($all_blogs) ) : ?>
		
		<div class="card-deck">
		<?php 
			// Kita looping data dari controller
			foreach ($all_blogs as $key) :
				?>

				<!-- Kita format tampilan blog dalam bentuk card -->
				<!-- https://getbootstrap.com/docs/4.0/components/card/ -->
				<div class="card" style="width: 18rem;">

					<!-- Load thumbnail, jika ada -->
					<?php if( $key->post_thumbnail ) : ?>
					<img class="card-img-top" src="<?php echo base_url() . $key->post_thumbnail ?>" alt="Card image cap">
					<?php endif; ?>

					<div class="card-body">
						<h5 class="card-title"><?php echo $key->post_title ?></h5>

						<!-- Batasi cuplikan konten dengan substr sederhana -->
						<p class="card-text"><?php echo substr( $key->post_content , 0, 80)?>...</p>

						<!-- Untuk link detail -->
						<a href="<?php echo base_url() . $key->post_slug ?>" class="btn btn-primary">Baca</a>
					</div>
				</div>

		<?php endforeach; ?>
		</div>

	<?php else : ?>

		<p>Belum ada data bosque.</p>

	<?php endif; ?>


	</main>
</div>