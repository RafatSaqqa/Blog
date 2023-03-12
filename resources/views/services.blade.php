@include('User.head')



@include('User.navbar')
<br>
<h1 style="text-align: center;">My work Flow</h1>
<br>
        <div class="accordion" id="accordionExample" style="margin:auto;width:70%">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Software documentation
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Software documentation is a way for engineers and programmers to describe their product and the process they used in creating it in formal writing.</strong>
                  Early computer users were sometimes simply given the engineers' or programmers' notes.
                     </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    database
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                   A database is <mark>an organized collection of structured information, or data,
                     typically stored electronically in a computer system.</mark>  A database is usually controlled by a database management system<strong> (DBMS)</strong>.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Responsive web design
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Responsive web design (RWD) is a web design approach to make web pages
                    that render well on all screen sizes and resolutions while ensuring good usability.</strong> It is the way to design for a multi-device web.

                </div>
              </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingRaf">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRaf" aria-expanded="false" aria-controls="collapseRaf">
                     Few steps to Start your first software development
                  </button>
                </h2>
                <div id="collapseRaf" class="accordion-collapse collapse" aria-labelledby="headingRaf" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <ol>
                        <li><strong>Crystallizing your vision.</strong></li>
                        <li><strong>Understanding your business.</strong></li>
                        <li><strong>Confronting business with technology.</strong></li>
                    </ol>
                  </div>
                </div>
              </div>



              <div class="accordion-item">
                <h2 class="accordion-header" id="headingRaf1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRaf1" aria-expanded="false" aria-controls="collapseRaf1">
                    Goals
                  </button>
                </h2>
                <div id="collapseRaf1" class="accordion-collapse collapse" aria-labelledby="headingRaf1" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Setting goals is the first milestone in project management. It should provide answers to the following questions:
                    <ol>

                        <li><strong>What will the project achieve? (Performance goal).</strong></li>
                        <li><strong>When and how will the outcome be achieved? (Time and resources goals).</strong></li>
                        <li><strong>How much will it cost? (Budget goal).</strong></li>
                    </ol>

                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingRaf2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRaf2" aria-expanded="false" aria-controls="collapseRaf2">
                    Defining the persona

                  </button>
                </h2>
                <div id="collapseRaf2" class="accordion-collapse collapse" aria-labelledby="headingRaf2" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    To design your persona, think about a number of characteristics (background information, including demographic and behavioral data, the person’s pains, gains and currently used solutions, along with a name, picture, and personal details) and answer the crucial questions:
                    <br> <strong>Why would the persona need your product?</strong>
                     <br> <strong>How would the persona benefit from it?</strong>
                         <br><strong>Which problems will your product solve?</strong>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingRaf3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRaf3" aria-expanded="false" aria-controls="collapseRaf3">
                      Planning
                  </button>
                </h2>
                <div id="collapseRaf3" class="accordion-collapse collapse" aria-labelledby="headingRaf3" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    It may be tempting to launch your project the very moment you come up with the sole idea of doing so but you need to realize that the time has not come yet. Instead of launching a project built with dreams and assumptions, take your time and focus on proper planning.

                  </div>
                </div>
              </div>


          </div>
          <br>
        @include('User.footer')
