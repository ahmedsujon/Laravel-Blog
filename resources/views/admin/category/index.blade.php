@extends('layouts.admin')
@section('content')
<div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Categolry Table</h1>
      <p>Table to display analytical data effectively</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
      <li class="breadcrumb-item active"><a href="{{ route('category.create') }}">Create Category</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
          <a style="float:right;" class="btn btn-primary" href="{{ route('category.create')}}">Create Category</a>
            <h3>Category List</h3>
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
