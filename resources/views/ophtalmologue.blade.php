@extends('adminlte::page')

@section('title')
Médecins ophtalmologues

@endsection

@section('content_header')
<h4>Médecins ophtalmologues</h4>
@endsection

@section('content')

<div class="d-flex" style="margin: 20px; justify-content: flex-end;">

    <form class="d-flex" style="width: 250px;" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: .5rem;">
        <button class="btn btn-outline-success" type="submit" style="border-radius: .5rem;">Search</button>
      </form>

    <button type="button" class="flex-end btn btn-primary" style="background-color: #2b9db9; width: 120px; margin-left: 30px; border-radius: .5rem;"><i class="fas fa-plus"></i> Ajouter</button>
</div>


<div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container" >
        <div class="row justify-content-center" >
          <div class="col-12" >
            <div class="card" style="border-radius: .5rem;" >
              <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px;  border-radius: .5rem;">
                  <table class="table table-striped mb-0" style="text-overflow: ellipsis;  white-space: nowrap;">
                    <thead style="background-color: #2b9db9; color: white; font-size: 1.08rem; top:0; position: sticky;">
                        <tr>
                            <th scope="col">CIN</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $user )
                            <tr>
                              <td>{{$user->id}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->phone}}</td>
                            </tr>
                            @endforeach



                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
