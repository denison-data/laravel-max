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
        @if(Session::has('post_created')) 
        <div class="alert alert-success mt-3">
            {{ Session::get('post_created') }}
        </div>
        @endif
    <form action="{{ route('posts.addSubmit') }}" method="POST" autocomplete="off">
        @csrf
        <div class="mt-4 mb-3">
            <span class="h2">게시판</span>

        </div>
        <div class="mb-2">
            <input type="text" name="subject" class="form-control" placeholder="제목을 입력하세요">
        </div>
        <div>
            <textarea class="form-control" id="" name="content" placeholder="내용을 입력하세요" rows="5"></textarea>
        </div>

        <div class="mt-2">
            <button type="submit" class="btn btn-primary mt-3">등록</button>
            <a href="{{ route('posts.getAllPost') }}" class="btn btn-secondary mt-3">목록</a>
        </div>
    </form>

    </div>
</body>
</html>