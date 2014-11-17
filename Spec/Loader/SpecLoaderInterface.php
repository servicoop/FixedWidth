<?php
namespace Giftcards\FixedWidth\Spec\Loader;


use Giftcards\FixedWidth\Spec\FileSpec;

interface SpecLoaderInterface
{
    /**
     * @param $value
     * @return FileSpec
     * @throw SpecNotFoundException
     */
    public function loadSpec($value);
} 