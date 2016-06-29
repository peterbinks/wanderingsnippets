<?php $img = $page->coverImage()->toFile(); ?>
<header style="background-image: url('<?php echo $img->url() ?>'); background-size: cover; background-repeat: no-repeat;">
    <div class="container">
      <div class="header-inner">
        <div class="title">
            <h3 class="name"><a href="/"><img src="assets/images/logo.svg" width="300"/></a></h3>
        </div>
        <nav id="menu">
            <ul>
                <li><a href="/about"><h3>About</h3></a></li>
            </ul>
        </nav>
      </div>
    </div>
</header>
