<?php /*a:5:{s:75:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\dongadmin\view\index\index.html";i:1585963311;s:75:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\dongadmin\view\public\meta.html";i:1574502318;s:75:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\dongadmin\view\public\left.html";i:1675063905;s:74:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\dongadmin\view\public\top.html";i:1675061825;s:75:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\dongadmin\view\public\foot.html";i:1585986026;}*/ ?>
<!DOCTYPE html>

<html>

<head>
        <meta charset="utf-8">

    <meta name="viewport"
        content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>DongAdmin</title>

    <link rel="stylesheet" type="text/css" href="/public/static/admin2/css/admin.css" />

    <link rel="stylesheet" type="text/css" href="/public/static/index/layui/css/layui.css" />

</head>

<body>


    <div class="container">
         <div class="left_content">
            <div class="login text_center ">
                <a class="display_inline_block" href="<?php echo url('/dongadmin/index/index'); ?>">后台管理系统</a>
                <span class="display_inline_block">V0.0.1</span>
            </div>
            <ul class="layui-nav layui-nav-tree layui-inline" lay-filter="demo" style="margin-right: 10px; margin-top: 10px">
                    <li class="layui-nav-item <?php if($left_menu == 1): ?>layui-nav-itemed<?php endif; ?>">
                    <a href="javascript:;"><i class="iconfont icon-neirong"></i> 栏目内容</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('category/index'); ?>">栏目管理</a></dd>
                        <dd><a href="<?php echo url('content/index'); ?>">文档管理</a></dd>

                    </dl>
                </li>
                <li class="layui-nav-item <?php if($left_menu == 2): ?>layui-nav-itemed<?php endif; ?>">
                    <a href="javascript:;"><i class="iconfont icon-tupian"></i> 首页大图</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('ad/index'); ?>">大图管理</a></dd>
                        
                    </dl>
                </li>

                <li class="layui-nav-item <?php if($left_menu == 3): ?>layui-nav-itemed<?php endif; ?>">
                        <a href="javascript:;"><i class="iconfont icon-shezhi"></i> 系统管理</a>
                        <dl class="layui-nav-child">
                            <dd><a href="<?php echo url('config/index'); ?>">系统参数</a></dd>
                            <dd><a href="<?php echo url('config/del_cache'); ?>">清空缓存</a></dd>
                            <dd><a href="<?php echo url('config/edit_password'); ?>">修改密码</a></dd>
                        </dl>
                    </li>
            </ul>




        </div>
        <div class="right_content">
                <div class="right_content_top">
    <a href="/" target="_blank">网站首页</a>
    <a href="<?php echo url('index/logout'); ?>">退出登录</a>
