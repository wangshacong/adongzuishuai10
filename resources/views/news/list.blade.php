<!DOCTYPE html>
<!-- saved from url=(0038)http://demo214.adminbuy.cn/html/meida/ -->
<html lang="zh-CN">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">

    <title>{{$dangqian_fenlei['fenlei_name']}}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--[if lt IE 9 ]>

<script type="text/javascript" src="/style/js/modernizr.js"></script>

<![endif]-->
    <script type="text/javascript" src="/js/cmstop-common.js.下载"></script>
    <script type="text/javascript" src="/js/jquery.js.下载"></script>
    <script type="text/javascript" src="/js/config.js.下载"></script>
    <script type="text/javascript" src="/js/jquery.cookie.js.下载"></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script type="text/javascript" src="/js/common.js.下载"></script>
    <script type="text/javascript" src="/js/list.js.下载"></script>
    <meta http-equiv="mobile-agent" content="format=xhtml;url=/m/list.php?tid=1">
    <script type="text/javascript">
        if (window.location.toString().indexOf('pref=padindex') != -1) {} else {
            if (/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (
                    /MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/
                    .test(navigator.userAgent))) {
                if (window.location.href.indexOf("?mobile") < 0) {
                    try {
                        if (/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
                            window.location.href = "/m/list.php?tid=1";
                        } else if (/iPad/i.test(navigator.userAgent)) {} else {}
                    } catch (e) {}
                }
            }
        }
    </script>
</head>

<body>
    @include('gong.head')

    <div class="main newslist">
        <div class="listl list2">
            <div class="listview">{{$dangqian_fenlei['fenlei_name']}}</div>
            <?php 
                $article = \DB::Table('article10s')->orderBy('id','desc')->where('fenlei_id',$dangqian_fenlei['id'])->paginate(10);
            ?>
            <ul>
                @foreach($article as $v)
                <li>
                    <div class="viewimg dis">
                        <div class="hotimgzz"></div>
                        <a href="/article/{{$v->id}}" class="zzsz"></a> <a href="/article/{{$v->id}}" target="_blank"
                            title="{{$v->title}}"><img src="{{$v->news_pic}}" alt="{{$v->title}}" width="" height="165"></a>
                    </div>
                    <h3><a href="/article/{{$v->id}}" target="_blank" title="{{$v->title}}">{{$v->title}}</a></h3>
                    <p>{{mb_substr(preg_replace('/<.*?>/','',$v->content),0,100)}}</p>
                </li>
                @endforeach
            </ul>

        </div>
        <div class="pagess">
            <ul>
                {{$article->appends(request()->all())->links()}}

            </ul>
        </div>

        <div class="listr">
            <div class="adimg"><a href="/" title="" target="_blank"></a></div>
            <div class="viewpoint hotlist">
                <?php 
                    $dianji_article = \DB::Table('article10s')->orderBy('dianji','desc')->limit(9)->get();
                ?>
                <div class="com-title"><span><img src="/js/symbol-18.png" alt="">排行榜</span></div>
                <div class="bd">
                    <ul style="display: block;">
                        @foreach($dianji_article as $v)
                        <li><a href="/article/{{$v->id}}">{{$v->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="floatfix"></div>
            <div class="recommend">
                <?php 
                    $tuijian_article = \DB::Table('article10s')->where('fenlei_id',$dangqian_fenlei['id'])->where('news_pic','<>','')->limit(4)->get();
                ?>
                <div class="com-title" style="margin-bottom:10px;"><span>编辑推荐</span></div>
                <ul class="ulfix">
                    @foreach($tuijian_article as $v)
                    <li><img src="{{$v->news_pic}}" alt="{{$v->title}}" width="150" height="98">
                        <p> <a href="/article/{{$v->id}}" target="_blank" title="{{$v->title}}">{{$v->title}}</a> </p>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="adimg">
                <script src="/js/ad_js.php" language="javascript"></script><a href="http://sc.adminbuy.cn/" target="_blank"><img
                        src="/js/img17.jpg" alt=""></a>
            </div>
        </div>
        <div class="mainother">

            <!-- 友情链接 -->

            @include('gong.footer')

            <!-- @友情链接 -->

        </div>
        <div class="mreturn"></div>
        <a id="gotop"></a>
    </div>
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


</body>

</html>