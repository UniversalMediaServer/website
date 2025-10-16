# Universal Media Server Website

This repository contains all code for the Universal Media Server website.

It is written for Apache, PHP and MySQL.

To get it working for development you will need to fill in the database details in [the config file](https://github.com/UniversalMediaServer/website/blob/master/includes/config.php).

# Performance profiling

To see unindexed database queries, set the variables like `log_slow_query` in `/etc/mysql/mariadb.conf.d/50-server.cnf`, restart the database server, then run:
```
mysqldumpslow /var/log/mysql/mariadb-slow.log -g universalmediaserver
```