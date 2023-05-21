<div class="container">
    <div class="card">
        <div class="card-header"><h4> Patient Data</h4></div>
        <div class="card-body">
            <div class="card-body">
                @foreach ($patients as $patient )


                <h5 class="card-title">Name : {{ $patient->name}}</h5>    
                <p class="card-text">CIN : {{ $patient->cin}}</p>
                <p class="card-text">Age : {{ $patient->age}}</p>
                <p class="card-text">Phone : {{ $patient->phone}}</p>
                <p class="card-text">Adresse : {{ $patient->address}}</p>
                <p class="card-text">TA : {{ $patient->TA}}</p>
                <p class="card-text">Glycémie : {{ $patient->glycemie}}</p>
                <p class="card-text">Poids : {{ $patient->poids}}</p>
                <p class="card-text">Albuminurie : {{ $patient->albuminurie}}</p>
                <p class="card-text">Observation : {{ $patient->observation}}</p>
                <p class="card-text">Type de diabète : {{ $patient->typeDiabte_id}}</p>
                <p class="card-text">Traitement du diabète : {{ $patient->traitement_id}}</p>
                @endforeach
            </div>

        </div>
    </div>
</div>
