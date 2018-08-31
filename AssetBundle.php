<?php

namespace daxslab\mobirise;

use yii\bootstrap4\BootstrapPluginAsset;

/**
 * Asset bundle for DropZone Widget
 */
class AssetBundle extends \yii\web\AssetBundle
{

    public $sourcePath = '@daxslab/mobirise/assets';

    public $css = [
        'web/assets/mobirise-icons/mobirise-icons.css',
        'tether/tether.min.css',
        'dropdown/css/style.css',
        'animatecss/animate.min.css',
        'socicon/css/styles.css',
        'gallery/style.css',
        'mobirise/css/mbr-additional.css',
    ];

    public $js = [
        'tether/tether.min.js',
        'smoothscroll/smooth-scroll.js',
        'dropdown/js/script.min.js',
        'touchswipe/jquery.touch-swipe.min.js',
        'parallax/jarallax.min.js',
        'masonry/masonry.pkgd.min.js',
        'imagesloaded/imagesloaded.pkgd.min.js',
        'bootstrapcarouselswipe/bootstrap-carousel-swipe.js',
        "mbr-testimonials-slider/mbr-testimonials-slider.js",
        'vimeoplayer/jquery.mb.vimeo_player.js',
        'viewportchecker/jquery.viewportchecker.js',
        'slidervideo/script.js',
        'gallery/player.min.js',
        'gallery/script.js',
    ];

    public $depends = [
        BootstrapPluginAsset::class
    ];

}
