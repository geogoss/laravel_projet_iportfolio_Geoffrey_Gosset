<section id="about" class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h1 class="text-center text-white">Créer un Service</h1>

        <form class="w-75 mx-auto" action="/service " method="POST">
            @csrf
            <div class="mb-3">
                <label for="addTreeInputLatin" class="form-label">Icone</label>
                <select name="icone" type="text" class="form-select" id="addTreeInputLatin"
                    aria-describedby="addTreeInputLatinHelp">
                    <option value="bi bi-briefcase"><i class="bi bi-briefcase"></i>Brief Case</option>
                    <option value="bi bi-card-checklist"><i class="bi bi-card-checklist"></i>Checklist</option>
                    <option value="bi bi-bar-chart"><i class="bi bi-bar-chart"></i>Chart</option>
                    <option value="bi bi-binoculars"><i class="bi bi-binoculars"></i>Binocular</option>
                    <option value="bi bi-brightness-high"><i class="bi bi-brightness-high"></i>Brightness</option>
                    <option value="bi bi-calendar4-week"><i class="bi bi-calendar4-week"></i>Calendar</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Titre</label>
                <input name="title" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Texte</label>
                <input name="text" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Délais</label>
                <input name="delay" type="number" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>

            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</section>
