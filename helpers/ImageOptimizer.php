<?php

namespace Helpers;

use Exception;
use Illuminate\Support\Str;
use Spatie\Image\Enums\ImageDriver;
use Spatie\Image\Image;
use TightenCo\Jigsaw\Jigsaw;

class ImageOptimizer
{
    /**
     * @throws Exception
     */
    public static function imager($path, $width): string
    {
        $jig = app(Jigsaw::class);

        $filename = pathinfo($path, PATHINFO_FILENAME);
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $file = $jig->getSourcePath() . '/' .$path;

        if( !file_exists($file) ) {
            throw new Exception('Source asset not found: '.$file);
        }

        $md5file = md5_file($file);

        $out = '/assets/imagecache/'.Str::slug( $filename.'-'.$md5file.'-'.$width.'-').'.'.$ext;
        $write = $jig->getSourcePath() . $out;

        if (!file_exists($write)) {
            self::ensureDirectoryExists($write);
            Image::useImageDriver(ImageDriver::Gd)
                ->loadFile($file)
                ->width($width)
                ->optimize()
                ->save($write);
        }

        return $out;
    }

    private static function ensureDirectoryExists($path): void
    {
        $directory = pathinfo($path, PATHINFO_DIRNAME);
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
    }

    public static function afterBuild(Jigsaw $jig): void
    {
        $source = $jig->getSourcePath().'/assets/imagecache/';
        $destination = $jig->getDestinationPath().'/assets/imagecache/';

        $jig->getFilesystem()->copyDirectory($source, $destination);
    }
}