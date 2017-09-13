<?php
defined('C5_EXECUTE') or die("Access Denied.");
$th = Loader::helper('text');
$c = Page::getCurrentPage();
$dh = Core::make('helper/date'); /* @var $dh \Concrete\Core\Localization\Service\Date */
?>

<?php if ($c->isEditMode() && $controller->isBlockEmpty()) {?>
    <div class="ccm-edit-mode-disabled-item"><?php echo t('Empty Page List Block.')?></div>
<?php } else { ?>

    <!-- Blog Two Column -->

    <div id="blog" class="grid-layout post-2-columns m-b-30" data-item="post-item">

        <?php

        $includeEntryText = false;
        if (
            (isset($includeName) && $includeName)
            ||
            (isset($includeDescription) && $includeDescription)
            ||
            (isset($useButtonForLink) && $useButtonForLink)
        ) {
            $includeEntryText = true;
        }

        foreach ($pages as $page):

            // Prepare data for each page being listed...
            $buttonClasses = 'item-link';
            $entryClasses = 'post-item border';
            $title = $th->entities($page->getCollectionName());
            $url = ($page->getCollectionPointerExternalLink() != '') ? $page->getCollectionPointerExternalLink() : $nh->getLinkToCollection($page);
            $target = ($page->getCollectionPointerExternalLink() != '' && $page->openCollectionPointerExternalLinkInNewWindow()) ? '_blank' : $page->getAttribute('nav_target');
            $target = empty($target) ? '_self' : $target;
            $description = $page->getCollectionDescription();
            $description = $controller->truncateSummaries ? $th->wordSafeShortText($description, $controller->truncateChars) : $description;
            $description = $th->entities($description);
            $thumbnail = false;
            if ($displayThumbnail) {
                $thumbnail = $page->getAttribute('thumbnail');
            }

            $date = $dh->formatDateTime($page->getCollectionDatePublic(), true); ?>

            <div class="<?php echo $entryClasses?>">
                <div class="post-item-wrap">

                    <?php if (is_object($thumbnail)): ?>
                        <div class="post-image">
                            <a href="<?php echo $url?>" target="<?php echo $target?>">
                                <?php
                                $img = Core::make('html/image', array($thumbnail));
                                $tag = $img->getTag();
                                $tag->addClass('img-responsive');
                                echo $tag;
                                ?>
                            </a>
                            <span class="post-meta-category"><a href="">Lifestyle</a></span>
                        </div>
                    <?php endif; ?>

                    <?php if ($includeEntryText): ?>
                        <div class="post-item-description">

                            <?php if (isset($includeDate) && $includeDate): ?>
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo $date?></span>
                            <?php endif; ?>

                            <span class="post-meta-comments"><a href="#"><i class="fa fa-comments-o"></i>33 Comments</a></span>

                            <?php if (isset($includeName) && $includeName): ?>

                                    <?php if (isset($useButtonForLink) && $useButtonForLink) { ?>
                                        <h2><?php echo $title; ?></h2>
                                    <?php } else { ?>
                                        <h2><a href="<?php echo $url ?>" target="<?php echo $target ?>"><?php echo $title ?></a></h2>
                                    <?php } ?>

                            <?php endif; ?>

                            <?php if (isset($includeDescription) && $includeDescription): ?>
                                <p><?php echo $description ?></p>
                            <?php endif; ?>

                            <?php if (isset($useButtonForLink) && $useButtonForLink): ?>
                                    <a href="<?php echo $url?>" target="<?php echo $target?>" class="<?php echo $buttonClasses?>"><?php echo $buttonLinkText?><i class="fa fa-arrow-right"></i></a>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
    <!--/ Blog Two Column -->


    <?php if ($showPagination): ?>
        <?php echo $pagination; ?>
    <?php endif; ?>

<?php } ?>
