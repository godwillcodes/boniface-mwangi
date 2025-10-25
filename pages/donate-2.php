<?php
/**
 * Template Name: Donate 2
 * Description: 
 */
get_header();
// get_template_part( 'components/banner/primary' );
?>
<section class="shadow-sm">
    <div class="h-[500px] md:h-[400px] lg:h-[554px] relative"
        style="background-color: #0f6041;">
        <div class="absolute inset-0 flex items-end">
            <div class="container mx-auto w-full px-10 lg:px-0 pb-4 md:pb-12 lg:pb-12 text-white">
                <h1 class="text-2xl md:text-4xl lg:text-4xl font-bold" data-aos="fade-up" data-aos-delay="200">
                    <?php the_title(); ?>
                </h1>
                <p class="text-base lg:text-lg my-4 max-w-4xl" data-aos="fade-up" data-aos-delay="400">
                    Join our volunteer network and play a vital role in mobilizing communities, educating citizens, and safeguarding the electoral process.
                </p>
                <a href="/volunteer" class="inline-block bg-black text-white px-5 py-2 mt-4 font-bold text-lg shadow-md hover:bg-gray-800 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-gray-500 transition flex items-center">
                    I want to help
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<img src="/wp-content/uploads/2025/08/BM-TERRACE-BRANDING-Final-1_page-0001_11zon-1-scaled.jpg" class="w-full shadow-sm object-contain" alt="">

<section class="max-w-3xl mx-auto my-20 bg-gradient-to-b from-white to-gray-50 shadow-lg rounded-xl p-10 border border-gray-200">
  <!-- Header -->
  <div class="flex flex-col items-center text-center">
    <img src="/wp-content/uploads/2025/08/BM-LOCK-UP-3_BM-DARK-GREEN-2O27-scaled-e1756185917729.png" alt="Boniface Mwangi 2027" class="h-12 mb-4">
    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight mt-5">
      Dear friends of Boniface Mwangi,
    </h2>
    <p class="mt-5 text-gray-700 leading-relaxed max-w-2xl">
      We thank you so much for your consistent support, and look forward to collaborating 
      in the co-creation of the Kenya we want and deserve. Your donations towards our journey 
      ahead will be extremely appreciated, and we also look forward to hearing your ideas 
      as to the Kenya you dream of, and how we can work together to bring this dream into a reality.
    </p>
  </div>

  <!-- Divider -->
  <div class="my-10 border-t border-gray-300"></div>

  <!-- Bank Details -->
  <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm">
    <h3 class="text-lg font-bold text-red-600 flex items-center mb-4">
      <img src="https://www.absabank.co.ke/content/dam/kenya/absa/logos/absa-logo-bg.png" alt="ABSA" class="h-7 w-auto mr-2"> Bank Details
    </h3>
    <ul class="grid sm:grid-cols-2 gap-y-2 gap-x-6  text-gray-700 text-lg">
      <li><span class="font-semibold">Account Name:</span> BONIFACE MWANGI MWANZO MPYA</li>
      <li><span class="font-semibold">Account Number:</span> 2053955064</li>
      <li><span class="font-semibold">Bank Code:</span> 03</li>
      <li><span class="font-semibold">Branch Number:</span> 109</li>
      <li><span class="font-semibold">Branch Name:</span> Yaya</li>
      <li><span class="font-semibold">Sort Code:</span> 03109</li>
      <li><span class="font-semibold">SWIFT:</span> BARCKENX</li>
    </ul>
  </div>

  <!-- MPESA -->
  <div class="bg-green-50 rounded-lg border border-green-200 p-6 shadow-sm mt-8">
    <h3 class="text-lg font-bold text-green-700 flex items-center mb-4">
      <img src="https://www.m-pesa.africa/images/mpesa-logo.png" alt="M-PESA" class="h-7 w-auto mr-2"> M-PESA (Buy Goods)
    </h3>
    <ul class="space-y-2 text-lg text-gray-700">
      <li><span class="font-semibold">Till Number:</span> 5010215</li>
      <li><span class="font-semibold">Send Money:</span> Boniface Mwangi 0792788638</li>
      <li class="italic text-gray-500 text-xs">
        (Also usable with World Remit, Transferwise, Send Wave & other apps enabling card payments overseas)
      </li>
    </ul>
  </div>

  <!-- Call to Action -->
  <div class="mt-10 text-center">
    <p class="text-lg font-semibold text-gray-800">
      Thank you for your support!
    </p>
    <p class="text-2xl font-bold text-green-600 mt-1">Pamoja tunaweza!</p>
  </div>

  <!-- Footer -->
  <div class="mt-8 text-center text-sm text-gray-500">
    <p>
      Tel: <span class="font-medium">+254 117 777 111</span> | 
      <a href="mailto:hello@bonifacemwangi.com" class="hover:underline">hello@bonifacemwangi.com</a> | 
      <a href="https://bonifacemwangi.com" class="text-green-600 font-medium hover:underline">bonifacemwangi.com</a>
    </p>
  </div>
</section>

<?php
// get_template_part( 'components/common/cta' ); 
get_footer(); 
?>