### mysql 設定遠端連線
- 進入 docker mysql 容器：winpty docker exec -it mysql-57 bash
- 登入 mysql：mysql -h 127.0.0.1 -u root -p
- 給予 mysql 登入權限：GRANT ALL PRIVILGEGS ON *.* TO 'root'@'%';
- 更新權限：FLUSH PRIVILGEGS;