@extends('layouts.admin')
@section('content')
<div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Categolry Table</h1>
      <p>Table to display analytical data effectively</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item active"><a href="{{ route('category.index') }}">Category List</a></li>
    </ul>
  </div>
  <div class="clearix"></div>
  <div class="col-md-12">
    <div class="tile">
    <a style="float:right;" class="btn btn-primary" href="{{ route('category.index')}}">Category List</a>
      <h3 class="tile-title">Subscribe</h3>
      <div class="tile-body">
        <form class="row">
          <div class="form-group col-md-4">
            <label class="control-label">Name</label>
            <input class="form-control" type="text" placeholder="Enter your name">
          </div>
          <div class="form-group col-md-4">
            <label class="control-label">Email</label>
            <input class="form-control" type="text" placeholder="Enter your email">
          </div>
          <div class="form-group col-md-4 align-self-end">
            <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
