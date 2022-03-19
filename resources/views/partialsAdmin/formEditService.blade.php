<section id="about" class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h3 class="text-center text-white">Modifier un Service</h3>
       
        <form class="w-75 mx-auto" action="/service/{{$service->id}} " method="POST">
            @csrf
            @method('PUT')  
            <div class="mb-3">
                <label for="addTreeInputLatin" class="form-label">Icone</label>
                <select name="icone" type="text" class="form-select" id="addTreeInputLatin"
                    aria-describedby="addTreeInputLatinHelp">
                    <option value="bi bi-briefcase" @if ($service->icone == 'bi bi-briefcase') ? selected : null @endif >Brief Case</option>
                    <option value="bi bi-card-checklist" @if ($service->icone == 'bi bi-card-checklist') ? selected : null @endif >Checklist</option>
                    <option value="bi bi-bar-chart" @if ($service->icone == 'bi bi-bar-chart') ? selected : null @endif >Chart</option>
                    <option value="bi bi-binoculars" @if ($service->icone == 'bi bi-binoculars') ? selected : null @endif >Binocular</option>
                    <option value="bi bi-brightness-high" @if ($service->icone == 'bi bi-brightness-high') ? selected : null @endif >Brightness</option>
                    <option value="bi bi-calendar4-week" @if ($service->icone == 'bi bi-calendar4-week') ? selected : null @endif >Calendar</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Titre</label>
                <input name="title" type="text" value="{{$service->title}} " class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Texte</label>
                <input name="text" type="text" value="{{$service->text}} " class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Délais</label>
                <input name="delay" type="number" value="{{ $service->delay }}" class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>

          <button type="submit" class="btn btn-primary">Modifier</button>
          </form>
    </div>
</section>
