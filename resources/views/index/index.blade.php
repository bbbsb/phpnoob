<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>PHP菜鸟教程</title>
    <link rel="shortcut icon" href="./favicon.ico" mce_href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" media="all">
    <script src="{{asset('js/push.js')}}"></script>
    <script src="{{asset('js/hm.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.min.js')}}"></script>
    <![endif]-->
    <link rel="apple-touch-icon" href="{{asset('images/icon/mobile-icon.png')}}">
    <meta name="apple-mobile-web-app-title" content="PHP菜鸟教程">
    <link rel="stylesheet" type="text/css" href="{{asset('css/prettify.css')}}"></head>
<body>
<!--  头部 -->
<div class="container logo-search">

    <div class="col search row-search-mobile">
        <form action="http://www.runoob.com/index.php">
            <input class="placeholder" value="搜索……" name="s" autocomplete="off">
        </form>
    </div>

    <div class="row">
        <div class="col logo">
            <h1><a href="./images/index.html">菜鸟教程 -- 学的不仅是技术，更是梦想！</a></h1>
        </div>
        <div class="col search search-desktop last">
            <form action="./images/index.html" target="_blank">
                <input class="placeholder" id="s" name="s" value="搜索……" autocomplete="off">
            </form>
        </div>
    </div>
</div>


<!-- 导航栏 -->
<div class="container navigation">
    <div class="row">
        <div class="col nav">
            <ul id="index-nav">
                <li><a href="./images/index.html" data-id="index" title="菜鸟教程" class="current">首页</a></li>
                <li><a href="http://www.runoob.com/w3cnote/" target="_blank" data-id="note" title="菜鸟笔记">菜鸟笔记</a></li>
                <li><a href="http://c.runoob.com/" target="_blank" data-id="tool" title="不止于工具">菜鸟工具</a></li>
                <li><a href="javascript:void(0);" data-id="manual" title="参考手册">参考手册</a></li>
                <li><a href="javascript:void(0);" data-id="quiz" title="测验/考试">测验/考试</a></li>
                <li><a href="javascript:void(0);" data-id="happy" title="kidding me">Kidding</a></li>
                <li><a href="javascript:void(0);" data-id="blog" title="my blog">博客</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container sub-navigation sub-navigation-articles" style="display:none">
    <div class="row">
        <div class="col nav-sub">
            <ul id="tool"> <li class="cat-item"><a target="_blank" href="http://www.runoob.com/try/bootstrap/layoutit/">Bootstrap 编辑器</a></li> <li class="cat-item"><a target="_blank" href="http://c.runoob.com/compile/1">PHP 在线工具</a></li> <li class="cat-item"><a target="_blank" href="http://c.runoob.com/compile/6">Python 在线工具</a></li> <li class="cat-item"><a target="_blank" href="http://c.runoob.com/compile/13">Ruby 在线工具</a></li> <li class="cat-item"><a target="_blank" href="http://c.runoob.com/compile/18">Bashe Shell</a></li> <li class="cat-item"><a target="_blank" href="http://c.runoob.com/compile/11">C 在线工具</a></li> <li class="cat-item"><a target="_blank" href="http://c.runoob.com/compile/12">C++ 在线工具</a></li><li><a target="_blank" href="http://c.runoob.com/compile/20">Swift 在线工具</a></li>  <li class="cat-item"><a target="_blank" href="http://c.runoob.com/">更多……</a></li> </ul>
            <ul id="manual"> <li class="cat-item"><a href="http://www.runoob.com/tags/html-reference.html" target="_blank">HTML 手册</a></li> <li class="cat-item"><a href="http://www.runoob.com/jsref/jsref-tutorial.html" target="_blank">Javascript </a></li> <li class="cat-item"><a href="http://www.runoob.com/cssref/css-reference.html" target="_blank">CSS 1,2,3</a></li> <li class="cat-item"><a href="http://www.runoob.com/manual/zeptojs.html">Zepto 中文手册</a></li> <li class="cat-item"><a href="http://www.runoob.com/manual/Flat-UI/">Flat UI</a></li> <li class="cat-item"><a href="http://www.runoob.com/manual/PostgreSQL/">PostgreSQL 手册</a></li> </ul>
            <ul id="quiz"> <li class="cat-item"><a target="_top" title="HTML 测验" href="http://www.runoob.com/quiz/html-quiz.html">HTML 测验</a></li> <li class="cat-item"><a target="_top" title="HTML5 测验" href="http://www.runoob.com/quiz/html5-quiz.html">HTML5 测验</a></li> <li class="cat-item"><a target="_top" title="XHTML 测验" href="http://www.runoob.com/quiz/xhtml-quiz.html">XHTML 测验</a></li> <li class="cat-item"><a target="_top" title="CSS 测验" href="http://www.runoob.com/quiz/css-quiz.html">CSS 测验</a></li> <li class="cat-item"><a target="_top" title="JavaScript 测验" href="http://www.runoob.com/quiz/javascript-quiz.html">JavaScript 测验</a></li> <li class="cat-item"><a target="_top" title="jQuery 测验" href="http://www.runoob.com/quiz/jquery-quiz.html">jQuery 测验</a></li> <li class="cat-item"><a target="_top" title="XML 测验" href="http://www.runoob.com/quiz/xml-quiz.html">XML 测验</a></li> <li class="cat-item"><a target="_top" title="ASP 测验" href="http://www.runoob.com/quiz/asp-quiz.html">ASP 测验</a></li> <li class="cat-item"><a target="_top" title="PHP 测验" href="http://www.runoob.com/quiz/php-quiz.html">PHP 测验</a></li> <li class="cat-item"><a target="_top" title="SQL 测验" href="http://www.runoob.com/quiz/sql-quiz.html">SQL 测验</a></li> </ul>
        </div>
    </div>
