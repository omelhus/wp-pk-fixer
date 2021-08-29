=== Primary Key Fixer ===
Contributors: omelhus
Tags: primary key, digital ocean, managed database
Requires at least: 5.1
Tested up to: 5.8
Requires PHP: 7.2
Stable tag: 4.3
License: Apache2
 
Fix 'create table' queries for plugins that lack 'primary key' in order to support Digital Ocean Managed Databases and others that require primary key.

== Description ==

Plugins like Yoast and Slider Revolution doesn't create a PRIMARY KEY on tables when they are created. This is an issue when using services like Digital Ocean managed databases etc that uses replication and requires primary keys. 

By installing this plugin it will add a query filter and look for queries that include CREATE TABLE and UNIQUE KEY, but not PRIMARY KEY, and insert a PRIMARY KEY for the same field as the UNIQUE KEY.

It will not fix restore where the query includes multiple create table and some of them contains 'primary key'.
