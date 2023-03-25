<?php /*a:4:{s:73:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\index\view\index\lawnews.html";i:1675085173;s:71:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\index\view\public\head.html";i:1675082172;s:71:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\index\view\public\left.html";i:1675090671;s:71:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\index\view\public\foot.html";i:1675090686;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlentities($categoryData['seo_title']); ?></title>


<link href="/public/static/index/css/style.css" rel="stylesheet" type="text/css">
<link href="/public/static/index/css/qing.css" rel="stylesheet" type="text/css">
<link href="/public/static/index/css/qingstyle.css" rel="stylesheet" type="text/css">
<link href="/public/static/index/css/layui.css" rel="stylesheet" type="text/css">
<script src="/public/static/index/js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="/public/static/index/js/js.js" type="text/javascript"></script>
</head>
<body>
  <div class="wrap">
    <div class="header">
      <div class="logo"><a href="/"><img src="/public/static/index/images/top.jpg" /></a></div>  
      <div class="h_txt">
        三农法治进行时
      </div>
      <div class="h_tel"><span class="tel_tit">公共法律服务热线</span><span class="tel_num">12348</span></div>
      <div class="btn_menu"></div>
      <div class="clear"></div>
    </div>
</div>

<!--手机版 导航菜单遮罩层 start-->
<div class="mask"></div>
  <div class="nav_w">
  <div class="close"></div>
  <div class="nav">
    <ul>
      <li  <?php if($menu_id == 0): ?>class='current'<?php endif; ?>>
        <a href="/">首页</a>
      </li>
      <li <?php if($menu_id == 5): ?>class='current'<?php endif; ?>>
        <a href="<?php echo url('index/index/list',array('id'=>5)); ?>"}>法律新闻</a>
        
      </li>
      <li <?php if($menu_id == 6): ?>class='current'<?php endif; ?>>
        <a href="<?php echo url('index/index/list',array('id'=>6)); ?>">三农·案例</a>
        
      </li>
      <li <?php if($menu_id == 1): ?>class='current'<?php endif; ?>>
        <a href="<?php echo url('index/index/lawnews'); ?>">法律流程</a>
        
      </li>
      <li <?php if($menu_id == 2): ?>class='current'<?php endif; ?>>
        <a href="<?php echo url('index/index/easy_study'); ?>">轻松学法</a>
        
      </li>
       <li <?php if($menu_id == 7): ?>class='current'<?php endif; ?>>
        <a href="<?php echo url('index/index/statues'); ?>">三农·法典</a>
      </li> 
      </ul>
      <div class="clear"></div>
  </div>
  </div> 
  <div class="nbanner" style="background: url(/public/static/index/images/news_banner.jpg) no-repeat center center; width: 100%;height: 333px"></div>=<!-- 静态调用图片 -->
  <div class="positionbg">
    
      <div class="layui-container">  

        <img src="/public/static/index/images/home.jpg">&nbsp;当前位置：<a href='/'>首页</a> > 法律流程

      </div>

  </div>

  <div class="layui-container"> 

          
          <div class="mar_t_30 mar_b_30" id="nleft_content">
  

    <div class="nleft_title fb f16 mar_t_20 color1">法律热线</div>
    <div class="nleft_boder line30">
        <div style="padding:20px 30px">
          <div class="fb"><?php echo htmlentities($web_title); ?></div> 
          公共法律服务热线：12348
         
          <br>
          网站链接：<br><!-- comment -->
           <a target='_blank' href="http://www.legaldaily.com.cn/" > >法治网</a>
           <br>
           <a target='_blank' href="http://www.acla.org.cn/home/toPage" > >中国律师网</a>
           <br>
          <a target='_blank' href="https://www.chinacourt.org/index.shtml" > >中国法院网</a>
        </div>

    </div>


</div>
          
          <div class="mar_t_30 mar_b_30" id="nright_content">

            <?php echo $categoryData['content']; ?>

          </div>



  </div>

  <div class="footer_w">
    <div class="footer">
      <div class="txt">
         <div class="t_1"><?php echo htmlentities($web_title); ?></div>
      
         <div class="t_2">全国法律服务热线：12348 &nbsp;<br>
  <span>联系地址：<?php echo htmlentities($address); ?></span>
          </div>
      </div>
      <div class="ewm">
        <div class="pic"><img src="/public/static/index/images/gongzhonghao.png" width="87" height="87"></div>
        <div class="ewm_txt">
            微信扫一扫<br>
            中国普法公众号<br>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>

</body>
</html>