@php
    $slides = [
        ['clicks' => '76k', 'imp' => '865k', 'ctr' => '8.8%', 'pos' => '8.5'],
        ['clicks' => '125k', 'imp' => '1.45m', 'ctr' => '8.6%', 'pos' => '9.2'],
        ['clicks' => '21k', 'imp' => '245k', 'ctr' => '8.5%', 'pos' => '11.2'],
        ['clicks' => '92k', 'imp' => '1.1m', 'ctr' => '8.3%', 'pos' => '10.1'],
        ['clicks' => '67k', 'imp' => '745k', 'ctr' => '8.9%', 'pos' => '9.5'],
    ];
@endphp
<section class="max-w-full mx-auto md:px-8 px-2 py-24 bg-[#ffffff]" id="features">
    <div class="max-w-[720px] mx-auto text-center space-y-4">
        <h2 class="transition-all duration-1000 ease-out opacity-100 translate-y-0 text-3xl md:text-5xl font-bold tracking-tight text-[#202124]"
            data-aos="fade-up">THEY CAPTURE ATTENTION. <span class="text-[#f4511e]">WILL YOU?</span></h2>
        <p class="subtitle text-[#202124]/80 text-lg md:text-xl transition-all duration-1000 ease-out delay-100 opacity-100 translate-y-0 font-normal tracking-wide"
            data-aos="fade-up" data-aos-delay="100">Scale your digital footprint with high-authority distribution.
            Precision-engineered for maximum visibility.</p>
    </div>
    <div class="relative transition-all duration-1000 ease-out delay-200 opacity-100 translate-y-0" data-aos="fade-up"
        data-aos-delay="200">
        <div class="overflow-x-hidden overflow-y-visible py-8">
            <style>
                @keyframes marquee {
                    0% {
                        transform: translateX(0);
                    }

                    100% {
                        transform: translateX(-50%);
                    }
                }

                .animate-marquee {
                    animation: marquee 40s linear infinite;
                    width: max-content;
                }

                .animate-marquee:hover {
                    animation-play-state: paused;
                }

                @keyframes fadeInScale {
                    0% {
                        opacity: 0;
                        transform: translateX(-50%) scale(0.8);
                    }

                    100% {
                        opacity: 1;
                        transform: translateX(-50%) scale(1);
                    }
                }
            </style>

            <div class="overflow-hidden">
                <div class="flex animate-marquee gap-8 pl-4">
                    <!-- Loop twice for infinite scroll effect (2 sets of 5 slides) -->
                    @for ($i = 0; $i < 2; $i++)
                        @foreach($slides as $slide)
                            <div class="w-[320px] sm:w-[500px] md:w-[900px] flex-shrink-0 flex justify-center">
                                <div class="w-full px-2 md:px-0">
                                    <div class="border border-[#dadce0] bg-[#ffffff] rounded-xl w-full shadow-sm hover:shadow-md transition-shadow duration-300 mx-auto overflow-hidden">
                                        <!-- GSC-style header bar -->
                                        <div class="border-b border-[#dadce0] bg-[#ffffff] px-4 md:px-6 py-3 flex flex-col md:flex-row md:items-center md:justify-between gap-3">
                                            <div>
                                                <h3 class="text-sm md:text-base font-medium text-[#202124]">Performance</h3>
                                                <div class="mt-2 flex flex-nowrap md:flex-wrap overflow-x-auto pb-1 md:pb-0 hide-scrollbar items-center gap-2" style="scrollbar-width: none;">
                                                    <button class="shrink-0 px-3 py-1.5 rounded-full text-xs font-medium text-[#202124]/80 bg-[#ffffff] border border-[#dadce0] hover:bg-[#f8f9fa] transition-colors">
                                                        24 hours
                                                    </button>
                                                    <button class="shrink-0 px-3 py-1.5 rounded-full text-xs font-medium text-[#202124]/80 bg-[#ffffff] border border-[#dadce0] hover:bg-[#f8f9fa] transition-colors">
                                                        7 days
                                                    </button>
                                                    <button class="shrink-0 px-3 py-1.5 rounded-full text-xs font-medium text-[#202124]/80 bg-[#ffffff] border border-[#dadce0] hover:bg-[#f8f9fa] transition-colors">
                                                        28 days
                                                    </button>
                                                    <button class="shrink-0 px-3 py-1.5 rounded-full text-xs font-medium text-white bg-[#f4511e] border border-[#f4511e] shadow-sm">
                                                        3 months
                                                    </button>
                                                    <button class="shrink-0 px-3 py-1.5 rounded-full text-xs font-medium text-[#202124]/80 bg-[#ffffff] border border-[#dadce0] hover:bg-[#f8f9fa] transition-colors">
                                                        More
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap items-center gap-2 md:justify-end text-xs md:text-[13px]">
                                                <button class="px-3 py-1.5 rounded-full border border-[#dadce0] bg-[#ffffff] text-[#202124]/80 flex items-center gap-1 hover:bg-[#f8f9fa] transition-colors">
                                                    <span>Search type: Web</span>
                                                </button>
                                                <button class="px-3 py-1.5 rounded-full border border-[#dadce0] bg-[#ffffff] text-[#202124]/80 flex items-center gap-1 hover:bg-[#f8f9fa] transition-colors">
                                                    <span>Add filter</span>
                                                </button>
                                                <!-- Move daily button here for mobile -->
                                                <button class="md:hidden border border-[#dadce0] rounded-full px-3 py-1.5 flex items-center gap-1 bg-[#ffffff] hover:bg-[#f8f9fa] transition-colors">
                                                    <span class="text-[#202124]/80">Daily</span>
                                                    <svg width="14" height="14" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 9L11 13L15 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </button>
                                                <span class="text-[#202124]/60 whitespace-nowrap hidden sm:inline-block">Last updated: 4 hours ago</span>
                                            </div>
                                        </div>
                                        
                                        <div class="overflow-x-hidden overflow-y-visible">
                                            <div class="grid grid-cols-2 md:grid-cols-4 relative border-b border-[#dadce0] min-h-[90px] md:min-h-[110px] w-full">
                                                <!-- Desktop Daily Button -->
                                                <div class="absolute z-10 hidden md:block" style="right:16px;top:16px">
                                                    <button class="border border-[#dadce0] rounded-lg px-3 py-1.5 flex items-center gap-2 bg-[#ffffff] hover:bg-[#f8f9fa] transition-colors" style="height:32px">
                                                        <span class="text-[#202124]/70 text-[14px] font-medium leading-none tracking-wide">Daily</span>
                                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 9L11 13L15 9" stroke="#202124" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Clicks Box -->
                                                <div class="bg-[#4285f4] relative w-full h-[90px] md:h-[110px] border-r md:border-b-0 border-b border-transparent group/box hover:bg-[#4285f4]/90 transition-all duration-300">
                                                    <div class="absolute flex items-start sm:items-center gap-1.5 top-3 left-3 sm:top-5 sm:left-5 md:top-6 md:left-6">
                                                        <div class="mt-[2px] sm:mt-0">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="0.5" y="0.5" width="12.51" height="12.5" rx="1.5" stroke="#ffffff"></rect>
                                                                <path d="M5.37928 8.15898L10.2392 3.2991L10.8843 3.94422L5.37928 9.44922L2.82031 6.89025L3.46543 6.24514L5.37928 8.15898Z" fill="#ffffff"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="text-white/90 text-xs sm:text-[13px] leading-[14px] sm:leading-[16px] font-normal tracking-wide">Total clicks</span>
                                                    </div>
                                                    <div class="absolute text-white text-xl sm:text-2xl md:text-[32px] leading-none font-bold tracking-tight top-8 left-3 sm:top-10 sm:left-5 md:top-12 md:left-6">
                                                        {{ $slide['clicks'] }}
                                                    </div>
                                                </div>
                                                <!-- Impressions Box -->
                                                <div class="bg-[#7b1fa2] relative w-full h-[90px] md:h-[110px] border-r md:border-b-0 border-b border-transparent group/box hover:bg-[#7b1fa2]/90 transition-all duration-300">
                                                    <div class="absolute flex items-start sm:items-center gap-1.5 top-3 left-3 sm:top-5 sm:left-5 md:top-6 md:left-6 pr-2">
                                                        <div class="mt-[2px] sm:mt-0 shadow-sm shrink-0">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="0.5" y="0.5" width="12.51" height="12.5" rx="1.5" stroke="#ffffff"></rect>
                                                                <path d="M5.37928 8.15898L10.2392 3.2991L10.8843 3.94422L5.37928 9.44922L2.82031 6.89025L3.46543 6.24514L5.37928 8.15898Z" fill="#ffffff"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="text-white/90 text-xs sm:text-[13px] leading-[14px] sm:leading-[16px] font-normal tracking-wide pr-1">Total impressions</span>
                                                    </div>
                                                    <div class="absolute text-white text-xl sm:text-2xl md:text-[32px] leading-none font-bold tracking-tight top-8 left-3 sm:top-10 sm:left-5 md:top-12 md:left-6">
                                                        {{ $slide['imp'] }}
                                                    </div>
                                                </div>
                                                <!-- CTR Box -->
                                                <div class="bg-[#ffffff] border-r border-[#dadce0] relative w-full h-[90px] md:h-[110px] group/box hover:bg-[#f8f9fa] transition-all duration-300">
                                                    <div class="absolute flex items-start sm:items-center gap-1.5 top-3 left-3 sm:top-5 sm:left-5 md:top-6 md:left-6">
                                                        <div class="mt-[2px] sm:mt-0">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="0.5" y="0.5" width="12.51" height="12.5" rx="1.5" stroke="#00897b" stroke-opacity="0.3"></rect>
                                                            </svg>
                                                        </div>
                                                        <span class="text-[#202124]/70 text-xs sm:text-[13px] leading-[14px] sm:leading-[16px] font-normal tracking-wide">Average CTR</span>
                                                    </div>
                                                    <div class="absolute text-[#202124] text-xl sm:text-2xl md:text-[32px] leading-none font-bold tracking-tight top-8 left-3 sm:top-10 sm:left-5 md:top-12 md:left-6">
                                                        {{ $slide['ctr'] }}
                                                    </div>
                                                </div>
                                                <!-- Position Box -->
                                                <div class="bg-[#ffffff] relative w-full h-[90px] md:h-[110px] group/box hover:bg-[#f8f9fa] transition-all duration-300">
                                                    <div class="absolute flex items-start sm:items-center gap-1.5 top-3 left-3 sm:top-5 sm:left-5 md:top-6 md:left-6">
                                                        <div class="mt-[2px] sm:mt-0">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="0.5" y="0.5" width="12.51" height="12.5" rx="1.5" stroke="#f4511e" stroke-opacity="0.3"></rect>
                                                            </svg>
                                                        </div>
                                                        <span class="text-[#202124]/70 text-xs sm:text-[13px] leading-[14px] sm:leading-[16px] font-normal tracking-wide">Average position</span>
                                                    </div>
                                                    <div class="absolute text-[#202124] text-xl sm:text-2xl md:text-[32px] leading-none font-bold tracking-tight top-8 left-3 sm:top-10 sm:left-5 md:top-12 md:left-6">
                                                        {{ $slide['pos'] }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Chart Area -->
                                        <div class="relative w-full bg-[#ffffff]" style="height:220px; md:height:300px; padding:0 16px 20px 16px">
                                            <div class="absolute" style="left:16px;top:16px"><span class="text-[#4285f4] text-[10px] sm:text-[12px] font-bold tracking-wider uppercase">Clicks</span></div>
                                            <div class="absolute" style="right:16px;top:16px"><span class="text-[#7b1fa2] text-[10px] sm:text-[12px] font-bold tracking-wider uppercase">Impressions</span></div>
                                            
                                            <div class="absolute" style="left:16px;right:16px;top:48px;bottom:20px;">
                                                <!-- Y Axis Labels -->
                                                <div class="absolute" style="left:0;top:0;width:100%;height:100%;pointer-events:none">
                                                    <div class="absolute text-[#202124]/60 text-[10px] sm:text-[12px] font-normal whitespace-nowrap" style="left:0;top:-6px;">4.4k</div>
                                                    <div class="absolute text-[#202124]/60 text-[10px] sm:text-[12px] font-normal whitespace-nowrap" style="left:0;top:calc(33% - 6px);">2.9k</div>
                                                    <div class="absolute text-[#202124]/60 text-[10px] sm:text-[12px] font-normal whitespace-nowrap" style="left:0;top:calc(66% - 6px);">1.5k</div>
                                                    <div class="absolute text-[#202124]/60 text-[10px] sm:text-[12px] font-normal whitespace-nowrap" style="left:0;bottom:-6px;">0</div>
                                                </div>
                                                <!-- Graph Lines container -->
                                                <div class="absolute" style="left:26px; sm:left:36px; right:0; top:0; height:100%;">
                                                    <svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none" class="w-full h-full overflow-visible">
                                                        <!-- Grid lines -->
                                                        <line x1="0" y1="0" x2="100" y2="0" stroke="#dadce0" stroke-opacity="1" stroke-width="1" vector-effect="non-scaling-stroke"></line>
                                                        <line x1="0" y1="33" x2="100" y2="33" stroke="#dadce0" stroke-opacity="1" stroke-width="1" vector-effect="non-scaling-stroke"></line>
                                                        <line x1="0" y1="66" x2="100" y2="66" stroke="#dadce0" stroke-opacity="1" stroke-width="1" vector-effect="non-scaling-stroke"></line>
                                                        <line x1="0" y1="100" x2="100" y2="100" stroke="#dadce0" stroke-opacity="1" stroke-width="1" vector-effect="non-scaling-stroke"></line>
                                                        
                                                        <!-- Path lines -->
                                                        <path d="M0,90 L10,92 L20,91 L40,88 L60,82 L80,48 L100,28" fill="none" stroke="#4285f4" stroke-width="3" vector-effect="non-scaling-stroke"></path>
                                                        <path d="M0,91 L10,91 L30,89 L50,83 L70,66 L90,38 L100,0" fill="none" stroke="#7b1fa2" stroke-width="3" vector-effect="non-scaling-stroke"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endfor
                </div>
            </div>

            <!-- Removed custom Prism footer controls to match pure GSC layout -->
        </div>
    </div>
</section>