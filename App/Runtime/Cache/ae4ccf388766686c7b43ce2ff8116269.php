<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title></title><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/admincp.css" /><!-- dialog --><link rel="stylesheet" href="__PUBLIC__/js/jquery/themes/custom-theme/jquery.ui.all.css"><script src="__PUBLIC__/js/jquery/jquery-1.7.2.js"></script><script src="__PUBLIC__/js/jquery/external/jquery.bgiframe-2.1.2.js"></script><script src="__PUBLIC__/js/jquery/ui/jquery.ui.core.js"></script><script src="__PUBLIC__/js/jquery/ui/jquery.ui.widget.js"></script><script src="__PUBLIC__/js/jquery/ui/jquery.ui.mouse.js"></script><script src="__PUBLIC__/js/jquery/ui/jquery.ui.button.js"></script><script src="__PUBLIC__/js/jquery/ui/jquery.ui.draggable.js"></script><script src="__PUBLIC__/js/jquery/ui/jquery.ui.position.js"></script><script src="__PUBLIC__/js/jquery/ui/jquery.ui.dialog.js"></script><script src="__PUBLIC__/js/jquery/ui/jquery.ui.resizable.js"></script><!-- dialog --><!--line--><script src="__PUBLIC__/highcharts/highcharts.js"></script><script src="__PUBLIC__/highcharts/modules/exporting.js"></script><!--line--><style>body{padding:15px 0px 0px 35px;}
.title_main{font-size:14px;font-weight:bold;border-bottom:2px solid #B5CFD9;padding:5px 0px 0px 10px;text-align:left;}
.title_sub{font-weight:bold;}
td{line-height:30px;}
.text_line td{border-top:dotted thin #D9CFB5}
.frame{margin-bottom:10px;}
li{list-style-type: none;}
#div_container:after{clear:both;}
.div_item{width:97%;float:left;margin:20px 20px 0px 0px}
.div_item .title{font-size: 14px;
    font-weight: bold;
    border-bottom: 2px solid #B5CFD9;
    padding: 0px 0px 8px 10px;
    text-align: left;}
.div_item li{line-height: 30px;border-bottom: dotted thin #D9CFB5;text-align:left;padding-left:10px}
.div_item .content{line-height: 30px;border-bottom: dotted thin #D9CFB5;text-align:left;padding-left:10px}
</style></head><body><div id="div_container"><div class="div_item"><div class="title">通知</div><ul><?php foreach($list_notice as $key=>$row){ ?><li><?php echo $key+1; ?>、&nbsp;&nbsp;<a href="#" onclick="noticeView(<?php echo $row['ntc_id']; ?>)"><?php echo mb_substr($row["ntc_title"],0,100,'utf-8'); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;[<?php echo mb_substr($row["ntc_author"],0,35,'utf-8'); ?>/<?php echo mb_substr($row["ntc_datetime"],0,10,'utf-8'); ?>]</li><?php } ?></ul></div><!--<div class="div_item">--><!--	<div class="title">版本信息</div>--><!--	<div class="content"><?php echo $version; ?></div>--><!--</div>--></div><div id="dialog" style="display:none"><br><table width="100%" border="0" align="left" class="p_table2"><tr><td height="30" align="right">标题：</td><td align="left"><textarea name="ntc_title" cols="75" rows="3" readonly="readonly" id="ntc_title"></textarea></td></tr><tr><td height="30" align="right">内容：</td><td align="left"><textarea name="ntc_content" cols="75" rows="9" readonly="readonly" id="ntc_content"></textarea></td></tr><tr><td height="30" align="right">发布人：</td><td align="left"><input name="ntc_author" type="text" id="ntc_author" size="20" readonly="readonly"/></td></tr></table></div><div id="dialogNoData" style="display:none"><br><table width="100%" border="0" align="left" class="p_table2"><tr><td align="left" id='msg'></td></tr></table></div></body></html><script language="JavaScript" src="__PUBLIC__/js/tpl/index_main.js" type="text/javascript"></script>