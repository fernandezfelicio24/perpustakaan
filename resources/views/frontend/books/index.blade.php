@extends('frontend.templates.defaults')


@section('content')
<h2>Coleção de livros</h2>
<blockquote>
    <p class="flow-text">Uma coleção de livros que você pode ler e imprestar !</p>

</blockquote>
<div class="div row">
    @foreach ($books as $book)
    @include('frontend.templates.components.card-book',['databook' => $book])
    @endforeach
 

</div>
{{-- pagination --}}
{{$books->links('vendor.pagination.materialize')}}


            
@endsection