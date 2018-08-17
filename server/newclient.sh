#!/bin/bash

TLIMIT=$(head -n 1 heatsink.conf | tail -1)
MANLOC=$(head -n 2 heatsink.conf | tail -1)
ANNOUNCE=$(head -n 3 heatsink.conf | tail -1)

# Function for preparing new client
newclient () {
# Generates the custom client.ovpn
cp /etc/openvpn/client-common.txt ~/$1.ovpn
echo "<ca>" >> ~/$1.ovpn
cat /etc/openvpn/easy-rsa/pki/ca.crt >> ~/$1.ovpn
echo "</ca>" >> ~/$1.ovpn
echo "<cert>" >> ~/$1.ovpn
cat /etc/openvpn/easy-rsa/pki/issued/$1.crt >> ~/$1.ovpn
echo "</cert>" >> ~/$1.ovpn
echo "<key>" >> ~/$1.ovpn
cat /etc/openvpn/easy-rsa/pki/private/$1.key >> ~/$1.ovpn
echo "</key>" >> ~/$1.ovpn
echo "<tls-auth>" >> ~/$1.ovpn
cat /etc/openvpn/ta.key >> ~/$1.ovpn
echo "</tls-auth>" >> ~/$1.ovpn
}

# Engage client creation process
cd /etc/openvpn/easy-rsa/
./easyrsa build-client-full $1 nopass

# Generates the custom client.ovpn
newclient "$1"

# Schedule the upcoming purge script.
echo "bash /root/delclient.sh $1" | at now + $TLIMIT

# Announce to CLI if enabled.
if [ "$ANNOUNCE" = "enable" ]
then
wall "heatsink: Client $1 generated for $TLIMIT."
fi

# Script’s done, so exit
exit