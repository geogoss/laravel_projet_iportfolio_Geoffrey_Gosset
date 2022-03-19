<section class="container">
    <h1 class="text-center m-5">Section Contact</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Adresse</th>
                <th scope="col">email</th>
                <th scope="col">Phone</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody class="w-100">
            @foreach ($contacts as $contact)
                <tr class="w100">
                    <th scope="row">{{ $contact->id }} </th>
                    <td>{{ $contact->location }} </td>
                    <td>{{ $contact->email }} </td>
                    <td>{{ $contact->phone }} </td>
                    <td>
                        <a class="btn btn-light text-info" href="/contact/{{ $contact->id }}/edit ">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
