@extends('layout.main')
@section('title', 'New Post')

@section('content')
    <div class="blog-container">
        <div class="blog-main">
            <div class="blog-main-left">
                    <div class="blog-module shadow" style="box-shadow: 0 1px 8px #a6a6a6;">
                        <fieldset class="layui-elem-field layui-field-title" style="margin-bottom:0">
                            <legend>Lets Type a New Post!</legend>
                            <div class="layui-field-box">
                                <form class="layui-form blog-editor" action="" method="post">
                                    {{ csrf_field() }}
                                    <div class="layui-form-item">
                                        <input name="postTitle" type="text" class="layui-input" placeholder="There Is Your Title Section">
                                    </div>
                                    <div class="layui-form-item">
                                        <textarea name="postContent" id="remarkEditor" placeholder="There is your Comment!" class="layui-textarea"></textarea>
                                    </div>
                                    <div class="layui-form-item">
                                        <input type="file" name="postImage" id="image" title="Select Post Image">
                                    </div>
                                    <div class="layui-form-item">
                                        <button class="layui-btn" lay-submit="formRemark" lay-filter="formRemark">Post My Post</button>
                                    </div>
                                </form>
                            </div>
                        </fieldset>
                    </div>
            </div>
@endsection