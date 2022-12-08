@extends('layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Объекты</h1>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>id</th>
              <th>Название</th>
              <th>Адресс</th>
              <th>Телефон</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            @foreach($verifiers as $verifier)
            <tr>
              <td>{{$verifier->VID}}</td>
              <td>{{$verifier->name}}</td>
              <td>{{$verifier->adress}}</td>
              <td>{{$verifier->phone}}</td>
              <td>{{$verifier->email}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection