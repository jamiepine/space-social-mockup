@include('app.header')
<div id="page" class="feed">

    <div class="tourcover"></div>


    @include('nav')

    @include('sidebar')



@yield('content')

</div> <!-- #page -->
@include('app.footer')