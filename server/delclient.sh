#!/bin/bash

TLIMIT=$(head -n 1 heatsink.conf | tail -1)
MANLOC=$(head -n 2 heatsink.conf | tail -1)
ANNOUNCE=$(head -n 3 heatsink.conf | tail -1)

# get rid of all data
cd /etc/openvpn/easy-rsa/
./easyrsa --batch revoke $1
EASYRSA_CRL_DAYS=3650 ./easyrsa gen-crl
rm -rf pki/reqs/$1.req
rm -rf pki/private/$1.key
rm -rf pki/issued/$1.crt
rm -rf /etc/openvpn/crl.pem
rm -rf ~/$1.ovpn
cp /etc/openvpn/easy-rsa/pki/crl.pem /etc/openvpn/crl.pem
chown nobody:$GROUPNAME /etc/openvpn/crl.pem

# if client is connected, kill them!
expect << EOF
spawn telnet $MANLOC
expect -re ">INFO:OpenVPN Management Interface Version 1 -- type 'help' for more info"
send "kill $1\r"
sleep 2
send "exit\r"
EOF

# exit
exit