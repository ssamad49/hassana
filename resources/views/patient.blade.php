@extends('adminlte::page')

@section('title')
    patients
@endsection

@section('content_header')
    <h4>patients</h4>
@endsection

@section('content')
<div class="container">
    <div class="col-md-offset-1 col-md-12 mb-5">
        <div class="d-flex" style="justify-content: flex-end;">

            <form class="d-flex" style="width: 250px;" role="search" method="GET">
                <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search"
                    style="border-radius: .5rem;">
                <button class="btn btn-outline-success" type="submit" style="border-radius: .5rem;">Search</button>
            </form>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                style="background-color: #2b9db9; width: 120px; height: 40px; margin-left: 30px; border-radius: .5rem;">
                <i class="fas fa-plus" style="margin-right: 5px"></i> Ajouter </button>
        </div>
    </div>




    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
    @endif


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style=" width:100vh; border-radius: 20px;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un nouveau patient</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                            <div class="container ">
                                <form id="contact-form" role="form" method="POST" action="{{ route('patient.store') }}">

                                    @csrf
                                    <div class="controls">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_id">CIN</label>
                                                    <input id="form_id" type="text" name="cin" class="form-control"
                                                        placeholder="Entrer votre CIN">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Nom et prénom</label>
                                                    <input id="form_name" type="text" name="name" class="form-control"
                                                        placeholder="Entrer votre name" required="required"
                                                        data-error="name is required.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_age">Age</label>
                                                    <input id="form_age" type="text" name="age" class="form-control"
                                                        placeholder="Entrer votre age" required="required"
                                                        data-error="age is required.">

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_phone">Téléphone</label>
                                                    <input id="form_phone" type="text" name="phone"
                                                        class="form-control" placeholder="Entrer votre numéro"
                                                        required="required" data-error="phone is required.">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_address">adresse</label>
                                                    <input id="form_address" type="text" name="address"
                                                        class="form-control" placeholder="Entrer votre adresse"
                                                        required="required" data-error="address is required.">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_TA">TA</label>
                                                    <input id="form_TA" type="text" name="TA"
                                                        class="form-control" placeholder="Entrer votre TA"
                                                        data-error="TA is required.">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_glycémie">Glycémie</label>
                                                    <input id="form_glycémie" type="text" name="glycemie"
                                                        class="form-control" placeholder="Entrer votre glycémie"
                                                        data-error="glycémie is required.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_poids">Poids</label>
                                                    <input id="form_poids" type="text" name="poids"
                                                        class="form-control" placeholder="Entrer votre poids"
                                                        data-error="poids is required.">

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_albuminerie">Albuminurie</label>
                                                    <input id="form_albuminerie" type="text" name="albuminurie"
                                                        class="form-control" placeholder="Entrer votre albuminerie"
                                                        data-error="albuminerie is required.">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_message">Observation </label>
                                                    <textarea id="form_message" name="observation" class="form-control" placeholder="Write your message here."
                                                        rows="4" data-error="Please, leave us a message."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_need">Type de diabète</label>
                                                    <select id="form_need" name="typeDiabete" class="form-control"
                                                        data-error="Please specify your need.">
                                                        <option value="" selected disabled>--Select Your Issue--
                                                        </option>
                                                        <option>type1</option>
                                                        <option>type2</option>
                                                        <option>gestationnel</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_need">Type de traitement du diabète</label>
                                                    <select id="form_need" name="traitement" class="form-control"
                                                        data-error="Please specify your need.">
                                                        <option value="" selected disabled>--Select Your Issue--
                                                        </option>
                                                        <option>Traitement</option>
                                                        <option>Régime</option>
                                                        <option>oral</option>
                                                        <option>injectable</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                                    style=" border-radius: 8px;">Cancel</button>
                                                <button type="submit" class="btn btn-primary"
                                                    style="background-color: #2b9db9; border-radius: 8px;">Ajouter</button>
                                            </div>

                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>



                </div>






            </div>
        </div>
    </div>







    <!--table-->

        <div class="row">
            <div class="col-md-offset-1 col-md-12">
                <table class="table table-striped mb-0 table-responsive  rounded"
                    style="text-overflow: ellipsis;  white-space: nowrap; table-layout: fixed;">
                    <thead style="background-color: #2b9db9; color: white; font-size: 1.08rem; top:0; position: sticky;">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">CIN</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">TA</th>
                            <th scope="col">Glycemie</th>
                            <th scope="col">Poids</th>
                            <th scope="col">Albuminurie</th>
                            <th scope="col">Observation</th>
                            <th scope="col">type Diabete</th>
                            <th scope="col">traitement du diabete</th>
                            <th scope="col" style="position: sticky; right: 0; z-index: 1; background-color: #2b9db9;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $patient)
                            <tr>
                                <td>{{ $patient->id }}</td>
                                <td>{{ $patient->cin }}</td>
                                <td>{{ $patient->name }}</td>
                                <td>{{ $patient->age }}</td>
                                <td>{{ $patient->address }}</td>
                                <td>{{ $patient->phone }}</td>
                                <td>{{ $patient->TA }}</td>
                                <td>{{ $patient->Glycemie }}</td>
                                <td>{{ $patient->poids }}</td>
                                <td>{{ $patient->Albuminurie }}</td>
                                <td>{{ $patient->Observation }}</td>
                                <td>{{ $patient->typeDiabete_id }}</td>
                                <td>{{ $patient->traitement_id }}</td>
                                <td style="position: sticky; right: 0; z-index: 1; background-color: #2b9db9;">

                                    <form action="{{ route('patient.destroy',$patient->id) }}" method="POST">
                                        <a class="btn btn-warning" href="{{ route('patient.edit', $patient->id) }}">
                                            <i class="fas fa-edit"></i> Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>
                                            Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach


                    </tbody>

                </table>
                <div class="d-flex justify-content-center mt-4">
                    {{ $patients->links() }}
                </div>
            </div>
        </div>

</div>
        <!--table-->



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js  "></script>
@endsection
