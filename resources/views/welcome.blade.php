<!-- resources/views/layouts/child.blade.php -->

    @extends ('layouts.app')


    @section ('content')
    <!-- Main -->
    <section id="main">
        <div class="container">

            @foreach ($postagens as $value )
            <article class="box post">
              <header>
                    <h2>{{ $value->titulo }}</h2>

                </header>
                <p>{!! $value->descricao!!}</p>
                </section>
            </article>

            @endforeach
            <!-- Content -->

        </div>
    </section>
    @endsection


