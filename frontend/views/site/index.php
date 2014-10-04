<?php
/**
 * @var $this yii\web\View
 * @var $categories array
 */
$this->title = 'WordPress Template Generator';
?>
<div class="container">
    <!-- Push Wrapper -->
    <div class="mp-pusher" id="mp-pusher">

        <!-- mp-menu -->
        <nav id="mp-menu" class="mp-menu">
            <div class="mp-level">
                <h2>Select a Category</h2>
                <ul>
                    <?php foreach ($categories as $catName => $category): ?>
                    <li class="icon icon-arrow-left">
                        <a href="#"><?= $catName ?></a>
                        <div class="mp-level">
                            <h2 class="icon icon-display"><?= $catName ?></h2>
                            <a class="mp-back" href="#">back</a>
                            <div class="items-list">
                                <ul>
                                    <?php foreach ($category['items'] as $item): ?>
                                        <li class="menu-item"><a href="#"><img src="elements/images/thumbs/<?= $item['img'] ?>" width="294px" data-id="<?= $item['id'] ?>" /></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>
        <!-- /mp-menu -->

        <a id="trigger" class="icon-burger" href="#"><i></i></a>

        <div class="project-container">
            <div class="browser-header">
                <i class="dot"></i>
                <i class="dot dot2"></i>
                <i class="dot dot3"></i>
                <input type="text" placeholder="Enter name for your theme" />
            </div>
            <div class="canvas">
                <ul id="sortable"></ul>
            </div>
        </div>


    </div><!-- /pusher -->
</div><!-- /container -->
