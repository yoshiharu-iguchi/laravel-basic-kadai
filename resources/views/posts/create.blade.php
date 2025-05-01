<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Laravel基礎</title>
    </head>

    <body>
        <h1>投稿作成</h1>

        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form action="{{ route('posts.store') }}" method="POST">

        @csrf
        <div>
        <label for="title">タイトル</label>
        <input type="text" name="title" value="{{ old('title') }}"><br>
        </div>

        <label for="content">本文</label>
        <textarea name="content" rows="5" cols="30">{{ old('content') }}</textarea><br>

        <button type="submit">投稿</button>
        </form>

    </body>
</html>