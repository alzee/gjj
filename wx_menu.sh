#!/bin/bash
#
# vim:ft=sh

############### Variables ###############

############### Functions ###############

############### Main Part ###############
[ -f .env.local ] && . ./.env.local || exit

ass_token_url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$secret"

# curl $ass_token_url

url=https://api.weixin.qq.com/cgi-bin/menu/create?access_token=$ass_token

data='
 {
     "button":[
     {	
          "type":"view",
          "name":"绿色低碳",
          "url":"http://appx.10yan.com.cn/special/?id=299#/"
      },
     {	
          "type":"view",
          "name":"我的账户",
          "url":"http://gjj.itove.com"
      },
      {
           "name":"便民服务",
           "sub_button":[
           {	
               "type":"view",
               "name":"贷款计算器",
               "url":"https://gjj.itove.com/calc"
            },
            {
               "type":"view",
               "name":"服务网点",
               "url":"https://gjj.itove.com/offices"
            }]
       }]
 }
'

curl --json "$data" $url
