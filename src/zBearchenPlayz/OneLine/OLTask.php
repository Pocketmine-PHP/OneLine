<?php

namespace zBearchenPlayz\OneLine;
use zBearchenPlayz\OneLine\OneLine;

use pocketmine\scheduler\PluginTask;
use pocketmine\plugin\Plugin;

class OLTask extends PluginTask{
    public function __construct(\pocketmine\plugin\Plugin $owner) {
        $this->plugin = $owner;
        parent::__construct($owner);
    }
    
    public function onRun(int $currentTick){
        foreach ($this->getOwner()->getServer()->getOnlinePlayers() as $player){
            if(!$player instanceof Player){
                return;
            }
            $player->setHealth(20);
            $player->setFood(20);
        }

