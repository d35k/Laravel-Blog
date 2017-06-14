@extends('layout.main')
@section('content')

    @include('layout.canvas')
    <div class="blog-container">
        <div class="blog-main">

            <div class="blog-main-left">

                @forelse($posts as $item)
                    <div class="article shadow">
                        <div class="article-left">
                            <img src="{{ url($item->image) }}" alt="{{ $item->title }}"/>
                        </div>
                        <div class="article-right">
                            <div class="article-title">
                                <a href="{{ url('a/'. $item->url) }}">{{ $item->title }}</a>
                            </div>
                            <div class="article-abstract">
                                {!!  $item->content !!}
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="article-footer">
                            <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $item->created_at->toFormattedDateString() }}</span>
                            <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;{{ $item->author }}</span>
                            <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;{{ $item->views }}</span>
                        </div>
                    </div>
                @empty
                    <div class="article shadow">
                        <div class="article-abstract">
                            <p>
                                There is no new post! just wait.
                            </p>
                        </div>
                    </div>
                @endforelse

                {{ $posts->links() }}
            </div>

@endsection