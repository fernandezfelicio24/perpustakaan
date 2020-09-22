<div class="col s12 m6">
    <div class="card horizontal hoverable">
        <div class="card-image">
        <img src="{{$databook->getcover()}}" height="200px">
        </div>
        <div class="card-stacked">
        <div class="card-content">
        <h6>
        <a href="{{route('book.show',$databook)}}">{{Str::limit($databook->title, 30)}}</a>
        </h6>
        <p>{{Str::limit($databook->description,100)}}</p>
        </div>
        <div class="card-action">
            
            <form action="{{route('book.borrow',$databook)}}" method="POST">
                @csrf

                <input type="submit" value="Emprestar Livro" class="btn red accent-1 right waves-effect waves-light">
            </form>
            
        </div>
        </div>
    </div>
</div>