<?php

// nested menu
$items = $pages->visible();

// only show the menu if items are available
if($items->count()):

?>
<nav class="sidebar__nav" role="tablist" aria-multiselectable="true">
    <ul class="sidebar__nav-list">
        <?php foreach($items as $item): ?>
        <li class="sidebar__nav-group">
            <button class="sidebar__nav-title" id="<?php echo $item->title()->html() ?>-tab" role="tab" aria-controls="<?php echo $item->title()->html() ?>"><?php echo $item->title()->html() ?></button>
            <?php

            // get all children for the current menu item
            $children = $item->children()->visible();

            // display the submenu if children are available
            if($children->count() > 0):

            ?>
            <section class="sidebar__nav-section" id="overview" role="tabpanel" aria-hidden="false" aria-labelledby="<?php echo $item->title()->html() ?>-tab">
                <ul class="sidebar__nav-list">
                    <?php foreach($children as $child): ?>
                    <li class="sidebar__nav-item">
                        <a<?php e($child->isOpen(), ' aria-current="page"') ?> href="<?php echo $child->url() ?>" class="sidebar__nav-link" ><?php echo $child->title()->html() ?></a>
                    </li>
                    <?php endforeach ?>
                </ul>
            </section>
            <?php endif ?>
        </li>
        <?php endforeach ?>
    </ul>
</nav>
<?php endif ?>
