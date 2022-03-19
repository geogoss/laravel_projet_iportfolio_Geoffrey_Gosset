<section id="about" class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h1 class="text-center text-white">Modifier SKILL</h1>
       
        <form class="w-75 mx-auto" action="/text/update/{{$edit->id}} " method="POST">
            @csrf
            @method('PUT')  
            <div class="mb-3">
              <label for="addSmallerInputName" class="form-label">Texte</label>
              <input name="text" type="text" value="{{$edit->text}}" class="form-control" id="addSmallerInputName"
                  aria-describedby="addSmallerInputNameHelp">
          </div>

          <button type="submit" class="btn btn-primary">Modifier</button>
          </form>
    </div>
</section>
