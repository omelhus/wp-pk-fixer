# WordPress Primary Key Fixer

![CI](https://github.com/omelhus/wp-pk-fixer/workflows/CI/badge.svg)
[![Downloads](https://img.shields.io/wordpress/plugin/dt/primary-key-fixer?color=green&logo=wordpress)](https://wordpress.org/plugins/primary-key-fixer/)

Plugins like Yoast and Slider Revolution don't set PRIMARY KEY on tables when they are created. This is an issue when using services like [Digital Ocean](https://m.do.co/c/2e4765cb177c) managed databases etc.

By installing this plugin it will add a query filter and look for queries that include **CREATE TABLE** and **UNIQUE KEY**, but not **PRIMARY KEY**, and insert a PRIMARY KEY for the same field as the UNIQUE KEY.

Install directly from the WordPress plugin repository at https://wordpress.org/plugins/primary-key-fixer/. 

**Note: It's important that you install this plugin before any of the other plugins as the 'create table' queries are run during install.**
