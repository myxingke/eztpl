<?php
 if(!defined('EZTPL')){
 die('Forbidden access');
}
?>
<?php if($this->includes('./templates/head.html','./templates_c/head.php')){ require('./templates_c/head.php'); } ?>
<div class="jumbotron" style="background-color:#FBFCFE">
<h1>Welcome Eztpl</h1>
<p>一个轻便，自由，高效，可以自由定义模板语法的php单文件模版引擎！</p>
<p><a class="btn btn-default" href="#" role="button">向下阅读更多</a></p>
</div>

<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">输出实例</h3>
</div>
<div class="panel-body">

<?php $a=123456; ?>
输出:<b><?php echo $a;?></b>

<br />
<br />
有时候不输出，<b>可以在前面加个<font color="red">!</font></b>，比如执行一些没有返回值的的函数或者方法
<br />
<br />

不输出:<?php $a;?>

<br />
<br />
</div>
</div>


<div class="panel panel-success">
<div class="panel-heading">
<h3 class="panel-title">引用模版</h3>
</div>
<div class="panel-body">
<b><?php if($this->includes('./templates/a.html','./templates_c/a.php')){ require('./templates_c/a.php'); } ?></b>
<br />
以上为引用a.html模板，除了可以引用模板，外部文件也可以引用的
<br />
例如
<br />
<br />
<b><?php
require('./include.php');
?></b>
<br />
<br />
<br />
</div>
</div>

<div class="panel panel-info">
<div class="panel-heading">
<h3 class="panel-title">模版赋值</h3>
</div>
<div class="panel-body">

有时候我们需要对一个数组赋值,就和php中赋值是一样的<br />
<?php $m[]="你好啊"; ?><br />
数组输出：<b><?php echo $m['0'];?></b>

<br />
<br />
<b>如果不是多维数组，可以用.号简写,
$m.0等于$m[0],当然也可以用$m[0],多维数组就必须要用[]，比如$m[0][1]，不能写成$m.0.1</b>
<br />
<br />
<br />
<br />
</div>
</div>

<div class="panel panel-warning">
<div class="panel-heading">
<h3 class="panel-title">循环语法</h3>
</div>
<div class="panel-body">
循环函数是我们用的最为普遍的函数之一,在数据库分页和显示方面,它起着巨大的作用
<br />
<br />
<b>foreach循环:</b><br /><br/>
这个函数我们一般是用来遍历数组的
在模版中有两种使用方法<br />
<br />
<b>例子一</b>
<br />
<br />

<?php $arr=array(1,2,3,4,5); ?>
<?php foreach($arr as $key=>$value){ ?>
<?php echo $key;?>:<?php echo $value;?><br />
<?php } ?>

<br />
以上只写了一个参数,foreach可以有三个参数的,这是种简单写法,在内部循环中,$key代表键值,$value代表数组的值,这是默认定义的,你可以自己定义,看例子二
<br />
<br />
<b>例子二</b><br /><br />

<?php $arr=array(1,2,3,4,5); ?>
<?php foreach($arr as $a=>$b){ ?>
<?php echo $a;?>:<?php echo $b;?><br />
<?php } ?>

<br />
<br />

<b>以下其他循环的使用</b>
<br />
<br />
<b>while循环</b><br /><br />
例子:<br />

<?php $i=0; ?>
<?php while($i<10){ ?>
<?php echo $i++;?>,
<?php } ?>

<br />
<br />

<b>for循环</b><br /><br />
例子:<br />

<?php for($i=0;$i<10;$i++){ ?>
<?php echo $i;?>,
<?php } ?>

<br />
<br />
</div>
</div>


<div class="panel panel-danger">
<div class="panel-heading">
<h3 class="panel-title">IF判断</h3>
</div>
<div class="panel-body">
<b>if判断</b>
<br />
<br />
标签中的else不要加/
<br />
<br />
<?php $f=123; ?>
<?php if(isset($f)){ ?>
<b>$f不为空</b>
<?php } ?>
<br />
<br />
<?php if(isset($s)){ ?>
<b>$s变量存在</b>
<?php
}else{
?>
<b>$s变量不存在</b>
<?php } ?>
<br />
<br />
</div>
</div>


<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">获取全局变量</h3>
</div>
<div class="panel-body">
<?php if(isset($_GET['a']) && $_GET['a']==null){ ?>
<b>$get['a']等于null</b>
<br/>
<br/>
<a href="./index.php?a=123">点击此次改变$get['a']的值为123</a>
<?php }elseif(isset($_GET['a']) && $_GET['a']==123){ ?>
<b>$get['a']等于123</b>
<br/>
<br/>
<a href="./index.php?a=">点击此次改变$get['a']的值为空</a>
<?php
}else{
?>
<b>模板中的$get['a']就代表$GET['a'],$post就代表$POST，这些都是全局变量</b>
<br/>
<br/>
<a href="./index.php?a=123">点击此次改变$get['a']的值为123</a>
<?php } ?>
<br />
<br />
<button type="button" class="btn btn-default btn-block">全局变量列表</button>
<br/>
<div class="col-sm-6">
<ul class="list-group">
<li class="list-group-item list-group-item-success">$post => $_POST</li>
<li class="list-group-item list-group-item-info">$get => $_GET</li>
<li class="list-group-item list-group-item-warning">$cookie => $_COOKIE</li>
<li class="list-group-item list-group-item-danger">$session => $_SESSION</li>
</ul>
</div>
<div class="col-sm-6">
<ul class="list-group">
<li class="list-group-item list-group-item-success">$files' => $_FILES</li>
<li class="list-group-item list-group-item-info">$server => $_SERVER</li>
<li class="list-group-item list-group-item-warning">$this => $this</li>
<li class="list-group-item list-group-item-danger">$cpu => self::cpu()</li>
</ul>
</div>
</div>
</div>

<div class="panel panel-info">
<div class="panel-heading">
<h3 class="panel-title">自定义替换</h3>
</div>
<div class="panel-body">
<b>827ccb0eea8a706c4c34a16891f84e7b</b>
<br />
利用这个正则来md5加密字符串
<br /><br />
<b>输出时间</b>
<br />
<?php echo date("Y-m-d H:i");?>
</div>
</div>

<?php if($this->includes('./templates/foot.html','./templates_c/foot.php')){ require('./templates_c/foot.php'); } ?>














