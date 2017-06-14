<nav class="blog-nav layui-header">
    <div class="blog-container">
        <a href="http://github.com/d35k" class="blog-user">
            <i class="fa fa-github" style="font-size:20px;">&nbsp;<small id="hub" style="color: white;">My hub</small></i>
        </a>
        <a class="blog-logo" href="{{ route('index') }}">goktug/></a>
        <ul class="layui-nav" lay-filter="nav">
            <li class="layui-nav-item {{ \App\Models\Helpers\Helper::classActiveRouteName('index', 'layui-this' ) }}">
                <a href="/"><i class="fa fa-home fa-fw"></i>&nbsp;Main Page</a>
            </li>
            <li class="layui-nav-item {{ \App\Models\Helpers\Helper::classActiveRouteName('allPost', 'layui-this') }}">
                <a href="{{ route('allPost') }}"><i class="fa fa-file-text fa-fw"></i>&nbsp;All Posts</a>
            </li>
            <li class="layui-nav-item {{ \App\Models\Helpers\Helper::classActiveRouteName('addNewPost', 'layui-this') }}">
                <a href="{{ route('addNewPost') }}"><i class="fa fa-file-text fa-fw"></i>Add New Post</a>
            </li>
            <li class="layui-nav-item">
                <a href="http://www.goktughatipoglu.com"><i class="fa fa-info fa-fw"></i>&nbsp;About Me</a>
            </li>
        </ul>
        <a class="blog-navicon" href="javascript:;">
            <i class="fa fa-navicon"></i>
        </a>
    </div>
</nav>