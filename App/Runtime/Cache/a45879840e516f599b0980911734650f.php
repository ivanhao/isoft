<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title></title><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/admincp.css" /><link rel="stylesheet" href="__PUBLIC__/js/jquery/themes/custom-theme/jquery.ui.all.css"></head><body><div class="container"><!--<h3>客户列表</h3>  选择列表
  <select name="jump" id="jump"><option value="0" <?php if($action=="cate")echo "selected='true'" ?>>产品类别列表</option><option value="1" <?php if($action=="index")echo "selected='true'" ?>>产品列表</option><option value="2" <?php if($action=="store")echo "selected='true'" ?>>仓库列表</option><option value="3" <?php if($action=="guest")echo "selected='true'" ?>>客户列表</option></select>--><input type="button"  class="btn" id="button" value="添加客户" onclick="toAddCustomer()"/><div class="mainbox"><form action="admin.php?m=cache&a=update" method="post"><table class="datalist fixwidth"><tr><th>名称</th><th>公司全名</th><th>联系电话</th><th>详细地址</th><th>操作</th></tr><?php foreach($list as $key=>$row){ ?><tr><td align="center"><?php echo $row["cust_name"]; ?></td><td align="center"><?php echo $row["cust_comfullname"]; ?></td><td align="center"><?php echo $row["cust_phone"]; ?></td><td align="center"><?php echo $row["cust_address"]; ?></td><td align="center"><a href="#" onclick="toEditCustomer(<?php echo $row["cust_id"]; ?>)">编辑</a>&nbsp;&nbsp;<a href="#" onclick="del(<?php echo $row["cust_id"]; ?>)">删除</a></td></tr><?php } ?><tr class="nobg"><td colspan="7" align="center"><?php echo $page; ?></td></tr></table></form></div><div id="dialogCustomer" style="display:none"><br><br><table width="100%" border="0" align="left" class="p_table2"><tr><td width="25%" height="30" align="right">名称： </td><td width="168" align="left"><input name="cust_name" type="text" id="cust_name" size="20"/></td></tr><tr><td height="30" align="right">公司全名： </td><td align="left"><input name="cust_comfullname" type="text" id="cust_comfullname" size="20"/></td></tr><tr><td height="30" align="right">联系电话：</td><td align="left"><input name="cust_phone" type="text" id="cust_phone" size="20"/></td></tr><tr><td height="30" align="right">详细地址： </td><td align="left"><input name="cust_address" type="text" id="cust_address" size="50"/></td></tr></table></div></div></body></html><script src="__PUBLIC__/js/jquery/jquery-1.7.2.js"></script><script src="__PUBLIC__/js/jquery/ui/jquery.ui.core.js"></script><script src="__PUBLIC__/js/jquery/ui/jquery.ui.widget.js"></script><script src="__PUBLIC__/js/jquery/ui/jquery.ui.dialog.js"></script><script src="__PUBLIC__/js/jquery/ui/jquery.ui.button.js"></script><script language="JavaScript" src="__PUBLIC__/js/tpl/basedata_customer.js" type="text/javascript"></script>