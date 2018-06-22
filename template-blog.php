<?php /* Template Name: Blog Template */ ?>

<?php get_header(); ?>

<section class="header-blog">
	<div class="container">
		<h3><?php the_title() ?></h3>
	</div>	
</section>


<section class="menu-blog">

<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

    	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="#">Materiais Educativos</a>
      </li>


    </ul>
  </div>
</nav>
</div>

</section>



<?php
  while (have_posts()) {
  the_post();
?>



<div class="blog-area pt-50 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 pr-45 blog-space">
            


<?php the_content(); ?>

                        </div>
                        
                        <?php get_sidebar(); ?>

                    </div>
                    
                </div>
            </div>

<?php } ?>


<?php get_footer(); ?>