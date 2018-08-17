# heatsink
🔥 Run a disposable VPN service (ubuntu/openVPN/nginx/PHP/JS)

![logo](https://i.imgur.com/z4zD48V.png)

Scripts & code from Shards, Roadwarrior and Bootstrap included. Big thanks.

The documentation here is flimsy at best and I haven't tested the steps. The code worked when I ran it originally but something may be broken. I highly advise you to know your way around PHP/Linux very well before using this repo. That may be a good thing, since you should probably know programming in order to run a VPN service... ;)

I will update the code & readme soon.

## Getting started
- Familiarize yourself with all the files and code, it's quite simple.
### openVPN-side
- ubuntu 14-18.x VPS server
- Upload repo's /server/ files to ~/root/
- Make sure permissions are correct if not using root user.

```
sudo apt-get install build-essential
sudo apt-get update
sudo apt-get install php nginx
```
- Configure heatsink's `nginx.conf` to be the default configuration for nginx and restart the service.


- Install dnsmasq
```
sudo apt-get -y install dnsmasq
sudo systemctl restart NetworkManager
```
- Replace dnsmasq's config with heatsink's and drop `ads2.dnsmasq` in same directory.


- Install openVPN server via Nyr's [Roadwarrior](https://github.com/Nyr/openvpn-install)
```
sudo bash ./openvpn-install.sh
```

## Client-side

- ubuntu 14-18.x VPS server
- Upload repo's /client/ files to ~/var/www/html/ (create directory if it doesn't exist yet)
- Make sure permissions are correct if not using root user

```
sudo apt-get install build-essential
sudo apt-get update
sudo apt-get install php nginx
```
- Configure nginx to point wildcard subdomain requests to [domain]/?sessionIdentify=[subdomain]

- Configure settings in serverconfig.php and home-session.php
