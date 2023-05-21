<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create new</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <!-- Styles -->
    <style>
        body {
    font-family:Arial, Helvetica, sans-serif;
}

h2 {
    margin-bottom: 40px;
    color: #2b9db9;
}

label {
    color: #333;
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    width: 80%;
    margin-left: 50%;
    background-color: #2b9db9;
}
.btn-send:hover{
    background-color: #0f83a0;
}
.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px;

}

.card{
	margin-left: 10px;
	margin-right: 10px;
}

    </style>

</head>

<body>



    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="fas fa-plus"></i>Ajouter</button>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style=" width:100vh;">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un nouveau patient</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">





              <div class="card mt-2 mx-auto p-4 bg-light">
                  <div class="card-body bg-light">

                  <div class = "container ">
                    <form id="contact-form" role="form" method="POST" action="{{route('patient.store')}}">

                        @csrf
                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_id">CIN</label>
                                        <input id="form_id" type="text" name="cin" class="form-control" placeholder="Entrer votre CIN">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Nom et prénom</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Entrer votre name" required="required" data-error="name is required.">
                                                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_age">Age</label>
                                        <input id="form_age" type="text" name="age" class="form-control" placeholder="Entrer votre age" required="required" data-error="age is required.">

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Téléphone</label>
                                        <input id="form_phone" type="text" name="phone" class="form-control" placeholder="Entrer votre numéro" required="required" data-error="phone is required.">

                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_address">adresse</label>
                                        <input id="form_address" type="text" name="address" class="form-control" placeholder="Entrer votre adresse" required="required" data-error="address is required.">
                                    </div>
                                </div>
                            </div>
                            <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_TA">TA</label>
                                            <input id="form_TA" type="text" name="TA" class="form-control" placeholder="Entrer votre TA" data-error="TA is required.">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_glycémie">Glycémie</label>
                                            <input id="form_glycémie" type="text" name="glycémie" class="form-control" placeholder="Entrer votre glycémie" data-error="glycémie is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_poids">Poids</label>
                                            <input id="form_poids" type="text" name="poids" class="form-control" placeholder="Entrer votre poids" data-error="poids is required.">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_albuminerie">Albuminerie</label>
                                            <input id="form_albuminerie" type="text" name="albuminerie" class="form-control" placeholder="Entrer votre albuminerie" data-error="albuminerie is required.">

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_message">Observation </label>
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" data-error="Please, leave us a message."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_need">Type de diabète </label>
                                            <select id="form_need" name="need" class="form-control" data-error="Please specify your need.">
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
                                            <select id="form_need" name="need" class="form-control" data-error="Please specify your need.">
                                                <option value="" selected disabled>--Select Your Issue--</option>
                                                <option >Traitement</option>
                                                <option >Régime</option>
                                                <option >oral</option>
                                                <option >gestationnel</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <br>
                            <div class="row">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" style="background-color: #2b9db9">Ajouter</button>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
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




        </div>








        
      </div>
    </div>
  </div>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js  ">

  </script>


</body>
</html>
