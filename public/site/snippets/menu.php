<header <?php if($page->coverImage()->isNotEmpty()): ?>style="background-image: url('<?php echo $page->image($page->coverImage()->value())->url() ?>'); background-size: cover; background-repeat: no-repeat;" <?php endif ?>>
    <div class="container">
      <div class="header-inner">
        <div class="title">
            <h3 class="name"><a href="/"><img src="../assets/images/ws_logo.svg" width="300"/></a></h3>
        </div>
        <?php

        // nested menu
        $items = $pages->visible();

        // only show the menu if items are available
        if($items->count()):

        ?>
        <nav id="menu">
          <ul>
            <?php foreach($items as $item): ?>
            <li>
              <a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><h3><?php echo $item->title()->html() ?></h3></a>

              <?php

              // get all children for the current menu item
              $children = $item->children()->visible();

              // display the submenu if children are available
              if($children->count() > 0):

              ?>
              <ul class="sub-menu">
                <?php foreach($children as $child): ?>
                <li><a<?php e($child->isOpen(), ' class="active"') ?> href="<?php echo $child->url() ?>"><h3><?php echo $child->title()->html() ?></h3></a></li>
                <?php endforeach ?>
              </ul>
              <?php endif ?>

            </li>
            <?php endforeach ?>
          </ul>
        </nav>
        <?php endif ?>
      </div>
    </div>
</header>
