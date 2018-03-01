
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
<meta name="renderer" content="webkit"/>
<meta name="applicable-device" content="pc">
<title><?=$data['title']?> - <?=$data['site_desc']?></title>
<meta name="keywords" content="笑话,搞笑,笑话大全 爆笑,笑话大全,糗事百科,幽默笑话,爆笑笑话" />
<meta name="description" content="糗事百科是一个原创的糗事笑话分享社区,糗百网友分享的搞笑段子、搞笑图片大全,都是糗友最珍贵的开心经历,爆笑糗事笑话只在糗事百科！"/>
<meta http-equiv="mobile-agent" content="format=xhtml;url=//www.qiushibaike.com/">
<meta http-equiv="mobile-agent" content="format=html5;url=//www.qiushibaike.com/">


<link rel="canonical" href="//www.qiushibaike.com"/>


<meta name="robots" content="noarchive">
<link href="//static.qiushibaike.com/css/dist/web/app.min.css?v=2bb16effa28ac7a151472a8d50f6eda9" media="screen, projection" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" type="text/css" href="/static/plugins/layui/layui/css/layui.css">
    <script type="text/javascript" src="/static/plugins/layui/layui/layui.js"></script>
    <script type="text/javascript" src="/static/js/site.js"></script>
<script type="text/javascript">
// Baidu Automatic push content
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "https://hm.baidu.com/hm.js?2670efbdd59c7e3ed3749b458cafaa37";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
// 收集运营上缓存证据
window.config = {
'user_time': '2018-01-24 20:14:48',
'version': '2017-09-04 14:36'
}
</script>
</head>
<body>



<div id="header" class="head">
<div class="content-block">
<div class="logo" id="hd_logo">
<a href="/"><h1>糗事百科</h1></a>
</div>
<div id="menu" class="menu-bar menu clearfix" style="margin:0 10px">
    <?php foreach($data['cates'] as $cate){?>
    <a <?=$data['cid'] == $cate['cid']?'id="highlight"':''?> href="/Home/index?cid=<?=$cate['cid']?>" rel="nofollow"><?=$cate['title']?></a>
    <?php }?>

<!--<a href="http://www.youliaodao.cn" target="_blank" rel="nofollow">百科</a>-->
</div>
<div class="userbar clearfix hidden">
<div class="login hidden">
<a href="/my" class="username" id="uname" rel="nofollow"></a>
</div>
<div class="logout">
<a href="javascript:void(0);" class="fn-signin-required logintop" id='logintop' rel="nofollow" style="font-size:16.5px;">登录</a>
</div>
</div>
</div>

<div style="float: right;line-height: 82px;margin-right: 10px;">
    <?php if($data['user']){?>
    <span style="color: gray;"><?=$data['user']['username']?></span>
    <a href="javascript:;" onclick="publish()">发贴</a>
    <a href="javascript:;" onclick="logout()">退出</a>
    <?php }else{?>
    <a href="javascript:;" onclick="login()">登录</a>
    <a href="javascript:;" onclick="regist()">注册</a>
    <?php }?>
</div>

</div>



<div id="content" class="main">
<div class="content-block clearfix">
<!-- 暂停更新提示 -->
<!-- <img src="/static/images/banner.png" alt="" style="width: 100%; margin: 16px 0 0; display: block"> -->

<div id="content-left" class="col1">







<?php foreach($data['articles']['lists'] as $article){?>
<div class="article block untagged mb15 typs_long" id='qiushi_tag_119954676'>


<div class="author clearfix">
<a href="/users/21210391/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/2121/21210391/thumb/20160501150729.jpg?imageView2/1/w/90/h/90" alt="笑祼裸">
</a>
<a href="/users/21210391/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
笑祼裸
</h2>
</a>
<div class="articleGender manIcon">25</div>
</div>

<a href="/article/119954676" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


<?=htmlspecialchars_decode($article['message']);?>

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">1731</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119954676" data-share="/article/119954676" id="c-119954676" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">15</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119954676" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119954676" class="up">
<a href="javascript:voting(119954676,1)" class="voting" data-article="119954676" id="up-119954676" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">1758</span>
</a>
</li>
<li id="vote-dn-119954676" class="down">
<a href="javascript:voting(119954676,-1)" class="voting" data-article="119954676" id="dn-119954676" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-27</span>
</a>
</li>
<li class="comments">
<a href="/article/119954676" id="c-119954676" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>


<a href="/article/119954676" class="indexGodCmt" onclick="_hmt.push(['_trackEvent','web_list_comment-popular','chick'])" rel="nofollow" target="_blank">
<div class="cmtMain">
<span class="cmt-god"></span>






<span class="cmt-name">哇塞～桃宝：</span>
<div class="main-text">
是个兄弟
<div class="likenum">
<img src="//static.qiushibaike.com/images/newarticle/like@1.5.png?v=b7f830b3bb97b559891af61444d3b4ad">


43

</div>
</div>
</div>
</a>

</div>
<?php }?>






<div class="article block untagged mb15 typs_hot" id='qiushi_tag_119962623'>


<div class="author clearfix">
<a href="/users/33066070/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/3306/33066070/thumb/20170415131829.JPEG?imageView2/1/w/90/h/90" alt="佛，不渡">
</a>
<a href="/users/33066070/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
佛，不渡
</h2>
</a>
<div class="articleGender womenIcon">87</div>
</div>

<a href="/article/119962623" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


一朋友家人在北京住院他陪床，闲的无聊去调戏一未婚小护士，结果两个人就那么成一对了！<br/>要不是他亲人住在VIP高级病房，我差点又一次相信爱情了

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">2019</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119962623" data-share="/article/119962623" id="c-119962623" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">11</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119962623" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119962623" class="up">
<a href="javascript:voting(119962623,1)" class="voting" data-article="119962623" id="up-119962623" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">2033</span>
</a>
</li>
<li id="vote-dn-119962623" class="down">
<a href="javascript:voting(119962623,-1)" class="voting" data-article="119962623" id="dn-119962623" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-14</span>
</a>
</li>
<li class="comments">
<a href="/article/119962623" id="c-119962623" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>







<div class="article block untagged mb15 typs_recent" id='qiushi_tag_119962332'>


<div class="author clearfix">
<a href="/users/31064729/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/3106/31064729/thumb/20170905155707.JPEG?imageView2/1/w/90/h/90" alt="绦子">
</a>
<a href="/users/31064729/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
绦子
</h2>
</a>
<div class="articleGender manIcon">76</div>
</div>

<a href="/article/119962332" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


无题胜有题！～

</span>

</div>
</a>
<!-- 图片或gif -->



<div class="thumb">

<a href="/article/119962332" target="_blank">
<img src="//pic.qiushibaike.com/system/pictures/11996/119962332/medium/app119962332.jpg" alt="糗事#119962332" class="illustration" width="100%" height="auto">
</a>
</div>


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">270</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119962332" data-share="/article/119962332" id="c-119962332" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">2</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119962332" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119962332" class="up">
<a href="javascript:voting(119962332,1)" class="voting" data-article="119962332" id="up-119962332" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">282</span>
</a>
</li>
<li id="vote-dn-119962332" class="down">
<a href="javascript:voting(119962332,-1)" class="voting" data-article="119962332" id="dn-119962332" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-12</span>
</a>
</li>
<li class="comments">
<a href="/article/119962332" id="c-119962332" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>







<div class="article block untagged mb15 typs_recent" id='qiushi_tag_119963011'>


<div class="author clearfix">
<a href="/users/22468789/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/2246/22468789/thumb/20141107234417.jpg?imageView2/1/w/90/h/90" alt="我看见你的背影">
</a>
<a href="/users/22468789/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
我看见你的背影
</h2>
</a>
<div class="articleGender manIcon">0</div>
</div>

<a href="/article/119963011" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


老爸刚回家，习惯性打开一本书点上一支烟，老妈见状不爽对其吼道：要抽烟出去抽！老爸愣了片刻，也对其吼道：出去！....就出去

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">246</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119963011" data-share="/article/119963011" id="c-119963011" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">0</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119963011" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119963011" class="up">
<a href="javascript:voting(119963011,1)" class="voting" data-article="119963011" id="up-119963011" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">252</span>
</a>
</li>
<li id="vote-dn-119963011" class="down">
<a href="javascript:voting(119963011,-1)" class="voting" data-article="119963011" id="dn-119963011" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-6</span>
</a>
</li>
<li class="comments">
<a href="/article/119963011" id="c-119963011" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>







