<div class="topbar">
    <div class=" wrapper">
        <div class="logo"><a href="/" title="北京实创新闻"><img src="/images/f.png" title="北京实创新闻"></a></div>
        <ul class="nav">
            <li><strong><a href="/" title="" target="_self"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;首页</a></strong></li>
            @foreach($fenlei as $v)
            <li><strong><a href="/fenlei/{{$v['id']}}" title="" target="_self"><span class="glyphicon glyphicon-book"></span>{{$v['fenlei_name']}}</a></strong>
            </li>
            @endforeach


        </ul>
    </div>
</div>