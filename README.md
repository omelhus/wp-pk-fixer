# Wordpress Primary Key Fixer

![CI](https://github.com/omelhus/wp-pk-fixer/workflows/CI/badge.svg)

Plugins like Yoast and Slider Revolution don't set PRIMARY KEY on tables when they are created. This is an issue when using services like [Digital Ocean](https://m.do.co/c/2e4765cb177c) managed databases etc.

By installing this plugin it will add a query filter and look for queries that include **CREATE TABLE** and **UNIQUE KEY**, but not **PRIMARY KEY**, and insert a PRIMARY KEY for the same field as the UNIQUE KEY.