<div class="article block untagged mb15 typs_old" id='qiushi_tag_117878027'>


<div class="author clearfix">
<a href="/users/16725385/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/1672/16725385/thumb/201610271322028.JPEG?imageView2/1/w/90/h/90" alt="今晚打老虎机1">
</a>
<a href="/users/16725385/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
今晚打老虎机1
</h2>
</a>
<div class="articleGender manIcon">24</div>
</div>

<a href="/article/117878027" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


一个宇宙 ，九大行星 ，809个岛屿， 204个国家 ，77亿人 ，而我 ，居然找不到对象， 我操他妈 ，太惨了！

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">259</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/117878027" data-share="/article/117878027" id="c-117878027" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">11</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_117878027" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-117878027" class="up">
<a href="javascript:voting(117878027,1)" class="voting" data-article="117878027" id="up-117878027" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">276</span>
</a>
</li>
<li id="vote-dn-117878027" class="down">
<a href="javascript:voting(117878027,-1)" class="voting" data-article="117878027" id="dn-117878027" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-17</span>
</a>
</li>
<li class="comments">
<a href="/article/117878027" id="c-117878027" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>







<div class="article block untagged mb15 typs_hot" id='qiushi_tag_119963227'>


<div class="author clearfix">
<a href="/users/33491754/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/3349/33491754/thumb/2017122100143878.JPEG?imageView2/1/w/90/h/90" alt="我是煮茶">
</a>
<a href="/users/33491754/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
我是煮茶
</h2>
</a>
<div class="articleGender manIcon">32</div>
</div>

<a href="/article/119963227" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


那年，卖棉花糖的张大爷，跟张大妈吵了架，受了刺激！他叫我带他去发廊做了个爆炸头表明自己气炸了。真是老夫聊发少年狂，满头白发还整爆炸头！      做好，张大爷回去，张大妈打老远就喊：“老头子，你生气了也不该把头去搅棉花糖啊？”

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">1252</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119963227" data-share="/article/119963227" id="c-119963227" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">15</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119963227" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119963227" class="up">
<a href="javascript:voting(119963227,1)" class="voting" data-article="119963227" id="up-119963227" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">1266</span>
</a>
</li>
<li id="vote-dn-119963227" class="down">
<a href="javascript:voting(119963227,-1)" class="voting" data-article="119963227" id="dn-119963227" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-14</span>
</a>
</li>
<li class="comments">
<a href="/article/119963227" id="c-119963227" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>


<a href="/article/119963227" class="indexGodCmt" onclick="_hmt.push(['_trackEvent','web_list_comment-popular','chick'])" rel="nofollow" target="_blank">
<div class="cmtMain">
<span class="cmt-god"></span>






<span class="cmt-name">打哈欠的朱鹮：</span>
<div class="main-text">
哈哈哈，笑死了～～～
<div class="likenum">
<img src="//static.qiushibaike.com/images/newarticle/like@1.5.png?v=b7f830b3bb97b559891af61444d3b4ad">


13

</div>
</div>
</div>
</a>

</div>







<div class="article block untagged mb15 typs_hot" id='qiushi_tag_119962377'>


<div class="author clearfix">
<a href="/users/36144571/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/3614/36144571/thumb/2018012400483777.JPEG?imageView2/1/w/90/h/90" alt="李 小 贱">
</a>
<a href="/users/36144571/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
李 小 贱
</h2>
</a>
<div class="articleGender manIcon">17</div>
</div>

<a href="/article/119962377" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


记得和媳妇第一次的时候，我轻轻地抚摸了一下她的胸，我愣了一下又迅速地把手滑到了更深处！她娇嗔道：讨厌～干嘛那么心急！ 我摇摇头：不，我只是想确认一下你是不是女的...

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">5336</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119962377" data-share="/article/119962377" id="c-119962377" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">93</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119962377" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119962377" class="up">
<a href="javascript:voting(119962377,1)" class="voting" data-article="119962377" id="up-119962377" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">5371</span>
</a>
</li>
<li id="vote-dn-119962377" class="down">
<a href="javascript:voting(119962377,-1)" class="voting" data-article="119962377" id="dn-119962377" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-35</span>
</a>
</li>
<li class="comments">
<a href="/article/119962377" id="c-119962377" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>


<a href="/article/119962377" class="indexGodCmt" onclick="_hmt.push(['_trackEvent','web_list_comment-popular','chick'])" rel="nofollow" target="_blank">
<div class="cmtMain">
<span class="cmt-god"></span>






<span class="cmt-name">我的袜子是白色的：</span>
<div class="main-text">
往下一模、比楼主还大、楼主媳妇来句、得劲么、老铁
<div class="likenum">
<img src="//static.qiushibaike.com/images/newarticle/like@1.5.png?v=b7f830b3bb97b559891af61444d3b4ad">


22

</div>
</div>
</div>
</a>

</div>







<div class="article block untagged mb15 typs_recent" id='qiushi_tag_119963048'>


<div class="author clearfix">
<span style="height: 35px">
<img src="//static.qiushibaike.com/images/thumb/anony.png?v=b61e7f5162d14b7c0d5f419cd6649c87" alt="匿名用户">
</span>
<span>
<h2>匿名用户</h2>
</span>
<!-- <div class="articleGender manIcon">32</div> -->
</div>

<a href="/article/119963048" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


不知道哪位大神给刚来没几天的南方同事买的煎饼和大葱，还没有酱，然后他没有犹豫的卷着吃了起来，我有些震惊，我真的很想告诉他这个要蘸酱吃的，然而我忍住了，因为我没吃过还教人家怎么吃……

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">214</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119963048" data-share="/article/119963048" id="c-119963048" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">1</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119963048" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119963048" class="up">
<a href="javascript:voting(119963048,1)" class="voting" data-article="119963048" id="up-119963048" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">221</span>
</a>
</li>
<li id="vote-dn-119963048" class="down">
<a href="javascript:voting(119963048,-1)" class="voting" data-article="119963048" id="dn-119963048" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-7</span>
</a>
</li>
<li class="comments">
<a href="/article/119963048" id="c-119963048" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>







<div class="article block untagged mb15 typs_recent" id='qiushi_tag_119963376'>


<div class="author clearfix">
<a href="/users/22403871/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/2240/22403871/thumb/20171021131047.JPEG?imageView2/1/w/90/h/90" alt="情醉潇湘">
</a>
<a href="/users/22403871/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
情醉潇湘
</h2>
</a>
<div class="articleGender manIcon">29</div>
</div>

<a href="/article/119963376" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


忍痛出唐寅真迹《虎啸山林  气吞天下》图  售价80万两白银  如若真心想要的8块钱（注：人民币）送货到家

</span>

</div>
</a>
<!-- 图片或gif -->



<div class="thumb">

<a href="/article/119963376" target="_blank">
<img src="//pic.qiushibaike.com/system/pictures/11996/119963376/medium/app119963376.jpg" alt="糗事#119963376" class="illustration" width="100%" height="auto">
</a>
</div>


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">181</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119963376" data-share="/article/119963376" id="c-119963376" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">5</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119963376" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119963376" class="up">
<a href="javascript:voting(119963376,1)" class="voting" data-article="119963376" id="up-119963376" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">188</span>
</a>
</li>
<li id="vote-dn-119963376" class="down">
<a href="javascript:voting(119963376,-1)" class="voting" data-article="119963376" id="dn-119963376" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-7</span>
</a>
</li>
<li class="comments">
<a href="/article/119963376" id="c-119963376" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>







<div class="article block untagged mb15 typs_old" id='qiushi_tag_117878848'>


<div class="author clearfix">
<a href="/users/30881542/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/3088/30881542/thumb/2016112520503682.JPEG?imageView2/1/w/90/h/90" alt="兰芝雪">
</a>
<a href="/users/30881542/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
兰芝雪
</h2>
</a>
<div class="articleGender womenIcon">100</div>
</div>

<a href="/article/117878848" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


时光，流逝着；<br/>岁月，沉淀着；<br/>一转身便是一个光阴的故事。<br/><br/>晚安[月亮]

</span>

</div>
</a>
<!-- 图片或gif -->



<div class="thumb">

