@extends('admin.layouts.app')

@section('content')
      <div class="col-md-9 p-3 p-md-5">
        <div class="row">
          <div class="col-md-12 text-center text-md-left">
            <div class="d-md-flex flex-row align-items-center justify-content-between">
              <h2 class="ml-3 ml-md-0">Newsletter</h2>
              <a style="white-space: nowrap;" href="{{ route('admin.csv.newsletter') }}"><button class="btn btn-primary mt-3 mt-md-0">Descargar
                  lista</button></a>
            </div>
          </div>
        </div>
        <div class="row mt-4 mt-md-0">
          <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-newsletter">
                  <thead>
                    <tr>
                      <th class="text-marron-claro sin-borde" scope="col">Nombre</th>
                      <th class="text-marron-claro sin-borde" scope="col">Apellido</th>
                      <th class="text-marron-claro sin-borde" scope="col">Email</th>
                      <th class="text-marron-claro sin-borde" scope="col">Whatsapp</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($subscriptions as $subscription)
                    <tr @if (!$loop->first) scope="row" @endif>
                      <td>{{$subscription->firstname}}</td>
                      <td>{{$subscription->lastname}}</td>
                      <td>{{$subscription->email}}</td>
                      <td>{{$subscription->whatsapp}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>

      {{ $subscriptions->links() }}
      </div>
@endsection
