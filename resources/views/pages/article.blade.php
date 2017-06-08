@extends('layout.main')
@section('title', ' deneme ')

@section('content')
    <div class="blog-container">
        <blockquote class="layui-elem-quote sitemap layui-breadcrumb shadow">
                <a href="{{ url('') }}">Main Page </a> <a href="{{ url('a/' . $article->url) }}">{{ $article->title }}</a>
        </blockquote>
        <div class="blog-main">
            <div class="blog-main-left">
                <div class="article-detail shadow">
                    <div class="article-detail-title">
                        {{ $article->title }}
                    </div>
                    <div class="article-detail-content" style="background-color: white;">
                        <p style="margin-bottom:2%;">
                            <img src="{{ url($article->image) }}" width="100%" height="auto" alt="{{ $article->title }}" />
                        </p>

                        {!! $article->content !!}
                    </div>
                </div>
                @if($comments)
                    <div class="blog-module shadow" style="box-shadow: 0 1px 8px #a6a6a6;">
                        <fieldset class="layui-elem-field layui-field-title" style="margin-bottom:0">
                            <legend>Write a Comment!</legend>
                            <div class="layui-field-box">
                                <form class="layui-form blog-editor" action="{{ url('a/' . $article->url . '/comment') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="layui-form-item">
                                        <input name="author" type="text" class="layui-input" placeholder="There is your Name">
                                    </div>
                                    <div class="layui-form-item">
                                        <textarea name="comment" id="remarkEditor" placeholder="There is your Comment!" class="layui-textarea"></textarea>
                                    </div>
                                    <div class="layui-form-item">
                                        <button class="layui-btn" lay-submit="formRemark" lay-filter="formRemark">Send my Comment</button>
                                    </div>
                                </form>
                            </div>
                        </fieldset>
                        <div class="blog-module-title">Comments</div>
                        <ul class="blog-comment">
                        @foreach($comments as $comment)
                        <li>
                            <div class="comment-parent">
                                <div class="info">
                                    <span class="username">{{ $comment->created_at->toFormattedDateString() }}</span>
                                </div>
                                <div class="content">
                                    {{ $comment->content }}
                                </div>
                            </div>
                        </li>
                        @endforeach
                        </ul>
                    </div>
                @endif
            </div>
@endsection