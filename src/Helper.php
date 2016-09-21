<?php

namespace Oaattia\MissingTranslation;

use Illuminate\Filesystem\Filesystem;

class Helper
{
    /**
     * @var Filesystem
     */
    private $filesystem;

    /**
     * @var
     */
    private $app;

    /**
     * Factory constructor.
     *
     * @param Filesystem $filesystem
     * @param \Illuminate\Contracts\Foundation\Application $app
     */
    public function __construct(Filesystem $filesystem, $app)
    {
        $this->filesystem = $filesystem;
        $this->app = $app;
    }

    /**
     * Extract the string from the html.
     *
     * @param $html
     *
     * @return string[]
     */
    public function extractText($html)
    {
        $extractedStringArray = $this->getHtmlTags($html);
        foreach ($extractedStringArray as $string) {
            if (ctype_alnum(trim($string))) {
                $strings[] = trim($string);
            }
        }

        return $strings;
    }

    /**
     * Get Html complete html tags.
     *
     * @param $html
     *
     * @return array
     */
    private function getHtmlTags($html)
    {
        return preg_split('/<.*?>/', $html, -1, PREG_SPLIT_NO_EMPTY);
    }

    /**
     * Get views content.
     *
     * @param array $paths
     *
     * @return string[]
     */
    public function getViews($paths = [])
    {
        $paths = $paths ?: $this->app['config']['view.paths'];
        foreach ($paths as $path) {
            // get the file content here
            $content[] = $this->filesystem->get($path);
        }

        return $content;
    }
}
