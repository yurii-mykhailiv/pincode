<?php

 if ($_POST["pincode"] === "1234") {
     http_response_code(200);
 } else {
    http_response_code(401);
 }

server {
listen 80;
server_name localhost;
location / {
root html;
index index.html index.htm;
}
error_page 405 =200 $uri;
# ...
}
