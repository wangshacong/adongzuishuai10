<!DOCTYPE html>
<!-- saved from url=(0027)http://demo214.adminbuy.cn/ -->
<html lang="zh-CN">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">

    <title>北京实创新闻</title>
    <meta name="description" content="网站描述">
    <meta name="keywords" content="关键词一,关键词二">
    <meta name="author" content="order by adminbuy.cn">
    <link rel="shortcut icon" href="">
    <!--<base target="_blank">-->
    <base href="." target="_blank">
    <!--[if lt IE 9 ]>

<script type="text/javascript" src="/style/js/modernizr.js"></script>

<![endif]-->
    <script type="text/javascript" src="/js/cmstop-common.js.下载"></script>
    <script type="text/javascript" src="/js/jquery.js.下载"></script>
    <script type="text/javascript" src="/js/config.js.下载"></script>
    <script type="text/javascript" src="/js/jquery.cookie.js.下载"></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script type="text/javascript" src="/js/common.js.下载"></script>
    <script type="text/javascript" src="/js/index.js.下载"></script>
    <meta http-equiv="mobile-agent" content="format=xhtml;url=/m/index.php">
    <script type="text/javascript">
        if (window.location.toString().indexOf('pref=padindex') != -1) {} else {
            if (/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (
                    /MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/
                    .test(navigator.userAgent))) {
                if (window.location.href.indexOf("?mobile") < 0) {
                    try {
                        if (/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
                            window.location.href = "/m/index.php";
                        } else if (/iPad/i.test(navigator.userAgent)) {} else {}
                    } catch (e) {}
                }
            }
        }
    </script>
</head>

<body>
    @include('gong.head')

    <div class="main">
        <div class="mainnews">
            <div class="latestnews" style="overflow: hidden;">
                <ul id="miniNewsRegion" style="top: -121.866px;">
                    <?php 
                        $lunbo_article = \DB::Table('article10s')->orderBy('dianji','desc')->limit(5)->get();
                    ?>
                    @foreach($lunbo_article as $v)
                    <li><a href="/article/{{$v->id}}">{{$v->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="newsl">
                <div class="m-slide">
                    <ul class="img">
                        <?php 
                            $lunbo = \DB::Table('article10s')->orderBy('id','desc')->where('news_pic','<>','')->limit(4)->get();
                        ?>
                        @foreach($lunbo as $v)
                        <li style="display: none;"><a href="/article/{{$v->id}}" target="_blank"
                                title="{{$v->title}}"><img src="{{$v->news_pic}}" width="670" height="365"></a></li>
                        @endforeach
                    </ul>
                    <div id="ifocus_opdiv"></div>
                    <div id="ifocus_tx">
                        <ul>
                            @foreach($lunbo as $v)
                            <li style="display: none;"><a href="{{$v->id}}" target="_blank"
                                    title="{{$v->title}}">{{$v->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <ul class="tab">
                        @foreach($lunbo as $k=>$v)
                        <li class="" style="width: 130px;">
                            <div class="color{{$k+1}}">{{$v->title}}</div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="hot">
                    <div class="com-title"><span><img src="/js/symbol-6.png" alt="">头条推荐</span></div>
                    <?php 
                        $article = \DB::Table('article10s')->orderBy('id','desc')->limit(10)->get();
                    ?>
                    @foreach($article as $v)
                    <div class="hotbox">
                        <div class="hotimg">
                            <div class="hotimgzz"></div>
                            <img src="{{$v->news_pic}}" alt="{{$v->title}}" width="250" height="165"> <a class="zzsz"
                                href="/article/{{$v->id}}" target="_blank" title="{{$v->title}}"></a>
                        </div>
                        <h3><a href="/article/{{$v->id}}">{{$v->title}}</a></h3>
                        <p>{{mb_substr(preg_replace('/<.*?>/','',$v->content),0,110)}}</p>
                        <?php 
                            $fenlei = \DB::Table('fenlei10s')->where('id',$v->fenlei_id)->first();
                        ?>
                        <span><a href="/fenlei/{{$fenlei->id}}" target="_blank">{{$fenlei->fenlei_name}}</a></span><span>/</span><span>{{$v->create_time}}</span>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="newsr">
                <div class="topnews">
                    <div class="com-title"><span><img src="/js/symbol-3.png" alt="">今日头条</span></div>
                    <?php 
                        $hot_article = \DB::Table('article10s')->orderBy('dianji','desc')->limit(5)->get();
                    ?>
                    <div class="sideMenu" style="margin:0 auto">
                        @foreach($hot_article as $v)
                        <h3 class="h3img1"><a href="/article/{{$v->id}}" target="_blank"
                                title="{{$v->title}}">{{$v->title}}</a></h3>
                        <ul style="display: none;">
                            <li>{{preg_replace('/<.*?>/','',$v->content)}}</li>
                        </ul>
                        @endforeach
                    </div>
                </div>


                <!--科技快报-->

                <div class="newsletter">
                    <div class="com-title"><span><img src="/js/symbol-13.png" alt="">最新资讯</span></div>
                    <?php 
                        $new_article = \DB::Table('article10s')->orderBy('id','desc')->skip(10)->limit(6)->get()
                    ?>
                    <ul>
                        @foreach($new_article as $v)
                        <li><a href="/article/{{$v->id}}" title="{{$v->title}}" target="_blank">{{$v->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="floatfix"></div>

        </div>

        <!--其他信息-->

        <div class="mainother">

            <!-- 友情链接 -->

            @include('gong.footer')

            <!-- @友情链接 -->

        </div>

        <!--侧边栏按钮-->

        <div class="mreturn">
            <a id="gotop"></a>
        </div>

        <!--@侧边栏按钮-->

    </div>
    <script>
        $(function () {

            $(".nav li dl").each(function () {

                if ($(this).find("dd").size() == 0) {

                    $(this).remove();

                }

            });



        });
    </script>
    <!--@网站公共页脚-->


</body>

</html>