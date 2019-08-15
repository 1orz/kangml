#!/bin/sh
user=$common_name
#user="i"
spd="123456"
mysql -hlocalhost -uroot -p$spd -e "use ov;SELECT isent FROM openvpn WHERE iuser='$user';">/etc/openvpn/addlogs.txt
sleep 1
mysql -hlocalhost -uroot -p$spd -e "use ov;SELECT irecv FROM openvpn WHERE iuser='$user';">/etc/openvpn/addlogr.txt
sent=$(sed -n 2p /etc/openvpn/addlogs.txt)
recv=$(sed -n 2p /etc/openvpn/addlogr.txt)
#echo $recv
#echo $sent
sent=$[$sent+$bytes_sent]
recv=$[$recv+$bytes_received]
#recv=$[$recv+123]
#sent=$[$sent+123]
#echo $bytes_sent
#echo $bytes_received
curl "http://192.168.1.1:8888/app_api/top_api.php?name=$common_name&s=$bytes_sent&r=$bytes_received&version=2"
mysql -hlocalhost -uroot -p$spd -e "use ov;UPDATE openvpn SET isent = '$sent' WHERE iuser='$user';"
sleep 1
mysql -hlocalhost -uroot -p$spd -e "use ov;UPDATE openvpn SET irecv = '$recv' WHERE iuser='$user';"
#rm -rf addlogs.txt
#rm -rf addlogr.txt
