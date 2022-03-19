<section id="about" class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h1 class="text-center text-white">Créer un SKILL</h1>

        <form class="w-75 mx-auto" action="/skill/store " method="POST">
            @csrf
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Skill Name</label>
                <input name="skillname" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Pourcentage</label>
                <input name="pourcentage" type="number" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>

            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</section>
