<section id="about" class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h1 class="text-center text-white">Modifier ABOUT</h1>
       
        <form class="w-75 mx-auto" action="/update/{{$edit->id}} " method="POST">
            @csrf
            @method('PUT')  
            <div class="mb-3">
              <label for="addSmallerInputName" class="form-label">Photo</label>
              <input name="img" type="text" value="{{$edit->img}} " class="form-control" id="addSmallerInputName"
                  aria-describedby="addSmallerInputNameHelp">
          </div>
            <div class="mb-3">
              <label for="addSmallerInputName" class="form-label">Titre</label>
              <input name="title" type="text" value="{{$edit->title}}" class="form-control" id="addSmallerInputName"
                  aria-describedby="addSmallerInputNameHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">Birthday</label>
              <input name="birthday" type="text" value="{{$edit->birthday}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">Website</label>
              <input name="website" type="text" value="{{$edit->website}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">Phone</label>
              <input name="phone" type="text" value="{{$edit->phone}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">City</label>
              <input name="city" type="text" value="{{$edit->city}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">Age</label>
              <input name="age" type="text" value="{{$edit->age}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">Degree</label>
              <input name="degree" type="text" value="{{$edit->degree}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">Email</label>
              <input name="email" type="text" value="{{$edit->email}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">Freelance</label>
              <input name="freelance" type="text" value="{{$edit->freelance}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>

          <button type="submit" class="btn btn-primary">Modifier</button>
          </form>
    </div>
</section>
