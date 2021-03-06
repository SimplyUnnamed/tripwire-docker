<?php

// Place all app configs here
date_default_timezone_set('UTC');

// Application name
define('APP_NAME', getenv('APP_NAME'));

// Content file server (Use CDN here if you have one) - used for serving images, css, js files
define('CDN_DOMAIN', getenv('APP_DOMAIN'));

// EVE SDE table name
define('EVE_DUMP', 'eve_carnyx');

// Enable Tripwire API?
define('TRIPWIRE_API', getenv('API_ENABLED'));

// EVE API userAgent
define('USER_AGENT', 'Tripwire Server - adminEmail@example.com');

// EVE SSO info
define('EVE_SSO_CLIENT', getenv('EVE_SSO_CLIENT'));
define('EVE_SSO_SECRET', getenv('EVE_SSO_SECRET'));
define('EVE_SSO_REDIRECT', getenv('EVE_SSO_CALLBACK'));

// Discord integration
$discord_webhooks = getenv('DISCORD_WEB_HOOK') ?? null;
if(!is_null($discord_webhooks)){
    $webhooks = [];
    $hooks = explode(',',$discord_webhooks);
    foreach($hooks as $hook_string){
        $hook = explode('::', $hook_string);
        $webhook[$hook[0]] = $hook[1];
    }
    define('DISCORD_WEB_HOOK', $webhook);
    /*define('DISCORD_WEB_HOOK', array(
	'maskID' => getenv('DISCORD_WEB_HOOK')
    ));*/ 
}
