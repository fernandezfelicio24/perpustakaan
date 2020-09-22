@extends('frontend.templates.defaults')


@section('content')
<h4>Detailhes dos Livros</h4>
<div class="col s12 m12">
        <div class="card horizontal hoverable">
            {{-- <div class="card-image"> --}}
                <img src="{{ $book->getCover() }}">
            {{-- </div> --}}
            <div class="card-stacked">
                    <div class="card-content">
                        <h4 class="red-text accent-2">{{ $book->title }}</h4>
                        <blockquote>
                            <p>{{ $book->description }}</p>
                        </blockquote>
                        <p>
                            <i class="material-icons">person</i> : {{ $book->author->name }}
                        </p>
                        <p>
                            <i class="material-icons">book</i> : {{ $book->qty }}
                        </p>
                    </div>
                    <div class="card-action">
                        <form action="{{route('book.borrow',$book)}}" method="POST">
                            @csrf
           
                            <input type="submit" value="Emprestar Livro" class="btn red accent-1 right waves-effect waves-light">
                        </form>
                        
                    </div>
            </div>
        </div>
</div> 
<h5>Outros Livros do Escritor {{$book->author->name}} ...</h5>   
<div class="div row">
  
    @foreach ($book->author->books->shuffle()->take(4) as $book)
    @include('frontend.templates.components.card-book',['databook' => $book])
        
   
    @endforeach
 

</div>

@endsection