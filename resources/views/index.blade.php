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
        <div class="item w-full "><img class="" src="https://voyage.qodeinteractive.com/wp-content/uploads/2016/04/home-1-slide-1.jpg" alt=""></div>
        <div class="item w-full "><img class="" src="https://voyage.qodeinteractive.com/wp-content/uploads/2016/04/home-1-slide-2.jpg" alt=""></div>
        <div class="item w-full "><img class="" src="https://voyage.qodeinteractive.com/wp-content/uploads/2016/04/home-1-slide-3.jpg" alt=""></div>
        <div class="item w-full "><img class="" src="https://voyage.qodeinteractive.com/wp-content/uploads/2016/04/home-1-slide-4.jpg" alt=""></div>
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

    <div class="prose max-w-none p-8 md:p-20 bg-white">
      <div class="flex gap-6 flex-col md:flex-row">
        <div class="flex-auto">
          <h1 class="font-medium text-[40px]">Deals & Discounts</h1>
          <span class="font-normal text-lg text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimentum elit egestas, libero dolor auctor tellus, eu consectetur neque elit quis.</span>
          <div class="flex flex-col gap-6 md:flex-row mt-10">
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
              <div class="relative border overflow-hidden">
                <img class="h-auto max-w-full m-0 align-middle" src="	https://voyage.qodeinteractive.com/wp-content/uploads/2016/04/tour-image-23-414x364.jpg" alt="">
                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-zinc-900"></div>
                <div class="absolute px-6 py-4">
                  <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex-none">
          <div class="w-full md:max-w-sm border overflow-hidden bg-white">
            <div class="px-10 py-8">
              <div class="font-medium text-[30px] border-b pb-5">Top Reviews</div>
              <div class="font-medium text-[26px] pt-3 pb-1">Italian Dream Tour</div>
              <div class="flex pt-0 gap-2">
                <span><i class="fas fa-star text-sm text-[#ef4b5e]"></i></span>
                <span><i class="fas fa-star text-sm text-[#ef4b5e]"></i></span>
                <span><i class="fas fa-star text-sm text-[#ef4b5e]"></i></span>
                <span><i class="fas fa-star text-sm text-[#ef4b5e]"></i></span>
                <span><i class="fas fa-star text-sm text-[#ef4b5e]"></i></span>
              </div>
              <p class="text-gray-700 text-base italic">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
              </p>
              <div class="flex items-center justify-start gap-2 pb-2">
                <div class="flex-none">
                  <img class="m-0 w-10 rounded-full" src="https://secure.gravatar.com/avatar/c72914d8f6c76ad02a2f5ef32e458804?s=74&d=mm&r=g" alt="">
                </div>
                <div class="flex-none">
                  <span class="font-bold text-base text-gray-600">Donald Owens</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="prose max-w-none text-center m-8 md:m-20">
      <h1 class="font-medium text-[40px]">Find Your Perfect Tour</h1>
      <span class="block font-normal text-lg text-gray-400">Nullam ac justo efficitur, tristique ligula a, pellentesque ipsum. Quisque augue ipsum, vehicula et tellus nec, maximus viverra metus. In sed viverra dui. Suspendisse laoreet velit at eros eleifend.</span>
      <span class="block font-normal text-lg text-gray-400 py-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimentum egestas, libero dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretium.</span>
      <a href="" class="inline-block bg-[#ef4b5e] px-10 py-4 text-base text-white no-underline font-semibold">VIE ALL TOURS</a>
    </div>

    <div class="video">
      <div class="owl-carousel owl-theme">
        <div class="item-video" data-merge="3"><a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ"></a></div>
      </div>
    </div>

    <div class="prose max-w-none text-center m-8 md:m-20">
      <h1 class="font-medium text-[40px]">Other Useful Information</h1>
      <span class="font-normal text-lg text-gray-400">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</span>
    </div>

    <div class="prose max-w-none text-center m-8 md:m-20">
      <h1 class="font-medium text-[40px]">Interesting Facts</h1>
      <span class="font-normal text-lg text-gray-400">Nullam ac justo efficitur, tristique ligula a, pellentesque ipsum. Quisque augue ipsum, vehicula et tellus nec, maximus viverra metus. In sed viverra dui. Suspendisse laoreet velit at eros eleifend.</span>
    </div>

    <div class="flex flex-col md:flex-row items-center justify-space-between bg-[#383838] px-8 md:px-20">
      <div class="flex-auto text-center md:text-left pt-10 pb-0 md:py-12">
        <p class="m-0 text-2xl text-white font-light">It’s Time For a New Adventure! Don’t Wait Any Longer. Contact us!</p>
      </div>
      <div class="flex-auto text-center md:text-right py-12">
        <a href="" class="bg-[#ef4b5e] px-8 py-4 text-lg text-white font-semibold">BOOK DESTINATIONS</a>
      </div>
    </div>

    @include('components._footer')

    @include('components._script')
    <script>
      $(document).ready(function() {
        $("#btn-nav, .hidden").click(function(){
          $("#nav").toggle(500);
        });

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
      });
    </script>
  </body>
</html>