</div>
<!--  内容  -->
<div class="container main">

    <div class="row">
        <div class="col left-column" id="main-left-cloumn">
            <div class="tab" id="cate0"><i class="fa fa-reorder"></i> 全部教程</div>
            <div class="sidebar-box gallery-list">
                <div class="design" id="cate1">
                    <div class="navto-nav"><i class="fa fa-external-link"></i> HTML / CSS</div>
                </div>
                <div class="design" id="cate2">
                    <div class="navto-nav"><i class="fa fa-external-link"></i> JavaScript</div>
                </div>
                <div class="design" id="cate3">
                    <div class="navto-nav"><i class="fa fa-external-link"></i> 服务端</div>
                </div>
                <div class="design" id="cate4">
                    <div class="navto-nav"><i class="fa fa-external-link"></i> 数据库</div>
                </div>
                <div class="design" id="cate5">
                    <div class="navto-nav"><i class="fa fa-external-link"></i> 移动端</div>
                </div>
                <div class="design" id="cate6">
                    <div class="navto-nav"><i class="fa fa-external-link"></i> XML 教程</div>
                </div>
                <div class="design" id="cate8">
                    <div class="navto-nav"><i class="fa fa-external-link"></i> Web Services</div>
                </div>
                <div class="design" id="cate9">
                    <div class="navto-nav"><i class="fa fa-external-link"></i> 开发工具</div>
                </div>
            </div>
        </div>
        <div class="col middle-column-home">
            <div class="codelist codelist-desktop cate1">
                <h2><i class="fa fa-list"></i> HTML / CSS</h2>
                <a class="item-top item-1" href="http://www.runoob.com/html/html-tutorial.html"><h4>【学习 HTML】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/html.png">
                    <strong>HTML，即超文本标记语言（Hyper Text Markup Language）</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/html/html5-intro.html"><h4>【学习 HTML5】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/html5.png">
                    <strong>HTML5 是下一代 HTML 标准</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/css/css-tutorial.html"><h4>【学习 CSS】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/css.png">
                    <strong>层叠样式表（Cascading StyleSheet）</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/css3/css3-tutorial.html"><h4>【学习 CSS3】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/css3.png">
                    <strong>CSS3是CSS技术的升级版本</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/bootstrap/bootstrap-tutorial.html"><h4>【学习 Bootstrap】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/bootstrap.png">
                    <strong>Bootstrap，来自 Twitter，是目前最受欢迎的前端框架</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/foundation/foundation-tutorial.html"><h4>【学习 Foundation】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/foundation.png">
                    <strong>Foundation 用于开发响应式的 HTML, CSS and JavaScript 框架</strong></a>
            </div>
            <div class="codelist codelist-desktop cate2">

                <h2><i class="fa fa-list"></i> JavaScript</h2>


                <a class="item-top item-1" href="http://www.runoob.com/js/js-tutorial.html"><h4>【学习 JavaScript】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/js.png">
                    <strong>JavaScript 是 Web 的编程语言</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/htmldom/htmldom-tutorial.html"><h4>【学习 HTML DOM】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/htmldom.png">
                    <strong>HTML DOM 定义了访问和操作 HTML 文档的标准方法</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/jquery/jquery-tutorial.html"><h4>【学习 jQuery】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/jquery.png">
                    <strong>jQuery 是一个 JavaScript 库</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/angularjs/angularjs-tutorial.html"><h4>【学习 AngularJS】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/angularjs.png">
                    <strong>AngularJS 通过新的属性和表达式扩展了 HTML</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/react/react-tutorial.html"><h4>【学习 React】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/react.png">
                    <strong>React 是一个用于构建用户界面的 JAVASCRIPT 库</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/jqueryui/jqueryui-tutorial.html"><h4>【学习 jQuery UI】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/jqueryui.png">
                    <strong>jQuery UI 是建立在 jQuery上的一组用户界面交互、特效、小部件及主题</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/jeasyui/jqueryeasyui-tutorial.html"><h4>【学习 jQuery EasyUI 】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/jeasyui.png">
                    <strong>jQuery EasyUI 是一个基于 jQuery 的框架，集成了各种用户界面插件</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/nodejs/nodejs-tutorial.html"><h4>【学习 Node.js】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/nodejs.png">
                    <strong>Node.js 是运行在服务端的 JavaScript</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/ajax/ajax-tutorial.html"><h4>【学习 AJAX】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/ajax.png">
                    <strong>AJAX = Asynchronous JavaScript and XML（异步的 JavaScript 和 XML）</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/json/json-tutorial.html"><h4>【学习 JSON】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/json.png">
                    <strong>JSON 是存储和交换文本信息的语法</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/highcharts/highcharts-tutorial.html"><h4>【学习 Highcharts】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/highcharts.png">
                    <strong>Highcharts 是一个用纯JavaScript编写的一个图表库</strong></a>

            </div>
            <div class="codelist codelist-desktop cate3">
                <h2><i class="fa fa-list"></i> 服务端</h2>
                <a class="item-top item-1" href="./php.html"><h4>【学习 PHP】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/pl.png">
                    <strong>PHP 是一种通用开源脚本语言</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/linux/linux-tutorial.html"><h4>【学习 Linux】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/linux.png">
                    <strong>Linux是一套免费使用和自由传播的类Unix操作系统</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/c/c-tutorial.html"><h4>【学习 C】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/c.png">
                    <strong>一门通用计算机编程语言</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/design-pattern/design-pattern-tutorial.html"><h4>【设计模式】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/design-pattern.png">
                    <strong>设计模式代表了最佳的实践，通常被有经验的面向对象的软件开发人员所采用</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/regexp/regexp-tutorial.html"><h4>【正则表达式】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/regexp.png">
                    <strong>正则表达式是对字符串操作的一种逻辑公式</strong></a>

            </div>
            <div class="codelist codelist-desktop cate4">

                <h2><i class="fa fa-list"></i> 数据库</h2>

                <a class="item-top item-1" href="http://www.runoob.com/mysql/mysql-tutorial.html"><h4>【学习 Mysql】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/mysql.png">
                    <strong>MySQL是一个关系型数据库管理系统</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/mongodb/mongodb-tutorial.html"><h4>【学习 MongoDB】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/mongodb.png">
                    <strong>Mongo DB 是目前在IT行业非常流行的一种非关系型数据库(NoSql)</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/redis/redis-tutorial.html"><h4>【学习 Redis】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/redis.png">
                    <strong>一个高性能的key-value数据库</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/Memcached/Memcached-tutorial.html"><h4>【学习 Memcached】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/Memcached.png">
                    <strong>Memcached是一个自由开源的，高性能，分布式内存对象缓存系统。</strong></a>
            </div>
            <div class="codelist codelist-desktop cate5">

                <h2><i class="fa fa-list"></i> 移动端</h2>

                <a class="item-top item-1" href="http://www.runoob.com/jquerymobile/jquerymobile-tutorial.html"><h4>【学习 jQuery Mobile】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/jquerymobile.png">
                    <strong>jQuery Mobile是jQuery 在手机上和平板设备上的版本</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/ionic/ionic-tutorial.html"><h4>【学习 ionic】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/ionic.png">
                    <strong>ionic 是一个强大的 HTML5 应用程序开发框架(HTML5 Hybrid Mobile App Framework )。</strong></a>
            </div>
            <div class="codelist codelist-desktop cate6">

                <h2><i class="fa fa-list"></i> XML 教程</h2>

                <a class="item-top item-1" href="http://www.runoob.com/xml/xml-tutorial.html"><h4>【学习 XML】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/xml.png">
                    <strong>XML 被设计用来传输和存储数据</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/dtd/dtd-tutorial.html"><h4>【学习 DTD】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/dtd.png">
                    <strong>DTD（文档类型定义）的作用是定义 XML 文档的合法构建模块</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/dom/dom-tutorial.html"><h4>【学习 XML DOM】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/xmldom.png">
                    <strong>XML DOM 定义访问和操作XML文档的标准方法</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/xsl/xsl-tutorial.html"><h4>【学习 XSLT】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/xslt.png">
                    <strong>XSL 是一个 XML 文档的样式表语言，XSLT 指 XSL 转换</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/xpath/xpath-tutorial.html"><h4>【学习 XPath】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/xpath.png">
                    <strong>XPath 是一门在 XML 文档中查找信息的语言</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/xquery/xquery-tutorial.html"><h4>【学习 XQuery】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/xquery.png">
                    <strong>XQuery 被设计用来查询 XML 数据</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/xlink/xlink-tutorial.html"><h4>【学习 XLink】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/xlink.png">
                    <strong>XLink 定义在 XML 文档中创建超级链接的标准方法</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/xlink/xlink-tutorial.html"><h4>【学习 XPointer】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/xpointer.png">
                    <strong>XPointer是在可扩展标志语言（XML）文件中定位数据的一种语言</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/schema/schema-tutorial.html"><h4>【学习 XML Schema】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/schema.png">
                    <strong>XML Schema 描述了 XML文档的结构</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/xslfo/xslfo-tutorial.html"><h4>【学习 XSL-FO】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/xslfo.png">
                    <strong>XSL-FO 指可扩展样式表语言格式化对象</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/svg/svg-tutorial.html"><h4>【学习 SVG】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/svg.png">
                    <strong>SVG 使用 XML 格式定义图像</strong></a>
            </div>
            <div class="codelist codelist-desktop cate8">

                <h2><i class="fa fa-list"></i> Web Services</h2>


                <a class="item-top item-1" href="http://www.runoob.com/webservices/webservices-tutorial.html"><h4>【学习 Web Services】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/webservices.png">
                    <strong>Web Services 脚本平台需支持 XML + HTTP</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/wsdl/wsdl-tutorial.html"><h4>【学习 WSDL】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/wsdl.png">
                    <strong>WSDL是一门基于 XML 的语言，用于描述 Web Services 以及如何对它们进行访问</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/soap/soap-tutorial.html"><h4>【学习 SOAP】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/soap.png">
                    <strong>SOAP 是一种简单的基于 XML 的协议，它使应用程序通过 HTTP 来交换信息</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/rss/rss-tutorial.html"><h4>【学习 RSS】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/rss.png">
                    <strong>RSS基于XML标准，在互联网上被广泛采用的内容包装和投递协议</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/rdf/rdf-tutorial.html"><h4>【学习 RDF】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/rdf.png">
                    <strong>DF(资源描述框架)是描述网络资源的 W3C 标准</strong></a>
            </div>
            <div class="codelist codelist-desktop cate9">

                <h2><i class="fa fa-list"></i> 开发工具</h2>

                <a class="item-top item-1" href="http://www.runoob.com/git/git-tutorial.html"><h4>【学习 Git】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/git.png">
                    <strong>Git是一个开源的分布式版本控制系统，用于敏捷高效地处理任何或小或大的项目</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/firebug/firebug-tutorial.html"><h4>【学习 Firebug】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/firebug.png">
                    <strong>Firebug 是一个开源的web开发工具</strong></a>
            </div>
            <div class="codelist codelist-desktop cate10">

                <h2><i class="fa fa-list"></i> 网站建设</h2>

                <a class="item-top item-1" href="http://www.runoob.com/http/http-tutorial.html"><h4>【学习 HTTP】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/http.png">
                    <strong>HTTP协议（HyperText Transfer Protocol，超文本传输协议）是因特网上应用最为广泛的一种网络传输协议</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/web/web-buildingprimer.html"><h4>【网站建设指南】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/webbuildingprimer.png">
                    <strong>网站建设指导课程</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/browsers/browser-information.html"><h4>【浏览器信息】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/browsers.png">
                    <strong>对于网站开发人员来说，浏览器信息和统计数据都是非常重要的</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/hosting/hosting-tutorial.html"><h4>【网站主机教程】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/hosting.png">
                    <strong>如果您希望向全世界发布自己的网站，那么您的网站就需要被放置于一个 WEB 服务器</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/tcpip/tcpip-tutorial.html"><h4>【学习 TCP/IP】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/tcpip.png">
                    <strong>TCP/IP 是因特网的通信协议</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/w3c/w3c-tutorial.html"><h4>【学习 W3C】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/w3c.png">
                    <strong>W3C 让每个人都能在互联网上分享资源</strong></a>

                <a class="item-top item-1" href="http://www.runoob.com/quality/quality-tutorial.html"><h4>【网站品质】</h4>
                    <img class="codeicon codeicon-36" height="36" width="36" src="./images/quality.png">
                    <strong>学习如何创建高质量的web网站</strong></a>
            </div>

            <div class="codelist codelist-mobile">

                <h2><i class="fa fa-list"></i> HTML / CSS</h2>

                <a class="item-top item-1" href="http://www.runoob.com/html/html-tutorial.html">
                    <h4>HTML</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/html/html5-intro.html">
                    <h4>HTML5</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/css/css-tutorial.html">
                    <h4>CSS</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/css3/css3-tutorial.html">
                    <h4>CSS3</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/bootstrap/bootstrap-tutorial.html">
                    <h4>Bootstrap</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/foundation/foundation-tutorial.html">
                    <h4>Foundation</h4>
                </a>
            </div>
            <div class="codelist codelist-mobile">

                <h2><i class="fa fa-list"></i> JavaScript</h2>


                <a class="item-top item-1" href="http://www.runoob.com/js/js-tutorial.html">
                    <h4>JavaScript</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/htmldom/htmldom-tutorial.html">
                    <h4>HTML DOM</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/jquery/jquery-tutorial.html">
                    <h4>jQuery</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/angularjs/angularjs-tutorial.html">
                    <h4>AngularJS</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/react/react-tutorial.html">
                    <h4>React</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/jqueryui/jqueryui-tutorial.html">
                    <h4>jQuery UI</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/jeasyui/jqueryeasyui-tutorial.html">
                    <h4>jQuery EasyUI</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/nodejs/nodejs-tutorial.html">
                    <h4>Node.js</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/ajax/ajax-tutorial.html">
                    <h4>AJAX</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/json/json-tutorial.html">
                    <h4>JSON</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/highcharts/highcharts-tutorial.html">
                    <h4>Highcharts</h4>
                </a>

            </div>
            <div class="codelist codelist-mobile">

                <h2><i class="fa fa-list"></i> 服务端</h2>

                <a class="item-top item-1" href="http://www.runoob.com/php/php-tutorial.html">
                    <h4>PHP</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/linux/linux-tutorial.html">
                    <h4>Linux</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/docker/docker-tutorial.html">
                    <h4>Docker</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/c/c-tutorial.html">
                    <h4>C</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/design-pattern/design-pattern-tutorial.html">
                    <h4>设计模式</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/regexp/regexp-tutorial.html">
                    <h4>正则表达式</h4>
                </a>

            </div>
            <div class="codelist codelist-mobile">

                <h2><i class="fa fa-list"></i> 数据库</h2>

                <a class="item-top item-1" href="http://www.runoob.com/mysql/mysql-tutorial.html">
                    <h4>Mysql</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/mongodb/mongodb-tutorial.html">
                    <h4>MongoDB</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/redis/redis-tutorial.html">
                    <h4>Redis</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/Memcached/Memcached-tutorial.html">
                    <h4>Memcached</h4>
                </a>
            </div>
            <div class="codelist codelist-mobile">

                <h2><i class="fa fa-list"></i> 移动端</h2>

                <a class="item-top item-1" href="http://www.runoob.com/jquerymobile/jquerymobile-tutorial.html">
                    <h4>jQuery Mobile</h4>
                </a>

            </div>
            <div class="codelist codelist-mobile">

                <h2><i class="fa fa-list"></i> XML 教程</h2>


                <a class="item-top item-1" href="http://www.runoob.com/xml/xml-tutorial.html">
                    <h4>XML</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/dtd/dtd-tutorial.html">
                    <h4>DTD</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/dom/dom-tutorial.html">
                    <h4>XML DOM</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/xsl/xsl-tutorial.html">
                    <h4>XSLT</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/xpath/xpath-tutorial.html">
                    <h4>XPath</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/xquery/xquery-tutorial.html">
                    <h4>XQuery</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/xlink/xlink-tutorial.html">
                    <h4>XLink</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/xlink/xlink-tutorial.html">
                    <h4>XPointer</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/schema/schema-tutorial.html">
                    <h4>XML Schema</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/xslfo/xslfo-tutorial.html">
                    <h4>XSL-FO</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/svg/svg-tutorial.html">
                    <h4>SVG</h4>
                </a>
            </div>
            <div class="codelist codelist-mobile">

                <h2><i class="fa fa-list"></i> Web Services</h2>


                <a class="item-top item-1" href="http://www.runoob.com/webservices/webservices-tutorial.html">
                    <h4>Web Services</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/wsdl/wsdl-tutorial.html">
                    <h4>WSDL</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/soap/soap-tutorial.html">
                    <h4>SOAP</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/rss/rss-tutorial.html">
                    <h4>RSS</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/rdf/rdf-tutorial.html">
                    <h4>RDF</h4>
                </a>
            </div>
            <div class="codelist codelist-mobile">

                <h2><i class="fa fa-list"></i> 开发工具</h2>
                <a class="item-top item-1" href="http://www.runoob.com/git/git-tutorial.html">
                    <h4>Git</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/firebug/firebug-tutorial.html">
                    <h4>Firebug</h4>
                </a>
            </div>
            <div class="codelist codelist-mobile">

                <h2><i class="fa fa-list"></i> 网站建设</h2>

                <a class="item-top item-1" href="http://www.runoob.com/http/http-tutorial.html">
                    <h4>HTTP</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/web/web-buildingprimer.html">
                    <h4>网站建设指南</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/browsers/browser-information.html">
                    <h4>浏览器信息</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/hosting/hosting-tutorial.html">
                    <h4>网站主机教程</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/tcpip/tcpip-tutorial.html">
                    <h4>TCP/IP</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/w3c/w3c-tutorial.html">
                    <h4>W3C</h4>
                </a>

                <a class="item-top item-1" href="http://www.runoob.com/quality/quality-tutorial.html">
                    <h4>网站品质</h4>
                </a>
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
                    ·<a href="http://www.runoob.com/html/html-examples.html">HTML 实例</a>
                </dd>
                <dd>
                    ·<a href="http://www.runoob.com/css/css-examples.html">CSS 实例</a>
                </dd>
                <dd>
                    ·<a href="http://www.runoob.com/js/js-examples.html">JavaScript 实例</a>
                </dd>
                <dd>
                    ·<a href="http://www.runoob.com/ajx/ajax-examples.html">Ajax 实例</a>
                </dd>
                <dd>
                    ·<a href="http://www.runoob.com/jquery/jquery-examples.html">jQuery 实例</a>
                </dd>
                <dd>
                    ·<a href="http://www.runoob.com/xml/xml-examples.html">XML 实例</a>
                </dd>
                <dd>
                    ·<a href="http://www.runoob.com/java/java-examples.html">Java 实例</a>
                </dd>

            </dl>
            <dl>
                <dt>
                    字符集&amp;工具
                </dt>
                <dd>
                    · <a href="http://www.runoob.com/charsets/html-charsets.html">HTML 字符集设置</a>
                </dd>
                <dd>
                    · <a href="http://www.runoob.com/tags/html-ascii.html">HTML ASCII 字符集</a>
                </dd>
                <dd>
                    · <a href="http://www.runoob.com/tags/ref-entities.html">HTML ISO-8859-1</a>
                </dd>
                <dd>
                    · <a href="http://www.runoob.com/tags/ref-symbols.html">HTML 实体符号</a>
                </dd>
                <dd>
                    · <a href="http://www.runoob.com/tags/html-colorpicker.html">HTML 拾色器</a>
                </dd>
                <dd>
                    · <a href="http://www.runoob.com/jsontool">JSON 格式化工具</a>
                </dd>
            </dl>
            <dl>
                <dt>
                    最新更新
                </dt>
                <dd>
                    ·
                    <a href="http://www.runoob.com/angularjs2/angularjs2-typescript-setup.html" title="AngularJS2 TypeScript 环境配置">AngularJS2 Type...</a>
                </dd>
                <dd>
                    ·
                    <a href="http://www.runoob.com/angularjs2/angularjs2-javascript-setup.html" title="AngularJS2 JavaScript 环境配置">AngularJS2 Java...</a>
                </dd>
                <dd>
                    ·
                    <a href="http://www.runoob.com/jquery/html-escapeselector.html" title="jQuery  jQuery.escapeSelector()  方法">jQuery  jQuery....</a>
                </dd>
                <dd>
                    ·
                    <a href="http://www.runoob.com/jquery/misc-jquery-speed.html" title="jQuery  jQuery.speed 方法">jQuery  jQuery....</a>
                </dd>
                <dd>
                    ·
                    <a href="http://www.runoob.com/angularjs2/angularjs2-tutorial.html" title="AngularJS2 教程">AngularJS2 教程</a>
                </dd>
                <dd>
                    ·
                    <a href="http://www.runoob.com/jquery/misc-jquery-sub.html" title="jQuery  jQuery.sub()  方法">jQuery  jQuery....</a>
                </dd>
                <dd>
                    ·
                    <a href="http://www.runoob.com/jquery/misc-promise.html" title="jQuery  .promise()  方法">jQuery  .promis...</a>
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
                    <a href="http://www.runoob.com/disclaimer">免责声明</a>
                </dd>
                <dd>
                    ·
                    <a href="http://www.runoob.com/aboutus">关于我们</a>
                </dd>
                <dd>
                    ·
                    <a href="http://www.runoob.com/archives">文章归档</a>
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
        Copyright © 2013-2016    <strong><a href="./images/index.html" target="_blank">菜鸟教程</a></strong>&nbsp;
        <strong><a href="./images/index.html" target="_blank">runoob.com</a></strong> All Rights Reserved. 备案号：闽ICP备15012807号-1
    </div>
</div>
<div class="fixed-btn">
    <a class="go-top" href="javascript:void(0)" title="返回顶部"> <i class="fa fa-angle-up"></i></a>
    <a class="qrcode" href="javascript:void(0)" title="关注我们"><i class="fa fa-qrcode"></i></a>
    <a class="writer" target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=ssbDyoOAgfLU3crf09venNHd3w" style="font-size: 12px;" title="Bug 反馈">反馈</a>
    <!-- qrcode modal -->
    <div id="bottom-qrcode" class="modal panel-modal hide fade in">
        <h4>微信关注</h4>
        <div class="panel-body"><img alt="微信关注" width="128" height="128" src="./images/qrcode(1).jpg"></div>
    </div>
</div>
<div style="display:none;">
    <script src="./images/stat.php" language="JavaScript"></script><script src="./images/core.php" charset="utf-8" type="text/javascript"></script><a href="http://www.cnzz.com/stat/website.php?web_id=5578006" target="_blank" title="站长统计">站长统计</a>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?8e2a116daf0104a78d601f40a45c75b4";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</div>
<script src="./js/main.js"></script>


</body></html>