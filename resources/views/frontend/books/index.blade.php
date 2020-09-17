@extends('frontend.templates.defaults')


@section('content')
<h2>Coleção de livros</h2>
<blockquote>
    <p class="flow-text">Uma coleção de livros que você pode ler e imprestar !</p>

</blockquote>
<div class="div row">
    @foreach ($books as $databook)
    <div class="col s12 m6">
        <div class="card horizontal hoverable">
            <div class="card-image">
            <img src="{{$databook->getcover()}}" height="200px">
            </div>
            <div class="card-stacked">
            <div class="card-content">
            <h6>{{Str::limit($databook->title, 30)}}</h6>
            <p>{{Str::limit($databook->description,100)}}</p>
            </div>
            <div class="card-action">
                <a href="#">Emprestar Livro</a>
            </div>
            </div>
        </div>
    </div>
    @endforeach
 

</div>
{{-- pagination --}}
{{$books->links('vendor.pagination.materialize')}}


            
@endsection