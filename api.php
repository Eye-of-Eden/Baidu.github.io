<?php
if(isset($_GET['url'])&&$_GET['url']){$a=array('code'=>200,'msg'=>'success','result'=>shortUrl($_GET['url']));}else{$a=array('code'=>-1,'msg'=>'url is empty','result'=>null);}die(json_encode($a));function shortUrl($b){$a=@file_get_contents('http://sa.sogou.com/gettiny?url='.urlencode($b));return $a?$a:$b;}
