<section class="container">

    <h1 class="text-center m-5">Section NavBar et Hero</h1>
    
    <div class="container d-flex">
        <p>Nom de référence : {{$heroes->name}} </p><a class="ms-5" href="/hero/{{$heroes->id}} ">Modifier</a>
        
    </div>
    <a class="btn btn-success m-3 text-white" href="/text/create">Créer un Texte dynamique pour le Hero</a>
    <table class="table table-striped table-warning">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Texte dynamique à afficher dans Hero</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($texts as $text)
                <tr>
                    <th scope="row">{{ $text->id }} </th>
                    <td>{{ $text->text }} </td>
                    <td class="d-flex">
                        <form action="/text/delete/{{ $text->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-light text-danger mx-2">Supprimer</button>
                        </form>
                        <a class="btn btn-light text-info" href="/text/{{ $text->id }} ">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>