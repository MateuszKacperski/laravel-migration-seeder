@extends('layouts.main')
   
@section('main-content')
    <table class="table container my-5">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Company</th>
            <th scope="col">Dep_Station</th>
            <th scope="col">arr_station</th>
            <th scope="col">dep_time</th>
            <th scope="col">arr_time</th>
            <th scope="col">train_code</th>
            <th scope="col">train_wagons</th>
            <th scope="col">on_train</th>
            <th scope="col">deleted</th>
          </tr>
        </thead>
        <tbody>
            @forelse($trains as $train)
          <tr>
            <th scope="row">{{$train->id }}</th>
            <td>{{$train->company }}</td>
            <td>{{$train->dep_station }}</td>
            <td>{{$train->arr_station }}</td>
            <td>{{$train->dep_time }}</td>
            <td>{{$train->arr_time }}</td>
            <td>{{$train->train_code }}</td>
            <td>{{$train->train_wagons }}</td>
            <td>{{$train->on_train }}</td>
            <td>{{$train->deleted }}</td>
          </tr>
        @empty
        <h3>Non ci sono treni</h3>
        @endforelse
      </table>
      @endsection    
