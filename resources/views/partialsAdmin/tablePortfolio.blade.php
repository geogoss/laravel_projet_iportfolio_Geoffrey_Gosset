<section class="container">
    <h1 class="text-center m-5">Section PORTFOLIO</h1>
    <a class="btn btn-success m-3 text-white" href="/portfolio/create">Créer un élément du portfolio</a>
    <table class="table table-striped table-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">categorie</th>
                <th scope="col">img</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portfolios as $portfolio)
                <tr>
                    <th scope="row">{{ $portfolio->id }} </th>
                    <td>{{ $portfolio->categorie }} </td>
                    <td>{{ $portfolio->img }} </td>
                    <td class="d-flex">
                        <form action="/portfolio/{{ $portfolio->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-light text-danger mx-2">Supprimer</button>
                        </form>
                        <a class="btn btn-light text-info" href="/portfolio/{{ $portfolio->id }}/edit ">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
