@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <section class="content">

        <iframe src="{{URL::to('/orgchartcompany')}}" width="100%" height="600"></iframe>
</section>
</div>
@endsection