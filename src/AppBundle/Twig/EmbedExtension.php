<?php

namespace AppBundle\Twig;
use Embed\Embed;

class EmbedExtension extends \Twig_Extension
{
    
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction(
                'embed',
                array($this, 'embed')
            )
        );
    }
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter(
                'responsive',
                array($this, 'responsive'),
                array('is_safe' => array('html'))
            )
        );
    }

    public function responsive($iframe)
    {
        return str_replace('<iframe', '<iframe class="embed-responsive-item"', $iframe);
    }

    public function embed($content)
    {
        try {
            $info = Embed::create($content);
        } catch (\Exception $e) {
            $info = null;
        }
        return $info;
        //Get content info

        $info->title; //The page title
        $info->description; //The page description
        $info->url; //The canonical url
        $info->type; //The page type (link, video, image, rich)
        $info->tags; //The page keywords (tags)

        $info->images; //List of all images found in the page
        $info->image; //The image choosen as main image
        $info->imageWidth; //The width of the main image
        $info->imageHeight; //The height of the main image

        $info->code; //The code to embed the image, video, etc
        $info->width; //The width of the embed code
        $info->height; //The height of the embed code
        $info->aspectRatio; //The aspect ratio (width/height)

        $info->authorName; //The (video/article/image/whatever) author
        $info->authorUrl; //The author url

        $info->providerName; //The provider name of the page (youtube, twitter, instagram, etc)
        $info->providerUrl; //The provider url
        $info->providerIcons; //All provider icons found in the page
        $info->providerIcon; //The icon choosen as main icon

        $info->publishedDate; //The (video/article/image/whatever) published date
    }

    public function getName()
    {
        return 'embed_extension';
    }
}
