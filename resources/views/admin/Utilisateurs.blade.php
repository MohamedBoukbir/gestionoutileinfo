<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>

    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css"
        integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    {{-- <script>
        $(document).ready(function() {
            $('#exampleModal').modal('show');
        });
    </script> --}}

    <script>
        $(document).ready(function() {
      $('#example').DataTable({
          "language": {
              "sEmptyTable":     "Aucune donnée disponible dans le tableau",
              "sInfo":           "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
              "sInfoEmpty":      "Affichage de 0 à 0 sur 0 entrées",
              "sInfoFiltered":   "(filtré à partir de _MAX_ entrées au total)",
              "sInfoPostFix":    "",
              "sInfoThousands":  ",",
              "sLengthMenu":     "Afficher _MENU_ entrées",
              "sLoadingRecords": "Chargement...",
              "sProcessing":     "Traitement...",
              "sSearch":         "Rechercher :",
              "sZeroRecords":    "Aucun résultat trouvé",
              "oPaginate": {
                  "sFirst":    "Premier",
                  "sLast":     "Dernier",
                  "sNext":     "Suivant",
                  "sPrevious": "Précédent"
              },
              "oAria": {
                  "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                  "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
              }
          }
      });
  });
      </script>
  
  <style>
      #example thead th {
          text-align: center;
      }
  </style>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</head>

<body>
    {{-- !START NAVBAR --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-primary fw-bold" href="#">Gestion Des
                Utilisateurs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav active" aria-current="true">

                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-2">
                            <div class="fw-bold"><a href="#" style="text-decoration: none;">Group</a></div>
                         
                        </div>
                      
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start ms-5">
                        <div class="ms-2 me-2">
                            <div class="fw-bold"><a href="#" style="text-decoration: none;">
                                Outilinfo</a></div>
                        </div>
                      
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start ms-5">
                        <div class="ms-2 me-2">
                            <div class="fw-bold"><a href="#" style="text-decoration: none;">
                                    Atacher Outile a Utilisateur </a></div>
                        </div>
                       
                    </li>
                  
                </ul>
            </div>
            <div class=" justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                style="text-decoration: none;">
                                <i class="fa-solid fa-right-from-bracket"></i> {{ __('Se Déconnecter') }}
                            </x-dropdown-link>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- !END NAVBAR --}}

    {{-- !TABLE 1 --}}
    <div class="my-5 ms-5 me-5">
        <button type="button" class="btn btn-outline-success mb-1" data-bs-toggle="modal"
            data-bs-target="#AddModal">
            <i class="fa-solid fa-plus"></i> Ajouter Utilisateur
        </button>
        <table id="example" class="table table-hover table-bordered text-center table-responsive">
            <thead class="table table-light">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Cin</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->cin }}</td>
                        <td>{{ $user->adresse }}</td>
                        <td>
                    
                            <button type="button" class="btn btn-warning text-light" data-bs-toggle="modal"
                                data-bs-target="#updateModal{{ $user->id }}"><i
                                    class="fa-solid fa-pen"></i></button>
                            <button type="button" class="btn btn-danger text-light" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $user->id }}"><i
                                    class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    {{-- ! modals --}}
        
                    {{--  --}}
                    <div class="modal fade" id="deleteModal{{ $user->id }}" data-bs-backdrop="static"
                        tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true" data-bs-keyboard="false">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    @csrf
                                    <div class="modal-header">
                                        <h4 class="modal-title">
                                            {{ __('Supprimer Utilisateur') }}</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Voulez-vous supprimer l'utilisateur
                                        <b>{{ $user->nom." ".$user->prenom }}</b> ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn gray btn-outline-secondary"
                                            data-bs-dismiss="modal">{{ __('Anuller') }}</button>
                                        <button type="submit"
                                            class="btn gray btn-outline-danger">{{ __('Supprimer') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="modal modal-lg fade" id="updateModal{{ $user->id }}" data-bs-backdrop="static"
                        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
                        data-bs-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier Utilisateur</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('user.update', $user->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                     
                                        <div class="row">
                                            <div class="col-12 ">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="nom" class="form-label">Nom </label>
                                                        <input class="form-control" value="{{$user->nom}}" required  name="nom" type="text"
                                                            id="nom"  >
                                                        @error('nom')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="prenom" class="form-label">Prenom </label>
                                                        <input class="form-control" required value="{{$user->prenom}}"   name="prenom" type="text"
                                                            id="prenom"  >
                                                        @error('prenom')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="cin" class="form-label">Cin </label>
                                                        <input class="form-control" value="{{$user->cin}}"   required  name="cin" type="text"
                                                            id="cin"  >
                                                        @error('cin')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="adresse" class="form-label">Adresse </label>
                                                        <input class="form-control" value="{{$user->adresse}}"  required  name="adresse" type="text"
                                                            id="adresse"  >
                                                        @error('adresse')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                             {{-- <div class="row mt-2 "> --}}
                                            



                            
                                        </div>
                                      
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <button class="btn btn-success w-100" type="submit">Sauvegarder</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- !end  modals --}}
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- !END TABLE --}}

    <script>
        const textarea = document.getElementById('floatingTextarea2');
        const form = document.getElementById('myForm');
        textarea.addEventListener('keydown', function(event) {
            if (event.key === 'Enter' && !event.shiftKey) {
                event.preventDefault(); // Prevent line break
                form.submit(); // Submit the form
            }
        });
    </script>

    {{-- ?---------------------------- MODALS Produit ----------------------------? --}}
      {{-- ! modals --}}
                        {{--  --}}
                        <div class="modal modal-lg fade" id="AddModal" data-bs-backdrop="static"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
                            data-bs-keyboard="false">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter Utilisateur</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('user.add') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12 ">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="nom" class="form-label">Nom </label>
                                                            <input class="form-control" required  name="nom" type="text"
                                                                id="nom"  >
                                                            @error('nom')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="prenom" class="form-label">Prenom </label>
                                                            <input class="form-control" required  name="prenom" type="text"
                                                                id="prenom"  >
                                                            @error('prenom')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="cin" class="form-label">Cin </label>
                                                            <input class="form-control" required  name="cin" type="text"
                                                                id="cin"  >
                                                            @error('cin')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="adresse" class="form-label">Adresse </label>
                                                            <input class="form-control" required  name="adresse" type="text"
                                                                id="adresse"  >
                                                            @error('adresse')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                 {{-- <div class="row mt-2 "> --}}
                                                

    

                                
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <button class="btn btn-success w-100" type="submit">Sauvegarder</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- !end  modals --}}
    {{-- !---------------------------- END MODALS produit ----------------------------! --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>