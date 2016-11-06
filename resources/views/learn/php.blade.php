<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>PHP菜鸟教程</title>
    <link rel="shortcut icon" href="./favicon.ico" mce_href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('thirdparty/syntaxhighlighter/shCore.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('thirdparty/syntaxhighlighter/shThemeDefault.css')}}" media="all">

    <script src="{{asset('js/push.js')}}"></script>
    <script src="{{asset('js/hm.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('thirdparty/syntaxhighlighter/shCore.js')}}"></script>
    <script src="{{asset('thirdparty/syntaxhighlighter/shBrushPhp.js')}}"></script>
    <script src="{{asset('thirdparty/syntaxhighlighter/shBrushXml.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.min.js')}}"></script>
    <![endif]-->
    <link rel="apple-touch-icon" href="{{asset('images/icon/mobile-icon.png')}}">
    <meta name="apple-mobile-web-app-title" content="PHP菜鸟教程">
    <link rel="stylesheet" type="text/css" href="{{asset('css/prettify.css')}}">
</head>
<body>
    <!--  头部 -->
    <div class="container logo-search">

    <div class="col search row-search-mobile">
        <form action="/php/index.php">
            <input class="placeholder" value="搜索……" name="s" autocomplete="off">
        </form>
    </div>

    <div class="row">
        <div class="col logo">
            <h1><a href="/">菜鸟教程 -- 学的不仅是技术，更是梦想！</a></h1>
        </div>
        <div class="col right-list">
            <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse" id="pull" style=""> <i class="fa fa-navicon"></i> </button>
        </div>
        <div class="col search search-desktop last">
            <form action="/" target="_blank">
                <input class="placeholder" id="s" name="s" value="搜索……" autocomplete="off">
            </form>
        </div>
    </div>
    </div>

    <!-- 导航栏 -->
    <div class="container navigation">
    <div class="row">
        <div class="col nav">
            <ul class="pc-nav">
                <li><a href="/">首页</a></li>
                <li><a href="/html/html-tutorial.html">HTML</a></li>
                <li><a href="/css/css-tutorial.html">CSS</a></li>
                <li><a href="/js/js-tutorial.html">JavaScript</a></li>
                <li><a href="/jquery/jquery-tutorial.html">jQuery</a></li>
                <li><a href="/bootstrap/bootstrap-tutorial.html">Bootstrap</a></li>
                <li><a href="/sql/sql-tutorial.html">SQL</a></li>
                <li><a href="/mysql/mysql-tutorial.html">MySQL</a></li>
                <li><a href="./images/PHP 教程 _ 菜鸟教程.html">PHP</a></li>
                <li><a href="/python/python-tutorial.html">Python</a></li>
                <li><a href="/cprogramming/c-tutorial.html">C</a></li>
                <li><a href="/cplusplus/cpp-tutorial.html">C++</a></li>
                <li><a href="/csharp/csharp-tutorial.html">C#</a></li>
                <li><a href="/java/java-tutorial.html">Java</a></li>
                <li><a href="/ruby/ruby-tutorial.html">Ruby</a></li>

                <li><a href="/sitemap">更多……</a></li>
            </ul>
            <ul class="mobile-nav">
                <li><a href="/">首页</a></li>
                <li><a href="/html/html-tutorial.html">HTML</a></li>
                <li><a href="/css/css-tutorial.html">CSS</a></li>
                <li><a href="/js/js-tutorial.html">JavaScript</a></li>
                <a href="javascript:void(0)" class="search-reveal">Search</a>
            </ul>

        </div>
    </div>
    </div>
    <!--  内容  -->
    <div class="container main">
    <!-- 中间 -->
    <div class="row">

        <div class="col left-column">
            <div class="tab">PHP 教程</div>
            <div class="sidebar-box gallery-list">
                <div class="design" id="leftcolumn">
                    <a target="_top" title="PHP 教程" href="./images/PHP 教程 _ 菜鸟教程.html" style="font-weight: bold; color: rgb(255, 255, 255); background-color: rgb(150, 185, 125);">
                        PHP 教程
                    </a>
                    @foreach($titles as $title)
                        <a target="_top" title="{{$title->title}}" href="{{url('learn/php/'.$title->id)}}" @if($title->id == $article->id) style="font-weight: bold; background-color: #35b558;" @endif>
                            {{$title->title}}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col middle-column">
            <div class="article">
                <div class="article-body">
                    <div class="article-intro" id="content">
                        {!! $article->content !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- 底部 -->
    <div id="footer" class="mar-t50">
    <div class="w3cschoolcc-block">
        <div class="w3cschoolcc cf">
            <dl>
                <dt>
                    在线实例
                </dt>
                <dd>
                    ·<a href="/html/html-examples.html">HTML 实例</a>
                </dd>
                <dd>
                    ·<a href="/css/css-examples.html">CSS 实例</a>
                </dd>
                <dd>
                    ·<a href="/js/js-examples.html">JavaScript 实例</a>
                </dd>
                <dd>
                    ·<a href="/ajx/ajax-examples.html">Ajax 实例</a>
                </dd>
                <dd>
                    ·<a href="/jquery/jquery-examples.html">jQuery 实例</a>
                </dd>
                <dd>
                    ·<a href="/xml/xml-examples.html">XML 实例</a>
                </dd>
                <dd>
                    ·<a href="/java/java-examples.html">Java 实例</a>
                </dd>

            </dl>
            <dl>
                <dt>
                    字符集&amp;工具
                </dt>
                <dd>
                    · <a href="/charsets/html-charsets.html">HTML 字符集设置</a>
                </dd>
                <dd>
                    · <a href="/tags/html-ascii.html">HTML ASCII 字符集</a>
                </dd>
                <dd>
                    · <a href="/tags/ref-entities.html">HTML ISO-8859-1</a>
                </dd>
                <dd>
                    · <a href="/tags/ref-symbols.html">HTML 实体符号</a>
                </dd>
                <dd>
                    · <a href="/tags/html-colorpicker.html">HTML 拾色器</a>
                </dd>
                <dd>
                    · <a href="/jsontool">JSON 格式化工具</a>
                </dd>
            </dl>
            <dl>
                <dt>
                    最新更新
                </dt>
                <dd>
                    ·
                    <a href="/jquery/misc-jquery-readyexception.html" title="jQuery  jQuery.readyException() 方法">jQuery  jQuery....</a>
                </dd>
                <dd>
                    ·
                    <a href="/jquery/misc-jquery-htmlprefilter.html" title="jQuery  jQuery.htmlPrefilter()  方法">jQuery  jQuery....</a>
                </dd>
                <dd>
                    ·
                    <a href="/jquery/html-csshooks.html" title="jQuery  jQuery.cssHooks  方法">jQuery  jQuery....</a>
                </dd>
                <dd>
                    ·
                    <a href="/angularjs2/angularjs2-typescript-setup.html" title="AngularJS2 TypeScript 环境配置">AngularJS2 Type...</a>
                </dd>
                <dd>
                    ·
                    <a href="/angularjs2/angularjs2-javascript-setup.html" title="AngularJS2 JavaScript 环境配置">AngularJS2 Java...</a>
                </dd>
                <dd>
                    ·
                    <a href="/jquery/html-escapeselector.html" title="jQuery  jQuery.escapeSelector()  方法">jQuery  jQuery....</a>
                </dd>
                <dd>
                    ·
                    <a href="/jquery/misc-jquery-speed.html" title="jQuery  jQuery.speed 方法">jQuery  jQuery....</a>
                </dd>
            </dl>
            <dl>
                <dt>
                    站点信息
                </dt>
                <dd>
                    ·
                    <a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=ssbDyoOAgfLU3crf09venNHd3w" rel="external nofollow">意见反馈</a>
                </dd>
                <dd>
                    ·
                    <a href="/disclaimer">免责声明</a>
                </dd>
                <dd>
                    ·
                    <a href="/aboutus">关于我们</a>
                </dd>
                <dd>
                    ·
                    <a href="/archives">文章归档</a>
                </dd>

            </dl>
            <div class="search-share">
                <div class="app-download">
                    <div>
                        <strong>关注微信</strong>
                    </div>
                </div>
                <div class="share">
                    <img width="150" height="150" src="./images/qrcode.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="w-1000 copyright">
        Copyright © 2013-2016    <strong><a href="/" target="_blank">菜鸟教程</a></strong>&nbsp;
        <strong><a href="/" target="_blank">runoob.com</a></strong> All Rights Reserved. 备案号：闽ICP备15012807号-1
    </div>
    </div>
    <div class="fixed-btn">
    <a class="go-top" href="javascript:void(0)" title="返回顶部"> <i class="fa fa-angle-up"></i></a>
    <a class="qrcode" href="javascript:void(0)" title="关注我们"><i class="fa fa-qrcode"></i></a>
    <a class="writer" target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=ssbDyoOAgfLU3crf09venNHd3w" style="font-size: 12px;" title="Bug 反馈">反馈</a>
    <!-- qrcode modal -->
    <div id="bottom-qrcode" class="modal panel-modal hide fade in" style="display: none;">
        <h4>微信关注</h4>
        <div class="panel-body"><img alt="微信关注" width="128" height="128" src="./images/qrcode(1).jpg"></div>
    </div>
    </div>
    <script>
        SyntaxHighlighter.all();
    </script>
</body>
</html>