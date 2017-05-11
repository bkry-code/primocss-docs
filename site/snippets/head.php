<!DOCTYPE html>
<html dir="ltr" lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
    <meta charset="utf-8">
    <meta name="author" content="<?= $site->author()->html() ?>">
    <meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

    <?= css('assets/css/styles.css') ?>

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="<?= $site->title()->html() ?>">
    <meta name="twitter:creator" content="<?= $site->author()->html() ?>">
    <meta name="twitter:domain" content="<?php echo kirby()->urls()->index() ?>">
    <meta name="twitter:title" content="<?= $site->title()->html() ?>">
    <meta name="twitter:description" content="<?= $site->description()->html() ?>">
    <meta name="twitter:image" content="">

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            var clickCheck = false,
                currentLink = $('.sidebar__nav-link[aria-current="page"]');

            currentLink.closest('.sidebar__nav-section').prev('.sidebar__nav-title').attr({
                'aria-expanded': 'true',
                'aria-selected': 'true'
            }).show();

            currentLink.closest('.sidebar__nav-section').attr('aria-hidden', 'false').show();

            $(document).on('click', '.sidebar__nav-title', function(){
                if(!clickCheck){
                    clickCheck = true;

                    var currIndex = $('.sidebar__nav-title').index(this);

                    $('.sidebar__nav-title').attr({
                        'aria-expanded': 'false',
                        'aria-selected': 'false'
                    });

                    $(this).attr({
                        'aria-expanded': 'true',
                        'aria-selected': 'true'
                    });

                    $('.sidebar__nav-section').attr('aria-hidden', 'true').hide();

                    $('.sidebar__nav-section').eq(currIndex).attr('aria-hidden', 'false').show();

                    clickCheck = false;
                }
            });
        });
    </script>
</head>
<body>
