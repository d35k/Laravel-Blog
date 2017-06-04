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
            </div>
@endsection