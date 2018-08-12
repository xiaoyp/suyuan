## 如何使用 Git 进行版本控制

+ 下载 git-scm 并安装 [链接](https://git-scm.com/download/win) 
+ 安装好后，任选一个文件夹，如 桌面， 右键点击 `Git Bash Here`
+ 在打开的窗口中输入 `git clone https://github.com/xiaoyp/suyuan.git` 回车
+ 当前目录下会多出一个文件夹，默认为 `suyuan`，输入 `cd suyuan` 进入工作目录
+ 切换到 dev 分支，指令是 `git checkout dev` 
+ 对目录中的任意文件进行修改。
+ 修改完成后 在 Git Bash 中输入 `git add <修改的文件名>` 将其 **暂存**
+ **提交** 更改，指令是 `git commit -m "<任意的commit message，一般为修改的内容摘要>"`，第一次可能会提示请先设置 *username* 和 *email*，按照提示执行两条指令设置，与 Github 账号一致即可（不一致也可正常推送，但可能无法链接到 Github 账户）
+ 上述操作都在本地进行，为了让其他人看到，需要 **推送** 到服务器，指令是 `git push`，第一次操作可能会弹出窗口登陆到 Github，输入用户密码登陆即可


+ 如果修改的文件较多，也可以用 `git add .` 暂存所有文件，或不需要 `git add` 直接 `git commit -am "<commit message>"` 即可提交所有文件

## 用 Visual Studio Code 简化操作

+ 用 VSCode 打开 `git clone` 后的文件夹，左侧会有 *源代码管理(Ctrl+Shift+G)* 按钮。修改任意文件，该文件即会出现在面板中。对要提交的文件点右侧的 **+** 将文件 **暂存**，然后在 *消息(按 Ctrl+Enter...* 输入框中输入 `<commit message>` 即可 **提交**，点击 *...* 打开菜单，选择 **推送** 即可同步到服务器上。

## 如何更新他人的代码

+ Git Bash 指令是 `git pull`（是 `git merge origin/dev` 或 `git rebase origin/dev` 的别名，其中 `origin` 是默认的远程存储名，`dev` 是我们的远程分支名）。如果两个人修改了同一文件的同一部分，可能会 **冲突**， 手动解决冲突十分繁琐，建议使用 VSCode 完成。 如果想要放弃自己的代码，也可以用 `git checkout origin/dev -f` 或者 `git pull -Xtheirs` 来舍弃所有本地修改 / 当冲突时接受他人的修改。
+ `git pull` 在 VSCode 中等价于源代码管理选项卡的 *拉取* 按钮。如有冲突，冲突的文件会标注为 `C`，打开冲突的文件即可手动合并。解决冲突后需要 **暂存**、**提交** 和 **推送** 后才生效。

## 如何避免冲突

+ 修改代码之前先执行 `git pull` 拉取服务器上的更改
+ 准备提交之前再执行 `git pull` 解决冲突后再推送

## 因为没有同步服务器的更改而被拒绝推送怎么办

+ `git rebase origin/dev`