<?php
/**
  * Plugin Name:  Primary Key Fixer
  * Plugin URI: https://github.com/omelhus/wp-pk-fixer/
  * Description: Some plugins are missing PRIMARY KEY when creating tables and this causes problems using managed databases. This plugin will use the information from UNIQUE KEY and try to use that.
  * Version: 1.3
  * Author: Ole Melhus <ole@on-it.no>
  * Author URI: https://zpider.io
  * License: Apache2
  * Network: true
*/

if (!defined('ABSPATH')) {
        exit;
}

function primary_key_filter($query) {
        $pattern = '/(?>UNIQUE\\s+KEY)\\s+(?>[\\w]+)\\s+\\((?<field>[\\w]+)\\)/im';
        $replacement = 'PRIMARY KEY ($1), \\0';
        if(strpos(strtolower($query), "create table") !== false &&
           strpos(strtolower($query), "primary key") === false &&
           strpos(strtolower($query), "unique key")  !== false
        ) {
                $query = preg_replace($pattern, $replacement, $query, -1 );
                error_log("FIXED PRIMARY KEY IN QUERY\n$query");
        }
        return $query;
}
add_filter('query', 'primary_key_filter');
?>
