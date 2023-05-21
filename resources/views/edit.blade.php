
@extends('adminlte::page')

@section('title')
modifier pateint

@endsection

@section('content_header')

<h4>patients</h4>
@endsection

@section('content')
            <div class="modal-body" style="padding-top: 30px; padding-bottom: 30px">
                <div class="card mt-2 mx-auto p-4 bg-light" style="width: 120vh; margin-top: 30px">
                    <div class="text-center">
                        <h4>Modifier un patient</h4>
                    </div>

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{\Session::get('success') }}</p>
                        </div>
                    @endif




                    <div class="card-body bg-light">
                        <div class = "container " style="padding-top: 30px">
                            <form id="contact-form"  action="{{route('patient.update',$patient->id)}}" method="POST" >
                                @csrf
                                @method('PUT')

                            <div class="controls" style="font-weight: 500">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_id">CIN</label>
                                            <input id="form_id" type="text" name="cin" value="{{$patient->cin}}" class="form-control" placeholder="Entrer votre CIN" required="required" data-error="cin is required.">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Nom et prénom</label>
                                            <input id="form_name" type="text" name="name" value="{{$patient->name}}" class="form-control" placeholder="Entrer votre name" required="required" data-error="name is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_age">Age</label>
                                            <input id="form_age" type="text" name="age" value="{{$patient->age}}" class="form-control" placeholder="Entrer votre age" required="required" data-error="age is required.">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_phone">Téléphone</label>
                                            <input id="form_phone" type="text" name="phone" value="{{$patient->phone}}" class="form-control" placeholder="Entrer votre numéro" required="required" data-error="phone is required.">

                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_address">adresse</label>
                                            <input id="form_address" type="text" name="address" value="{{$patient->address}}" class="form-control" placeholder="Entrer votre adresse" required="required" data-error="address is required.">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_TA">TA</label>
                                                <input id="form_TA" type="text" name="TA" value="{{$patient->TA}}" class="form-control" placeholder="Entrer votre TA" data-error="TA is required.">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_glycémie">Glycémie</label>
                                                <input id="form_glycémie" type="text" name="glycemie" value="{{$patient->glycemie}}" class="form-control" placeholder="Entrer votre glycémie" data-error="glycémie is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_poids">Poids</label>
                                                <input id="form_poids" type="text" name="poids" value="{{$patient->poids}}" class="form-control" placeholder="Entrer votre poids" data-error="poids is required.">

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_albuminerie">Albuminurie</label>
                                                <input id="form_albuminerie" type="text" name="albuminurie" value="{{$patient->albuminurie}}" class="form-control" placeholder="Entrer votre albuminerie" data-error="albuminerie is required.">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_message">Observation </label>
                                                <textarea id="form_message" name="observation" value="{{$patient->observation}}" class="form-control" placeholder="Write your message here." rows="4" data-error="Please, leave us a message."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_need">Type de diabète </label>
                                                <select id="form_need" name="typeDiabete" value="{{$patient->typeDiabete_id}}" class="form-control" data-error="Please specify your need.">
                                                    <option value="" selected disabled>--Select Your Issue--</option>
                                                    <option >type1</option>
                                                    <option >type2</option>
                                                    <option >gestationnel</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_need">Type de traitement du diabète</label>
                                                <select id="form_need" name="traitement" value="{{$patient->Traitement_id}}" class="form-control" data-error="Please specify your need.">
                                                    <option value="" selected disabled>--Select Your Issue--</option>
                                                    <option >Traitement</option>
                                                    <option >Régime</option>
                                                    <option >oral</option>
                                                    <option >injectable</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                <div class="row">
                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-primary" style="background-color: #2b9db9; border-radius: 8px;">Update</button>
                                    </div>
                                </div>


                            </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>


@endsection





