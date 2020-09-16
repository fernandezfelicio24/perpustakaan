@extends('frontend.templates.defaults')


@section('content')
<h2>Coleção de livros</h2>
<blockquote>
    <p class="flow-text">Uma coleção de livros que você pode ler e imprestar !</p>

</blockquote>
<div class="div row">
   @for ($i = 0; $i < 10; $i++)
    <div class="col s12 m6">
        <div class="card horizontal hoverable">
            <div class="card-image">
            <img src="https://lorempixel.com/100/190/nature/6">
            </div>
            <div class="card-stacked">
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
            </div>
            </div>
        </div>
    </div>
   @endfor

</div>
{{-- pagination --}}
<ul class="pagination center">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
            
@endsection