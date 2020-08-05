=== Primary Key Fixer ===
Contributors: omelhus
Tags: primary key, digital ocean, managed database
Requires at least: 5.1
Tested up to: 5.4.2
Requires PHP: 7.2
Stable tag: 4.3
License: Apache2
 
Plugins like Yoast and Slider Revolution don't set PRIMARY KEY on tables when they are created. This is an issue when using services like Digital Ocean managed databases etc. By installing this plugin it will add a query filter and look for queries that include CREATE TABLE and UNIQUE KEY, but not PRIMARY KEY, and insert a PRIMARY KEY for the same field as the UNIQUE KEY.