<a href="/article/117878848" target="_blank">
<img src="//pic.qiushibaike.com/system/pictures/11787/117878848/medium/app117878848.jpg" alt="糗事#117878848" class="illustration" width="100%" height="auto">
</a>
</div>


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">686</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/117878848" data-share="/article/117878848" id="c-117878848" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">31</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_117878848" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-117878848" class="up">
<a href="javascript:voting(117878848,1)" class="voting" data-article="117878848" id="up-117878848" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">783</span>
</a>
</li>
<li id="vote-dn-117878848" class="down">
<a href="javascript:voting(117878848,-1)" class="voting" data-article="117878848" id="dn-117878848" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-97</span>
</a>
</li>
<li class="comments">
<a href="/article/117878848" id="c-117878848" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>


<a href="/article/117878848" class="indexGodCmt" onclick="_hmt.push(['_trackEvent','web_list_comment-popular','chick'])" rel="nofollow" target="_blank">
<div class="cmtMain">
<span class="cmt-god"></span>






<span class="cmt-name">调关镇：</span>
<div class="main-text">
静，冬日的静，此画，可以诠释出作者的那种深藏在心里的底蕴，文静，安逸，亦或是低迷，灰暗，孤独，寂寞！又可以看出作者心里那种不甘屈服，那种不甘寂寞，奋起反抗的复杂心态，原画表象是静，静的美轮美奂，实则……挣扎，压抑！好画～天上的太阳，是这个画的败笔，建议去掉，这样就看不出你是闷骚型
<div class="likenum">
<img src="//static.qiushibaike.com/images/newarticle/like@1.5.png?v=b7f830b3bb97b559891af61444d3b4ad">


11

</div>
</div>
</div>
</a>

</div>







<div class="article block untagged mb15 typs_hot" id='qiushi_tag_119962448'>


<div class="author clearfix">
<a href="/users/33491754/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/3349/33491754/thumb/2017122100143878.JPEG?imageView2/1/w/90/h/90" alt="我是煮茶">
</a>
<a href="/users/33491754/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
我是煮茶
</h2>
</a>
<div class="articleGender manIcon">32</div>
</div>

<a href="/article/119962448" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


高速路服务区，我接了个电话，跟着前面一个戴着墨镜抽着烟的帅哥进了厕所。我一进去，没看到一排排小便器，反而看到了很多女人。这是女厕！前面那帅哥回头看我一眼：“没想到我是个女的吧！”  我尖着嗓子说：“就你长得像男的啊！”然后扭着胯进了里头的蹲厕……

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">1428</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119962448" data-share="/article/119962448" id="c-119962448" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">18</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119962448" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119962448" class="up">
<a href="javascript:voting(119962448,1)" class="voting" data-article="119962448" id="up-119962448" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">1443</span>
</a>
</li>
<li id="vote-dn-119962448" class="down">
<a href="javascript:voting(119962448,-1)" class="voting" data-article="119962448" id="dn-119962448" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-15</span>
</a>
</li>
<li class="comments">
<a href="/article/119962448" id="c-119962448" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>


<a href="/article/119962448" class="indexGodCmt" onclick="_hmt.push(['_trackEvent','web_list_comment-popular','chick'])" rel="nofollow" target="_blank">
<div class="cmtMain">
<span class="cmt-god"></span>






<span class="cmt-name">℡梅心梅肺～：</span>
<div class="main-text">
你两能凑一对，她汉子，你娘炮！
<div class="likenum">
<img src="//static.qiushibaike.com/images/newarticle/like@1.5.png?v=b7f830b3bb97b559891af61444d3b4ad">


34

</div>
</div>
</div>
</a>

</div>







<div class="article block untagged mb15 typs_hot" id='qiushi_tag_119941565'>


<div class="author clearfix">
<span style="height: 35px">
<img src="//static.qiushibaike.com/images/thumb/anony.png?v=b61e7f5162d14b7c0d5f419cd6649c87" alt="匿名用户">
</span>
<span>
<h2>匿名用户</h2>
</span>
<!-- <div class="articleGender manIcon">32</div> -->
</div>

<a href="/article/119941565" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


老大四岁半，凌晨五点左右一直类似吸鼻涕的声音，他和他爸睡，我就问他要不要尿尿，或者起来擦下鼻涕，他说不要……割割割……<br/>大清早起来发现流鼻血，脸上还有些已经干了，嘴里也是血，那场面太血腥了，他自己居然没任何反应……

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">944</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119941565" data-share="/article/119941565" id="c-119941565" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">21</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119941565" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119941565" class="up">
<a href="javascript:voting(119941565,1)" class="voting" data-article="119941565" id="up-119941565" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">958</span>
</a>
</li>
<li id="vote-dn-119941565" class="down">
<a href="javascript:voting(119941565,-1)" class="voting" data-article="119941565" id="dn-119941565" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-14</span>
</a>
</li>
<li class="comments">
<a href="/article/119941565" id="c-119941565" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>







<div class="article block untagged mb15 typs_recent" id='qiushi_tag_119962497'>


<div class="author clearfix">
<a href="/users/190315/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/19/190315/thumb/2018012320534647.JPEG?imageView2/1/w/90/h/90" alt="你家邻居叫马乐">
</a>
<a href="/users/190315/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
你家邻居叫马乐
</h2>
</a>
<div class="articleGender manIcon">34</div>
</div>

<a href="/article/119962497" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


乌市肯定不欢迎我！今早去上班的路上，又滑倒了，这已经是十天之内第三次滑倒。<br/><br/>颤巍巍爬起来一看，这次是自作孽，昨晚喝了点酒，回来时尿急，就在路边解决了，刚才滑倒就是踩到了自己昨晚撒的尿结成的冰溜子上。

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">510</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119962497" data-share="/article/119962497" id="c-119962497" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">15</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119962497" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119962497" class="up">
<a href="javascript:voting(119962497,1)" class="voting" data-article="119962497" id="up-119962497" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">517</span>
</a>
</li>
<li id="vote-dn-119962497" class="down">
<a href="javascript:voting(119962497,-1)" class="voting" data-article="119962497" id="dn-119962497" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-7</span>
</a>
</li>
<li class="comments">
<a href="/article/119962497" id="c-119962497" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>







<div class="article block untagged mb15 typs_recent" id='qiushi_tag_119963387'>


<div class="author clearfix">
<a href="/users/33342991/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/3334/33342991/thumb/2017012619142182.JPEG?imageView2/1/w/90/h/90" alt="林月非">
</a>
<a href="/users/33342991/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
林月非
</h2>
</a>
<div class="articleGender manIcon">25</div>
</div>

<a href="/article/119963387" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


现在的女孩，你要是不努力，是会被抓得去结婚的，并且还要生二胎

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">182</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119963387" data-share="/article/119963387" id="c-119963387" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">1</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119963387" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119963387" class="up">
<a href="javascript:voting(119963387,1)" class="voting" data-article="119963387" id="up-119963387" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">192</span>
</a>
</li>
<li id="vote-dn-119963387" class="down">
<a href="javascript:voting(119963387,-1)" class="voting" data-article="119963387" id="dn-119963387" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-10</span>
</a>
</li>
<li class="comments">
<a href="/article/119963387" id="c-119963387" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>







<div class="article block untagged mb15 typs_old" id='qiushi_tag_117878553'>


<div class="author clearfix">
<a href="/users/12903795/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/1290/12903795/thumb/20140330055517.jpg?imageView2/1/w/90/h/90" alt="心若冰清0517">
</a>
<a href="/users/12903795/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
心若冰清0517
</h2>
</a>
<div class="articleGender manIcon">26</div>
</div>

<a href="/article/117878553" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


刚买的秋装还没上身显摆就要换冬装<br/>妥妥的心塞~

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">185</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/117878553" data-share="/article/117878553" id="c-117878553" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">4</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_117878553" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-117878553" class="up">
<a href="javascript:voting(117878553,1)" class="voting" data-article="117878553" id="up-117878553" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">194</span>
</a>
</li>
<li id="vote-dn-117878553" class="down">
<a href="javascript:voting(117878553,-1)" class="voting" data-article="117878553" id="dn-117878553" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-9</span>
</a>
</li>
<li class="comments">
<a href="/article/117878553" id="c-117878553" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>







<div class="article block untagged mb15 typs_hot" id='qiushi_tag_119961241'>


<div class="author clearfix">
<span style="height: 35px">
<img src="//static.qiushibaike.com/images/thumb/anony.png?v=b61e7f5162d14b7c0d5f419cd6649c87" alt="匿名用户">
</span>
<span>
<h2>匿名用户</h2>
</span>
<!-- <div class="articleGender manIcon">32</div> -->
</div>

