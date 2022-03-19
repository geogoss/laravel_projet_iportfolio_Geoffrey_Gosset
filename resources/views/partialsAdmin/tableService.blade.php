<section class="container">
    <h1 class="text-center m-5">Section Service</h1>
    <a class="btn btn-success m-3 text-white" href="/service/create">Créer un Service</a>
    <table class="table table-striped table-info">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icone</th>
                <th scope="col">Titre</th>
                <th scope="col">Texte</th>
                <th scope="col">Délais</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <th scope="row">{{ $service->id }} </th>
                    <td>{{ $service->icone }} </td>
                    <td>{{ $service->title }} </td>
                    <td>{{ $service->text }} </td>
                    <td>{{ $service->delay }} </td>
                    <td>
                        <form action="/service/{{ $service->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-light text-danger mb-2">Supprimer</button>
                        </form>
                        <a class="btn btn-light text-info" href="/service/{{ $service->id }}/edit ">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
