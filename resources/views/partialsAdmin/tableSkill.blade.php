
<section>
    <h1 class="text-center m-5">Section SKILL</h1>
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
              <th scope="row">{{$skill->id}} </th>
              <td>{{$skill->skillname}} </td>
              <td>{{$skill->pourcentage}} </td>
              <td>
                <a href="/skill/{{$skill->id}} ">Modifier</a>
              </td>
            </tr>   
            @endforeach
        </tbody>
      </table>
</section>