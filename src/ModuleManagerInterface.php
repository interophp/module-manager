<?php

namespace InteroPhp\ModuleManager;

use InteroPhp\Module\ModuleInterface;

interface ModuleManagerInterface
{
    public function addModule(ModuleInterface $module);
    public function getModules();
}