</div>
            <div class="right_content_main">
                <div class="welcome padding_20">
                    <blockquote class="layui-elem-quote"><?php echo htmlentities($username); ?>欢迎您！</blockquote>
                        <p><b>· 系统版本：</b>Dong0.0.1--6.0.2</p>
                        <p><b>· 图片上传：</b>请尽量上传小于250KB的图片，图片过大会影响网页的加载速度</p>
                        <p><b>· 版权所有：</b>此系统为***原创开发，***保留所有版权，请勿用作其他商业用途。</p>
                        <p><b>· 联系我们：</b>QQ1031950015</p>

                    <blockquote class="layui-elem-quote mar_t_30">常见问答</blockquote>
                        <p><b>问：修改后为什么没有看到页面效果？</b></p>
                        <p style="margin-bottom: 5px;">答：通常情况下，修改后页面实时生效。可通过在浏览器中尝试CTRF+f5强制刷新清除缓存的方法，如果仍然没有更新，请联系管理员。</p>
                        <p><b>问：如何修改网站公司简介内容？</b></p>
                        <p style="margin-bottom: 5px;">答：通常情况下，网站公司简介属于单页面内容，在【栏目内容】-【栏目管理】-【公司简介】点击修改，在“栏目内容”处修改。</p>
                        <p><b>问：如何添加新文章？</b></p>
                        <p style="margin-bottom: 5px;">答：在【栏目内容】-【栏目管理】点击要添加文章的栏目，在弹出的页面中，直接添加文章即可。</p>
                        <p><b>问：如何修改网站三大标签？</b></p>
                        <p style="margin-bottom: 5px;">答：在【系统管理】-【系统参数】修改。</p>
                        <p><b>问：如何修改网站电话、邮箱、地址？</b></p>
                        <p style="margin-bottom: 5px;">答：在【系统管理】-【系统参数】修改。</p>
                        <p><b>问：广告管理有什么用处？</b></p>
                        <p style="margin-bottom: 5px;">答：主要用于轮播图等广告图片管理。</p>
                        <p><b>问：不会photoshop如何处理图片大小呢？</b></p>
                        <p style="margin-bottom: 5px;">答：通常情况下拍照后的图片比较大，直接上传会影响加载速度。处理图片最方便的工具就是截图，QQ截图或者微信截图，截图时候可以实时看到图片尺寸大小，保存到本地后再上传。</p>
                        <p><b>问：编辑器中如何快速上传图片？</b></p>
                        <p style="margin-bottom: 5px;">答：QQ截图或者微信截图后，点击完成，直接粘贴在编辑器中即可。</p>
                        <p><b>问：模型管理和模型字段有什么用处？</b></p>
                        <p style="margin-bottom: 5px;">答：<span class="colorred">【模型字段】和【模型管理】属于管理员操作，请勿修改。</span></p>
                </div>
            </div>
        </div>
    </div>
    <footer>
    <script type="text/javascript" src="/public/static/index/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/public/static/index/layui/layui.js"></script>

    <script type="text/javascript" src="/public/static/admin2/ueditor/1.4.3/ueditor.config.js"></script>
    <script type="text/javascript" src="/public/static/admin2/ueditor/1.4.3/ueditor.all.min.js"> </script>
    <script type="text/javascript" src="/public/static/admin2/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>

    <script>
            layui.use('element', function () {
                var element = layui.element; //导航的hover效果、二级菜单等功能，需要依赖element模               
            });

            layui.use('form', function(){
            var form = layui.form;
            
            //监听提交
            form.on('submit(formDemo)', function(data){
                layer.msg(JSON.stringify(data.field));
                return false;
            });
            });
        </script>


    <script>
    /*-删除时候确认*/
    function public_del(url){
        layui.use('layer', function(){
            var layer = layui.layer;
            layer.confirm('确认要删除吗？',function(index){
                window.location.href=url;
            });
        });
    }


    layui.use('upload', function () {
      var upload = layui.upload;

      //执行上传实例
      var uploadInst = upload.render({
        elem: '#test1' //绑定元素
        , url: '/dongadmin/uploader/upload' //上传接口
        , done: function (res) {
          //上传完毕回调
          console.log(res);
          //path = JSON.stringify(res.path);
          //path = path.replace("\"", "").replace("\"", "");
          $(".public_thumb_input").val(res.path);
          $(".public_thumb").attr("src", res.path);
          $(".public_thumb_box").css("display", "block");
        }
        , error: function () {
          //请求异常回调
        }
      });
    });


    //实时删除图片
    $(".delete_img").click(function(){
        var path=$(this).parent().children(".public_thumb_input").val();
        var url="/dongadmin/uploader/delete_img";
        var model = $(this).parent().attr('attr-model');//编辑默认删除图片
        var id=$("input[name='id']").val();//编辑默认删除图片
        postData = {'path':path,'model':model,'id':id};
        $.post(url,postData,function(result){
          result=JSON.parse(result);
          if(result.status==1){
            $(".public_thumb_input").val("");
            $(".public_thumb").attr("src", "");
            $(".public_thumb_box").css("display", "none");
            layui.use('layer', function(){
              var layer = layui.layer;
              layer.msg('已经删除成功！');
            }); 
          }
        });
    });

    //排序
    $('.listorder input').blur(function() {
    // 编写我们的抛送的逻辑
    //获取主键id
    var id = $(this).attr('attr-id');
    var model=$(this).attr('attr-model');
    // 获取排序的值
    var listorder = $(this).val();
    if(!listorder){
      return;
    }
    var postData = {

        'id' : id,
        'model':model,
        'listorder':listorder,
    };

    var url = "/dongadmin/base/listorder";
    // 抛送http
    $.post(url, postData, function(result){
        // 逻辑
        if(result.code == 1) {
            location.href=result.data;
        }else {
            alert(result.msg);
        }
    },"json");


});

    </script>
</footer>




</body>

</html>