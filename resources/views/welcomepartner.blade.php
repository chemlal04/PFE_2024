
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MCH-DOX</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
<style>
     html {
  scroll-behavior: smooth;
}
:root{
::-webkit-scrollbar{height:10px;width:10px}::-webkit-scrollbar-track{background:#efefef;border-radius:6px}::-webkit-scrollbar-thumb{background:#d5d5d5;border-radius:6px}::-webkit-scrollbar-thumb:hover{background:#c4c4c4}
</style>
</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal">
    <nav style="background: rgba(27, 1, 1, 0.151) ;" id="header" class="fixed w-full z-30 top-0 text-white">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
          <div class="pl-4 flex items-center">
            <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
              <!--Icon from: http://www.potlabicons.com/ -->
              <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
                <rect fill="#9a6aff" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
                <path
                  class="plane-take-off"
                  d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
                />
              </svg>
              MCH_VOYAGE
            </a>
          </div>
          <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center p-1 text-white hover:text-gray-800 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
              <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Accueil_Admin</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
              </svg>
            </button>
          </div>
          <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
               
                <li class="mr-3">
                    <a class="inline-block text-gray-800 no-underline hover:text-black hover:text-underline py-2 px-4" href="#details">Home</a>
                  </li>
              <li class="mr-3">
                <a class="inline-block text-gray-800 no-underline hover:text-black hover:text-underline py-2 px-4" href="#detail">Details_partenner</a>
              </li>
          <li>
            @if (Route::has('login'))
            <div  >
              @auth
              <a
                  href="{{ url('/dashboard') }}"
                  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
              >
                  Dashboard
              </a>
          @else
              <a
                  href="{{ route('login') }}"
                  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
              >
                  Log in
              </a>
  
              @if (Route::has('register'))
                  <a
                      href="{{ route('register') }}"
                      class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                  >
                      Register
                  </a>
              @endif
          @endauth
            </div>
        @endif
      </li>
      </ul>
          </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
      </nav>
	<!--Header-->
	<div id="details" class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('image/voyages-2.jpg'); height: 60vh; max-height:460px;">
			<div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
				<!--Title-->
					<p class="text-black font-extrabold text-3xl md:text-5xl">
						 MCH-DOX
					</p>
					<p class="text-xl md:text-2xl text-black">Welcome to my espace</p>
			</div>
		</div>
		
		<!--Container-->
		<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
			
			<div class="mx-0 sm:mx-6">
				
				<!--Nav-->
				<nav class="mt-0 w-full">
					<div class="container mx-auto flex items-center">
						<div class="flex w-1/2 justify-end content-center">		
							<a class="inline-block text-black no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar" data-tippy-content="@twitter_handle" href="https://twitter.com/intent/tweet?url=#">
								<svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path></svg>
							</a>
							<a class="inline-block text-black no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar" data-tippy-content="#facebook_id" href="https://www.facebook.com/sharer/sharer.php?u=#">
								<svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path></svg>
							</a>
						</div>

					</div>
				</nav>

				<div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
					
				<!--Lead Card-->
				<div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
					 
						<div class="w-full md:w-1/3 rounded-t">	
							<img src="image/tour-du-monde-768x823.jpg" class="h-full w-full shadow">
						</div>

						<div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
							<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
								<p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">	Welcome to MCH-DOX!</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">👋 Hello to your space</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
								
                                    We are delighted to invite airlines and hotels to join our platform, where you can showcase your aircraft and rooms to a global audience. At [Your Website Name], we strive to create a seamless and engaging experience for our users, and we believe that your offerings will greatly enhance the value of our platform.

                                    Why Register with Us?
                                    
                                    Global Exposure: Reach a wide audience looking for the best travel and accommodation options.
                                    User-Friendly Interface: Easily upload and manage your listings with our intuitive tools.
                                    Dedicated Support: Our team is here to assist you every step of the way.
                                    Marketing Opportunities: Benefit from our marketing efforts and promotional campaigns.		</p>
							</div>

							<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
								 
							</div>
						</div>

					 
				</div>
				<!--/Lead Card-->


				<!--Posts Container-->
				<div class="flex flex-wrap justify-between pt-12 -mx-6" id="detail">

					<!--1/3 col -->
					 
				
					
					<!--1/3 col -->
					<div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
								<img src="image/hotel-05.jpg" class="h-64 w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">Welcome to MCH-DOX , Esteemed Airline Partners!</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    We are thrilled to extend an invitation to your esteemed airline to join our premier platform. At [Your Website Name], we offer you an exceptional opportunity to showcase your aircraft and services to a global audience, enhancing your visibility and reach.
                                    
                                    Why Partner with Us?
                                    
                                    Global Reach: Display your fleet to a worldwide audience seeking reliable and luxurious air travel options.
                                    Seamless Integration: Our user-friendly platform allows for easy upload and management of your aircraft listings.
                                    Dedicated Support: Our team is committed to assisting you in optimizing your listings and responding to customer inquiries.
                                    Enhanced Visibility: Benefit from our targeted marketing efforts and promotional campaigns.
                                    How to Get Started:
                                    
                                    Register: Create an account on our platform.
                                    Showcase Your Fleet: Upload comprehensive details and high-quality images of your aircraft.
                                    Engage: Connect with potential customers and provide them with exceptional service.								</p>
							</a>
							</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							 
						</div>
					</div>

					<!--1/3 col -->
					<div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
								<img src="image/1800X-Voyages-en-avion-droits-et-recours.jpg" class="h-64 w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
								<div class="w-full  font-bold text-xl text-gray-900 px-6">Welcome to MCH_DOX , Valued Hotel Partners!</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									

We are delighted to invite your prestigious hotel to join our distinguished platform. At [Your Website Name], we provide a unique opportunity to showcase your rooms and services to a global audience, significantly enhancing your visibility and customer base.

Why Partner with Us?

International Exposure: Present your hotel rooms and amenities to travelers from around the world.
Easy-to-Use Platform: Our intuitive interface allows for effortless listing and management of your rooms.
Comprehensive Support: Our team is here to assist you with any needs, ensuring your listings attract maximum attention.
Increased Visibility: Leverage our extensive marketing and promotional activities to boost your brand’s presence.
How to Get Started:

Register: Sign up on our platform.
List Your Rooms: Provide detailed descriptions and stunning images of your accommodations.
Connect: Engage with prospective guests and respond to their inquiries promptly.
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							 
						</div>
					</div>
 
				</div>
				<!--/ Post Content-->
						
			</div>
			
			
				<!--Subscribe-->	
				<div class="container font-sans bg-green-100 rounded mt-8 p-4 md:p-24 text-center">
					<h2 class="font-bold break-normal text-2xl md:text-4xl">Welcome to MCH-DOX!</h2>
					<h3 class="font-bold break-normal font-normal text-gray-600 text-base md:text-xl">Take your space and start </h3>
					<div class="w-full text-center pt-4">
						<form action="#">
							<div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
								 
								<button type="submit" class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-green-400">@if (Route::has('login'))
                                    <div  >
                                      @auth
                                      <a
                                          href="{{ url('/dashboard') }}"
                                          class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                      >
                                          Dashboard
                                      </a>
                                  @else
                                      <a
                                          href="{{ route('login') }}"
                                          class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                      >
                                          Log in
                                      </a>
                                  @endauth
                                    </div>
                                @endif</button>
							</div>
						</form>
					</div>
				</div>
				<!-- /Subscribe-->
			
	
				 
			 
			
		</div>
	

	</div>


    <footer class="bg-green">
        <div class="container mx-auto px-8">
          <div class="w-full flex flex-col md:flex-row py-6">
            <div class="flex-1 mb-6 text-black">
              <a class="text-grey-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                <!--Icon from: http://www.potlabicons.com/ -->
                <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
                  <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
                  <path
                    class="plane-take-off"
                    d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
                  />
                </svg>
            MCH_V
              </a>
            </div>
            <div class="flex-1">
              <p class="uppercase text-gray-600 md:mb-6">Links</p>
              <ul class="list-reset mb-6">
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-black">FAQ</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-black">Help</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-black">Support</a>
                </li>
              </ul>
            </div>
            <div class="flex-1">
              <p class="uppercase text-gray-600 md:mb-6">Legal</p>
              <ul class="list-reset mb-6">
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-black">Terms</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-black">Privacy</a>
                </li>
              </ul>
            </div>
            <div class="flex-1">
              <p class="uppercase text-gray-600 md:mb-6">Social</p>
              <ul class="list-reset mb-6">
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-black">Facebook</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-black">Linkedin</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-black">Twitter</a>
                </li>
              </ul>
            </div>
            <div class="flex-1">
              <p class="uppercase text-gray-500 md:mb-6">Company</p>
              <ul class="list-reset mb-6">
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-black">Official Blog</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-black">About Us</a>
                </li>
                <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                  <a href="#" class="no-underline hover:underline text-gray-800 hover:text-black">Contact</a>
                </li>
              </ul>
            </div>
  
          </div>
          <!--Copyright section-->
    <div class="w-full bg-black/5 p-4 text-center text-black">
      © 2024 Copyright : MOUAD_DOX
    </div>
        </div>
      </footer>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
	<script>
		//Init tooltips
		tippy('.avatar')
	</script>
</body>
</html>