<a href="/article/119961241" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


以前喜欢过一个女生，前年她结婚了，婚后过的并不幸福，跟老公感情不和，心情不好的时候跟我倾诉，我就逗她说，离婚吧，我娶你；最近得知她前不久离婚了，求糗友们给我勇气，去跟她表白！

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">1192</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119961241" data-share="/article/119961241" id="c-119961241" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">46</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119961241" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119961241" class="up">
<a href="javascript:voting(119961241,1)" class="voting" data-article="119961241" id="up-119961241" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">1216</span>
</a>
</li>
<li id="vote-dn-119961241" class="down">
<a href="javascript:voting(119961241,-1)" class="voting" data-article="119961241" id="dn-119961241" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-24</span>
</a>
</li>
<li class="comments">
<a href="/article/119961241" id="c-119961241" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>


<a href="/article/119961241" class="indexGodCmt" onclick="_hmt.push(['_trackEvent','web_list_comment-popular','chick'])" rel="nofollow" target="_blank">
<div class="cmtMain">
<span class="cmt-god"></span>






<span class="cmt-name">哥哥胸中有沟壑：</span>
<div class="main-text">
当你发出来的时候，其实就已经下定决心了！去吧去吧！
<div class="likenum">
<img src="//static.qiushibaike.com/images/newarticle/like@1.5.png?v=b7f830b3bb97b559891af61444d3b4ad">


14

</div>
</div>
</div>
</a>

</div>







<div class="article block untagged mb15 typs_hot" id='qiushi_tag_119962383'>


<div class="author clearfix">
<a href="/users/36144571/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/3614/36144571/thumb/2018012400483777.JPEG?imageView2/1/w/90/h/90" alt="李 小 贱">
</a>
<a href="/users/36144571/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
李 小 贱
</h2>
</a>
<div class="articleGender manIcon">17</div>
</div>

<a href="/article/119962383" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


看着床上睡懒觉的媳妇，我特么下班连饭都没得吃的，气就不打一处来了：你看看你自己，天天吃了就是睡，好长时间没有工作了，你这叫虚度光阴…！…她：你才叫虚度光阴好不好？…我：我怎么就虚度了？…她：你特么肾虚过度了！…尼玛

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">913</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119962383" data-share="/article/119962383" id="c-119962383" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">10</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119962383" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119962383" class="up">
<a href="javascript:voting(119962383,1)" class="voting" data-article="119962383" id="up-119962383" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">926</span>
</a>
</li>
<li id="vote-dn-119962383" class="down">
<a href="javascript:voting(119962383,-1)" class="voting" data-article="119962383" id="dn-119962383" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-13</span>
</a>
</li>
<li class="comments">
<a href="/article/119962383" id="c-119962383" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>







<div class="article block untagged mb15 typs_recent" id='qiushi_tag_119963259'>


<div class="author clearfix">
<a href="/users/12248016/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/1224/12248016/thumb/20150509121930.jpg?imageView2/1/w/90/h/90" alt="萨达姆xx">
</a>
<a href="/users/12248016/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
萨达姆xx
</h2>
</a>
<div class="articleGender manIcon">26</div>
</div>

<a href="/article/119963259" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


我今天去银行取钱看到保安员穿着那么厚重的衣服还要搬那么沉的箱子挺费劲的，想过去搭把手，刚走上去两步就被用枪指回来了。

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">388</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119963259" data-share="/article/119963259" id="c-119963259" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">6</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119963259" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119963259" class="up">
<a href="javascript:voting(119963259,1)" class="voting" data-article="119963259" id="up-119963259" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">391</span>
</a>
</li>
<li id="vote-dn-119963259" class="down">
<a href="javascript:voting(119963259,-1)" class="voting" data-article="119963259" id="dn-119963259" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-3</span>
</a>
</li>
<li class="comments">
<a href="/article/119963259" id="c-119963259" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>


<a href="/article/119963259" class="indexGodCmt" onclick="_hmt.push(['_trackEvent','web_list_comment-popular','chick'])" rel="nofollow" target="_blank">
<div class="cmtMain">
<span class="cmt-god"></span>






<span class="cmt-name">为啥我不是戴眼镜：</span>
<div class="main-text">
我就问你警察相信了没有
<div class="likenum">
<img src="//static.qiushibaike.com/images/newarticle/like@1.5.png?v=b7f830b3bb97b559891af61444d3b4ad">


5

</div>
</div>
</div>
</a>

</div>







<div class="article block untagged mb15 typs_recent" id='qiushi_tag_119963428'>


<div class="author clearfix">
<a href="/users/12411163/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/1241/12411163/thumb/20150112092256.jpg?imageView2/1/w/90/h/90" alt="小吹吹水">
</a>
<a href="/users/12411163/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
小吹吹水
</h2>
</a>
<div class="articleGender manIcon">28</div>
</div>

<a href="/article/119963428" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


好有才的小朋友

</span>

</div>
</a>
<!-- 图片或gif -->



<div class="thumb">

<a href="/article/119963428" target="_blank">
<img src="//pic.qiushibaike.com/system/pictures/11996/119963428/medium/app119963428.jpg" alt="糗事#119963428" class="illustration" width="100%" height="auto">
</a>
</div>


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">202</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119963428" data-share="/article/119963428" id="c-119963428" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">1</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119963428" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119963428" class="up">
<a href="javascript:voting(119963428,1)" class="voting" data-article="119963428" id="up-119963428" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">208</span>
</a>
</li>
<li id="vote-dn-119963428" class="down">
<a href="javascript:voting(119963428,-1)" class="voting" data-article="119963428" id="dn-119963428" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-6</span>
</a>
</li>
<li class="comments">
<a href="/article/119963428" id="c-119963428" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>







<div class="article block untagged mb15 typs_old" id='qiushi_tag_117877342'>


<div class="author clearfix">
<a href="/users/32891658/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/3289/32891658/thumb/20170111135113.JPEG?imageView2/1/w/90/h/90" alt="茕茕小兔兔">
</a>
<a href="/users/32891658/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
茕茕小兔兔
</h2>
</a>
<div class="articleGender womenIcon">25</div>
</div>

<a href="/article/117877342" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


宝宝住在A栋22楼～<br/>有一天一朋友生日喝高了～<br/>跑到B栋22楼～<br/>使劲拿钥匙开门,结果里面出来一个美女问你谁啊！我很理直气壮的回答我就住这里啊～结果那女的直接扭头回去打她老公了……

</span>

</div>
</a>
<!-- 图片或gif -->



<div class="thumb">

<a href="/article/117877342" target="_blank">
<img src="//pic.qiushibaike.com/system/pictures/11787/117877342/medium/app117877342.jpg" alt="糗事#117877342" class="illustration" width="100%" height="auto">
</a>
</div>


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">200</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/117877342" data-share="/article/117877342" id="c-117877342" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">11</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_117877342" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-117877342" class="up">
<a href="javascript:voting(117877342,1)" class="voting" data-article="117877342" id="up-117877342" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">209</span>
</a>
</li>
<li id="vote-dn-117877342" class="down">
<a href="javascript:voting(117877342,-1)" class="voting" data-article="117877342" id="dn-117877342" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-9</span>
</a>
</li>
<li class="comments">
<a href="/article/117877342" id="c-117877342" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>







<div class="article block untagged mb15 typs_hot" id='qiushi_tag_119962360'>


<div class="author clearfix">
<a href="/users/33676416/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/3367/33676416/thumb/20180124185016.JPEG?imageView2/1/w/90/h/90" alt="在风的尽头等傻晴">
</a>
<a href="/users/33676416/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
在风的尽头等傻晴
</h2>
</a>
<div class="articleGender manIcon">25</div>
</div>

<a href="/article/119962360" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


哥们来我家玩，中途我有事出去了一下，回家后他拍着我肩膀说：我干了一件事，一会你楼下的妹子会来找你，加油拿下她!<br/>好哥们!替我牵红线呢。果然哥们走后没多久，妹子就上来了。拎着一件羽绒服，指着上面的洞说：总算是回来了，这是你家阳台落下来的烟头烧的，说吧怎么赔？

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">10281</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119962360" data-share="/article/119962360" id="c-119962360" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">94</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119962360" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119962360" class="up">
<a href="javascript:voting(119962360,1)" class="voting" data-article="119962360" id="up-119962360" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">10329</span>
</a>
</li>
<li id="vote-dn-119962360" class="down">
<a href="javascript:voting(119962360,-1)" class="voting" data-article="119962360" id="dn-119962360" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-48</span>
</a>
</li>
<li class="comments">
<a href="/article/119962360" id="c-119962360" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>


