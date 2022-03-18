<section>
    <table class="table table-striped table-danger">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Photo</th>
            <th scope="col">Titre</th>
            <th scope="col">Birthday</th>
            <th scope="col">Webside</th>
            <th scope="col">Phone</th>
            <th scope="col">City</th>
            <th scope="col">Age</th>
            <th scope="col">Degree</th>
            <th scope="col">Email</th>
            <th scope="col">Freelance</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($abouts as $about)
            <tr>
              <th scope="row">{{$about->id}} </th>
              <td>{{$about->img}} </td>
              <td>{{$about->title}} </td>
              <td>{{$about->birthday}} </td>
              <td>{{$about->website}} </td>
              <td>{{$about->phone}} </td>
              <td>{{$about->city}} </td>
              <td>{{$about->age}} </td>
              <td>{{$about->degree}} </td>
              <td>{{$about->email}} </td>
              <td>{{$about->freelance}} </td>
              <td>
                <a href="/about/{{$about->id}} ">Modifier</a>
              </td>
            </tr>   
            @endforeach
        </tbody>
      </table>
</section>