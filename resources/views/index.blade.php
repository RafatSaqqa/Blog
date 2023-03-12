@include('User.head')
@include('User.navbar')


<div class="container">
    <div class="row">
    <div class="col">
    {{-- <h2 class="mx-auto text-center">Send enquiry</h2> --}}
  @if(session('message'))
    <div class='alert alert-success'>
    {{ session('message') }}
    </div>
  @endif
  @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
  @endif

  </div>
  </div>
  </div>
    <div class="bg-image"></div>

    <div class="bg-text">
        <h2>Welcome</h2>
        <h1 style="font-size:50px">I am Rafat Saqqa</h1>
        <p>I'm a Web Developer</p>

    </div>

    <div class="card text-center">
        <div class="card-header bg-white hed">
            <h1> RS</h1>
        </div>
        <div class="card-body">
            <img class="imgB" src="{{ asset('img/rafat.jpeg') }}"><br><br>
            <h5 class="card-title">Hello all good to have you here</h5>
            <p class="card-text">My name is Rafat Saqqa. I am a Full-Stack, Developer, and my time spend on creative
                stuff
                <br>My work is to build user friendly websites from scratch.
                <br>To get in touch with me.<br>
            </p>
            <a href="contact" class="btn btn-primary">Contact</a>
        </div>

        {{-- <img src="{{ asset('img/web.png')}}"> --}}

        <section class="s_three_columns o_cc o_cc1 pt112 pb0" data-vcss="001"
            data-oe-shape-data="{&#34;shape&#34;:&#34;web_editor/Origins/14_001&#34;,&#34;flip&#34;:[&#34;y&#34;]}"
            data-snippet="s_three_columns">
            <div class="o_we_shape o_web_editor_Origins_14_001 o_we_flip_y"></div>
            <div class="container">
                <div class="row d-flex align-items-stretch">
                    <div class="col-lg-4 s_col_no_bgcolor pt16 pb16">
                        <div class="card text-bg-white h-100" style="border-width: 0px !important;">
                            <img class="card-img-top" src="{{ asset('img/mis.png') }}" alt=""
                                data-shape="web_editor/solid/blob_1_solid_rd" data-original-mimetype="image/jpeg"
                                data-file-name="s_three_columns_default_image_1.svg" data-shape-colors=";o-color-1;;;"
                                loading="lazy" />
                            <div class="card-body">
                                <h3 class="card-title" style="text-align: center;">
                                    My mission
                                </h3>
                                <div class="s_hr text-start pb32 pt8" data-snippet="s_hr" data-name="Separator">
                                    <hr class="w-25 mx-auto"
                                        style="border-top: 5px dotted var(--o-color-2) !important;" />
                                </div>
                                <p class="card-text" style="text-align: center;">
                                    my aim is to make the early years of your life as enjoyable, rewarding and positive
                                    as possible.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 s_col_no_bgcolor pt16 pb16">
                        <div class="card text-bg-white h-100" style="border-width: 0px !important;">
                            <img class="card-img-top" src="{{ asset('img/1x1.png') }}" alt=""
                                data-shape="web_editor/line/oval_2_line" data-original-mimetype="image/jpeg"
                                data-file-name="s_three_columns_default_image_2.svg" data-shape-colors=";o-color-3;;;"
                                loading="lazy" />
                            <div class="card-body">
                                <h3 class="card-title" style="text-align: center;">
                                    For everyone
                                </h3>
                                <div class="s_hr text-start pb32 pt8" data-snippet="s_hr" data-name="Separator">
                                    <hr class="w-25 mx-auto"
                                        style="border-top: 5px dotted var(--o-color-1) !important;" />
                                </div>
                                <p class="card-text" style="text-align: center;">
                                    All activities are planned to meet each person's individual needs. This approach
                                    will help your people develop to the best of their ability.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 s_col_no_bgcolor pt16 pb16">
                        <div class="card text-bg-white h-100" style="border-width: 0px !important;">
                            <img class="card-img-top" src="{{ asset('img/sec2.jpg') }}" alt=""
                                data-shape="web_editor/solid/blob_3_solid_rd" data-original-mimetype="image/jpeg"
                                data-file-name="s_three_columns_default_image_3.svg" data-shape-colors=";;;;o-color-2"
                                loading="lazy" />
                            <div class="card-body">
                                <h3 class="card-title" style="text-align: center;">
                                    My journey
                                </h3>
                                <div class="s_hr text-start pb32 pt8" data-snippet="s_hr" data-name="Separator">
                                    <hr class="w-25 mx-auto"
                                        style="border-top: 5px dotted var(--o-color-2) !important;" />
                                </div>
                                <p class="card-text" style="text-align: center;">
                                    SOMETIMES YOU WIN , SOMETIMES YOU <del>LOSE</del><strong> Learn</strong>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>




        @include('User.footer')

        
