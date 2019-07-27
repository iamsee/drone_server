#!/bin/bash
#生成ssl证书
domain="blog.iamsee.com"
acme(){
	~/.acme.sh/acme.sh --issue -d ${domain} --standalone -k ec-256 --force
	if [[ $? -eq 0 ]];then
		echo -e "${OK} ${GreenBG} SSL 证书生成成功 ${Font}"
		sleep 2
		~/.acme.sh/acme.sh --installcert -d ${domain} --fullchainpath /etc/v2ray/${domain}.crt --keypath /etc/v2ray/${domain}.key --ecc
		if [[ $? -eq 0 ]];then
		echo -e "${OK} ${GreenBG} 证书配置成功 ${Font}"
		sleep 2
		fi
	else
		echo -e "${Error} ${RedBG} SSL 证书生成失败 ${Font}"
		exit 1
	fi
}
acme
