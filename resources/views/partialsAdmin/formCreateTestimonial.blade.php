<section id="about" class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h1 class="text-center text-white">Créer un élément du Testimonial</h1>

        <form class="w-75 mx-auto" action="/testimonial " method="POST">
            @csrf
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Texte</label>
                <input name="text" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Photo</label>
                <input name="img" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Nom</label>
                <input name="name" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Formation</label>
                <input name="formation" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>

            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</section>
