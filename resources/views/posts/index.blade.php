<x-app-layout>
    <x-slot name="header">
        blog
    </x-slot>
    <h1>Blog Name</h1>
    <a href='/posts/create'>create</a>
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <div>
                    @foreach($questions as $question)
                        <div>
                            <a href="https://teratail.com/questions/{{ $question['id'] }}">
                                {{ $question['title'] }}
                            </a>
                        </div>
                    @endforeach
                </div>
                <p class='body'>{{ $post->body }}</p>
                <a href="">{{ $post->category->name }}</a>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                </form>
                <script>
                    function deletePost(id) {
                    'use strict'
                        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                            document.getElementById(`form_${id}`).submit();
                        }
                    }
                </script>
            </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
        ログインユーザー:{{ Auth::user()->name }}
</x-app-layout>