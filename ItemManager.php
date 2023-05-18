<?php

namespace RhaxDev\IM;

use pocketmine\item\VanillaItems;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ItemTypeIds as IDS;

class ItemManager {
    
    public static function getItem(int $id){
        $a = VanillaItems::getAll();
        $itemResult == null;
        foreach($a as $item){
            if($item->getTypeId() == $id){
                $itemResult = $item;;
            }
        }
        return $itemResult;
    }
    
}