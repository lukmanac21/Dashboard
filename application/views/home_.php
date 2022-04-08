<!DOCTYPE html>
<!--
Template Name: Enigma - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="<?= base_url()?>assets/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Enigma admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Enigma Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Slider - Enigma - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="<?= base_url()?>assets/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body>
        <div class="flex overflow-hidden h-screen">
            <div class="content pt-0">
                <div class="grid grid-cols-12 gap-6 mt-0">
                    <div class="intro-y col-span-12 lg:col-span-12">
                        <!-- BEGIN: Single Item -->
                        <div class="intro-y box">
                            <div id="single-item-slider" class="p-1">
                                <div class="preview">
                                    <div class="mx-6">
                                        <div class="single-item">
                                            <div class="px-2 transition-all ease-in-out duration-500 transform translate-x-0 slide">
                                                <div class="bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                                    <canvas id="line-chart-widget" class="auto" ></canvas> 
                                                </div>
                                            </div>
                                            <div class="px-2 transition-all ease-in-out duration-500 transform translate-x-full slide">
                                                <div class="bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                                    <canvas id="horizontal-bar-chart-widget" class="auto" ></canvas>
                                                </div>
                                            </div>
                                            <div class="px-2 transition-all ease-in-out duration-500 transform translate-x-full slide">
                                                <div class="bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                                    <canvas id="stacked-bar-chart-widget" class="auto"></canvas> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-single-item-slider" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                                    <div class="overflow-y-auto mt-3 rounded-md">
                                        <pre id="copy-single-item-slider" class="source-preview"> <code class="html"> HTMLOpenTagdiv class=&quot;mx-6&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;single-item&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-32 px-2&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-full bg-slate-100 dark:bg-darkmode-400 rounded-md&quot;HTMLCloseTag HTMLOpenTagh3 class=&quot;h-full font-medium flex items-center justify-center text-2xl&quot;HTMLCloseTag1HTMLOpenTag/h3HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;h-32 px-2&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-full bg-slate-100 dark:bg-darkmode-400 rounded-md&quot;HTMLCloseTag HTMLOpenTagh3 class=&quot;h-full font-medium flex items-center justify-center text-2xl&quot;HTMLCloseTag2HTMLOpenTag/h3HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;h-32 px-2&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-full bg-slate-100 dark:bg-darkmode-400 rounded-md&quot;HTMLCloseTag HTMLOpenTagh3 class=&quot;h-full font-medium flex items-center justify-center text-2xl&quot;HTMLCloseTag3HTMLOpenTag/h3HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;h-32 px-2&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-full bg-slate-100 dark:bg-darkmode-400 rounded-md&quot;HTMLCloseTag HTMLOpenTagh3 class=&quot;h-full font-medium flex items-center justify-center text-2xl&quot;HTMLCloseTag4HTMLOpenTag/h3HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;h-32 px-2&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-full bg-slate-100 dark:bg-darkmode-400 rounded-md&quot;HTMLCloseTag HTMLOpenTagh3 class=&quot;h-full font-medium flex items-center justify-center text-2xl&quot;HTMLCloseTag5HTMLOpenTag/h3HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;h-32 px-2&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-full bg-slate-100 dark:bg-darkmode-400 rounded-md&quot;HTMLCloseTag HTMLOpenTagh3 class=&quot;h-full font-medium flex items-center justify-center text-2xl&quot;HTMLCloseTag6HTMLOpenTag/h3HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Single Item -->
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <!-- END: Dark Mode Switcher-->
        
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="<?= base_url() ?>assets/js/app.js"></script>
        <script>
            setTimeout(function(){
                let activeSlide = document.querySelector('.slide.translate-x-0');
                activeSlide.classList.remove('translate-x-0');
                activeSlide.classList.add('-translate-x-full');
                
                let nextSlide = activeSlide.nextElementSibling;
                nextSlide.classList.remove('translate-x-full');
                nextSlide.classList.add('translate-x-0');
            }, 3000);
        </script>
        <!-- END: JS Assets-->
    </body>
</html>