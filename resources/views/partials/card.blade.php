<a class="card card-comic"
          href="{{ route('products.comic_detail', ["id" => $comic['id']]) }}"
        >
          <div class="card-img-container">
            <img class="card-img-top" src="{{ $comic['thumb']}}" alt="">
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ $comic['series']}}</h5>
          </div>
        </a>