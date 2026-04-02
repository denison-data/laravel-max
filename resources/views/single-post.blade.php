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
    <div class="container w-50">
        <div class="mt-4 mb-3">
            <span class="h2">게시판</span>
        </div>
        <div class="mb-2">
            {{ $post->subject }}
        </div>
        <div class="mb-2">
            {{ $post->content }}
        </div>
        <div class="mt-2">
            <a href="{{ route('posts.getAllPost') }}" class="btn btn-secondary mt-3">목록으로</a>
    </div>
</body>
</html>