<a href="/article/119962360" class="indexGodCmt" onclick="_hmt.push(['_trackEvent','web_list_comment-popular','chick'])" rel="nofollow" target="_blank">
<div class="cmtMain">
<span class="cmt-god"></span>






<span class="cmt-name">偷惢：</span>
<div class="main-text">
没钱，肉偿吧
<div class="likenum">
<img src="//static.qiushibaike.com/images/newarticle/like@1.5.png?v=b7f830b3bb97b559891af61444d3b4ad">


243

</div>
</div>
</div>
</a>

</div>







<div class="article block untagged mb15 typs_hot" id='qiushi_tag_119959512'>


<div class="author clearfix">
<a href="/users/32685258/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/3268/32685258/thumb/20180123042427.JPEG?imageView2/1/w/90/h/90" alt="绾绾~">
</a>
<a href="/users/32685258/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
绾绾~
</h2>
</a>
<div class="articleGender womenIcon">19</div>
</div>

<a href="/article/119959512" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


陪老妈去早市，被一个骑三轮车卖菜的老伯给撞倒了，疼的我龇牙咧嘴，老伯吓坏了，要带我去医院！<br/>老妈“您不用管了，走吧！我闺女命硬着呢，小时候一屁股坐进过火盆，掉过鱼塘里，被人贩子拐了两个村又给送回来！你这小三轮撞了一下，不打紧，赶紧走吧！”<br/>我。。。。。

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">830</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119959512" data-share="/article/119959512" id="c-119959512" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">26</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119959512" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119959512" class="up">
<a href="javascript:voting(119959512,1)" class="voting" data-article="119959512" id="up-119959512" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">844</span>
</a>
</li>
<li id="vote-dn-119959512" class="down">
<a href="javascript:voting(119959512,-1)" class="voting" data-article="119959512" id="dn-119959512" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-14</span>
</a>
</li>
<li class="comments">
<a href="/article/119959512" id="c-119959512" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>


<a href="/article/119959512" class="indexGodCmt" onclick="_hmt.push(['_trackEvent','web_list_comment-popular','chick'])" rel="nofollow" target="_blank">
<div class="cmtMain">
<span class="cmt-god"></span>






<span class="cmt-name">偷惢：</span>
<div class="main-text">
屁股着火啦
<div class="likenum">
<img src="//static.qiushibaike.com/images/newarticle/like@1.5.png?v=b7f830b3bb97b559891af61444d3b4ad">


11

</div>
</div>
</div>
</a>

</div>







<div class="article block untagged mb15 typs_recent" id='qiushi_tag_119962656'>


<div class="author clearfix">
<a href="/users/21937451/" target="_blank" rel="nofollow" style="height: 35px" onclick="_hmt.push(['_trackEvent','web-list-author-img','chick'])">

<img src="//pic.qiushibaike.com/system/avtnew/2193/21937451/thumb/20141024124018.jpg?imageView2/1/w/90/h/90" alt="爱你很多年了">
</a>
<a href="/users/21937451/" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-author-text','chick'])">
<h2>
爱你很多年了
</h2>
</a>
<div class="articleGender womenIcon">31</div>
</div>

<a href="/article/119962656" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


什麼情況。他可從來不主動發紅包的呀

</span>

</div>
</a>
<!-- 图片或gif -->



<div class="thumb">

<a href="/article/119962656" target="_blank">
<img src="//pic.qiushibaike.com/system/pictures/11996/119962656/medium/app119962656.jpg" alt="糗事#119962656" class="illustration" width="100%" height="auto">
</a>
</div>


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">227</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119962656" data-share="/article/119962656" id="c-119962656" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">9</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119962656" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119962656" class="up">
<a href="javascript:voting(119962656,1)" class="voting" data-article="119962656" id="up-119962656" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">240</span>
</a>
</li>
<li id="vote-dn-119962656" class="down">
<a href="javascript:voting(119962656,-1)" class="voting" data-article="119962656" id="dn-119962656" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-13</span>
</a>
</li>
<li class="comments">
<a href="/article/119962656" id="c-119962656" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>







<div class="article block untagged mb15 typs_recent" id='qiushi_tag_119963342'>


<div class="author clearfix">
<span style="height: 35px">
<img src="//static.qiushibaike.com/images/thumb/anony.png?v=b61e7f5162d14b7c0d5f419cd6649c87" alt="匿名用户">
</span>
<span>
<h2>匿名用户</h2>
</span>
<!-- <div class="articleGender manIcon">32</div> -->
</div>

<a href="/article/119963342" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


到过年就像是某些人的秀场一样，比吃，比喝，比人脉，越是说自己有什么的人其实自己越没什么

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">172</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/119963342" data-share="/article/119963342" id="c-119963342" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">0</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_119963342" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-119963342" class="up">
<a href="javascript:voting(119963342,1)" class="voting" data-article="119963342" id="up-119963342" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">181</span>
</a>
</li>
<li id="vote-dn-119963342" class="down">
<a href="javascript:voting(119963342,-1)" class="voting" data-article="119963342" id="dn-119963342" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-9</span>
</a>
</li>
<li class="comments">
<a href="/article/119963342" id="c-119963342" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>







<div class="article block untagged mb15 typs_old" id='qiushi_tag_117879352'>


<div class="author clearfix">
<span style="height: 35px">
<img src="//static.qiushibaike.com/images/thumb/anony.png?v=b61e7f5162d14b7c0d5f419cd6649c87" alt="匿名用户">
</span>
<span>
<h2>匿名用户</h2>
</span>
<!-- <div class="articleGender manIcon">32</div> -->
</div>

<a href="/article/117879352" target="_blank" class="contentHerf" onclick="_hmt.push(['_trackEvent','web-list-content','chick'])">
<div class="content">
<span>


室友星期天找女朋友出去玩（以此为背<br/>景）回来后<br/>一室友:好久没有看你玩cf了<br/>我:他这两天还能玩枪吗！（秒懂的赞我）

</span>

</div>
</a>
<!-- 图片或gif -->


<div class="stats">
<!-- 笑脸、评论数等 -->


<span class="stats-vote"><i class="number">191</i> 好笑</span>
<span class="stats-comments">
<span class="dash"> · </span>
<a href="/article/117879352" data-share="/article/117879352" id="c-117879352" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment','chick'])">
<i class="number">2</i> 评论
</a>
</span>
</div>
<div id="qiushi_counts_117879352" class="stats-buttons bar clearfix">
<ul class="clearfix">
<li id="vote-up-117879352" class="up">
<a href="javascript:voting(117879352,1)" class="voting" data-article="117879352" id="up-117879352" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-funny','chick'])">
<i></i>
<span class="number hidden">201</span>
</a>
</li>
<li id="vote-dn-117879352" class="down">
<a href="javascript:voting(117879352,-1)" class="voting" data-article="117879352" id="dn-117879352" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-list-cry','chick'])">
<i></i>
<span class="number hidden">-10</span>
</a>
</li>
<li class="comments">
<a href="/article/117879352" id="c-117879352" class="qiushi_comments" target="_blank" onclick="_hmt.push(['_trackEvent','web-list-comment01','chick'])">
<i></i>
</a>
</li>
</ul>
</div>
<div class="single-share">
<a class="share-wechat" data-type="wechat" title="分享到微信" rel="nofollow">微信</a>
<a class="share-qq" data-type="qq" title="分享到QQ" rel="nofollow">QQ</a>
<a class="share-qzone" data-type="qzone" title="分享到QQ空间" rel="nofollow">QQ空间</a>
<a class="share-weibo" data-type="weibo" title="分享到微博" rel="nofollow">微博</a>
</div>
<div class="single-clear"></div>

</div>





<!-- 全局翻页组件 -->

<div id="pagination"></div>

<script type="text/javascript">
    function pagination(){
        laypage.render({
            elem: 'pagination' //注意，这里的 test1 是 ID，不用加 # 号
            ,limit:<?=$data['num']?>
            ,count: <?=$data['articles']['total']?> //数据总数，从服务端得到
            ,curr:<?=$data['page']?>
            ,jump: function(obj, first){
                //首次不执行
                if(!first){
                  window.location.href="/Home/index?cid=<?=$data['cid']?>&page="+obj.curr;
                }
            }
        });
    }
