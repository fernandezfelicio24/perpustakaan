<!DOCTYPE html>
<html lang="en">
    @include('frontend.templates.partials.head')
<body>
    {{-- Navigation --}}
    @include('frontend.templates.partials.navigation')
    {{-- content --}}
    <div class="container">
     @yield('content')
                    
    </div>
  
   @include('frontend.templates.partials.script')
   @include('frontend.templates.partials.toast')
</body>
</html>