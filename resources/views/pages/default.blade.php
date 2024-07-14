@extends('layout.master')
@section('title',$route->meta_information->title ?? $page->title ?? '-')
@section('description',$route->meta_information->description ?? $page->description ?? '-')
@section('content')
@include($page->view_path)
@endsection
