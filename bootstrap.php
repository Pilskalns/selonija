<?php

use Helpers\ImageOptimizer;
use TightenCo\Jigsaw\Jigsaw;

/** @var \Illuminate\Container\Container $container */
/** @var \TightenCo\Jigsaw\Events\EventBus $events */

/*
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

if (! function_exists('imager')) {
    function imager(string $path, int $width): string
    {
        return ImageOptimizer::imager($path, $width);
    }
}

$events->afterBuild(function (Jigsaw $jigsaw) {
    ImageOptimizer::afterBuild($jigsaw);
});