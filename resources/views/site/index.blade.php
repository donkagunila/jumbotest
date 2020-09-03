@extends('layouts.master')

@section('title', 'Home')

@section('contents')

 
    <section>
      <div class="flickity-button-white flickity-button-inset" data-flickity='{"imagesLoaded": true, "wrapAround": true, "pageDots": false, "setGallerySize": false}'>
        <div class="w-100 h-100">
          
          <!-- Image -->
          <img src="{{ asset('assets/img/covers/cover-2.png') }}" class="img-fluid w-100" alt="...">

         

        </div>

        <div class="w-100 h-100">
          
          <!-- Image -->
          <img src="{{ asset('assets/img/covers/cover-1.jpg') }}" class="img-fluid w-100" alt="...">

        </div>

        <div class="w-100 h-100">
          
          <!-- Image -->
          <img src="{{ asset('assets/img/covers/cover-3.jpg') }}" class="img-fluid w-100" alt="...">

        </div>

      </div>
    </section>


     <section class="pt-8 pt-md-11 pb-10">
      <div class="container-app">

        <div class="row justify-content-center">
          <div class="col-md-12 text-center">
            
            <!-- Badge -->
            <span class="badge badge-pill badge-primary-soft mb-3">
              <span class="h6 text-uppercase">Our Companies</span>
            </span>
            
            <!-- Heading -->
            <h2 class="font-weight-bold">
              Jambo Group of companies Limited
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-5">
              We have a range of companies providing you products and services with an assured quality.
            </p>

          </div>
          </div>





        <div class="row">

  


          <div class="col-12 col-md-12 mb-5 mb-md-0">
        
            <!-- Images -->
            <div class="row">

              <div class="col-md-3">
                <div class="card">
                   <img src="{{ asset('assets/img/photos/photo-1.jpg') }}" alt="..." class="img-fluid">
                  <div class="card-body">
                    <span>
                      Jambo food products
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card">
                   <img src="{{ asset('assets/img/photos/photo-1.jpg') }}" alt="..." class="img-fluid">
                  <div class="card-body">
                    <span>
                      Jambo food products
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card">
                   <img src="{{ asset('assets/img/photos/photo-1.jpg') }}" alt="..." class="img-fluid">
                  <div class="card-body">
                    <span>
                      Jambo food products
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card">
                   <img src="{{ asset('assets/img/photos/photo-1.jpg') }}" alt="..." class="img-fluid">
                  <div class="card-body">
                    <span>
                      Jambo food products
                    </span>
                  </div>
                </div>
              </div>


             
            </div> <!-- / .row -->

          </div>
          
        </div> <!-- / .row -->
      </div> <!-- / .container -->
     </section>




 <!-- BLOG
    ================================================== -->
    <section class="py-8 py-md-11 bg-gradient-light border-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Badge -->
            <span class="badge badge-pill badge-primary-soft mb-3">
              <span class="h6 text-uppercase">Our blog</span>
            </span>

            <!-- Heading -->
            <h1>
              Stay up to date with rentals.
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7 mb-md-9">
              We share common trends and strategies for improving your rental income and making sure you stay in high demand.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 d-flex">
            
            <!-- Card -->
            <a class="card text-reset text-decoration-none shadow-light-lg lift lift-lg mb-6 mb-lg-0 overlay overlay-black overlay-30 bg-cover pt-13 pt-lg-0" style="background-image: url(assets/img/photos/photo-1.jpg);" href="#!">

              <!-- Body -->
              <div class="position-relative card-body d-flex flex-column">

                <!-- Heading -->
                <h3 class="text-white mt-auto">
                  Using Unsplash to improve your listing visibility
                </h3>

                <!-- Text -->
                <p class="text-white mb-5">
                  Using free stock photos of your surrounding areas can skyrocket your popularity.
                </p>

                <!-- Meta -->
                <div class="row pt-5 border-top border-white-20">
                  <div class="col">
                    
                    <!-- Author -->
                    <h6 class="text-uppercase text-white-70 mb-0">
                      Casey Fyfe
                    </h6>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Date -->
                    <p class="h6 text-uppercase text-white-70 mb-0">
                      <time datetime="2018-05-02">May 02</time>
                    </p>

                  </div>
                </div> <!-- / .row -->
                
              </div>
              
            </a>

          </div>
          <div class="col-12 col-md-6 col-lg-4 d-flex">
            
            <!-- Card -->
            <a class="card text-reset text-decoration-none shadow-light-lg lift lift-lg mb-6 mb-lg-0" href="#!">

              <!-- Image -->
              <img src="assets/img/photos/photo-7.jpg" alt="..." class="card-img-top">

              <!-- Body -->
              <div class="card-body">

                <!-- Heading -->
                <h3>
                  Photos should appeal to a sense of adventure
                </h3>

                <!-- Text -->
                <p class="text-muted mb-5">
                  Cozy vibes are out and this summer you should focus on making customer's feel brave.
                </p>
                
                <!-- Meta -->
                <div class="row mt-auto pt-5 border-top">
                  <div class="col">
                    
                    <!-- Author -->
                    <h6 class="text-uppercase text-muted mb-0">
                      Danny Devito
                    </h6>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Date -->
                    <p class="h6 text-uppercase text-muted mb-0">
                      <time datetime="2018-05-02">May 02</time>
                    </p>

                  </div>
                </div> <!-- / .row -->
                
              </div>
            </a>

          </div>
          <div class="col-12 col-lg-4 d-flex">
            
            <!-- Card -->
            <a class="card text-reset text-decoration-none shadow-light-lg lift lift-lg" href="#">

              <!-- Body -->
              <div class="card-body d-flex flex-column">

                <!-- Heading -->
                <h3 class="mt-auto">
                  It's the little touches that make memories.
                </h3>

                <!-- Text -->
                <p class="text-muted mb-5">
                  Once you have your rental posted, you should focus on how you can differentiate your home with little touches. Chocolates, specialty coffee, fast wifi, nice toiletries, or a personal note. Small touches can make a huge difference.
                </p>

                <!-- Meta -->
                <div class="row mt-auto pt-5 border-top">
                  <div class="col">
                    
                    <!-- Author -->
                    <h6 class="text-uppercase text-muted mb-0">
                      Dave Gamache
                    </h6>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Date -->
                    <p class="h6 text-uppercase text-muted mb-0">
                      <time datetime="2018-05-02">May 02</time>
                    </p>

                  </div>
                </div> <!-- / .row -->
                
              </div>

            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>



     <section class="pt-10 pt-md-12">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Heading -->
            <h2>
                sijuui
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7 mb-md-9">
              here apana si kwasaabu sielewi 
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row no-gutters position-relative bg-white rounded">
          <div class="col-12 col-md-6">

            <!-- Slider (mobile) -->
            <div class="d-md-none" data-flickity='{"fade": true, "imagesLoaded": true, "pageDots": false, "prevNextButtons": false, "asNavFor": "#testimonialsCopy", "draggable": false}'>
              <div class="w-100">
                
                <!-- Image -->
                <img src="assets/img/photos/photo-1.jpg" class="img-fluid rounded-top d-md-none" alt="...">

              </div>
              <div class="w-100">
                
                <!-- Image -->
                <img src="assets/img/photos/photo-26.jpg" class="img-fluid rounded-top d-md-none" alt="...">
                
              </div>
            </div>
            
            <!-- Slider -->
            <div class="h-100 d-none d-md-block" data-flickity='{"fade": true, "imagesLoaded": true, "pageDots": false, "prevNextButtons": false, "asNavFor": "#testimonialsCopy", "draggable": false, "setGallerySize": false}'>
              <div class="w-100"  style="height: 420px !important;">
                
                <!-- Image -->
                <div class="w-100 h-100 bg-cover rounded-left" style="background-image: url(assets/img/photos/photo-1.jpg); " style="height: 100px !important;">

                  <!-- Shape -->                 
                  <div class="shape shape-right shape-fluid-y svg-shim text-white">
                    <svg viewBox="0 0 58 345" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M58 0H51C76 212 0 345 0 345H58V0Z" fill="currentColor"/>
                    </svg>

                  </div>

                </div>

              </div>
              <div class="w-100">
                
                <!-- Image -->
                <div class="w-100 bg-cover rounded-left" style="background-image: url(assets/img/photos/photo-2.png);">
                  
                  <!-- Shape -->                 
                  <div class="shape shape-right shape-fluid-y svg-shim text-white">
                    <svg viewBox="0 0 58 345" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M58 0H51C76 212 0 345 0 345H58V0Z" fill="currentColor"/>
                    </svg>

                  </div>

                </div>

              </div>
            </div>

          </div>
          <div class="col-12 col-md-6 position-static">
            
            <!-- Slider -->
            <div class="position-static" data-flickity='{"wrapAround": true, "pageDots": false, "imagesLoaded": true, "adaptiveHeight": false}' id="testimonialsCopy">
              <div class="w-100">
                
                <!-- Blockquote -->
                <blockquote class="blockquote py-7 py-md-9 px-6 pr-md-9 pl-md-6 mb-0 rounded-right text-center">

                  <div class="row justify-content-center mb-5 mb-md-7">
                    <div class="col-6 col-sm-4 col-md-7 col-lg-5">
                      
                      <!-- Logo -->
                      <div class="img-fluid svg-shim" style="color: #FF5A5F;">
                          Facebook
                      </div>

                    </div>
                  </div> <!-- / .row -->
                  
                  <!-- Text -->
                  <p class="mb-5 mb-md-7">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis eos, distinctio delectus, ut esse, ipsa qui sequi quasi officia, 
                  </p>

                  <!-- Footer -->
                  <footer class="blockquote-footer">
                    <span class="h6 text-uppercase">Dave Gamache</span>
                  </footer>

                </blockquote>

              </div>
              <div class="w-100">
                
                <!-- Blockquote -->
                <blockquote class="blockquote py-7 py-md-9 px-6 pr-md-9 pl-md-6 mb-0 rounded-right text-center">

                  <div class="row justify-content-center mb-5 mb-md-7">
                    <div class="col-6 col-sm-4 col-md-7 col-lg-5">
                      
                      <!-- Logo -->
                      <div class="img-fluid svg-shim" style="color: #3F5D87;">
                        <svg viewBox="0 0 2761 991" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="instagram" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(130.000000, 198.000000)" fill="currentColor" fill-rule="nonzero" id="Shape">
                                    <path d="M143.497142,0.251252504 C120.634256,0.251252504 90.9945866,24.495521 73.5095841,40.6341758 C35.0686047,74.7558316 0.251252504,137.498637 0.251252504,187.859048 C0.251252504,259.418179 61.1096718,286.430218 76.5025801,286.430218 C81.5776602,286.430218 85.9044914,283.812597 85.9044914,276.925704 C85.9044914,271.5278 82.4810645,267.035804 79.0751552,262.421185 C64.981047,240.874616 60.4540155,220.311533 60.4540155,192.57627 C60.4540155,134.750887 87.1232113,81.7478306 109.245356,57.493552 C113.324439,53.1041583 122.541165,43.6221668 125.298925,43.6221668 C128.036666,43.6221668 128.714845,45.8518988 128.714845,52.7437975 L126.144772,431.225157 C126.144772,490.391883 109.072683,513.89541 109.072683,527.826856 C109.072683,533.947983 111.722836,535.537074 116.782901,535.537074 C140.741884,535.537074 164.618284,506.335343 171.382555,495.684681 C192.358552,459.453414 197.503702,431.170102 197.503702,349.588439 L197.503702,31.5500826 C197.503702,22.9414654 195.088785,19.2202405 186.910599,13.9124273 C174.951127,6.31732464 161.24741,0.251252504 143.497142,0.251252504 Z M828.54037,1.30730962 C817.27159,1.30730962 812.454268,7.1982064 811.921234,25.4264529 L809.421232,100.902004 L743.412657,98.6147143 C739.408649,98.5121116 737.599338,99.7783792 735.847584,103.296901 C730.241973,113.807422 727.29152,122.043166 727.29152,135.756894 C727.29152,146.923071 732.354087,148.114263 736.868606,148.114263 L805.547354,150.086237 L805.337143,294.283078 C805.337143,324.866192 786.037825,364.540906 751.793546,397.538937 C751.793546,397.538937 754.738995,387.576465 754.571327,377.123502 C754.571327,347.536385 735.529766,320.724546 710.144355,301.750553 L648.184834,255.138895 C661.172835,240.113855 683.177362,210.314025 683.177362,185.151337 C683.177362,165.641808 670.910082,157.446105 648.042191,157.446105 C615.767384,157.446105 578.337417,187.005694 578.337417,230.847079 C578.337417,246.828076 585.447033,261.212475 596.255353,272.213487 C581.332915,300.526828 560.21928,337.779118 544.541087,364.308173 C532.699233,384.621007 512.66668,415.742159 500.814817,415.742159 C492.076069,415.742159 488.037026,401.993396 488.037026,349.170521 C488.037026,305.28409 491.155147,257.568827 492.719213,211.767981 C492.719213,201.269972 490.997489,191.585278 477.368847,182.090774 C464.831297,174.057733 449.348299,162.839003 433.399834,162.839003 C397.944343,162.839003 373.790165,195.464161 357.221079,227.366094 C340.073915,260.429191 330.802134,288.292081 317.72154,328.717547 L319.165486,189.590781 C319.610932,179.670852 317.105924,175.819496 309.167978,172.443617 C298.87017,168.076746 283.712497,163.041706 270.266538,163.041706 C259.03029,163.041706 257.663923,167.886555 257.663923,179.693374 L256.15241,346.632981 L255.979737,411.019932 C255.979737,469.070541 263.249514,478.75023 297.696495,478.75023 C316.768086,478.75023 322.876701,476.510488 323.254579,460.657119 C323.777602,450.171623 328.792622,424.768694 335.576913,399.293193 C355.419276,324.097923 378.93031,264.623389 419.468389,219.293013 C423.69512,214.89361 426.963391,216.467685 426.297725,222.70643 C426.297725,222.70643 419.88881,324.470796 419.88881,366.094962 C419.88881,440.124065 431.280212,478.752732 468.114584,478.752732 C504.265771,478.752732 539.771312,432.303737 559.153213,400.947349 L621.32795,296.953251 C661.615778,331.282615 689.72892,357.899258 689.72892,390.27917 C689.72892,410.404316 677.031209,430.094025 657.689348,430.094025 C633.517652,430.094025 618.074694,404.603509 601.748351,404.603509 C588.197286,404.603509 570.804877,430.764696 570.804877,445.619566 C570.804877,459.643604 601.40801,479.483464 656.317975,479.483464 C737.376615,479.483464 780.860142,423.85528 806.956264,362.253617 C811.951264,435.366803 841.082925,478.074554 886.518406,478.074554 C916.320738,478.074554 950.765217,440.421863 966.433401,394.428324 C966.433401,394.428324 967.979949,406.367775 979.87936,430.829762 C996.258256,462.774238 1021.15818,477.44142 1052.08664,477.44142 C1090.55515,477.44142 1123.45808,454.120576 1143.54569,414.988905 C1146.59124,444.641087 1171.48866,477.296275 1211.52624,477.296275 C1236.6589,477.296275 1259.57183,458.039499 1274.61189,426.320248 C1274.61189,426.320248 1294.09389,478.707687 1350.44279,478.707687 C1382.09198,478.707687 1419.56949,449.388339 1428.52596,428.084514 L1429.51194,459.065526 L1345.90575,536.165202 C1321.62895,559.731292 1295.8056,593.590185 1295.8056,631.07771 C1295.8056,678.755435 1340.82066,706.170378 1380.43532,706.170378 C1421.61404,706.170378 1448.93639,680.081763 1463.90387,658.222382 C1482.74022,629.936568 1490.69569,576.625703 1490.69569,524.513539 L1488.82882,446.1526 C1545.17772,384.213098 1589.27937,298.599899 1608.91152,238.024263 L1651.68434,236.898136 C1659.97013,236.340077 1659.55722,239.603344 1658.41107,244.433179 C1650.89355,276.199977 1644.32947,312.175989 1644.32947,348.004353 C1644.32947,407.196104 1657.96312,432.954388 1677.56024,454.00546 C1694.5998,471.643116 1711.54426,477.59157 1729.37961,477.59157 C1764.25952,477.59157 1786.15644,448.787738 1793.10089,430.629561 C1809.47979,462.574038 1833.60894,477.45143 1864.5299,477.45143 C1903.0009,477.45143 1935.90384,454.130586 1955.99395,414.998915 C1959.0395,444.651097 1983.93192,477.306285 2023.972,477.306285 C2053.88444,477.306285 2071.23431,460.046508 2084.87796,427.526455 C2085.15324,437.986926 2085.55614,449.138088 2085.86395,459.593554 C2086.22431,465.00397 2090.54864,468.427397 2094.42002,469.83881 C2107.13524,474.651127 2118.29642,477.058537 2128.32145,477.058537 C2154.46762,477.058537 2160.14581,471.688161 2160.14581,454.596052 C2160.14581,426.405333 2160.97163,381.863246 2168.98215,346.099947 C2177.48566,310.494306 2190.31851,270.186458 2208.02624,242.140884 C2209.62033,239.242983 2213.52674,240.003745 2213.69691,243.514759 C2216.23946,303.522327 2220.25347,405.10401 2236.01675,431.400333 C2243.79454,443.942888 2255.82408,453.084539 2273.8246,453.084539 C2282.26555,453.084539 2292.61341,449.485936 2295.26106,447.241189 C2297.94374,445.149095 2299.2951,442.824268 2299.13243,438.512452 C2299.13243,361.800663 2323.05638,287.533822 2347.01286,237.60134 C2347.67102,236.119857 2349.53789,236.004742 2349.47533,237.954193 L2348.13899,293.227021 C2348.13899,384.007893 2354.68304,441.360303 2400.02843,468.932903 C2408.94435,473.921657 2418.99597,476.527218 2429.21264,476.497975 C2452.41337,476.497975 2473.45193,463.540005 2483.84983,442.701645 C2492.32081,426.507935 2500.25626,395.339236 2500.25626,377.684063 C2500.25626,370.849722 2500.33634,359.726087 2489.13262,359.726087 C2482.98897,359.726087 2479.29778,364.255621 2477.82881,371.09747 C2474.25773,385.927314 2471.3273,398.645045 2465.78675,413.307222 C2460.49145,427.303732 2452.58854,435.454391 2443.21916,435.454391 C2432.21315,435.454391 2426.62756,426.793221 2423.43436,421.440363 C2409.3903,400.01892 2408.26417,350.809661 2408.26417,309.736047 L2411.64506,204.017723 C2411.64506,195.271468 2407.9939,184.803489 2394.49789,177.085764 C2385.43883,171.870543 2362.52589,162.053216 2348.48684,162.053216 C2335.46881,162.053216 2329.1675,169.425596 2324.4753,180.24893 C2315.66398,199.688389 2286.21951,275.937214 2278.3241,337.929268 C2278.04132,339.563404 2276.00428,339.90875 2275.86164,337.824163 C2271.75753,293.98528 2269.65292,241.164907 2269.69797,205.529236 C2269.69797,194.755952 2267.06283,179.355536 2244.20996,169.375546 C2233.10384,164.768434 2223.91714,161.948111 2212.69841,161.948111 C2198.77948,161.948111 2195.78648,168.75993 2190.80149,177.786465 C2175.03321,206.920629 2164.12979,244.91366 2147.78593,292.83663 L2148.03368,183.176861 C2148.03368,178.049228 2144.89054,171.3275 2135.88652,169.518189 C2113.56168,164.388053 2103.21882,162.058221 2094.41751,162.058221 C2088.0086,162.058221 2084.48757,167.165834 2084.48757,172.688863 L2083.28887,359.661022 C2078.96955,382.548932 2061.46953,437.181119 2036.64218,437.181119 C2016.26428,437.181119 2006.75476,416.535453 2006.75476,330.234065 L2010.45346,189.976167 C2010.45346,181.117299 2004.63764,177.396074 1996.16166,173.644819 C1984.04203,168.83 1974.39988,166.918086 1962.08255,166.918086 C1946.62207,166.918086 1941.31676,174.317993 1944.44489,192.093286 C1927.45038,169.10027 1910.46087,156.39255 1880.44583,156.39255 C1820.18551,156.39255 1774.76254,228.877607 1774.76254,334.213048 C1774.17195,363.750115 1781.30909,393.107001 1781.30909,393.107001 C1775.85613,417.62154 1763.0383,437.604043 1745.33058,437.604043 C1722.99071,437.604043 1708.75396,406.019927 1708.75396,351.282635 C1708.75396,296.38268 1729.6649,234.463199 1729.6649,217.6814 C1729.6649,198.169369 1716.8796,185.824511 1694.24944,185.824511 C1682.9131,185.824511 1640.8585,195.36406 1619.29942,198.494694 C1619.29942,198.494694 1621.73185,188.226916 1621.55167,180.153835 C1621.55167,160.914576 1612.52514,148.857507 1590.11521,148.857507 C1562.73029,148.857507 1542.62267,168.412081 1542.62267,201.772976 C1542.62267,216.740458 1551.2438,230.589321 1562.65522,238.029268 C1547.84289,299.811112 1523.75878,345.757104 1488.26826,397.085984 L1491.25875,189.237928 C1491.25875,182.481165 1489.45945,178.284464 1476.2237,173.146821 C1469.2267,170.123795 1457.82278,166.6328 1443.44839,166.6328 C1422.61504,166.6328 1423.99392,181.510193 1425.10753,192.648842 C1415.57549,175.746924 1394.7071,155.684341 1362.51238,155.684341 C1274.77956,155.684341 1247.84509,289.468259 1261.05332,384.478364 C1261.05332,396.06246 1249.74199,437.181119 1224.19392,437.181119 C1203.81602,437.181119 1194.3065,416.535453 1194.3065,330.234065 L1198.04024,189.976167 C1198.04024,181.114797 1192.18438,177.393572 1183.70839,173.644819 C1171.58876,168.83 1161.98164,166.918086 1149.66431,166.918086 C1134.20134,166.918086 1128.89603,174.317993 1132.02416,192.090784 C1115.02965,169.097768 1098.0051,156.390047 1067.98756,156.390047 C1007.72724,156.390047 961.703666,222.681405 961.703666,328.011841 C961.703666,368.219589 927.084012,429.576007 902.807211,429.576007 C889.321212,429.576007 874.961838,404.818725 874.961838,341.565408 C875.029405,298.449749 880.910292,151.672825 880.910292,151.672825 L965.647614,150.29895 C969.691662,150.261413 972.034007,145.841989 973.533008,143.119263 C977.424403,135.22386 979.306287,129.966097 979.306287,120.519141 C979.306287,111.995609 977.599578,108.882492 966.668636,108.266876 L882.211595,103.196801 L885.805192,24.5180436 C886.057945,19.5505711 883.059944,16.3123296 877.637016,13.8874023 C861.28815,7.493502 841.23808,1.30981212 828.54037,1.30730962 Z M1085.00209,207.463672 C1107.5947,207.463672 1130.52015,228.069298 1130.52015,301.174977 C1130.52015,393.222116 1096.98658,436.047485 1071.20077,436.047485 C1047.02657,436.047485 1028.67571,401.925829 1028.67571,334.90374 C1028.67571,267.158427 1046.59614,207.463672 1085.00209,207.463672 Z M1898.64404,207.463672 C1921.23666,207.463672 1944.16211,228.069298 1944.16211,301.174977 C1944.16211,393.222116 1910.62854,436.047485 1884.84273,436.047485 C1860.66853,436.047485 1842.31516,401.925829 1842.31516,334.90374 C1842.31766,267.158427 1860.2381,207.463672 1898.64404,207.463672 Z M1382.58497,207.886595 C1412.06948,207.886595 1425.11254,238.277016 1425.11254,297.195994 C1425.11254,386.027414 1398.70611,436.605543 1366.6365,436.605543 C1346.16351,436.605543 1322.62245,402.989393 1323.86369,336.870709 C1323.86369,294.595891 1337.64749,207.886595 1382.58497,207.886595 Z M1432.50244,505.049055 L1432.50244,540.03908 C1432.50244,656.145302 1401.56397,675.96264 1376.70408,675.96264 C1367.28465,675.96264 1344.21156,668.848018 1344.21156,640.124265 C1344.21156,599.971573 1386.19108,554.293349 1399.23664,540.17922 L1432.50244,505.049055 Z"></path>
                                </g>
                            </g>
                        </svg>
                      </div>

                    </div>
                  </div> <!-- / .row -->
                  
                  <!-- Text -->
                  <p class="mb-5 mb-md-7">
                    “I've never used a theme as versatile and flexible as Landkit. It's my go to for building landing sites on almost any project.”
                  </p>

                  <!-- Footer -->
                  <footer class="blockquote-footer">
                    <span class="h6 text-uppercase">Russ D'Sa</span>
                  </footer>

                </blockquote>

              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

   






  <!-- CTA
    ================================================== -->
    <section data-jarallax data-speed=".8" class="py-12 py-md-14 overlay overlay-black overlay-80 jarallax no-repeat" style="background-image: url({{ asset('assets/img/covers/cover-8.jpg') }});">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-1- col-lg-8 text-center">
            
            <!-- Heading -->
            <h1 class="text-white">
              Need more information about Jambo ?
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-white-80 mb-6 mb-md-8">
              About our products, Become Our Agents, Join our Team, meet our group? welcome .. It’s our pleasure to hear from you !
            </p>

            <!-- Button -->
            <a href="#!" class="btn btn-pill btn-primary lift">
              Contact Us <i class="fe fe-arrow-right ml-2"></i>
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
        <svg viewBox="0 0 1440 24" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 24H1440V0C722.5 52 0 0 0 0V24Z" fill="currentColor"/>
        </svg>

      </div>
    </div>
	

@endsection