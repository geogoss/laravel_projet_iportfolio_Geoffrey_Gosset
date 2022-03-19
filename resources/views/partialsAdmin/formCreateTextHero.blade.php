<section id="about" class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h3 class="text-center text-white">Créer un Text dynamique pour le Hero</h3>
       
        <form class="w-75 mx-auto" action="/text/store " method="POST">
            @csrf
            <div class="mb-3">
              <label for="addSmallerInputName" class="form-label">Texte</label>
              <input name="text" type="text" class="form-control" id="addSmallerInputName"
                  aria-describedby="addSmallerInputNameHelp">
          </div>

          <button type="submit" class="btn btn-primary">Créer</button>
          </form>
    </div>
</section>