</script>

</div>



<div class="col2">
<div id="sidebar" class="sidebar">

<!-- <div class="sidebar-inform">
<img src="/static/images/inform/banner.png" alt="" style="width: 100%">
</div> -->
<div class="sidebar-inform">
<a href="http://report.12377.cn:13225/toreportinputNormal_anis.do" target="_blank" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jubao','chick'])"></a>
</div>


<div class="shopwindow">
<!-- 55736473：web-右侧悬浮-up 类型：固定 尺寸：300x250-->
<!-- 新广告代码：2017-05-03 -->
<!-- <script type="text/javascript">
document.write('<a style="display:none!important" id="tanx-a-mm_108378320_8760716_29674533"></a>');
tanx_s = document.createElement("script");
tanx_s.type = "text/javascript";
tanx_s.charset = "gbk";
tanx_s.id = "tanx-s-mm_108378320_8760716_29674533";
tanx_s.async = true;
tanx_s.src = "https://phs.tanx.com/ex?i=mm_108378320_8760716_29674533";
tanx_h = document.getElementsByTagName("head")[0];
if(tanx_h)tanx_h.insertBefore(tanx_s,tanx_h.firstChild);
</script> -->
<!-- <script type="text/javascript">
var cpro_id = "u693365";
</script>
<script type="text/javascript" src="https://cpro.baidustatic.com/cpro/ui/c.js"></script> -->
</div>

<div class="shopwindow" id="listAd2">
<!-- 55736473：web-右侧悬浮-up 类型：固定 尺寸：300x250-->
<!-- 新广告代码：2017-05-03 -->
<script type="text/javascript">
/*右侧2*/
// var cpro_id = "u693365";
// document.write('<script type="text/javascript" src="https://cpro.baidustatic.com/cpro/ui/c.js"><\/script>');
// 2017-5-23 修改
// FTAPI_slotid = 1026761;FTAPI_sync = true
// document.write('<script src="//pic.fastapi.net/sdk/js/a.js" charset="utf-8"><\/script>')
</script>
</div>


<div class="sidebar-other">
<img src="/static/images/productlist/ctrl_d.png">
<p>把糗事百科加入收藏夹</p>
</div>
<div class="sidebar-hot clearfix" id="sidebar-qrcode">
<div class="float-left qrcode">
<img src="/static/images/web_v3/sidebar/qiubai_qrcode.png" alt="糗事百科 APP 下载二维码">
</div>
<div class="float-left btn-box">
<a href="javascript:void(0)" class="btn-download ios" onclick="window.open('https://itunes.apple.com/cn/app/id422853458?mt=8')" target="_blank">iOS 下载</a>
<a href="javascript:void(0)" class="btn-download android" onclick="window.open('http://static.qiushibaike.com/qiushibaike.apk')" target="_blank">Android 下载</a>
<p class="tips">扫码下载糗事百科app</p>
</div>
</div>
<!-- 直播下载链接 -->
<div class="sidebar-hot clearfix" id="sidebar-remix">
<a href="https://www.app-remix.com/v1/pc/living?chn=qiubai" onclick="_hmt.push(['_trackEvent', 'web-remix', 'chick']);" target="_blank">
<img src="//static.qiushibaike.com/images/web_v3/sidebar/remix_banner.gif?v=f8bbbe7ca7cd5b9314e8235d6290fb0f" alt="">
</a>
</div>
<!-- 浪人杀下载链接 -->
<div class="sidebar-hot clearfix" id="sidebar-wolf">
<img src="//static.qiushibaike.com/images/web_v3/sidebar/wolf_banner.png?v=b18dc8556489b273af99197ebcf01a1c" alt="">
</div>
<div class="sidebar-hot clearfix">
<h3>爆笑糗事精选</h3>
<ul>

<li class="item">
<a href="/article/119900881" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<span><img src="//pic.qiushibaike.com/system/pictures/11990/119900881/small/app119900881.jpg?imageView2/1/w/146/h/146" alt="狗年大吉"/></span>
</a>
<a href="/article/119900881" title="狗年大吉" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<p>狗年大吉</p>
</a>
</li>

<li class="item">
<a href="/article/119946272" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<span><img src="//pic.qiushibaike.com/system/pictures/11994/119946272/small/app119946272.jpg?imageView2/1/w/146/h/146" alt="哈哈"/></span>
</a>
<a href="/article/119946272" title="哈哈" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<p>哈哈</p>
</a>
</li>

<li class="item">
<a href="/article/119890078" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<span><img src="//pic.qiushibaike.com/system/pictures/11989/119890078/small/app119890078.jpg?imageView2/1/w/146/h/146" alt="刚在一起一星期"/></span>
</a>
<a href="/article/119890078" title="刚在一起一星期" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<p>刚在一起一星期</p>
</a>
</li>

<li class="item">
<a href="/article/119916882" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<span><img src="//pic.qiushibaike.com/system/pictures/11991/119916882/small/app119916882.jpg?imageView2/1/w/146/h/146" alt="坐过这个车子的都来统计一下哈"/></span>
</a>
<a href="/article/119916882" title="坐过这个车子的都来统计一下哈" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<p>坐过这个车子的都来统计一下哈</p>
</a>
</li>

<li class="item">
<a href="/article/119932699" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<span><img src="//pic.qiushibaike.com/system/pictures/11993/119932699/small/app119932699.jpg?imageView2/1/w/146/h/146" alt="今天她对我说了这句话、此生无憾了"/></span>
</a>
<a href="/article/119932699" title="今天她对我说了这句话、此生无憾了" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<p>今天她对我说了这句话、此生无憾了</p>
</a>
</li>

<li class="item">
<a href="/article/119878257" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<span><img src="//pic.qiushibaike.com/system/pictures/11987/119878257/small/app119878257.jpg?imageView2/1/w/146/h/146" alt="不说话"/></span>
</a>
<a href="/article/119878257" title="不说话" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<p>不说话</p>
</a>
</li>

<li class="item">
<a href="/article/119928052" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<span><img src="//pic.qiushibaike.com/system/pictures/11992/119928052/small/app119928052.jpg?imageView2/1/w/146/h/146" alt="可以厉害了"/></span>
</a>
<a href="/article/119928052" title="可以厉害了" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<p>可以厉害了</p>
</a>
</li>

<li class="item">
<a href="/article/119904931" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<span><img src="//pic.qiushibaike.com/system/pictures/11990/119904931/small/app119904931.jpg?imageView2/1/w/146/h/146" alt="如今出门宝马代步"/></span>
</a>
<a href="/article/119904931" title="如今出门宝马代步" rel="nofollow" onclick="_hmt.push(['_trackEvent','web-sidebar-jingxuan','chick'])">
<p>如今出门宝马代步</p>
</a>
</li>

</ul>
</div>
<div class="sidebar-hot clearfix" id="sidebar-tab">
<div class="tab-head">
<h3 class="active" data-type="0">热门</h3>
<h3 data-type="1">话题</h3>
<h3 data-type="2">专区</h3>
<h3 data-type="3">推荐</h3>
</div>
<div class="sidebar-tag-block tab-content0">


<li><i># </i><a href="/joke/2460530/">我要感谢的…100字</a><i> #</i></li>

<li><i># </i><a href="/joke/2465833/">玫琳凯再出发舞蹈</a><i> #</i></li>

<li><i># </i><a href="/joke/2462145/">宝贝儿你是我的,别想逃</a><i> #</i></li>

<li><i># </i><a href="/joke/2467349/">幼儿舞蹈小动物学跳舞</a><i> #</i></li>

<li><i># </i><a href="/joke/2466569/">我要发达10集古装版</a><i> #</i></li>

<li><i># </i><a href="/joke/2466360/">ktv找陪酒小姐违法吗</a><i> #</i></li>

<li><i># </i><a href="/joke/2465987/">别要欺骗我</a><i> #</i></li>

<li><i># </i><a href="/joke/2463468/">什么对小草什么说</a><i> #</i></li>

<li><i># </i><a href="/joke/2467347/">儿童洋娃娃和小熊跳舞舞蹈</a><i> #</i></li>

<li><i># </i><a href="/joke/2461960/">小学生舞蹈不想长大</a><i> #</i></li>


