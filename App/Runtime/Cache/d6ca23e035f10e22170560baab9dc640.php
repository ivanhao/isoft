<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title></title><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/admincp.css" /><style>td{border-top:dotted thin #D9CFB5;line-height:30px;}
.title{width:10%}
.content{width:23%}
</style></head><body><div class="container"><style>.ul_navi{margin:20px 0px 20px 0px;}
.ul_navi>li{display:inline;margin-right:2px;border-radius:10px 10px 0px 0px;
padding:6px 12px;border: 1px solid #aed0ea;font-weight:bold;font-size:13px}
.li_link{background:#EAF4FC;}
.li_link a{color:#2366A8;}
.li_active{background:#57B6E7;color:white}
.li_active a{color:white}
</style><ul class="ul_navi"><li <?php if($action=="index"){echo "class='li_active'";}else{echo "class='li_link'";} ?>><a href="__URL__/index">总览统计</a></li><li <?php if($action=="chart1"){echo "class='li_active'";}else{echo "class='li_link'";} ?>><a href="__URL__/chart1">七天出入库数量曲线图</a></li><li <?php if($action=="chart2"){echo "class='li_active'";}else{echo "class='li_link'";} ?>><a href="__URL__/chart2">七天出入库金额曲线图</a></li><li <?php if($action=="chart3"){echo "class='li_active'";}else{echo "class='li_link'";} ?>><a href="__URL__/chart3">出入库总数量比率图</a></li><li <?php if($action=="chart4"){echo "class='li_active'";}else{echo "class='li_link'";} ?>><a href="__URL__/chart4">出入库总金额比率图</a></li></ul><table width="95%" border="0" cellspacing="0" cellpadding="0"><tr><td align="right" class="title">入库总量：</td><td align="left" class="content"><?php echo $instore_count["count"]; ?></td><td align="right" class="title">本月入库总量：</td><td align="left" class="content"><?php echo $instore_month["count"]; ?></td><td align="right" class="title">今日入库量：</td><td align="left" class="content"><?php echo $instore_toady_count["count"]; ?></td></tr><tr><td align="right">入库总金额：</td><td align="left"><?php echo $instore_count["total"]; ?></td><td align="right">本月入库金额：</td><td align="left"><?php echo $instore_month["total"]; ?></td><td align="right">今日入库金额：</td><td align="left"><?php echo $instore_toady_count["total"]; ?></td></tr><tr><td align="right">出库总量：</td><td align="left"><?php echo $outstore_count["count"]; ?></td><td align="right">本月出库量：</td><td align="left"><?php echo $outstore_month["count"]; ?></td><td align="right">今日出库量：</td><td align="left"><?php echo $outstore_today_count["count"]; ?></td></tr><tr><td align="right">出库总金额：</td><td align="left"><?php echo $outstore_count["total"]; ?></td><td align="right">本月出库金额：</td><td align="left"><?php echo $outstore_month["total"]; ?></td><td align="right">今日出库金额：</td><td align="left"><?php echo $outstore_today_count["total"]; ?></td></tr></table></div></body></html>