@extends('layout.main')
@section('title')
@section('content')

    @include('layout.canvas')
    <div class="blog-container">
        <div class="blog-main">


            <div class="blog-main-left">
                <div class="article shadow">
                    <div class="article-left">
                        <img src="images/cover/201703181909057125.jpg" alt="Example"/>
                    </div>
                    <div class="article-right">
                        <div class="article-title">
                            <a href="javascript:void(0)">Example</a>
                        </div>
                        <div class="article-abstract">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid consequatur deleniti
                            deserunt esse et, magnam placeat porro praesentium vero. Aut deleniti natus nostrum. Aliquam
                            ipsa necessitatibus nisi reiciendis sit.
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="article-footer">
                        <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                        <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                        <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                        <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                    </div>
                </div>
            </div>

@endsection