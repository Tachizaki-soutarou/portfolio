<x-app-layout>
    <x-slot name="header">
        blog
    </x-slot>
        <h1 class="title">
            {{ $post->title }}
        </h1>
            <a href="">{{ $post->category->name }}</a>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div class="edit"><a href="/posts/{{ $post->id }}/edit">編集</a></div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>