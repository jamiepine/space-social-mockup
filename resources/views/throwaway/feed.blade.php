
@extends('layouts.app')


@section('content')

{{-- Left Column --}}
<div id="feed_left_column" class="feed_column">
    
</div>

{{-- Center Feed --}}
<div id="feed_left_column" class="feed_column boxed">
    {{ getUpdates() }}
</div>

{{-- Right Column --}}
<div id="feed_left_column" class="feed_column boxed">
    
</div>

@endsection

