<?php /*a:5:{s:76:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\dongadmin\view\content\edit.html";i:1675079529;s:75:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\dongadmin\view\public\meta.html";i:1574502318;s:75:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\dongadmin\view\public\left.html";i:1675063905;s:74:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\dongadmin\view\public\top.html";i:1675061825;s:75:"C:\phpstudy_pro\WWW\www.algrctrinfo.com\app\dongadmin\view\public\foot.html";i:1585986026;}*/ ?>
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
        <div class="right_content_main_box padding_20">
          <form class="layui-form" action="" method="post">
            
              <div class="layui-form-item">
                  <label class="layui-form-label">标题</label>
                  <div class="layui-input-block">
                    <input type="text" name="title" class="layui-input"  value="<?php echo htmlentities($archivesData['title']); ?>">
                    <input type="hidden" class="input-text" value="<?php echo htmlentities($archivesData['id']); ?>"  name="id" required="required">
                  </div>
                </div>

                <div class="layui-form-item">
                  <label class="layui-form-label">所属分类</label>
                  <div class="layui-input-block">
                      <select name="cate_id" class="public_select">

                          <?php if(is_array($categoryData) || $categoryData instanceof \think\Collection || $categoryData instanceof \think\Paginator): $i = 0; $__LIST__ = $categoryData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                          <!-- 判断选中 -->
                          <option value="<?php echo htmlentities($vo['id']); ?>" <?php if($cate_id == $vo['id']): ?>selected='selected'<?php endif; ?>><?php echo str_repeat('-', 5*$vo['cate_level']); ?><?php echo htmlentities($vo['cate_name']); ?></option>

                          <?php endforeach; endif; else: echo "" ;endif; ?>
        
                  </select>
                  </div> 
                </div> 
               <div class="layui-form-item">
                    <label class="layui-form-label">图片上传</label>
                    <div class="layui-input-block">
                      <button type="button" class="layui-btn" id="test1">
                        <i class="layui-icon">&#xe67c;</i>上传图片
                      </button>
                      <div class="public_thumb_box" attr-model="archives">
                        <input type="text" name="thumb" value="" class="public_thumb_input layui-input" style="width: 500px">
                        <img src="" class="public_thumb" width="150">
                        <div class="delete_img"><i class="layui-icon layui-icon-delete"></i></div>
                      </div>

                    </div>
                  </div>
            
    <div class="layui-form-item">
        <label class="layui-form-label">详细内容</label>
        <div class="layui-input-block">
            <script id="editor" type="text/plain" name="content" style="width:100%;height:300px;"> <?php echo $archivesData['content']; ?></script>
        </div>
      </div>
      <div class="layui-form-item text_center">
          <button class="layui-btn" type="submit">立即提交</button>
        </div>
   
            

          </form>
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

  <script>
    var ue = UE.getEditor('editor');
  </script>
  <style>
    .layui-form-radio{
      margin: 0;
      padding: 0;
    }
  </style>

</body>

</html>