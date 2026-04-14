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
                            <div class="min-w-[340px] md:min-w-[900px] flex justify-center">
                                <div class="w-full">
                                    <div
                                        class="border border-[#dadce0] bg-[#ffffff] rounded-xl w-full shadow-sm hover:shadow-md transition-shadow duration-300 mx-auto overflow-hidden">
                                        <!-- GSC-style header bar -->
                                        <div
                                            class="border-b border-[#dadce0] bg-[#ffffff] px-4 md:px-6 py-3 flex flex-col md:flex-row md:items-center md:justify-between gap-3">
                                            <div>
                                                <h3 class="text-sm md:text-base font-medium text-[#202124]">Performance</h3>
                                                <div class="mt-2 flex flex-wrap items-center gap-2">
                                                    <button
                                                        class="px-3 py-1.5 rounded-full text-xs font-medium text-[#202124]/80 bg-[#ffffff] border border-[#dadce0] hover:bg-[#f8f9fa] transition-colors">
                                                        24 hours
                                                    </button>
                                                    <button
                                                        class="px-3 py-1.5 rounded-full text-xs font-medium text-[#202124]/80 bg-[#ffffff] border border-[#dadce0] hover:bg-[#f8f9fa] transition-colors">
                                                        7 days
                                                    </button>
                                                    <button
                                                        class="px-3 py-1.5 rounded-full text-xs font-medium text-[#202124]/80 bg-[#ffffff] border border-[#dadce0] hover:bg-[#f8f9fa] transition-colors">
                                                        28 days
                                                    </button>
                                                    <button
                                                        class="px-3 py-1.5 rounded-full text-xs font-medium text-white bg-[#f4511e] border border-[#f4511e] shadow-sm">
                                                        3 months
                                                    </button>
                                                    <button
                                                        class="px-3 py-1.5 rounded-full text-xs font-medium text-[#202124]/80 bg-[#ffffff] border border-[#dadce0] hover:bg-[#f8f9fa] transition-colors">
                                                        More
                                                    </button>
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-wrap items-center gap-2 md:justify-end text-xs md:text-[13px]">
                                                <button
                                                    class="px-3 py-1.5 rounded-full border border-[#dadce0] bg-[#ffffff] text-[#202124]/80 flex items-center gap-1 hover:bg-[#f8f9fa] transition-colors">
                                                    <span>Search type: Web</span>
                                                </button>
                                                <button
                                                    class="px-3 py-1.5 rounded-full border border-[#dadce0] bg-[#ffffff] text-[#202124]/80 flex items-center gap-1 hover:bg-[#f8f9fa] transition-colors">
                                                    <span>Add filter</span>
                                                </button>
                                                <button
                                                    class="px-3 py-1.5 rounded-full border border-[#dadce0] bg-[#ffffff] text-[#202124]/80 flex items-center gap-1 hover:bg-[#f8f9fa] transition-colors">
                                                    <span>Visualize</span>
                                                </button>
                                                <span class="text-[#202124]/60 ml-1 whitespace-nowrap">Last updated: 4 hours
                                                    ago</span>
                                            </div>
                                        </div>
                                        <div class="overflow-x-hidden overflow-y-visible rounded-t-xl">
                                            <div class="grid grid-cols-2 md:grid-cols-4 relative"
                                                style="height:auto; min-height:110px; width:100%">
                                                <div class="absolute z-10" style="right:16px;top:16px">
                                                    <button
                                                        class="border border-[#dadce0] rounded-lg px-3 py-1.5 flex items-center gap-2 bg-[#ffffff] hover:bg-[#f8f9fa] transition-colors"
                                                        style="height:32px">
                                                        <span
                                                            class="text-[#202124]/70 text-[14px] font-medium leading-none tracking-wide">Daily</span>
                                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 9L11 13L15 9" stroke="#202124" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Clicks Box -->
                                                <div
                                                    class="bg-[#4285f4] relative w-full h-[110px] border-r border-b border-transparent group/box hover:bg-[#4285f4]/90 transition-all duration-300">
                                                    <div class="absolute flex items-center gap-[6px]"
                                                        style="left:24px;top:24px">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="0.5" y="0.5" width="12.51" height="12.5" rx="1.5"
                                                                stroke="#ffffff"></rect>
                                                            <path
                                                                d="M5.37928 8.15898L10.2392 3.2991L10.8843 3.94422L5.37928 9.44922L2.82031 6.89025L3.46543 6.24514L5.37928 8.15898Z"
                                                                fill="#ffffff"></path>
                                                        </svg>
                                                        <span
                                                            class="text-white/90 text-[13px] leading-[16px] font-normal tracking-wide">Total
                                                            clicks</span>
                                                    </div>
                                                    <div class="absolute text-white text-xl md:text-[32px] leading-none font-bold tracking-tight"
                                                        style="left:24px;top:48px;">
                                                        {{ $slide['clicks'] }}
                                                    </div>
                                                </div>
                                                <!-- Impressions Box -->
                                                <div
                                                    class="bg-[#7b1fa2] relative w-full h-[110px] border-r border-b border-transparent group/box hover:bg-[#7b1fa2]/90 transition-all duration-300">
                                                    <div class="absolute flex items-center gap-[6px]"
                                                        style="left:24px;top:24px">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="0.5" y="0.5" width="12.51" height="12.5" rx="1.5"
                                                                stroke="#ffffff"></rect>
                                                            <path
                                                                d="M5.37928 8.15898L10.2392 3.2991L10.8843 3.94422L5.37928 9.44922L2.82031 6.89025L3.46543 6.24514L5.37928 8.15898Z"
                                                                fill="#ffffff"></path>
                                                        </svg>
                                                        <span
                                                            class="text-white/90 text-[13px] leading-[16px] font-normal tracking-wide">Total
                                                            impressions</span>
                                                    </div>
                                                    <div class="absolute text-white text-xl md:text-[32px] leading-none font-bold tracking-tight"
                                                        style="left:24px;top:48px;">
                                                        {{ $slide['imp'] }}
                                                    </div>
                                                </div>
                                                <!-- CTR Box -->
                                                <div
                                                    class="bg-[#ffffff] border-r border-b border-[#dadce0] relative w-full h-[110px] group/box hover:bg-[#f8f9fa] transition-all duration-300">
                                                    <div class="absolute flex items-center gap-[6px]"
                                                        style="left:24px;top:24px">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="0.5" y="0.5" width="12.51" height="12.5" rx="1.5"
                                                                stroke="#00897b" stroke-opacity="0.3"></rect>
                                                        </svg>
                                                        <span
                                                            class="text-[#202124]/70 text-[13px] leading-[16px] font-normal tracking-wide">Average
                                                            CTR</span>
                                                    </div>
                                                    <div class="absolute text-[#202124] text-xl md:text-[32px] leading-none font-bold tracking-tight"
                                                        style="left:24px;top:48px;">
                                                        {{ $slide['ctr'] }}
                                                    </div>
                                                </div>
                                                <!-- Position Box -->
                                                <div
                                                    class="bg-[#ffffff] border-r border-b border-[#dadce0] relative w-full h-[110px] group/box hover:bg-[#f8f9fa] transition-all duration-300">
                                                    <div class="absolute flex items-center gap-[6px]"
                                                        style="left:24px;top:24px">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="0.5" y="0.5" width="12.51" height="12.5" rx="1.5"
                                                                stroke="#f4511e" stroke-opacity="0.3"></rect>
                                                        </svg>
                                                        <span
                                                            class="text-[#202124]/70 text-[13px] leading-[16px] font-normal tracking-wide">Average
                                                            position</span>
                                                    </div>
                                                    <div class="absolute text-[#202124] text-xl md:text-[32px] leading-none font-bold tracking-tight"
                                                        style="left:24px;top:48px;">
                                                        {{ $slide['pos'] }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="relative w-full bg-[#ffffff]"
                                            style="height:300px;padding:0 16px 20px 16px">
                                            <div class="absolute" style="left:16px;top:16px"><span
                                                    class="text-[#4285f4] text-[12px] font-bold tracking-wider uppercase">Clicks</span>
                                            </div>
                                            <div class="absolute" style="right:16px;top:16px"><span
                                                    class="text-[#7b1fa2] text-[12px] font-bold tracking-wider uppercase">Impressions</span>
                                            </div>
                                            <!-- Chart Area -->
                                            <div class="absolute" style="left:16px;right:16px;top:48px;height:230px">
                                                <!-- Y Axis Labels -->
                                                <div class="absolute"
                                                    style="left:0;top:0;width:100%;height:100%;pointer-events:none">
                                                    <div class="absolute text-[#202124]/60 text-[12px] font-normal whitespace-nowrap"
                                                        style="left:0;top:4.3%;transform:translateY(-50%)">4.4k</div>
                                                    <div class="absolute text-[#202124]/60 text-[12px] font-normal whitespace-nowrap"
                                                        style="left:0;top:31%;transform:translateY(-50%)">2.9k</div>
                                                    <div class="absolute text-[#202124]/60 text-[12px] font-normal whitespace-nowrap"
                                                        style="left:0;top:57.6%;transform:translateY(-50%)">1.5k</div>
                                                    <div class="absolute text-[#202124]/60 text-[12px] font-normal whitespace-nowrap"
                                                        style="left:0;top:84.3%;transform:translateY(-50%)">0</div>
                                                </div>
                                                <!-- Graph Lines -->
                                                <svg width="100%" height="100%" viewBox="0 0 1006 230"
                                                    preserveAspectRatio="none" class="w-full h-full"
                                                    style="padding-left:40px;padding-right:40px">
                                                    <line x1="33" y1="10" x2="971" y2="10" stroke="#dadce0" stroke-opacity="1"
                                                        stroke-width="1">
                                                    </line>
                                                    <line x1="33" y1="71.33" x2="971" y2="71.33" stroke="#dadce0"
                                                        stroke-opacity="1" stroke-width="1"></line>
                                                    <line x1="33" y1="132.67" x2="971" y2="132.67" stroke="#dadce0"
                                                        stroke-opacity="1" stroke-width="1"></line>
                                                    <line x1="33" y1="194" x2="971" y2="194" stroke="#dadce0"
                                                        stroke-opacity="1" stroke-width="1">
                                                    </line>
                                                    <path d="M33,180L100,183L200,181L400,175L600,157L800,88L971,49" fill="none"
                                                        stroke="#4285f4" stroke-width="3"></path>
                                                    <path d="M33,181L100,182L300,177L500,165L700,131L900,76L971,10" fill="none"
                                                        stroke="#7b1fa2" stroke-width="3"></path>
                                                </svg>
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