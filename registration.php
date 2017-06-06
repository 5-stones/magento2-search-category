<?php
/**
 * Created by PhpStorm.
 * User: thomasnordkvist
 * Date: 16-03-04
 * Time: 07:54
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'FiveStones_Catalog',
    __DIR__
);
