<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; Charset=gb2312">
    <meta http-equiv="Content-Language" content="zh-CN">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>@yield('title', 'Blog') | Goktug Hatipoglu</title>
    {{-- Başlık için alan belirtiliyor, eğer girilmesse Blog kalacağı söyleniyor. --}}

    <link rel="shortcut icon" href="images/Logo_40.png" type="image/x-icon">
    <!--Layui-->
    <link href="plug/layui/css/layui.css" rel="stylesheet" />
    <!--font-awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="css/global.css" rel="stylesheet" />

    <link href="css/home.css" rel="stylesheet" />
</head>
<body>
    {{-- Navbar include ediliyor. --}}
    @include('layout.navbar')

<div class="blog-body">

    {{-- İçeriğin geleceği kısım belirtiliyor --}}
    @yield('content')

            <div class="blog-main-right">
                <div class="blogerinfo shadow">
                    <div class="blogerinfo-figure">
                        <img src="images/author.jpg" alt="Author" />
                    </div>
                    <p class="blogerinfo-nickname">Goktug Hatipoglu</p>
                    <p class="blogerinfo-introduce">Junior Developer</p>
                    <p class="blogerinfo-location"><i class="fa fa-location-arrow"></i>&nbsp;Turkey</p>
                    <hr />
                    <div class="blogerinfo-contact">
                        <a target="_blank" title="Send Me a Mail" href="mailto:goktughatipoglu@yandex.com"><i class="fa fa-envelope fa-2x"></i></a>
                        <a target="_blank" title="My Github Profile" href="http://github.com/d35k"><i class="fa fa-git fa-2x"></i></a>
                    </div>
                </div>
                <div></div>
                <div class="blog-module shadow">
                    <div class="blog-module-title">Recently shared</div>
                    <ul class="fa-ul blog-module-ul">
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="javascript:void(0)" target="_blank">Link</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<footer class="blog-footer">
    <p><span>Copyright</span><span>&copy;</span><span>2017</span><a href="http://goktughatipoglu.com">goktughatipoglu</a><span>Design By LY</span></p>
</footer>

<!-- layui.js -->
<script src="plug/layui/layui.js"></script>

<script src="js/global.js"></script>

<script src="js/home.js"></script>
</body>
</html>