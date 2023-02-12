<div class="relative w-full flex gap-6 snap-x snap-mandatory overflow-x-auto pb-14">
    <?php foreach ($movies as $movie) : ?>
        <div class="snap-start w-36 h-auto shrink-0 first:pl-8 last:pr-8">
            <?php $img = Image::make("'https://image.tmdb.org/t/p/w500'"."'$movie->poster'") ?>
            <img class="w-full" src="{{$img->resize(150, 200)}}"/>
        </div>
    <?php endforeach; ?>
  </div>