<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Spatie\Image\Image;

class ImageResizeService
{
    public function resize(string $src, array $widths): array
    {
        $images = [];

        // Generate the image for each width.
        foreach ($widths as $key => $width) {
            if (! File::exists(public_path($src))) {
                Log::debug("File {$src} does not exist.");

                continue;
            }

            $images[$width] = $this->generate($src, $width);
        }

        return $images;
    }

    protected static function getFilename(string $path): string
    {
        return pathinfo($path, PATHINFO_FILENAME);
    }

    protected static function getExtension(string $path): string
    {
        return pathinfo($path, PATHINFO_EXTENSION);
    }

    public function generate(string $src, int $width): string
    {
        $filename = self::getFilename($src);
        $extension = self::getExtension($src);
        $dir = pathinfo($src, PATHINFO_DIRNAME);

        $newFileName = "conversions{$dir}/{$filename}@{$width}w.{$extension}";

        // Have we already generated this iamge?
        if (File::exists(public_path($newFileName))) {
            return $newFileName;
        }

        Log::debug("Generating image {$newFileName}");

        // Does the directory exist?
        File::ensureDirectoryExists(public_path("conversions{$dir}"));

        // Otherwise, generate an image for each dimension.
        Image::load(public_path($src))
            ->width($width)
            ->height($width * 0.75)
            ->save(public_path($newFileName));

        return $newFileName;
    }
}
