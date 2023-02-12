<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Voyage</title>
    @include('components._meta')
  </head>
  <body>
    @include('components._nav')
    
    <div class="main-content relative">
      <div class="owl-carousel owl-theme">
        <div class="item w-full h-30 bg-blue-800"><img class="h-30" src="https://voyage.qodeinteractive.com/wp-content/uploads/2016/04/parallax-1.jpg" alt=""></div>
        <div class="item w-full bg-blue-800"><h4>2</h4></div>
        <div class="item w-full bg-blue-800"><h4>3</h4></div>
        <div class="item w-full bg-blue-800"><h4>4</h4></div>
        <div class="item w-full bg-blue-800"><h4>5</h4></div>
      </div>
      <div class="owl-theme">
        <div class="owl-controls">
          <div class="custom-nav owl-nav"></div>
        </div>
      </div>
    </div>

    <div class="prose max-w-none text-center m-8 md:m-20">
      <h1 class="font-medium text-[40px]">Most Popular Tours</h1>
      <span class="font-normal text-lg text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimentum egestas, libero dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretium.</span>
    </div>

    <div class="owl-carousel owl-theme">
      <div class="item"><h4>1</h4></div>
      <div class="item"><h4>2</h4></div>
      <div class="item"><h4>3</h4></div>
      <div class="item"><h4>4</h4></div>
      <div class="item"><h4>5</h4></div>
    </div>

    <div class="prose max-w-none m-8 md:m-20">
      <div class="flex gap-4 flex-col md:flex-row">
        <div class="flex-auto">
          <h1 class="font-medium text-[40px]">Deals & Discounts</h1>
          <span class="font-normal text-lg text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimentum elit egestas, libero dolor auctor tellus, eu consectetur neque elit quis.</span>
          <div class="flex flex-col gap-4 md:flex-row mt-10">
            <div class="flex-auto">
              <div class="relative border overflow-hidden">
                <img class="h-auto max-w-full m-0 align-middle" src="https://voyage.qodeinteractive.com/wp-content/uploads/2016/04/tour-image-22-414x364.jpg" alt="">
                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-zinc-900"></div>
                <div class="absolute px-6 py-4">
                  <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
              </div>
            </div>
            <div class="flex-auto">
              <div class="max-w-sm border overflow-hidden">
                <!-- <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains"> -->
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex-none">
          <div class="max-w-sm border overflow-hidden">
            <div class="px-10 py-8">
              <div class="font-medium text-[30px] divide-y divide-dashed">Top Reviews</div>
              <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
              </p>
            </div>
            <div class="px-6 pt-4 pb-2">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="prose max-w-none text-center m-8 md:m-20">
      <h1 class="font-medium text-[40px]">Find Your Perfect Tour</h1>
      <span class="font-normal text-lg text-gray-400">Nullam ac justo efficitur, tristique ligula a, pellentesque ipsum. Quisque augue ipsum, vehicula et tellus nec, maximus viverra metus. In sed viverra dui. Suspendisse laoreet velit at eros eleifend.</span>
    </div>

    <div class="video">
      <div class="owl-carousel owl-theme">
        <div class="item-video" data-merge="3"><a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ"></a></div>
      </div>
    </div>


    @include('components._footer')

    @include('components._script')
    <script>
      $('.main-content .owl-carousel').owlCarousel({
        margin: 10,
        nav: true,
        dots: false,
        loop: true,
        navText: ['<i class="fas fa-chevron-left text-5xl text-gray-200" aria-hidden="true"></i>', '<i class="fas fa-chevron-right text-5xl text-gray-200" aria-hidden="true"></i>'],
        navContainer: '.main-content .custom-nav',
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      });

      $('.video .owl-carousel').owlCarousel({
        items:1,
        merge:true,
        loop:false,
        dots: false,
        margin:10,
        video:true,
        lazyLoad:true,
        center:true,
        responsive:{
          480:{
              items: 1
          },
          600:{
              items: 1
          }
        }
    })
    </script>
  </body>
</html>
