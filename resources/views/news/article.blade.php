<!DOCTYPE html>
<!-- saved from url=(0044)http://demo214.adminbuy.cn/html/meida/4.html -->
<html lang="zh-CN">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">

    <title>{{$content['title']}}</title>
    <meta name="keywords" content="{{$content['title']}}">
    <meta name="description" content="{{$content['title']}}">
    <meta http-equiv="Cache-Control" content="no-transform">
    <!--[if lt IE 9 ]>

<script type="text/javascript" src="/style/js/modernizr.js"></script>

<![endif]-->
    <script type="text/javascript" src="/js/config.js.下载"></script>
    <script type="text/javascript" src="/js/jquery.js.下载"></script>
    <script type="text/javascript" src="/js/jquery.cookie.js.下载"></script>
    <script type="text/javascript" src="/js/cmstop-common.js.下载"></script>
    <script type="text/javascript" src="/js/cmstop-imagezoom.js.下载"></script>
    <script type="text/javascript" src="/js/fet.js.下载"></script>
    <script type="text/javascript" src="/js/repos.js.下载"></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script type="text/javascript" src="/js/common.js.下载"></script>
    <script type="text/javascript" src="/js/post.js.下载"></script>
    <meta http-equiv="mobile-agent" content="format=xhtml;url=/m/view.php?aid=4">
    <script type="text/javascript">
        if (window.location.toString().indexOf('pref=padindex') != -1) {} else {
            if (/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (
                    /MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/
                    .test(navigator.userAgent))) {
                if (window.location.href.indexOf("?mobile") < 0) {
                    try {
                        if (/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
                            window.location.href = "/m/view.php?aid=4";
                        } else if (/iPad/i.test(navigator.userAgent)) {} else {}
                    } catch (e) {}
                }
            }
        }
    </script>
    <link rel="stylesheet" type="text/css" href="/js/emoji.css">
</head>

<body style="">
    @include('gong.head')

    <div class="main newslist">
        <div class="listl">
            <div class="inner">
                <?php 
                    $fenlei = \DB::Table('fenlei10s')->where('id',$content['fenlei_id'])->first();
                ?>
                <div class="listview2">{{$fenlei->fenlei_name}}</div>
                <div class="listlcon" style="margin-bottom:30px;">
                    <div class="listltitle">
                        <h3>{{$content['title']}}</h3>
                        <p><span class="spanimg1">来源：{{$content['zuozhe']}}</span> <span class="spanimg3">{{$content['create_time']}}</span></p>
                    </div>
                    <div>
                    </div>
                </div>
                <div class="article-content">
                    <?php echo $content['content']; ?>
                </div>
                <div class="correlation">
                    <div class="com-title"><span><img src="/js/symbol-23.png" alt="">相关文章</span></div>
                    <ul class="ulfix">
                        <?php 
                            $xiangguan_article = \DB::Table('article10s')->where('fenlei_id',$content['fenlei_id'])->where('news_pic','<>','')->limit(4)->get();
                        ?>
                        @foreach($xiangguan_article as $v)
                        <li>
                            <div class="corimg"><a href="/article/{{$v->id}}" class="title" target="_blank"><img src="{{$v->news_pic}}"
                                        width="175" height="115" alt="{{$v->title}}"></a></div>
                            <p>{{$v->title}}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
        <div class="listr">
            <div class="adimg"> <a href="http://demo214.adminbuy.cn/html/meida/4.html" title="" target="_blank"><img
                        src="/js/artice_ad_02.jpg" alt=""></a> </div>
            <div class="read read2">
                <div class="com-title"><span><img src="/js/symbol-3.png" alt="" style="margin-bottom: 1px;">精彩导读</span></div>
                <?php 
                    $jc_article = \DB::Table('article10s')->where('fenlei_id',$content['fenlei_id'])->where('news_pic','<>','')->skip(4)->limit(10)->get();                    
                ?>
                @foreach($jc_article as $v)
                <div class="readbox">
                    <div class="readimg"> <a href="/araticle/{{$v->id}}" target="_blank" title="{{$v->title}}">
                            <img src="{{$v->news_pic}}" alt="{{$v->title}}" width="90" height="59"> </a></div>
                    <p><a href="/article/{{$v->id}}" target="_blank" title="{{$v->title}}">{{$v->title}}</a></p>
                    <div class="floatfix"></div>
                </div>
                @endforeach
            </div>


        </div>
        {{-- <div class="adimg2"> <a href="http://demo214.adminbuy.cn/html/meida/4.html" title="" target="_blank"><img
                    src="/js/artice_ad_04.jpg" alt=""></a> </div>
        <div class="viewpoint hotlist">
            <div class="com-title"><span><img src="/js/symbol-13.png" alt="">热门资讯</span></div>
            <ul>
                <li><a href="http://demo214.adminbuy.cn/html/meida/4.html">史上最大的内衣展即将开始</a></li>
                <li><a href="http://demo214.adminbuy.cn/html/meida/2.html">日本原宿街拍：有趣有型的“乱穿衣”季</a></li>
                <li><a href="http://demo214.adminbuy.cn/html/meida/3.html">博主珠宝匣之Carmen Hamilton</a></li>
                <li><a href="http://demo214.adminbuy.cn/html/meida/1.html">小个子姑娘的穿搭困扰 我们有对策</a></li>

            </ul>
        </div> --}}
    </div>
    <div class="mainother">

        <!-- 友情链接 -->

        @include('gong.footer')

        <!-- @友情链接 -->

    </div>
    <div class="mreturn">
        <a id="gotop"></a>
    </div>


    <!-- @左侧分享 -->

    </div>

    <!--网站公共页脚-->
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

    <!-- 脚本区域 -->

    <script src="/js/qrcode.js.下载"></script>
    <script type="text/javascript" src="/js/ZeroClipboard.js.下载"></script>
    <script type="text/javascript" src="/js/digg.js.下载"></script>
    <script type="text/javascript" src="/js/article-show.js.下载"></script>
    <script type="text/javascript" src="/js/mood-show.js.下载"></script>
    <script>
        $(function () {

            $('.article-content a').each(function (i, a) {

                var $a = $(a);

                if (!$a.attr('target'))

                {

                    $a.attr('target', '_blank');

                }

            });

            $('#zeroclipboard').attr('data-clipboard-text', location.href)

        });
    </script>
    <script type="text/javascript">
        // bShare划词分享
    </script>

    <!--淘宝广告-->

    <!--淘宝广告结束-->



</body>

</html>