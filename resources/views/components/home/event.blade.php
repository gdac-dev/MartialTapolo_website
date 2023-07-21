<!-- ====== Cards Section Start -->
<section id="event" class="dark:bg-slate-800 pt-24 pb-16">
  <div class="container">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full px-4">
        <div class="text-center mx-auto mb-[60px] max-w-[490px]">
          <h2 class="font-bold text-3xl text-dark dark:text-gray-300 mb-4">
            Nos Evènements
          </h2>
          <p class="text-base text-body-color">
            Les créations et apparitions sont présentés dans ces videos en avant-première.
          </p>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap -mx-4">
      @foreach($Events as $event)
        <x-event-item :video-id="$event['videoId']" :title="$event['title']"
                               :description="$event['description']"></x-event-item>
      @endforeach
    </div>
    <div class="flex justify-center">
      <x-button-link href="https://www.youtube.com/@gdactech7836" target="_blank" class="rounded-lg">
        Voir tous les événements
      </x-button-link>
    </div>
  </div>
</section>
<!-- ====== Cards Section End -->