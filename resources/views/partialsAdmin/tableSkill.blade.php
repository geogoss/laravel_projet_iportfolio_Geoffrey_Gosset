<section class="container">
    <h1 class="text-center m-5">Section SKILL</h1>
    <a class="btn btn-success m-3 text-white" href="/skill/create">Créer un skill</a>
    <table class="table table-striped table-success">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Skill Name</th>
                <th scope="col">Pourcentage</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skills as $skill)
                <tr>
                    <th scope="row">{{ $skill->id }} </th>
                    <td>{{ $skill->skillname }} </td>
                    <td>{{ $skill->pourcentage }} </td>
                    <td class="d-flex">
                        <form action="/skill/delete/{{ $skill->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-light text-danger mx-2">Supprimer</button>
                        </form>
                        <a class="btn btn-light text-info" href="/skill/{{ $skill->id }} ">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
