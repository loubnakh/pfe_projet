
@extends('layouts.app')
@section('title','liste ouvrage')

@section('content')
    <div class="card-header">
        <h1 class="">Liste des ouvrage</h1>
    </div>
    <hr>
    <div class="row">
        <div class=" col-lg-4">
            <div class="table">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">idouvrage</th>
                            <th scope="col">num_l_j</th>
                            <th scope="col">title_ouvrage</th>
                            <th scope="col">auteur</th>
                            <th scope="col">edition_date</th>
                            <th scope="col">support_accomp</th>
                            <th scope="col">quantite</th>
                            <th scope="col">recu_le</th>
                            <th scope="col">origine</th>
                            <th scope="col">code Secteur</th>
                            <th scope="col">observation</th>
                            <th>
                                <div class="d-flex justify-content-between mb-3">
                                    <a class="btn btn-warning"  href="{{ route('ouvrages.create') }}">Créer un nouvel Emprunteur</a>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                             @foreach($ouvrages as $ouvrage)
                        <tr>
                            <td>{{ $ouvrage->idouvrage }}</td>
                            <td>{{ $ouvrage->num_l_j }}</td>
                            <td>{{ $ouvrage->title_ouvrage }}</td>
                            <td>{{ $ouvrage->auteur }}</td>
                            <td>{{ $ouvrage->edition_date }}</td>
                            <td>{{ $ouvrage->support_accomp }}</td>
                            <td>{{ $ouvrage->quantite }}</td>
                            <td>{{ $ouvrage->recu_le }}</td>
                            <td>{{ $ouvrage->origine }}</td>
                            <td>{{ $ouvrage->code_secteur }}</td>
                            <td>{{ $ouvrage->observation }}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-dark"href="{{ route('ouvrages.show', $ouvrage) }}">Voir</a>
                                    <a class="btn btn-dark" href="{{ route('ouvrages.edit', $ouvrage) }}">Modifier</a>
                                    <a class="btn btn-dark" href="#" onclick="confirmDelete('{{ $ouvrage->id }}')">Supprimer</a>
                                </div>
                                    <form id="delete-form-{{ $ouvrage->id }}" action="{{ route('ouvrages.destroy', $ouvrage) }}" method="POST" style="display: none;">
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