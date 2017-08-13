<?php

/*==========namespace==========*/

namespace test;

/*==========use文==========*/

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\item\Item;
use pocketmine\tile\Sign;
use pocketmine\scheduler\Task;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\event\entity\EntityTeleportEvent;
use pocketmine\event\entity\EntityDeathEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityLevelChangeEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\player\PlayerItemConsumeEvent;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\event\server\DataPacketSendEvent;
use pocketmine\Entity\entity;
use pocketmine\math\Vector3;
use pocketmine\math\Vector2;
use pocketmine\Player;
use pocketmine\level\Level;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\level\format\FullChunk;
use pocketmine\level\format\mcregion\Chunk;
use pocketmine\scheduler\PluginTask;
use pocketmine\scheduler\CallbackTask;
use pocketmine\nbt\NBT;
use pocketmine\nbt\tag\Byte;
use pocketmine\nbt\tag\Compound;
use pocketmine\nbt\tag\Double;
use pocketmine\nbt\tag\Enum;
use pocketmine\nbt\tag\FloatTag;
use pocketmine\nbt\tag\IntTag;
use pocketmine\nbt\tag\StringTag;
use pocketmine\nbt\tag\ShortTag;
use pocketmine\utils\TextFormat;
use pocketmine\utils\MainLogger;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntitySpawnEvent;
use pocketmine\event\entity\EntityDamageByChildEntityEvent;
use pocketmine\event\entity\ItemSpawnEvent;
use pocketmine\event\entity\ProjectileLaunchEvent;
use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\event\entity\EntityDespawnEvent;
use pocketmine\entity\Snowball;
use pocketmine\level\Position;
use pocketmine\level\particle\SmokeParticle;
use pocketmine\level\particle\Particle;
use pocketmine\level\sound\PopSound; 
use pocketmine\level\sound\BatSound;
use pocketmine\level\sound\ClickSound;
use pocketmine\level\sound\DoorSound;
use pocketmine\level\sound\FizzSound;
use pocketmine\level\sound\GenericSound;
use pocketmine\level\sound\LaunchSound;
use pocketmine\level\particle\FloatingTextParticle;
use pocketmine\entity\Villager;
use pocketmine\event\TranslationContainer;
use pocketmine\network\Network;
use pocketmine\entity\Human;
use pocketmine\entity\Squid;
use pocketmine\entity\PrimedTNT;
use pocketmine\entity\Arrow;
use pocketmine\event\player\PlayerItemHeldEvent ;
use pocketmine\entity\Effect;
use pocketmine\entity\Item as ItemEntity;
use pocketmine\entity\FallingSand;
use pocketmine\inventory\Inventory;
use pocketmine\event\entity\EntityShootBowEvent;
use pocketmine\event\entity\EntityMoveEvent;
use pocketmine\plugin\Plugin;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockUpdateEvent;
use pocketmine\block\Block;
use pocketmine\tile\Tile;
use pocketmine\utils\UUID;
use pocketmine\utils\BinaryStream;
use pocketmine\event\level\ChunkLoadEvent;

/*==========定数==========*/

define("VERSION","1.0.0");
define("PLUGIN","test");
define("NAME","1.0.0");
define("API","3.0.0");

/*==========処理==========*/

class main extends PluginBase implements Listener, CommandExecutor{

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info("".PLUGIN." ".VERSION." をご利用頂きありがとうございます。");
		$this->getLogger()->info("適合APIバージョン:".API." 製作者:".NAME."");
	}

	public function onDisable(){
		$this->getLogger()->info("".PLUGIN." ".VERSION." を終了しました。");
	}

	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		$name = $sender->getName();
		switch(strtolower($command->getName())){
			case"test":
				$sender->sendMessage();
				return true;
			default:
				return false;
		}
	}

	public function onJoin(PlayerJoinEvent $event){
		//処理
	}
}
