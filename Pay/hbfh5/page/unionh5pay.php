<?php
header ( 'Content-type:text/html;charset=utf-8' );
$amt = $_GET['amt'];
$oid = $_GET['oid'];
$bid = $_GET['bid'];
$url = $_GET['url'];
$time = date('YmdHis');
include_once '../func/HFBConfig.php';
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head> 
<meta http-equiv="Content-Type"	content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 10]>
<script>alert("为了更好的体验，不支持IE10以下的浏览器。请选择google chrome 或者 firefox 浏览器。"); location.href="http://www.hefupal.com";</script>
<![endif]-->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<title>合付宝支付-商户demo</title> 
<style type="text/css">
	body { padding-top: 70px; }
</style>

</head> 
<body> 
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
  	<a class="navbar-brand" href="index.html"><strong>首页</strong></a>
  	<a class="navbar-brand"><strong>支付（<s>ie1-9</s>）</strong></a>
  </div>
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form role="form" action="unionh5payhandler.php" method="post"  name="payForm" >
				
				<div class="form-group">
			        <input type="hidden" class="form-control" name="merchantNo" id="merchantNo"  value="<?php echo MERCHANTNO ?>" required>
		        </div>
                      <div class="form-group">
			        <input type="hidden" class="form-control" name="version" id="version"  value="<?php echo UNIONPAYVERSION ?>" required>
		        </div>
                      <div class="form-group">
			        <input type="hidden" class="form-control" name="channelNo" id="channelNo" value="<?php echo H5CHANNELNO ?>" required>
		        </div>
                <div class="form-group">
			        <input type="hidden" class="form-control" name="tranTime" id="tranTime"  value="<?php echo $time;?>" required>
		        </div>
                      <div class="form-group">
			        <input type="hidden" class="form-control" name="currency" id="currency" value="CNY"  required>
		        </div>

		        <div class="form-group">
			        <input type="hidden" class="form-control" name="tranSerialNum" id="tranSerialNum"  value="<?php echo $oid;?>" required>
		        </div>
			
		        <div class="form-group">
			        <input type="hidden" class="form-control" name="amount" value="<?php echo $amt;?>" required>
		        </div>
			
		        <div class="form-group">
			 <input type="hidden" class="form-control" name="bizType" value="10101" required>

				<!--
				        <option value="10101">家用电费</option>
				        <option value="10102">生产用电费</option>
				        <option value="10201">用水费</option>
				        <option value="10202">排水费</option>
				        <option value="10203">直饮水费</option>
				        <option value="10204">污水处理费</option>
				        <option value="10205">暖气费</option>
				        <option value="10300">煤气费</option>
				        <option value="10301">管道煤气费</option>
				        <option value="10400">电话费</option>
				        <option value="10401">市内电话费</option>
				        <option value="10402">长途电话费</option>
				        <option value="10403">移动电话费</option>
				        <option value="10404">电话初装费</option>
				        <option value="10405">IP电话费</option>
				        <option value="10500">通讯费</option>
				        <option value="10501">数据通讯费</option>
				        <option value="10502">线路月租费</option>
				        <option value="10503">代维费</option>
				        <option value="10504">网络使用费</option>
				        <option value="10505">信息服务费</option>
				        <option value="10506">移动电子商务费</option>
				        <option value="10507">网关业务费</option>
				        <option value="10508">手机话费</option>
				        <option value="10600">保险费</option>
				        <option value="10601">续期寿险费</option>
				        <option value="10602">社会保险费</option>
				        <option value="10603">养老保险费</option>
				        <option value="10604">医疗保险费</option>
				        <option value="10605">车辆保险费</option>
				        <option value="10700">房屋管理费</option>
				        <option value="10701">房屋租赁费</option>
				        <option value="10702">租赁服务费</option>
				        <option value="10703">物业管理费</option>
				        <option value="10704">清洁费</option>
				        <option value="10705">保安服务费</option>
				        <option value="10706">电梯维护保养费</option>
				        <option value="10707">绿化费</option>
				        <option value="10708">停车费</option>
				        <option value="10800">代理服务费</option>
				        <option value="10801">押运服务费</option>
				        <option value="10802">票据传递费</option>
				        <option value="10803">代理记账服务费</option>
				        <option value="10900">学教费</option>
				        <option value="10901">报考费</option>
				        <option value="10902">学杂费</option>
				        <option value="10903">保教费</option>
				        <option value="11000">有线电视费</option>
				        <option value="11001">有线电视租赁费</option>
				        <option value="11002">移动电视费</option>
				        <option value="11100">机构管理费用</option>
				        <option value="11101">工商行政管理费</option>
				        <option value="11102">商检费</option>
				        <option value="14001">基金</option>
				        <option value="14002">资管</option>
				        <option value="14802">加油卡费</option>
				        <option value="14900">其他费用</option>
				        <option value="14901">还贷</option>
				        <option value="14902">货款</option>-->
			        </select>
		        </div>
			
		        <div class="form-group">
			        <input type="hidden" class="form-control" name="goodsName" value="充值" required>
		        </div>
			
		        <div class="form-group">
			        <input type="hidden" class="form-control" name="goodsInfo"  value="充值" >
		        </div>
			
		        <div class="form-group">
			        <input type="hidden" class="form-control" name="goodsNum"  value="1">
		        </div>
			
		        <div class="form-group">
			        <input type="hidden" class="form-control" name="notifyUrl" value="<?php echo $url; ?>"  required>
		        </div>
			
		        <div class="form-group">
			        <input type="hidden" class="form-control" name="returnUrl" value="<?php echo MER_RETURN_URL ?>"  required>
		        </div>
			
		        <div class="form-group">
			        <input type="hidden" class="form-control" name="buyerName" value="小二" required>
		        </div>

                      <div class="form-group">
			        <input type="hidden" class="form-control" name="buyerId" value="007" required>
		        </div>
			
		        <div class="form-group">
			        <input type="hidden" class="form-control" name="contact" >
		        </div>
			
		        <div class="form-group">
			        <input type="hidden" class="form-control" name="valid" >
		        </div>
			
		        <div class="form-group">
			        <input type="hidden" class="form-control" name="ip" value="127.0.0.1" required>
		        </div>
			
		        <div class="form-group">
			        <input type="hidden" class="form-control" name="referer" value="http://www.xxx.com" >
		        </div>
			
		        <div class="form-group">
			        <input type="hidden" class="form-control" name="remark" >
		        </div>
			
		        <div class="form-group">
			        <input type="hidden" class="form-control" name="YUL1" >
		        </div>
			
			</form>
		</div>
	</div>
</div>

		
</body>

<script>
	 $(function(){
                document.forms['payForm'].submit();

        });

	function random(){
		var d = new Date();
		return d.getFullYear() + "" + (d.getMonth() + 1) + "" + d.getDate() + "" + d.getHours() + "" + d.getMinutes() + "" +  d.getSeconds()+"" +  d.getMilliseconds() + "" + parseInt(Math.random() * 1000);
	}
    function tranTime(){
        var d = new Date();
        return d.getFullYear() + "" + (d.getMonth() + 1) + "" + d.getDate() + "" + d.getHours() + "" + d.getMinutes() + "" +  d.getSeconds();
    }
</script>
 
</html>
