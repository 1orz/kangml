#!/bin/sh
echo $(date +%Y年%m月%d日%k时%M分)"有新的客户端连接 $(date +%Y-%m-%d %k:%M) "ip:"$trusted_ip "端口:"$trusted_port "用户名:"$common_name" >>/home/wwwroot/default/res/login.log
