@extends('layouts.ypr')

@section('content')
<div class="container">
    <?= html_entity_decode($pages->content)?>
</div>

@endsection