<?php

namespace title;

use pocketmine\plugin\PluginBase;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener{

 public function onEnable(){
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
  $this->getServer()->getLogger()->info(TF::GREEN."FlowerTitle has been enabled");
   }
   
   public function onHand(DataPackReceiveEvent $event){
   $player = $event->getPlayer();
   $item = $player->getInventory()->getItemInHand()->getId();
   
   if($item == 37){
   $player->sendTip(TF::GREEN . $player->getName() . TF::PURPLE . "ﻚﺑ ﻼﻫﺍ");
  }
 }
}
