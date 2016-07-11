<?php

namespace InteroPhp\ModuleManager;

use InteroPhp\Module\ModuleInterface;

class ModuleManager
{
    protected $modules = [];
    
    public function addModule(ModuleInterface $module)
    {
        $this->modules[$module->getName()] = $module;
    }
    
    public function getModules()
    {
        return $this->modules;
    }
    
    public function initModules()
    {
        // register twig paths
        // register repositories
        // register controllers ?
        // register streamwrapper?
    }
}
