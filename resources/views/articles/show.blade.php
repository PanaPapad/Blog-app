@extends('layouts.public')

@section('page-title', $post->title . ' - My Blog')

@push('styles')
@vite(['resources/css/article.css'])
@endpush

@section('public-content')
<div class="container">
    <article class="article-container">
        <!-- Article Header -->
        <header class="article-header">
            <h1 class="article-title">{{ $post->title }}</h1>
            
            <div class="article-meta">
                <span>By {{ $post->author->name }}</span>
                <span>•</span>
                <span>{{ $post->published_at ? $post->published_at->format('F j, Y') : 'Draft' }}</span>
                @if($post->published_at && $post->created_at->diffInDays($post->updated_at) > 0)
                    <span>•</span>
                    <span>Updated {{ $post->updated_at->format('F j, Y') }}</span>
                @endif
            </div>
            
            <!-- Tags -->
            @if($post->tags && count($post->tags) > 0)
                <div class="article-tags">
                    @foreach($post->tags as $tag)
                        <a href="/tags/{{ urlencode($tag) }}" class="tag">#{{ $tag }}</a>
                    @endforeach
                </div>
            @endif
        </header>
        
        <!-- Article Content -->
        <div class="article-content">
            {!! \Illuminate\Support\Str::markdown($post->content) !!}
        </div>
    </article>
</div>
@endsection
