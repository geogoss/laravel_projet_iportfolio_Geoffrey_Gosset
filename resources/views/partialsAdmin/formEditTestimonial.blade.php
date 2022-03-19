<section id="about" class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h3 class="text-center text-white">Modifier un élément du Testimonial</h3>

        <form class="w-75 mx-auto" action="/testimonial/{{ $testimonial->id }} " method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Texte</label>
                <input name="text" type="text" value="{{ $testimonial->text }}" class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Photo</label>
                <input name="img" type="text" value="{{ $testimonial->img }}" class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Nom</label>
                <input name="name" type="text" value="{{ $testimonial->name }}" class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Formation</label>
                <input name="formation" type="text" value="{{ $testimonial->formation }}" class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</section>
