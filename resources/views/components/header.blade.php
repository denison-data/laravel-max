<div>
   The only way to do great work is to love what you do. - Steve Jobs <br>
   {{ $company }}

<ul>
    @foreach ($products as $product)
        <li>{{ $product }}</li>
    @endforeach
</ul>
</div>