# MotdChanger
  The MotdChanger plugin aims to easily change the motd of the server. You can customize it with colors and add variables if you want.

# Requirements
  - PocketMine Server (API 5)

# Usage
  Put the plugin in the plugins folder and run the server. 
  A folder named Motd Changer will come to the plugin_data folder. 
  You can edit Motd with config.yml.

# Config File
  ```yml
  motd:
  - "PMMP Server | {server_version}"
  - "XXX Network | {online_count}/{max_count}"

  time: 5 #second
  
  #          FEATURES:
  #  {online_count} -> online player count
  #  {max_count} -> max player count
  #  {time} -> time
  #  {server_version} -> server minecraft version (v1.20.1)
  
  #          COLOR CODES:
  #  Black        §0
  #  Dark Blue 	§1
  #  Dark Green   §2
  #  Dark Aqua    §3
  #  Dark Red 	§4
  #  Dark Purple  §5
  #  Gold	        §6
  #  Gray 	    §7
  #  Dark Gray	§8
  #  Blue     	§9
  #  Green	    §a
  #  Aqua 	    §b
  #  Red      	§c
  #  Light Purple	§d
  #  Yellow	    §e
  #  White	    §f
  
  #          TEXT TYPE CODES:
  #  Obfuscated	  §k
  #  Bold	          §l
  #  Strikethrough  §m
  #  Underline	  §n
  #  Italic	      §o
  #  Reset	      §r
```
