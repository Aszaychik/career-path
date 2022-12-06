<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Career Path</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/f79ec98915.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <!-- Custom Style -->
    <style>
      .btn-sub {
        background: #a0c9ff;
      }
    </style>
  </head>

  <body>
    <main>
      <header>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="navId" role="tablist">
          <li class="nav-item">
            <a href="#tab1Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">Active</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#tab2Id">Action</a>
              <a class="dropdown-item" href="#tab3Id">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#tab4Id">Action</a>
            </div>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#tab5Id" class="nav-link" data-bs-toggle="tab">Another link</a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#" class="nav-link disabled" data-bs-toggle="tab">Disabled</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
          <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
          <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
          <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
          <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
        </div>

        <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
        <script>
          var triggerEl = document.querySelector("#navId a");
          bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
        </script>
      </header>

      <!-- Back -->
      <section class="mt-5 container d-flex align-items-center gap-3">
        <a name="" id="" class="btn btn-dark" href="#" role="button">
          <i class="fa-solid fa-arrow-left"></i>
        </a>
        <b>Lihat Pilihan Karir</b>
      </section>

      <!-- Main Content -->
      <p class="text-center fw-bold">Frontend Developer</p>
      <section class="container mt-5 d-grid gap-5">
        <!-- Topic 1 -->
        <div class="row align-items-center text-center">
          <article class="col-4">
            <ul class="d-flex flex-column gap-5 list-unstyled">
              <?php
              for($i = 1; $i <= 3; $i++):
              ?>
              <div>
                <li><button class="btn btn-sub p-3 rounded-1 text-black" data-bs-toggle="modal" data-bs-target="<?= "#modal-sub-topic-1-$i" ;?>"><?= "Sub Topic 1.$i";?></button></li>
                <!-- Modal -->
                <div class="modal fade" id="<?= "modal-sub-topic-1-$i" ;?>" tabindex="-1" aria-labelledby="<?= "modal-sub-topic-1-$i" ;?>Label" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="<?= "modal-sub-topic-1-$i" ;?>Label"><?= "Sub Topic 1.$i";?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a
                        aut?
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
              endfor
              ?>
            </ul>
          </article>
          <article class="col-4">
            <button class="btn btn-dark p-3 rounded-1">Topic 1</button>
          </article>
          <article class="col-4">
            <ul class="d-flex flex-column gap-5 list-unstyled">
            <?php
              for($i = 4; $i <= 6; $i++):
              ?>
              <div>
                <li><button class="btn btn-sub p-3 rounded-1 text-black" data-bs-toggle="modal" data-bs-target="<?= "#modal-sub-topic-1-$i" ;?>"><?= "Sub Topic 1.$i";?></button></li>
                <!-- Modal -->
                <div class="modal fade" id="<?= "modal-sub-topic-1-$i" ;?>" tabindex="-1" aria-labelledby="<?= "modal-sub-topic-1-$i" ;?>Label" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="<?= "modal-sub-topic-1-$i" ;?>Label"><?= "Sub Topic 1.$i";?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a
                        aut?
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
              endfor
              ?>
              </ul>
          </article>
        </div>

        <!-- Topic 2 -->
        <div class="row align-items-center text-center">
          <article class="col-4">
            <ul class="d-flex flex-column gap-5 list-unstyled">
              <?php
              for($i = 1; $i <= 2; $i++):
              ?>
              <div>
                <li><button class="btn btn-sub p-3 rounded-1 text-black" data-bs-toggle="modal" data-bs-target="<?= "#modal-sub-topic-2-$i" ;?>"><?= "Sub Topic 2.$i";?></button></li>
                <!-- Modal -->
                <div class="modal fade" id="<?= "modal-sub-topic-2-$i" ;?>" tabindex="-1" aria-labelledby="<?= "modal-sub-topic-2-$i" ;?>Label" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="<?= "modal-sub-topic-2-$i" ;?>Label"><?= "Sub Topic 2.$i";?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a
                        aut?
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
              endfor
              ?>
            </ul>
          </article>
          <article class="col-4">
            <button class="btn btn-dark p-3 rounded-1">Topic 2</button>
          </article>
          <article class="col-4">
            <ul class="d-flex flex-column gap-5 list-unstyled">
            <?php
              for($i = 3; $i <= 3; $i++):
              ?>
              <div>
                <li><button class="btn btn-sub p-3 rounded-1 text-black" data-bs-toggle="modal" data-bs-target="<?= "#modal-sub-topic-2-$i" ;?>"><?= "Sub Topic 2.$i";?></button></li>
                <!-- Modal -->
                <div class="modal fade" id="<?= "modal-sub-topic-2-$i" ;?>" tabindex="-1" aria-labelledby="<?= "modal-sub-topic-2-$i" ;?>Label" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="<?= "modal-sub-topic-2-$i" ;?>Label"><?= "Sub Topic 2.$i";?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a
                        aut?
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
              endfor
              ?>
              </ul>
          </article>
        </div>

        <!-- Topic 3 -->
        <div class="row align-items-center text-center">
          <article class="col-4">
            <ul class="d-flex flex-column gap-5 list-unstyled">
              <?php
              for($i = 1; $i <= 3; $i++):
              ?>
              <div>
                <li><button class="btn btn-sub p-3 rounded-1 text-black" data-bs-toggle="modal" data-bs-target="<?= "#modal-sub-topic-3-$i" ;?>"><?= "Sub Topic 3.$i";?></button></li>
                <!-- Modal -->
                <div class="modal fade" id="<?= "modal-sub-topic-3-$i" ;?>" tabindex="-1" aria-labelledby="<?= "modal-sub-topic-3-$i" ;?>Label" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="<?= "modal-sub-topic-3-$i" ;?>Label"><?= "Sub Topic 3.$i";?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a
                        aut?
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
              endfor
              ?>
            </ul>
          </article>
          <article class="col-4">
            <button class="btn btn-dark p-3 rounded-1">Topic 3</button>
          </article>
          <article class="col-4">
            <ul class="d-flex flex-column gap-5 list-unstyled">
            <?php
              for($i = 4; $i <= 5; $i++):
              ?>
              <div>
                <li><button class="btn btn-sub p-3 rounded-1 text-black" data-bs-toggle="modal" data-bs-target="<?= "#modal-sub-topic-3-$i" ;?>"><?= "Sub Topic 3.$i";?></button></li>
                <!-- Modal -->
                <div class="modal fade" id="<?= "modal-sub-topic-3-$i" ;?>" tabindex="-1" aria-labelledby="<?= "modal-sub-topic-3-$i" ;?>Label" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="<?= "modal-sub-topic-3-$i" ;?>Label"><?= "Sub Topic 3.$i";?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat qui laudantium quia neque magnam eveniet? Quia dolores optio ipsam distinctio veniam, in minima cum quisquam, voluptates exercitationem, inventore a
                        aut?
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
              endfor
              ?>
              </ul>
          </article>
        </div>
      </section>

      <p></p>
    </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  </body>
</html>
