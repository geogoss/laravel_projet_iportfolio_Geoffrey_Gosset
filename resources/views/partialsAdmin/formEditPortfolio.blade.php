<section id="about" class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h3 class="text-center text-white">Modifier un élément du Portfolio</h3>
       
        <form class="w-75 mx-auto" action="/portfolio/{{$portfolio->id}} " method="POST">
            @csrf
            @method('PUT')  
            <div class="mb-3">
              <label for="addSmallerInputName" class="form-label">Catégorie</label>
              <input name="categorie" type="text" value="{{$portfolio->categorie}}" class="form-control" id="addSmallerInputName"
                  aria-describedby="addSmallerInputNameHelp">
          </div>
            <div class="mb-3">
              <label for="addSmallerInputName" class="form-label">img</label>
              <input name="img" type="text" value="{{$portfolio->img}}" class="form-control" id="addSmallerInputName"
                  aria-describedby="addSmallerInputNameHelp">
          </div>

          <button type="submit" class="btn btn-primary">Modifier</button>
          </form>
    </div>
</section>