</div>
<div class="sidebar-tag-block tab-content1 hide">


<li><i># </i><a href="/joke/2467574/">我爱家乡辽宁本溪</a><i> #</i></li>

<li><i># </i><a href="/joke/2467573/">我爱家乡的银利是因为</a><i> #</i></li>

<li><i># </i><a href="/joke/2467572/">我爱家乡一种植物</a><i> #</i></li>

<li><i># </i><a href="/joke/2467571/">我爱家乡的春天植物园</a><i> #</i></li>

<li><i># </i><a href="/joke/2467570/">我爱家乡的大山应该怎么写</a><i> #</i></li>

<li><i># </i><a href="/joke/2467569/">美丽缙云我爱家乡</a><i> #</i></li>

<li><i># </i><a href="/joke/2467568/">我爱家乡沈阳手工作品</a><i> #</i></li>

<li><i># </i><a href="/joke/2467567/">我爱家乡手工展</a><i> #</i></li>

<li><i># </i><a href="/joke/2467566/">我爱家乡的萝卜干</a><i> #</i></li>

<li><i># </i><a href="/joke/2467565/">搜我爱家乡水果</a><i> #</i></li>


</div>
<div class="sidebar-tag-block tab-content2 hide">


<li><i># </i><a href="/key/5056709/">一带一路板块股票一览表</a><i> #</i></li>

<li><i># </i><a href="/key/5119204/">幸福是什么课文结构分析</a><i> #</i></li>

<li><i># </i><a href="/key/5051209/">电信宽带送的手机卡4g</a><i> #</i></li>

<li><i># </i><a href="/key/5191116/">关于父爱的句子100字</a><i> #</i></li>

<li><i># </i><a href="/key/5181990/">关于诚信的故事名称</a><i> #</i></li>

<li><i># </i><a href="/key/5054566/">中山东升电信宽带</a><i> #</i></li>

<li><i># </i><a href="/key/5049833/">电信的光纤宽带怎么样</a><i> #</i></li>

<li><i># </i><a href="/key/5058473/">cs1.6带机器人版</a><i> #</i></li>

<li><i># </i><a href="/key/5166275/">关于友谊的句子唯美</a><i> #</i></li>

<li><i># </i><a href="/key/5056090/">卷卷的鞋带绑法</a><i> #</i></li>


</div>
<div class="sidebar-tag-block tab-content3 hide">


<li><i># </i><a href="/key/5208663/">关于奉献名言警句</a><i> #</i></li>

<li><i># </i><a href="/key/5208662/">关于奉献爱心的名言</a><i> #</i></li>

<li><i># </i><a href="/key/5208661/">关于默默奉献的名言</a><i> #</i></li>

<li><i># </i><a href="/key/5208659/">关于给予奉献的名言</a><i> #</i></li>

<li><i># </i><a href="/key/5208657/">关于奉献的名言排比句</a><i> #</i></li>

<li><i># </i><a href="/key/5208656/">关于奉献或乐观的名言警句</a><i> #</i></li>

<li><i># </i><a href="/key/5208655/">关于无私奉献的文艺名言</a><i> #</i></li>

<li><i># </i><a href="/key/5208654/">关于老师无私奉献的名言</a><i> #</i></li>

<li><i># </i><a href="/key/5208653/">关于奉献和名言句子</a><i> #</i></li>

<li><i># </i><a href="/key/5208652/">关于奉献的名言有哪些</a><i> #</i></li>


</div>
</div>

<div class="shopwindow" id="listAd3">
<!-- 55736473：web-右侧悬浮-up 类型：固定 尺寸：300x250-->
<!-- <script type="text/javascript">
document.write('<a style="display:none!important" id="tanx-a-mm_108378320_8760716_29640993"></a >');
tanx_s = document.createElement("script");
tanx_s.type = "text/javascript";
tanx_s.charset = "gbk";
tanx_s.id = "tanx-s-mm_108378320_8760716_29640993";
tanx_s.async = true;
tanx_s.src = "https://phs.tanx.com/ex?i=mm_108378320_8760716_29640993";
tanx_h = document.getElementsByTagName("head")[0];
if(tanx_h)tanx_h.insertBefore(tanx_s,tanx_h.firstChild);
</script> -->
<!-- 新广告代码：2017-05-03 -->
<!-- <script>
var cpro_id = "u1101312";
document.write('<script type="text/javascript" src="https://cpro.baidustatic.com/cpro/ui/c.js"><\/script>');
</script> -->
</div>

<div class="shopwindow">
<!-- 2017.10.16 注释 -->
<!-- <script type="text/javascript" src="https://s.haiyunimg.com/SSP/30169.js"></script> -->
<!-- 2017.10.16 添加 -->
<script>
var mediav_ad_pub = 'klT513_2129270';
var mediav_ad_width = '300';
var mediav_ad_height = '250';
</script>
<script type="text/javascript" language="javascript" charset="utf-8" src="//static.mediav.com/js/mvf_g2.js"></script>
</div>

</div>
</div>



</div>
</div>


<div class="foot">

<div class="foot-nav clearfix">
<div class="foot-nav-col">
<h3>
关于
</h3>
<ul>
<li>
<a href="//about.qiushibaike.com/web_jobs.html#team" target="_blank" rel="nofollow">
关于糗百
</a>
</li>
<li>
<a href="//about.qiushibaike.com/web_jobs.html#tech" target="_blank" rel="nofollow">
加入我们
</a>
</li>
<li>
<a href="//about.qiushibaike.com/web_jobs.html#contact" target="_blank" rel="nofollow">
联系方式
</a>
</li>
</ul>
</div>
<div class="foot-nav-col">
<h3>
帮助
</h3>
<ul>
<li>
<a href="//about.qiushibaike.com/feedback.html" target="_blank" rel="nofollow">
在线反馈
</a>
</li>
<li>
<a href="//about.qiushibaike.com/agreement.html" target="_blank" rel="nofollow">
用户协议
</a>
</li>
<li>
<a href="//about.qiushibaike.com/policy.html" target="_blank" rel="nofollow">
隐私政策
</a>
</li>
</ul>
</div>
<div class="foot-nav-col">
<h3>
下载
</h3>
<ul>
<li>
<a href="http://android.myapp.com/android/appdetail.jsp?appid=107431&icfa=15144196000105020000&lmid=2031"
target="_blank" rel="external nofollow">
Android 客户端
</a>
</li>
<li>
<a href="http://itunes.apple.com/app/id422853458" target="_blank" rel="external nofollow">
iPhone 客户端
</a>
</li>
</ul>
</div>
<div class="foot-nav-col">
<h3>
关注
</h3>
<ul>
<li>
<a href="#" class="foot-wechat">
微信
<div class="foot-wechat-tips">
<span class="foot-wechat-icon"></span>
手机扫描二维码关注
</div>
</a>
</li>
<li>
<a href="http://weibo.com/qiushibaike" target="_blank" rel="external nofollow">
新浪微博
</a>
</li>
<li>
<a href="http://user.qzone.qq.com/1492495058" target="_blank" rel="external nofollow">
QQ空间
</a>
</li>
</ul>
</div>
<div class="foot-nav-col">
<h3>
组织
</h3>
<ul>
<li>
<a href="http://shang.qq.com/wpa/qunwpa?idkey=da34d190ca97a0b21d64ebc6f3ab72c076ed35820e629b78fcf9f6a78f7063cd"
target="_blank" rel="external nofollow">
网站反馈群
</a>
</li>
<li>
<a href="http://user.qzone.qq.com/1492495058/blog/1408597608" target="_blank"
rel="external nofollow">
官方粉丝群
</a>
</li>
</ul>
</div>
</div>
<div class="foot-copyrights">
<!-- <p>&copy; Qiushibaike.com 糗事百科版权所有</p>
<p>
<span>京ICP备14028348号-1</span>
<span>京ICP证140448号</span>
<span>京网文[2017]2369-247号</span>
<span>
<a style='color:#333' target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010502031601" rel="nofollow"><img style='vertical-align: top;' src="/static/images/beian.png?v=d0289dc0a46fc5b15b3363ffa78cf6c7" />京公网安备11010502031601号</a>
</span>
</p>
<p style="margin-top:8px">友际无限（北京）科技有限公司</p>
<p style="margin-top:8px">
<span>互联网违法和不良信息举报电话：010-84872896</span>
<span>邮箱：kefu@qiushibaike.com</span>
</p> -->
<p>互联网ICP备案：京ICP备14028348号-1</p>
<p>
<span>广播电视节目制作经营许可证：（京）字第08319号</span>
<span>网络文化经营许可证：京网文[2017]2369-247号</span>
</p>
<p style="margin-top: 8px">电信与信息服务业务经营许可证：京ICP证140448号</p>
<p style="margin-top: 8px"><span>营业性演出许可证：京演(机构)(2018)1940号</span></p>
<p>
<span>计算机信息网络国际联网单位备案：<a style='color:#333' target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010502031601" rel="nofollow"><img style='vertical-align: top;' src="/static/images/beian.png?v=d0289dc0a46fc5b15b3363ffa78cf6c7" />京公网安备11010502031601号</a></span>
</p>
<br>
<p style="margin-top: 8px">友际无限（北京）科技有限公司</p>
<p>
<span>违法和不良信息举报电话：010-84872896</span>
<span>邮箱：kefu@qiushibaike.com</span>
</p>
<br>
<p style="margin-top: 8px">&copy; Qiushibaike.com 糗事百科版权所有</p>
</div>
</div>


