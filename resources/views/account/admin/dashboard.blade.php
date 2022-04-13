@extends('account.layouts.app',['title' => 'Admin Dashboard'])

@section('content')

<main class="page-content">

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4">
    <div class="col">
      <div class="card radius-10 bg-primary">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1 text-white">Total Users</p>
              <h4 class="mb-0 text-white">{{$user_count}}</h4>
            </div>
            <div class="ms-auto widget-icon bg-white-1 text-white">
              <a href="#" class="text-white"><i class="bi bi-bag-check-fill"></i></a>
            </div>
          </div>
        </div>
      </div>
     </div>
    









     </div>
     </div>
</main>
@endsection
