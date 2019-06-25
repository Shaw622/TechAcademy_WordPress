echo "wp-config.phpの生成...開始"
awk '{ sub(/database_name_here/, "wordpress"); sub(/username_here/, "root"); sub(/password_here/, ""); print }' WordPress/wp-config-sample.php > WordPress/wp-config.php
echo "wp-config.phpの生成...完了"

echo "Apache起動...開始"
sudo service httpd restart
echo "Apache起動...終了"

echo "MySQL起動...開始"
sudo /etc/init.d/mysqld restart
echo "MySQL起動...終了"

echo "WordPress起動環境が整いました。"
echo -n "http://"
echo -n $C9_HOSTNAME
echo "/WordPress/"
echo "にアクセスしてください。"
echo ""
echo ""
