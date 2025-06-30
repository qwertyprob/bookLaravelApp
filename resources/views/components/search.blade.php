<div style="background-color: var(--blue-color-) !important; width: 100%;">
  <div class="container">
    <div class="content-wrapper">
      <div class="row px-0">
        <div class="col-12 py-4 px-0">
          <!-- Только для больших экранов -->
          <h1 class="display-2 d-none d-sm-block text-white">Попробуй найти
          <strong>{{Str::lower($search)}} !</strong>            
          </h1>
          <!-- Только для маленьких -->
          <h1 class="h2 d-block d-sm-none text-white">Попробуй найти
            <strong>{{Str::lower($search)}} !</strong>            
          </h1>
          <div class="search py-2 d-flex col-12 col-md-6">
            <input type="text" class="form-control" aria-describedby="inputGroup-sizing-sm" />
            <button type="button" class="btn btn-secondary ms-0 ">Найти</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
