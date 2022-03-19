<section id="about" class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h3 class="text-center text-white">Modifier un élément dans Contact</h3>

        <form class="w-75 mx-auto" action="/contact/{{ $contact->id }} " method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Adresse</label>
                <input name="location" type="text" value="{{ $contact->location }}" class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Email</label>
                <input name="email" type="text" value="{{ $contact->email }}" class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Phone</label>
                <input name="phone" type="text" value="{{ $contact->phone }}" class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">iFrame</label>
                <input name="iframe" type="text" value="{{ $contact->iframe }}" class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</section>
