# Web_BlogSystem

### 使用说明

- 安装software目录下的AppServ，安装过程数据库用户名设置为root 密码设置为1234
- 将db_tmlog文件夹拷贝到AppServ安装路径下的AppServ\MySQL\data文件夹中，完成附加MySQL数据库的操作。
- 将tmlog文件夹拷贝到AppServ安装路径下www文件夹中。
- 浏览器输入localhost/tmlog即可
- 登录默认用户名为admin(管理员账号)，默认密码为123

### 注意事项：

- db_tmlog需要移到可运行的MySQL的data文件下（推荐MySQL版本为5.0，8.0版本不支持此操作，其他版本未知），确保MySQL监听端口为3306
- 确保安装好的Apache监听的是80端口
- 不想折腾可以直接看代码在tmlog文件夹下，或者查看“核心代码.pdf”和“效果展示.pdf”