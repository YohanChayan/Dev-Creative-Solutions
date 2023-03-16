@extends('layouts.app')

@section('content')
    <div class="row mt-4 justify-content-center">
        <div class="col-lg-8">
            <p class="fs-2 fw-bold text-center dev-creative-solutions-font text-special-orange"> Echale un vistazo a las
                funcionalidades que puedes implementarle a tu sistema personalizado: </p>
        </div>
    </div>

    <div class="row flex-column">

        <div class="accordion px-0" id="accordionExample">
            <div class="d-flex flex-column g-2">

                {{-- left --}}
                <div class="col-lg-8 m-4">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-aplicacion-de-procesos">
                            <button class="accordion-button collapsed d-block" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-aplicacion-de-procesos" aria-expanded="true"
                                aria-controls="collapse-aplicacion-de-procesos">
                                <p class="display-5 text-special-light fst-italic text-center">Aplicación de procesos</p>
                            </button>
                        </h2>
                        <div id="collapse-aplicacion-de-procesos" class="accordion-collapse collapse"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body accordion-content-bg-color bg-dark">
                                <p class="text-special-light fs-1 dev-creative-solutions-font">
                                    <span class="d-block fw-bold text-center border-bottom mb-5 text-success">Gestiona, eficienta y
                                        optimiza
                                        tus procesos!</span>
                                    It is shown by default, until the
                                    collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes
                                    control
                                    the
                                    overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                    this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about
                                    any
                                    HTML can
                                    go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </p>

                                <div class="d-flex justify-content-lg-around flex-sm-column flex-lg-row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make
                                                    up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make
                                                    up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make
                                                    up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                {{-- right --}}
                <div class="col-lg-8 m-4 align-self-lg-end">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-aplicacion-de-gestion-de-suministros">
                            <button class="accordion-button collapsed d-block" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-aplicacion-de-gestion-de-suministros" aria-expanded="false"
                                aria-controls="collapse-aplicacion-de-gestion-de-suministros">
                                <p class="display-5 text-special-light fst-italic text-center">Aplicación de gestión de suministros</p>
                            </button>
                        </h2>
                        <div id="collapse-aplicacion-de-gestion-de-suministros" class="accordion-collapse collapse"
                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark">
                                <p class="text-special-light fs-1 dev-creative-solutions-font">
                                    <span class="d-block fw-bold text-center border-bottom mb-5 text-success">Controla y supervisa tus
                                        recursos!</span>
                                    It is hidden by default, until
                                    the
                                    collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes
                                    control
                                    the
                                    overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                    this with
                                    custom CSS or overriding our default variables. It's also worth noting that just about
                                    any
                                    HTML can
                                    go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </p>
                                <div class="d-flex justify-content-lg-around flex-sm-column flex-lg-row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make
                                                    up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make
                                                    up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make
                                                    up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- left --}}
                <div class="col-lg-8 m-4">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-aplicacion-de-productividad">
                            <button class="accordion-button collapsed d-block" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-aplicacion-de-productividad" aria-expanded="false"
                                aria-controls="collapse-aplicacion-de-productividad">
                                <p class="display-5 text-special-light fst-italic text-center">Aplicación de productividad</p>
                            </button>
                        </h2>
                        <div id="collapse-aplicacion-de-productividad" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark">
                                <p class="text-special-light fs-1 dev-creative-solutions-font">
                                    <span class="d-block fw-bold text-center border-bottom mb-5 text-success">Automatizar tus funciones,
                                        es
                                        agiliza el trabajo!</span>
                                    It is hidden by default, until the
                                    collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes
                                    control
                                    the
                                    overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                    this
                                    with
                                    custom CSS or overriding our default variables. It's also worth noting that just about
                                    any
                                    HTML
                                    can
                                    go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </p>
                                <div
                                    class="d-flex justify-content-lg-around flex-sm-column flex-lg-row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make
                                                    up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make
                                                    up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make
                                                    up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- right --}}
                <div class="col-lg-8 m-4 align-self-lg-end">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-aplicacion-de-analisis-estadisticos">
                            <button class="accordion-button collapsed d-block" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-aplicacion-de-analisis-estadisticos" aria-expanded="false"
                                aria-controls="collapse-aplicacion-de-analisis-estadisticos">
                                <p class="display-5 text-special-light fst-italic text-center">Aplicación de Análisis estadísticos</p>
                            </button>
                        </h2>
                        <div id="collapse-aplicacion-de-analisis-estadisticos" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark">
                                <p class="text-special-light fs-1 dev-creative-solutions-font ">
                                    <span class="d-block fw-bold text-center border-bottom mb-5 text-success">Visualiza tus progresos
                                        con
                                        gráficas intuitivas</span>
                                    Monitorea el progreso y eficiencia de tus actividades de una manera rapida e intuitiva!
                                </p>
                                <p class="display-6 text-center text-success"> Demostraciones </p>
                                <div class="d-flex flex-column justify-content-lg-around align-items-center">
                                    {{-- demo facturas --}}
                                    <div class="col-sm-11 col-lg-8 text-center m-2 h-100">
                                        <img class="" src="{{ asset('img/demo_facturas.gif') }}" width="100%"
                                            height="100%" alt="Facturas">
                                    </div>
                                    {{-- demo tramites --}}
                                    <div class="col-sm-11 col-lg-8 text-center m-2 h-100">
                                        <img class="" src="{{ asset('img/demo_barraResumen.gif') }}" width="100%"
                                            height="100%" alt="Tramites">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- left --}}
                <div class="col-lg-8 m-4">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-aplicacion-orientadas-a-clientes">
                            <button class="accordion-button collapsed d-block" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-aplicacion-orientadas-a-clientes" aria-expanded="false"
                                aria-controls="collapse-aplicacion-orientadas-a-clientes">
                                <p class="display-5 text-special-light fst-italic text-center">Aplicación orientadas a clientes</p>
                            </button>
                        </h2>
                        <div id="collapse-aplicacion-orientadas-a-clientes" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark">
                                <p class="text-special-light fs-1 dev-creative-solutions-font ">
                                    <span class="d-block fw-bold text-center border-bottom mb-5 text-success">This is the third item's
                                        accordion
                                        body.</span> It is hidden by default, until the
                                    collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes
                                    control
                                    the
                                    overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                    this
                                    with
                                    custom CSS or overriding our default variables. It's also worth noting that just about
                                    any
                                    HTML
                                    can
                                    go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </p>
                                <div
                                    class="d-flex justify-content-lg-around flex-sm-column flex-lg-row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make
                                                    up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make
                                                    up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make
                                                    up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- right --}}
                <div class="col-lg-8 m-4 align-self-lg-end">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-aplicacion-sector-salud">
                            <button class="accordion-button collapsed d-block" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-aplicacion-sector-salud" aria-expanded="false"
                                aria-controls="collapse-aplicacion-sector-salud">
                                <p class="display-5 text-special-light fst-italic text-center">Aplicación sector Salud</p>
                            </button>
                        </h2>
                        <div id="collapse-aplicacion-sector-salud" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark">
                                <p class="text-special-light fs-1 dev-creative-solutions-font ">
                                    <span class="d-block fw-bold text-center border-bottom mb-5 text-success">This is the third item's
                                        accordion
                                        body.</span> It is hidden by default, until the
                                    collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes
                                    control
                                    the
                                    overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                    this
                                    with
                                    custom CSS or overriding our default variables. It's also worth noting that just about
                                    any
                                    HTML
                                    can
                                    go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </p>
                                <div
                                    class="d-flex justify-content-lg-around flex-sm-column flex-lg-row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make
                                                    up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make
                                                    up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make
                                                    up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- left --}}
                <div class="col-lg-8 m-4">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-aplicacion-financieras">
                            <button class="accordion-button collapsed d-block" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-aplicacion-financieras" aria-expanded="false"
                                aria-controls="collapse-aplicacion-financieras">
                                <p class="display-5 text-special-light fst-italic text-center">Aplicación financieras</p>
                            </button>
                        </h2>
                        <div id="collapse-aplicacion-financieras" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark">
                                <p class="text-special-light fs-1 dev-creative-solutions-font ">
                                    <span class="d-block fw-bold text-center border-bottom mb-5 text-success">This is the third item's
                                        accordion
                                        body.</span> It is hidden by default, until the
                                    collapse
                                    plugin adds the appropriate classes that we use to style each element. These classes
                                    control
                                    the
                                    overall
                                    appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                    this
                                    with
                                    custom CSS or overriding our default variables. It's also worth noting that just about
                                    any
                                    HTML
                                    can
                                    go
                                    within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </p>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Secondary card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection
