
@extends('layouts.app')
@section('title','liste Empeunteurs')

@section('content')
    <div class="card-header">
        <h1>Liste des Emprunteur</h1>
    </div>
    <hr>
    <div class="row">
        <div class=" col-lg-4">
            <div class="table">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">matricule</th>
                            <th scope="col">prenom</th>
                            <th scope="col">Nom</th>
                            <th scope="col">code filiere</th>
                            <th scope="col">Type Employe</th>
                            <th scope="col">mot passe</th>
                            <th scope="col">telephone</th>
                            <th scope="col">Email</th>
                            <th>
                                <div class="d-flex justify-content-between mb-3">
                                    <a class="btn btn-dark"  href="{{ route('Emprunteurs.create') }}">Créer un nouvel Emprunteur</a>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Emprunteurs as $emprunteur)
                        <tr>
                            <td>{{ $emprunteur->matricule }}</td>
                            <td>{{ $emprunteur->nom }}</td>
                            <td>{{ $emprunteur->prenom }}</td>
                            <td>{{ $emprunteur->code_filiere }}</td>
                            <td>{{ $emprunteur->type_Employe }}</td>
                            <td>{{ $emprunteur->mot_passe }}</td>
                            <td>{{ $emprunteur->telephone }}</td>
                            <td>{{ $emprunteur->Email }}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-dark"href="{{ route('Emprunteurs.show', $emprunteur) }}">Voir</a>
                                    <a class="btn btn-dark" href="{{ route('Emprunteurs.edit', $emprunteur) }}">Modifier</a>
                                    <a class="btn btn-dark" href="#" onclick="confirmDelete('{{ $emprunteur->id }}')">Supprimer</a>
                                </div>
                                    <form id="delete-form-{{ $emprunteur->id }}" action="{{ route('Emprunteurs.destroy', $emprunteur) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
function confirmDelete(id) {
if (confirm("Êtes-vous sûr de vouloir supprimer cet employé?")) {
event.preventDefault();
document.getElementById('delete-form-' + id).submit();
}
}
</script>

@endsection