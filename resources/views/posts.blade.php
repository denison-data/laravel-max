<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data rkwudhrl</title>
       <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>
<div class="container w-50 mt-5">
    @if(Session::has('post_deleted'))
        <div class="alert alert-success">
            {{ Session::get('post_deleted') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">제목</th>
                <th scope="col">내용</th>
                <th scope="col">처리</th>
            </tr>
        </thead>
        <tbody></tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->subject }}</td>
                <td>{{ $post->content }}</td>
                <td>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">수정</a>
                    <a href="{{ route('posts.getPostById', $post->id) }}" class="btn btn-info btn-sm">보기</a>
                    <a href="{{ route('posts.delete', $post->id) }}" class="btn btn-danger btn-sm">삭제</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
<div class="container w-50 mt-3">
    <a href="{{ route('posts.add') }}" class="btn btn-primary">글쓰기</a>
</body>
</html>