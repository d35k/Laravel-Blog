<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; Charset=gb2312">
    <meta http-equiv="Content-Language" content="zh-CN">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>@yield('title', 'Blog') | Goktug Hatipoglu</title>
    {{-- Başlık için alan belirtiliyor, eğer girilmesse Blog kalacağı söyleniyor. --}}

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="images/Logo_40.png" type="image/x-icon">
    <!--Layui-->
    <link href="{{ url('plug/layui/css/layui.css') }}" rel="stylesheet" />
    <!--font-awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="{{ url('css/global.css') }}" rel="stylesheet" />
    <link href="{{ url('css/prettify.css') }}" rel="stylesheet" />
    <link href="{{ url('css/home.css') }}" rel="stylesheet" />
    <link href="{{ url('css/detail.css') }}" rel="stylesheet" />
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
                        <img src="{{ url('images/author.jpg') }}" alt="Author" />
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
                        {{-- Son Paylaşılanlar için Post modeline bağlantı yapılıyor. --}}
                    @php
                        use App\posts;
                    @endphp
                        {{-- Son 10 post gösterilsin diye limit yapılıyor ve yazdırılıyor --}}
                    @forelse (posts::limit(10)->orderBy('post_id', 'DESC')->get() as $item)
                    <li><i class="fa-li fa fa-hand-o-right"></i><a href="{{ url('a/' . $item->url) }}" target="_blank">{{ $item->title }}</a></li>
                        @empty
                        <li><i class="fa-li fa fa-times"></i>Nothing to show!</li>
                    @endforelse
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
<script src="{{ url('plug/layui/layui.js') }}"></script>

<script src="{{ url('js/global.js') }}"></script>

<script src="{{ url('js/home.js') }}"></script>
</body>
</html>