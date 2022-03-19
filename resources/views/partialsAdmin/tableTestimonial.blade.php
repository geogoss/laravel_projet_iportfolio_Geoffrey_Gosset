<section class="container">
    <h1 class="text-center m-5">Section Testimonial</h1>
    <a class="btn btn-success m-3 text-white" href="/testimonial/create">Créer un Testimonial</a>
    <table class="table table-striped table-secondary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Texte</th>
                <th scope="col">Photo</th>
                <th scope="col">Nom</th>
                <th scope="col">Formation</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $testimonial)
                <tr>
                    <th scope="row">{{ $testimonial->id }} </th>
                    <td>{{ $testimonial->text }} </td>
                    <td>{{ $testimonial->img }} </td>
                    <td>{{ $testimonial->name }} </td>
                    <td>{{ $testimonial->formation }} </td>
                    <td>
                        <form action="/testimonial/{{ $testimonial->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-light text-danger mb-2">Supprimer</button>
                        </form>
                        <a class="btn btn-light text-info" href="/testimonial/{{ $testimonial->id }}/edit ">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
