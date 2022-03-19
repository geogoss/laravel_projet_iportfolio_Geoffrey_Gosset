  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>{{$heroes->name}} </h1>
      <p>I'm <span class="typed" data-typed-items="
        @foreach ($texts as $text )
          {{$text->text}},
        @endforeach
        "></span></p>
    </div>
  </section><!-- End Hero -->
