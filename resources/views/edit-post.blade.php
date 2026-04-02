<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container w-50 mt-5">
        <h1>게시물 수정</h1>
        @if(Session::has('post_updated'))
            <div class="alert alert-success">
                {{ Session::get('post_updated') }}
            </div>
        @endif
        <form action="{{ route('posts.update') }}" method="POST" autocomplete="off">
            @csrf
            <input type="hidden" name="id" value="{{ $post->id }}">
            <div class="mb-2">
                <label for="subject" class="form-label">제목</label>
                <input type="text" class="form-control" id="subject" name="subject" value="{{ $post->subject }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">내용</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">수정</button>
                <a href="{{ route('posts.getAllPost') }}" class="btn btn-secondary">목록</a>
            </div>
        </form>
    </div>
</body>
</html>