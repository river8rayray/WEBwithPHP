<?php /*a:3:{s:71:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\index\view\index\index.html";i:1675082285;s:71:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\index\view\public\head.html";i:1675082172;s:71:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\index\view\public\foot.html";i:1675090686;}*/ ?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlentities($web_title); ?></title>
  <meta name="keywords" content="<?php echo htmlentities($web_keywords); ?>" />

  <link href="/public/static/index/css/style.css" rel="stylesheet" type="text/css">
  <link href="/public/static/index/css/qing.css" rel="stylesheet" type="text/css">
  <link href="/public/static/index/css/swiper.css" rel="stylesheet" type="text/css">
  <script src="/public/static/index/js/jquery-1.7.1.min.js" type="text/javascript"></script>
  <script src="/public/static/index/js/swiper.min.js"></script>
  <script src="/public/static/index/js/common.js" type="text/javascript"></script>

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

    <!--焦点图 start-->
    <div class="swiper-container index_banner">
      <div class="swiper-wrapper">
        <?php if(is_array($adData) || $adData instanceof \think\Collection || $adData instanceof \think\Paginator): $i = 0; $__LIST__ = $adData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="swiper-slide">
          <a href="<?php echo htmlentities($vo['url']); ?>" style="background: url(<?php $vo['thumb']=str_replace('\\','/',$vo['thumb']);echo $vo['thumb']; ?>) no-repeat center center"></a>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
      <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    </div>

    <!-- Initialize Swiper -->

    <!--焦点图  end-->





    <div class="jsys_box">

      <div class="tit">普法栏目</div>
      <div class="tit_2">ALGRICULTURAL INFORMATION</div>

      <div class="list">
        <ul>
          <li>
            <div class="pic" style=" background-image:url(/public/static/index/images/jsys_1.png)"><a href="<?php echo url('index/index/list',array('id'=>5)); ?>"><img
                  src="/public/static/index/images/blank3.png" /></a></div>
            <div class="j_name"><a href="<?php echo url('index/index/list',array('id'=>5)); ?>">法律新闻</a></div>
            <div class="j_txt">国家社会最新的法律相关新闻</div>
          </li>
          <li>
            <div class="pic" style=" background-image:url(/public/static/index/images/jsys_2.png)"><a href="<?php echo url('index/index/list',array('id'=>6)); ?>"><img
                  src="/public/static/index/images/blank3.png" /></a></div>
            <div class="j_name"><a href="<?php echo url('index/index/list',array('id'=>6)); ?>">三农·案例</a></div>
            <div class="j_txt">“以案释法”，提供三农法治故事，便于理解法律。</div>
          </li>
          <li>
            <div class="pic" style=" background-image:url(/public/static/index/images/jsys_3.png)"><a href="<?php echo url('index/index/lawnews'); ?>"><img
                  src="/public/static/index/images/blank3.png" /></a></div>
            <div class="j_name"><a href="<?php echo url('index/index/lawnews'); ?>">法律流程</a></div>
            <div class="j_txt">方便用户快速查看维权途径。</div>
          </li>
          <li>
            <div class="pic" style=" background-image:url(/public/static/index/images/jsys_4.png)"><a href="<?php echo url('index/index/statues'); ?>"><img
                  src="/public/static/index/images/blank3.png" /></a></div>
            <div class="j_name"><a href="<?php echo url('index/index/statues'); ?>">三农·法典</a></div>
            <div class="j_txt">摘录数条涉及农业、经济、土地制度等农民关心领域的法典</div>
          </li>
        </ul>
        <div class="clear"></div>
      </div>
    </div>


              <div class="pro_box">

      <div class="tit">轻松学法</div>
      <div class="tit_2">POPULAR RECOMMENDATION</div>

      <div class="list">
        <ul>
          <?php if(is_array($archivesData) || $archivesData instanceof \think\Collection || $archivesData instanceof \think\Paginator): $i = 0; $__LIST__ = $archivesData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li>
            <div class="pic"><a href="<?php echo url('index/index/article',array('id'=>$vo['id'])); ?>"><img src="<?php echo htmlentities($vo['thumb']); ?>" /></a></div>
            <div class="p_name"> <a href="<?php echo url('index/index/article',array('id'=>$vo['id'])); ?>"><?php echo htmlentities($vo['title']); ?></a></div>
          </li>
         
          <?php endforeach; endif; else: echo "" ;endif; ?>


        </ul>
        <div class="clear"></div>
      </div>
    </div>
          

<!--    <div class="index_company">
      <div class="tit">公司简介</div>
      <div class="tit_2">COMPANY INFO</div>
      <div class="company_box">
        <div class="index_company_left">
          <p>重庆大力电子科技有限公司，成立于2006年，公司位于重庆市江北区新光路28号，占地20000平米，是国内封装胶膜领域的领导性企业之一。
          </p>
          <p class="mar_t_10">公司自成立以来，一直致力于是国内专业的电子开关及插座制造商，主要产品有：贴片轻触开关，插件轻触开关，SS拨动开关，SK拨动开关，微型拨动开关，贴片USB插座，USB 2.0插座，插件USB接口，MINI USB插座，USB接口，MICRO USB插座，MK USB公座等产品。</p>
          <p class="mar_t_10">秉承“以德经营，聚力创新，成就事业”的经营理念，我们将以创新为导向，持续提升产品质量，放心企业，打造一流的封装功能膜企业。</p>
      </div>
      <div class="index_company_right"><img src="/public/static/index/images/index_company.jpg"></div>
      </div>
  </div>-->

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