<div class="signin-box" id="login-form">
<div class="sigin-left">
<div class="signin-account clearfix">
<h4 class="social-signin-heading">社交帐号登录</h4>
<a rel="external nofollow" oauth_href href="https://open.weixin.qq.com/connect/qrconnect?appid=wx559af2d26b56c655&redirect_uri=http%3A%2F%2Fwww.qiushibaike.com%2Fnew4%2Fsession%3Fsrc%3Dwx&response_type=code&scope=snsapi_login#wechat_redirect" class="social-btn social-wechat">
使用 微信 账号</a>
<a rel="external nofollow" oauth_href href="https://api.weibo.com/oauth2/authorize?client_id=63372306&redirect_uri=http%3A%2F%2Fwww.qiushibaike.com%2Fnew4%2Fsession" class="social-btn social-weibo">
使用 微博 账号</a>
<a rel="external nofollow" oauth_href href="https://graph.qq.com/oauth2.0/authorize?which=Login&display=pc&client_id=100251437&response_type=code&redirect_uri=www.qiushibaike.com/new4/session?src=qq" class="social-btn social-qq">
使用 QQ 账号 </a>
</div>
<div class="signin-form clearfix">
<h4 class="social-signin-heading">糗事百科账号登录</h4>
<form method="post" action="/new4/session">
<input type="hidden" name="_xsrf" value="2|20843e9f|93a3b59776101cd3ee9135a6be56011e|1516796088"/>
<div class="signin-section clearfix">
<input type="text" class="form-input form-input-first" name="login" placeholder="昵称或邮箱">
<input type="password" class="form-input" name="password" placeholder="密码">
<input type="checkbox" id="remember_me" name="remember_me" checked="" value="checked" style="display:none">
</div>
<div class="signin-error" id="signin-error"></div>
<button type="submit" id="form-submit" class="form-submit">登录</button>
</form>
</div>
<div class="signin-foot clearfix">
<a rel="nofollow" href="/new4/fetchpass" class="fetch-password">忘记密码?</a>
</div>
</div>
</div>

<div class="float-nav">
<a class="float-nav-backtop" href="#" rel="nofollow">
<span class="float-nav-backtop-icon"></span>
</a>
</div>

<!--[if gte IE 6]>
<script type="text/javascript" src="//static.qiushibaike.com/js/src/web/json3.js?v=3a7f66a11a09842cd7555fad039657be"></script>
<![endif]-->
<script type="text/javascript" src="//static.qiushibaike.com/js/dist/web/libs.min.js?v=bc8ddd36f0e7fed7c27f437c17f23ce0"></script>
<script type="text/javascript" src="//static.qiushibaike.com/js/dist/web/app.min.js?v=041d913a630f10243548a427a4513947"></script>



<script type="text/javascript">
// Google Analytics
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-8780108-1', 'auto');
ga('send', 'pageview');
</script>

<script type="text/javascript" async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script type="text/javascript" src="https://cbjs.baidu.com/js/m.js"></script>
<script type="text/javascript">



window.broadJson = '[{&quot;status&quot;: &quot;3&quot;, &quot;code&quot;: &quot;&lt;script&gt;var cpro_id = &#39;u693365&#39;;&lt;/script&gt;&quot;, &quot;name&quot;: &quot;web-sidebar-01&quot;, &quot;count_id&quot;: &quot;&quot;, &quot;url&quot;: &quot;https://cpro.baidustatic.com/cpro/ui/c.js&quot;, &quot;start_time&quot;: &quot;2017-08-31 00:00:00&quot;, &quot;system&quot;: &quot;notlimited&quot;, &quot;site&quot;: &quot;web&quot;, &quot;master&quot;: &quot;百度联盟&quot;, &quot;end_time&quot;: &quot;2018-08-28 00:00:00&quot;, &quot;id&quot;: &quot;104&quot;, &quot;position&quot;: &quot;&quot;, &quot;created_at&quot;: &quot;2017-08-31 16:32:10&quot;, &quot;channel&quot;: &quot;&quot;}, {&quot;status&quot;: &quot;3&quot;, &quot;code&quot;: &quot;&lt;script&gt;var cpro_id = &#39;u3189371&#39;;&lt;/script&gt;&quot;, &quot;name&quot;: &quot;web-sidebar-02&quot;, &quot;count_id&quot;: &quot;&quot;, &quot;url&quot;: &quot;https://cpro.baidustatic.com/cpro/ui/c.js&quot;, &quot;start_time&quot;: &quot;2017-08-31 00:00:00&quot;, &quot;system&quot;: &quot;notlimited&quot;, &quot;site&quot;: &quot;web&quot;, &quot;master&quot;: &quot;百度联盟&quot;, &quot;end_time&quot;: &quot;2018-09-04 00:00:00&quot;, &quot;id&quot;: &quot;105&quot;, &quot;position&quot;: &quot;&quot;, &quot;created_at&quot;: &quot;2017-08-31 16:33:18&quot;, &quot;channel&quot;: &quot;&quot;}, {&quot;status&quot;: &quot;3&quot;, &quot;code&quot;: &quot;&lt;script&gt;var cpro_id = &#39;u1101312&#39;;&lt;/script&gt;&quot;, &quot;name&quot;: &quot;web-sidebar-03&quot;, &quot;count_id&quot;: &quot;&quot;, &quot;url&quot;: &quot;https://cpro.baidustatic.com/cpro/ui/c.js&quot;, &quot;start_time&quot;: &quot;2018-08-28 00:00:00&quot;, &quot;system&quot;: &quot;notlimited&quot;, &quot;site&quot;: &quot;web&quot;, &quot;master&quot;: &quot;百度联盟&quot;, &quot;end_time&quot;: &quot;2018-08-28 00:00:00&quot;, &quot;id&quot;: &quot;106&quot;, &quot;position&quot;: &quot;&quot;, &quot;created_at&quot;: &quot;2017-08-31 17:16:31&quot;, &quot;channel&quot;: &quot;&quot;}, {&quot;status&quot;: &quot;3&quot;, &quot;code&quot;: &quot;&lt;script&gt;&lt;ins class=&#39;adsbygoogle&#39; style=&#39;display:inline-block;width:728px;height:90px&#39; data-ad-client=&#39;ca-pub-7443704194229694&#39; data-ad-slot=&#39;9826878184&#39;&gt;&lt;/ins&gt;&lt;/script&gt;&quot;, &quot;name&quot;: &quot;web-foot&quot;, &quot;count_id&quot;: &quot;&quot;, &quot;url&quot;: &quot;//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js&quot;, &quot;start_time&quot;: &quot;2017-08-31 00:00:00&quot;, &quot;system&quot;: &quot;notlimited&quot;, &quot;site&quot;: &quot;web&quot;, &quot;master&quot;: &quot;谷歌&quot;, &quot;end_time&quot;: &quot;2018-08-28 00:00:00&quot;, &quot;id&quot;: &quot;103&quot;, &quot;position&quot;: &quot;&quot;, &quot;created_at&quot;: &quot;2017-08-31 16:29:51&quot;, &quot;channel&quot;: &quot;&quot;}]'
</script>
<script type="text/javascript" src="//static.qiushibaike.com/js/dist/web/v3/adsAdmin.min.js?v=9c42f35ae43e17caf141e9d6ebe32cbb"></script>
</body>
</html>
