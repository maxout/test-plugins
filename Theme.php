<?php

namespace Shopware\Themes\Suedpack;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
Suedpack
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'
Südpack
SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
Albert Bauer Digital
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'
MIT
SHOPWARE_EOD;

    public function createConfig(Form\Container\TabContainer $container)
    {
    }
}