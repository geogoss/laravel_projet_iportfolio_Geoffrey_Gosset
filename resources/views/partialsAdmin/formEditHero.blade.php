<section id="about" class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h1 class="text-center text-white">Modifier SKILL</h1>

        <form class="w-75 mx-auto" action="/hero/update/{{ $edit->id }} " method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Name</label>
                <input name="name" type="text" value="{{ $edit->name }}" class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Photo</label>
                <input name="img" type="text" value="{{ $edit->img }}" class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</section>
