@extends('layouts.main')
@section('container')
<link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/blog/">

    

<!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="row">
    <div class="col-12 mb-4">
        <img src="{{ asset('img/a5f0e031592e11b0d022e8a963140a43.jpg') }}" class="d-block rounded-3" height="600" width="100%"
                  alt="...">
    </div>
    <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Mantan 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
  </div>
    <div class="col-12">
            <Article>
                <h1 class="fw-bold mb-2">Layanan Pengaduan Masyarakat</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab facilis in est optio fugiat recusandae illum quasi vel reprehenderit, esse atque odio nostrum minima voluptatibus molestias nam id velit debitis praesentium eveniet eaque laboriosam. t vero qui soluta doloremque vitae animi consequuntur nulla, molestiae fugit nemo dolorum non voluptas.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam cum earum quidem? Ullam quibusdam sequi cupiditate laudantium hic natus atque et nulla id, illo necessitatibus? Porro minima sapiente aliquam quam quod accusamus ad nisi, qui maiores nobis molestiae provident nesciunt natus veniam nisi quae quam fugit esse est animi. Ullam, aperiam rem animi blanditiis nobis optio, adipisci soluta ducimus aut labore ratione, quae dolores suscipit sint ipsum provident.</p>
            </Article>
      
    </div>
    <div class="col-12">
        <a href="/aspirasi" class="btn btn-primary fw-bold">Yuk Ajukan Aspirasi</a>
    </div>
</div>
@endsection
