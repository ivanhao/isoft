<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>安装向导</title><script type="text/javascript" src="__PUBLIC__/js/jquery/jquery-1.7.2.js"></script><link rel="stylesheet" href="__PUBLIC__/css/install.css" type="text/css" media="all" /></head><body><form id="form1" method="post"><?php if($step==0){ ?><?php echo $env_table; ?><?php }elseif($step==1){ ?><table border="0" align="center" cellspacing="0"><tr><td colspan="2" align="center"><img src="__PUBLIC__/images/logo.gif" /></td></tr><tr class="title"><td colspan="2" align="center">欢迎使用本安装向导，请准备好以下数据：</td></tr><tr><td width="30%"></td><td><ul><li>数据库名</li><li>数据库用户用户名</li><li>数据库用户密码</li><li>数据库主机地址或IP</li></ul></td></tr><tr><td colspan="2" align="center"><input type="button" class="btn1" id="btnBack" value="上一步" onclick="window.history.back()"/>&nbsp;&nbsp;
        <input type="button" class="btn" id="btnSubmt" value="下一步" /></td></tr></table><?php }elseif($step==2){ ?><table border="0" align="center" cellspacing="0"><tr><td colspan="2" align="center"><img src="__PUBLIC__/images/logo.gif" /></td></tr><tr class="title"><td colspan="2" align="center">请填写以下数据库信息</td></tr><tr><td width="40%" align="right">数据库名</td><td><input name="db_name" type="text" id="db_name" value="isoft_wms" /><br><input name="autoCreateDb" type="checkbox" id="autoCreateDb" checked="checked" /><font style="font-size:12px">若数据库名不存在则自动创建</font></td></tr><tr><td align="right">数据库主机地址或IP</td><td><input type="text" name="db_host" id="db_host" value="localhost" /><br><font style="font-size:12px">本机默认 localhost 或 127.0.0.1</font></td></tr><tr><td align="right">数据库端口号</td><td><input type="text" name="db_port" id="db_port" value="3306" /></td></tr><tr><td align="right">数据库用户用户名</td><td><input type="text" name="db_username" id="db_username" value="root" /></td></tr><tr><td align="right">数据库用户密码</td><td><input type="text" name="db_password" id="db_password" value="root" /></td></tr><!--<tr><td align="right">安装体验数据</td><td><input name="xpData" type="checkbox" id="xpData" checked="checked" /></td></tr>--><tr><td colspan="2" align="center"><input type="button" class="btn1" id="btnBack" value="上一步" onclick="window.history.back()"/>&nbsp;&nbsp;
		<input type="button" class="btn1" id="btnSubmt" value="下一步" /></td></tr></table><?php }elseif($step==3){ ?><table border="0" align="center" cellspacing="0"><tr><td colspan="2" align="center"><img src="__PUBLIC__/images/logo.gif" /></td></tr><tr class="title"><td colspan="2" align="center">数据库安装成功，请输入管理员登录帐号信息！</td></tr><tr><td width="40%" align="right">管理员用户名</td><td align="left"><input name="user_name" type="text" id="user_name" value="admin" /></td></tr><tr><td align="right">管理员密码</td><td align="left"><input name="user_password" type="text" id="user_password" value="admin" /></td></tr><tr><td align="right">真实姓名</td><td align="left"><input name="user_realname" type="text" id="user_realname" value="管理员" /></td></tr><tr><td colspan="2" align="center"><input type="button" class="btn1" id="btnBack" value="上一步" onclick="window.history.back()"/>&nbsp;&nbsp;
		<input type="button" class="btn1" id="btnSubmt" value="下一步" /></td></tr></table><?php }elseif($step==4){ ?><table border="0" align="center" cellspacing="0"><tr><td width="40" colspan="2" align="center"><img src="__PUBLIC__/images/logo.gif" /></td></tr><tr class="title"><td colspan="2" align="center">已成功安装完毕，此向导将会被自动删除，点击 “完成” 跳转到登录页！</td></tr><tr><td colspan="2" align="center"></td></tr><tr><td colspan="2" align="center"><input type="button" class="btn1" id="btnBack" value="上一步" onclick="window.history.back()"/>&nbsp;&nbsp;
		<input type="button" class="btn1" id="btnSubmt" value="完成" /></td></tr></table><?php } ?></form></body></html><script>$('#btnSubmt').click(function(){
	$('#form1').attr('action','__URL__/step<?php echo $step+1; ?>');
	$('#form1').submit();
});
</script>