<?php

namespace HakanBabus\MotdChanger;

use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\ClosureTask;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\utils\SingletonTrait;
use pocketmine\utils\TextFormat;

class Main extends PluginBase
{
    public Config $config;

    protected function onEnable(): void
    {
        $this->saveResource("config.yml");
        $this->config = new Config($this->getDataFolder()."config.yml");
        $time = $this->config->get("time");
        if($time == 0 or $time < 0 or count($this->config->get("motd")) == 0){
            $this->getServer()->getNetwork()->setName($this->getMotd());
        }else{
            $this->getServer()->getNetwork()->setName($this->getMotd());
            $this->getScheduler()->scheduleRepeatingTask(new ClosureTask(function (): void{
                $this->getServer()->getNetwork()->setName($this->getMotd());
            }), $time*20);
        }
    }

    public function getMotd(): string
    {
        return TextFormat::colorize(str_replace(
          [
              "{online_count}",
              "{max_count}",
              "{time}",
              "{server_version}"
          ],
          [
              count($this->getServer()->getOnlinePlayers()),
              $this->getServer()->getMaxPlayers(),
              date("H:i:s"),
              $this->getServer()->getVersion()
          ],
            $this->config->get("motd")[array_rand($this->config->get("motd"))]
        ));
    }



}
