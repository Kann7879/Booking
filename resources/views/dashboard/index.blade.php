@php $sub_title = ($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : 'Dashboard' @endphp

@extends('layout.backend.main', ['title' => 'Dashboard | '.config('app.name'), 'sub_title' => $sub_title])
@section('container')
 <h1>haii</h1>
 
@endsection