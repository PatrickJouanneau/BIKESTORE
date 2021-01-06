@extends('layouts/Layout')

@section('scripts')
    @if (!empty($activeTab))
        @switch($activeTab)
            @case("brand")
                var tab1 = "production";
                var tab2 = "marque";
                @break
            @case("category")
                var tab1 = "production";
                var tab2 = "categorie";
            @break
            @case("product")
                var tab1 = "production";
                var tab2 = "produits";
                @break
            @case("stock")
                var tab1 = "production";
                var tab2 = "Stock";
                @break
            @case("client")
                var tab1 = "ventes";
                var tab2 = "client";
                @break
            @case("commande")
                var tab1 = "ventes";
                var tab2 = "commande";
                @break
            @case("order")
                var tab1 = "ventes";
                var tab2 = "bdc";
                @break
            @case("orderItem")
                var tab1 = "ventes";
                var tab2 = "vente";
                @break
            @case("customer")
                var tab1 = "administration";
                var tab2 = "utilisateur";
                @break
            @case("store")
                var tab1 = "administration";
                var tab2 = "magasins";
                @break
            @case("profil")
                var tab1 = "administration";
                var tab2 = "profif";
                @break
            @case("historique")
                var tab1 = "administration";
                var tab2 = "historique";
                @break
            @default

        @endswitch
    @endif
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg">

                <div class="row justify-content-center">
                    <div class="col-md-5 p-5">
                        <svg width="90%" height="90%" viewBox="0 0 1280 960" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                            <path d="M478.361,539.929c-89.993,-0.018 -162.927,-72.988 -162.909,-162.98c0.027,-89.992 72.997,-162.926 162.98,-162.908c89.992,0.018 162.926,72.996 162.908,162.98c-0.018,89.992 -72.987,162.926 -162.979,162.908m0.08,-355.933c-106.577,-0.027 -193.007,86.358 -193.034,192.944c-0.027,106.586 86.359,193.007 192.945,193.034c106.585,0.027 193.007,-86.359 193.033,-192.944c0.027,-106.586 -86.358,-193.007 -192.944,-193.034" style="fill:#0668e8;fill-rule:nonzero;" />
                            <path d="M1077.01,184.022c-20.111,-0 -39.514,3.096 -57.737,8.807c3.625,10.032 7.035,19.457 10.275,28.29c15.018,-4.591 30.949,-7.034 47.462,-7.034c90.001,-0 162.962,72.951 162.962,162.926c-0,90.001 -72.961,162.962 -162.962,162.962c-89.975,-0 -162.926,-72.961 -162.926,-162.962c-0,-48.429 21.14,-91.944 54.729,-121.801c-3.499,-9.362 -7.16,-19.368 -11.008,-30c-44.929,35.361 -73.784,90.207 -73.784,151.801c-0,106.612 86.412,192.989 192.989,192.989c106.577,0 192.989,-86.377 192.989,-192.989c0,-106.577 -86.412,-192.989 -192.989,-192.989" style="fill:#0668e8;fill-rule:nonzero;" />
                            <path d="M732.868,368.59c-7.473,0.975 -14.337,3.911 -20.074,8.305l-6.749,-21.524l-82.76,-264.357c9.334,1.745 17.792,2.918 23.672,2.945l79.378,253.732l6.533,20.899Z" style="fill:#f28825;fill-rule:nonzero;" />
                            <path d="M493.245,369.769l124.155,17.337c-0.501,7.303 -1.593,14.463 -3.204,21.435l-140.766,-19.663c-5.916,-0.833 -10.069,-6.301 -9.245,-12.253c0.295,-2.121 1.208,-4.027 2.506,-5.531c2.327,-2.712 5.942,-4.207 9.746,-3.678l16.808,2.353Z" style="fill:#f28825;fill-rule:nonzero;" />
                            <path d="M697.894,398.385c-1.182,3.858 -1.799,7.948 -1.799,12.154c-0,3.303 0.385,6.507 1.118,9.604l-6.417,-0.877c1.414,-7.044 2.47,-14.195 3.151,-21.436l3.947,0.555Z" style="fill:#f2253e;fill-rule:nonzero;" />
                            <path d="M982.092,175.396l-189.928,200.462l-15.573,16.432c-3.204,-6.685 -8.127,-12.422 -14.186,-16.575l15.036,-15.868l188.899,-199.371c4.126,-4.332 10.982,-4.538 15.341,-0.421c4.323,4.126 4.528,10.982 0.411,15.341" style="fill:#f28825;fill-rule:nonzero;" />
                            <path d="M970.247,147.011l0.919,21.6l-307.752,13.099l-0.92,-21.601l307.753,-13.098Z" style="fill:#f28825;" />
                            <path d="M562.228,265.634c5.029,3.768 9.8,7.921 14.337,12.423l-83.324,91.711l-11.304,12.422c-1.853,2.059 -4.439,3.124 -6.999,3.124c-2.273,-0 -4.564,-0.824 -6.39,-2.47c-3.357,-3.034 -4.01,-7.948 -1.862,-11.752c0.358,-0.591 0.743,-1.119 1.208,-1.647l94.334,-103.811Z" style="fill:#f28825;fill-rule:nonzero;" />
                            <path d="M664.593,181.168l-36.122,39.747c-4.591,-4.448 -9.335,-8.627 -14.222,-12.539l36.302,-39.952c3.535,-3.894 9.514,-4.153 13.398,-0.654c3.884,3.536 4.153,9.505 0.644,13.398" style="fill:#f28825;fill-rule:nonzero;" />
                            <path d="M568.538,42.749l0,10.821c0,-0 73.963,20.809 83.208,16.181c9.246,-4.627 78.582,-30.045 78.582,-30.045c-0,0 -13.873,-18.49 -23.109,-18.49c-7.59,-0 -63.384,3.105 -109.978,-3.428c-15.17,-2.121 -28.703,9.648 -28.703,24.961" style="fill:#314866;fill-rule:nonzero;" />
                            <path d="M1085.1,389.015c-1.942,0 -3.902,-0.519 -5.674,-1.611c-1.298,-0.796 -32.157,-19.949 -49.422,-44.615c-14.284,-20.415 -80.004,-209.207 -107.597,-289.426c-3.965,-11.528 -3.285,-23.95 1.897,-34.985c1.388,-2.945 4.028,-5.111 7.187,-5.899c3.16,-0.796 6.507,-0.116 9.12,1.835l41.922,31.361c8.234,6.167 18.795,7.42 28.246,3.338c9.443,-4.063 15.788,-12.601 16.97,-22.822c0.689,-5.952 6.086,-10.194 12.02,-9.523c5.942,0.689 10.212,6.059 9.522,12.011c-2.076,18.025 -13.264,33.07 -29.928,40.248c-16.665,7.187 -35.29,4.976 -49.816,-5.889l-27.647,-20.683c0.224,1.333 0.555,2.658 1.003,3.956c55.15,160.33 96.311,271.829 104.867,284.046c14.651,20.943 42.745,38.414 43.032,38.593c5.092,3.141 6.676,9.818 3.535,14.91c-2.05,3.321 -5.603,5.155 -9.237,5.155" style="fill:#f28825;fill-rule:nonzero;" />
                            <path d="M752.712,450.351c-4.475,1.62 -9.308,2.497 -14.311,2.497c-20.012,-0 -36.829,-13.98 -41.188,-32.703c-0.733,-3.097 -1.118,-6.301 -1.118,-9.604c-0,-4.206 0.617,-8.296 1.799,-12.154c2.595,-8.655 7.885,-16.164 14.901,-21.498c5.737,-4.385 12.593,-7.321 20.075,-8.297c1.79,-0.268 3.652,-0.384 5.531,-0.384c8.897,-0 17.167,2.765 24.004,7.509c6.059,4.152 10.982,9.889 14.186,16.575c2.676,5.531 4.153,11.716 4.153,18.249c-0,10.49 -3.831,20.084 -10.185,27.504c-4.744,5.504 -10.866,9.8 -17.847,12.306m39.452,-74.491c-3.947,-6.149 -8.95,-11.564 -14.723,-16.012c-10.802,-8.332 -24.344,-13.308 -39.04,-13.308c-4.117,-0 -8.18,0.384 -12.064,1.145c-7.277,1.387 -14.105,4.037 -20.29,7.688c-18.902,11.098 -31.62,31.674 -31.62,55.168c-0,35.272 28.702,64.011 63.974,64.011c9.478,-0 18.491,-2.059 26.591,-5.8c6.65,-3.034 12.691,-7.187 17.873,-12.217c12.038,-11.626 19.547,-27.942 19.547,-45.994c-0,-12.771 -3.768,-24.702 -10.248,-34.681" style="fill:#f28825;fill-rule:nonzero;" />
                            <path d="M504.324,376.203c-0,-11.206 -9.076,-20.29 -20.29,-20.299c-11.205,0 -20.29,9.084 -20.29,20.29c-0.009,11.205 9.076,20.298 20.281,20.298c11.214,0 20.299,-9.084 20.299,-20.289" style="fill:#0668e8;fill-rule:nonzero;" />
                            <path d="M1103.59,375.866c0,-10.212 -8.279,-18.491 -18.491,-18.491c-10.212,0 -18.49,8.279 -18.49,18.491c-0,10.212 8.278,18.491 18.49,18.491c10.212,-0 18.491,-8.279 18.491,-18.491" style="fill:#0668e8;fill-rule:nonzero;" />
                            <path d="M820.694,532.814c-1.826,1.236 -3.947,1.826 -6.005,1.826c-3.5,0 -6.919,-1.709 -9.013,-4.824l-40.687,-61.066l-12.279,-18.401c6.981,-2.506 13.103,-6.802 17.846,-12.306l12.306,18.491l40.83,61.236c3.33,4.976 1.978,11.715 -2.998,15.044" style="fill:#f28825;fill-rule:nonzero;" />
                            <path d="M842.611,508.949l-58.157,0c-8.825,0 -15.994,7.16 -15.994,15.994c0,8.834 7.169,15.994 15.994,15.994l58.157,-0c8.834,-0 15.994,-7.16 15.994,-15.994c-0,-8.834 -7.16,-15.994 -15.994,-15.994" style="fill:#f28825;fill-rule:nonzero;" />
                            <path d="M644.356,116.504l-498.686,-0c-5.988,-0 -10.848,4.851 -10.848,10.838c0,5.988 4.86,10.839 10.848,10.839l498.686,-0l-0,-21.677Z" style="fill:#f28825;fill-rule:nonzero;" />
                            <path d="M474.965,547.433l-360.462,-0c-5.988,-0 -10.847,4.85 -10.847,10.838c-0,5.988 4.859,10.838 10.847,10.838l360.462,0l-0,-21.676Z" style="fill:#0668e8;fill-rule:nonzero;" />
                            <path d="M312.606,420.607l-127.376,0c-5.988,0 -10.848,4.851 -10.848,10.839c0,5.987 4.86,10.838 10.848,10.838l127.376,0l0,-21.677Z" style="fill:#0668e8;fill-rule:nonzero;" />
                            <path d="M138.933,420.607l-20.934,0c-5.988,0 -10.839,4.851 -10.839,10.839c0,5.987 4.851,10.838 10.839,10.838l20.934,0c5.988,0 10.838,-4.851 10.838,-10.838c0,-5.988 -4.85,-10.839 -10.838,-10.839" style="fill:#0668e8;fill-rule:nonzero;" />
                            <path d="M401.788,200.183l-144.999,-0c-5.988,-0 -10.848,4.851 -10.848,10.838c0,5.988 4.86,10.839 10.848,10.839l144.999,-0l-0,-21.677Z" style="fill:#0668e8;fill-rule:nonzero;" />
                            <path d="M305.448,325.269l-164.904,0c-5.988,0 -10.847,4.851 -10.847,10.838c-0,5.988 4.859,10.848 10.847,10.848l164.904,-0l0,-21.686Z" style="fill:#0668e8;fill-rule:nonzero;" />
                            <path d="M353.944,490.285l-164.913,-0c-5.988,-0 -10.839,4.851 -10.839,10.838c0,5.988 4.851,10.848 10.839,10.848l164.913,-0l-0,-21.686Z" style="fill:#0668e8;fill-rule:nonzero;" />
                            <path d="M84.464,325.269l-63.617,0c-5.987,0 -10.847,4.851 -10.847,10.838c-0,5.988 4.86,10.848 10.847,10.848l63.617,-0c5.988,-0 10.839,-4.86 10.839,-10.848c-0,-5.987 -4.851,-10.838 -10.839,-10.838" style="fill:#0668e8;fill-rule:nonzero;" />
                            <path d="M212.067,200.183l-33.876,-0c-5.987,-0 -10.847,4.851 -10.847,10.838c-0,5.988 4.86,10.839 10.847,10.839l33.876,-0c5.988,-0 10.839,-4.851 10.839,-10.839c-0,-5.987 -4.851,-10.838 -10.839,-10.838" style="fill:#0668e8;fill-rule:nonzero;" />
                            <g transform="matrix(9.56747,0,0,9.56747,-1924.12,-3096.96)"><text x="212.834px" y="403.133px" style="font-family:'GillSansMT-Bold', 'Gill Sans MT', sans-serif;font-weight:700;font-size:20.904px;fill:#0668e8;">B<tspan x="226.634px 232.8px 247.039px " y="403.133px 403.133px 403.133px ">IKE</tspan></text><text x="264.129px" y="403.133px" style="font-family:'Arial-BoldMT', 'Arial', sans-serif;font-weight:700;font-size:19.254px;fill:#314866;">
                                    <tspan x="264.129px " y="403.133px ">-</tspan>
                                </text><text x="274.424px" y="403.133px" style="font-family:'GillSansMT-Bold', 'Gill Sans MT', sans-serif;font-weight:700;font-size:20.904px;fill:#f28825;">R<tspan x="287.775px 293.941px 309.905px " y="403.133px 403.133px 403.133px ">IDE</tspan></text><text x="214.457px" y="415.327px" style="font-family:'GillSansMT-Italic', 'Gill Sans MT', sans-serif;font-style:italic;font-size:10.452px;fill:#314866;">d<tspan x="218.985px 223.185px 226.508px 227.468px 232.419px 236.62px 238.208px 242.516px 245.839px 248.366px 253.113px 257.421px 261.948px 264.842px 267.369px 269.927px 274.235px 278.762px 282.085px 284.612px 286.2px 290.401px 292.928px 300.287px 304.595px 309.123px 313.65px 317.851px " y="415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px 415.327px ">es Vélos pour tous le mondes</tspan></text></g>
                        </svg>
                    </div>
                    <div class="col-md-7 h-100 align-items-center">
                        <div class="p-5">
                            <div class="user">
                                <div class="media align-items-center mb-4">
                                    <svg class="mr-3 rounded-circle" width="30%" height="30%" viewBox="0 0 625 625" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><use id="Arrière-plan" xlink:href="#_Image1" x="0" y="0" width="150px" height="150px" transform="matrix(4.16667,0,0,4.16667,0,0)"/><defs><image id="_Image1" width="150px" height="150px" xlink:href="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/4QCgRXhpZgAATU0AKgAAAAgABQEaAAUAAAABAAAASgEbAAUAAAABAAAAUgEoAAMAAAABAAIAAAEyAAIAAAAUAAAAWodpAAQAAAABAAAAbgAAAAAAAABIAAAAAQAAAEgAAAABMjAyMDowOTowOSAxODo1MTo1NgAAA6ABAAMAAAABAAEAAKACAAMAAAABAJYAAKADAAMAAAABAJYAAAAAAAD/4QtAaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJYTVAgQ29yZSA1LjUuMCI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgcGhvdG9zaG9wOkNvbG9yTW9kZT0iMyIgcGhvdG9zaG9wOklDQ1Byb2ZpbGU9InNSR0IgSUVDNjE5NjYtMi4xIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMC0wOS0wOVQxODo1MTo1NiswNDowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMC0wOS0wOVQxODo1MTo1NiswNDowMCI+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249InByb2R1Y2VkIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZmZpbml0eSBQaG90byAxLjguNSIgc3RFdnQ6d2hlbj0iMjAyMC0wOS0wOVQxODo1MTo1NiswNDowMCIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPD94cGFja2V0IGVuZD0idyI/Pv/tACxQaG90b3Nob3AgMy4wADhCSU0EJQAAAAAAENQdjNmPALIE6YAJmOz4Qn7/4gJkSUNDX1BST0ZJTEUAAQEAAAJUbGNtcwQwAABtbnRyUkdCIFhZWiAH5AAJAAkADgAwABVhY3NwTVNGVAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA9tYAAQAAAADTLWxjbXMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAtkZXNjAAABCAAAAD5jcHJ0AAABSAAAAEx3dHB0AAABlAAAABRjaGFkAAABqAAAACxyWFlaAAAB1AAAABRiWFlaAAAB6AAAABRnWFlaAAAB/AAAABRyVFJDAAACEAAAACBnVFJDAAACEAAAACBiVFJDAAACEAAAACBjaHJtAAACMAAAACRtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACIAAAAcAHMAUgBHAEIAIABJAEUAQwA2ADEAOQA2ADYALQAyAC4AMQAAbWx1YwAAAAAAAAABAAAADGVuVVMAAAAwAAAAHABOAG8AIABjAG8AcAB5AHIAaQBnAGgAdAAsACAAdQBzAGUAIABmAHIAZQBlAGwAeVhZWiAAAAAAAAD21gABAAAAANMtc2YzMgAAAAAAAQxCAAAF3v//8yUAAAeTAAD9kP//+6H///2iAAAD3AAAwG5YWVog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"/></defs></svg>
                                    <!--<img class="mr-3" width="80" height="80" alt="Avatar" src="" >-->
                                    <div class="media-body">
                                        <h3 class="mb-0">Bonjour {{ __('John Doe,') }}</h3>
                                        <p class="text-muted mb-0">{{ __('Admin') }}</p>
                                    </div>
                                </div>

                                <div class="card-header">{{ __('Tableau de bord') }}</div>

                                <div class="card-body">
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif

                                    {{ __('Vous êtes connecté !') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h4 class="card-title">Vente & Stosk</h4>
                    <!--------------------------
                         RANGEE PRINCIPALE
                    -------------------------->
                    <div class="default-tab">
                        <ul class="nav nav-tabs mb-3" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#production">PRODUCTION</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ventes">VENTES</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#reporting">REPORTING</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#administration">ADMINISTRATION</a></li>
                        </ul>
                        <div class="tab-content">
                            <!-------------------
                                PRODUCTION
                            --------------------->
                            <div class="tab-pane fade show active" id="production" role="tabpanel">
                                <div class="p-t-15">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="custom-tab-1">
                                                    <ul class="nav nav-tabs mb-3">
                                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#marque">Marque</a></li>
                                                        <li class="nav-item"><a  class="nav-link" data-toggle="tab" href="#categorie">Catégorie</a></li>
                                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#produits">Produits</a></li>
                                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#stock">Stock</a></li>
                                                    </ul>
                                                    <div class="tab-content">

                                                        <div class="tab-pane fade show active" id="marque" role="tabpanel">
                                                        <!-- ** MARQUE ** -->
                                                            <div class="container">
                                                                <div class="row">

                                                                    <div class="col-xl-3">
                                                                        <!--MODIFICATION & CREATION d'une nouvelle marque-->
                                                                        @include('Brands/BrandForm')
                                                                    </div>

                                                                    <div class="col-xl-9">
                                                                        <!--LISTE DES MARQUES -->
                                                                        @include('Brands/BrandsListe')
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="categorie">
                                                        <!-- ** CATEGORIE ** -->
                                                            <div class="container">
                                                                <div class="row">

                                                                    <div class="col-xl-3">
                                                                        <!-- MODIFICATION d'une catégorie -->
                                                                        @include('Categories/CategoryForm')
                                                                    </div>

                                                                    <div class="col-xl-9">
                                                                        <!-- LISTE DES CATEGORIES -->
                                                                        @include('Categories/categoriesListe')
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="produits">
                                                        <!--** PRODUITS ** -->
                                                            <div class="container">
                                                                <div class="row">

                                                                    <div class="col-xl-3">
                                                                    <!-- SELECTION MODIFICATION et CREATION d'un produit -->
                                                                        @include('Products/ProductSelect')
                                                                        @include('Products/ProductForm')
                                                                    </div>

                                                                    <div class="col-xl-9">
                                                                        <!-- LISTE DES PRODUITS -->
                                                                        @include('Products/ProductsListe')


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="stock">
                                                        <!-- ** STOCK ** -->
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-xl-3">
                                                                    <!-- SELECTION & MISE EN STOCK d'un produit -->
                                                                    @include('Stocks/stockSelect')
                                                                    @include('Stocks/StockForm')
                                                                    </div>

                                                                    <div class="col-xl-9">
                                                                        <!-- LISTE DES STOCKS -->
                                                                        @include('Stocks/StocksListe')

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-----------------
                                VENTES
                            ------------------->
                            <div class="tab-pane fade" id="ventes">
                                <div class="p-t-15">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="custom-tab-1">
                                                    <ul class="nav nav-tabs mb-3">
                                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#client">Client</a></li>
                                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#commande">Liste cmd</a></li>
                                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#bdc">Bon de cmd</a></li>
                                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#vente">Vente</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="client" role="tabpanel">
                                                        <!-- ** CLIENTS ** -->
                                                            <div class="container">
                                                                <div class="row">

                                                                    <div class="col-xl-2">
                                                                        <!-- FORMULAIRE CREATION et MODIFICATION DE CLIENT -->
                                                                        @include('Customers/CustomerForm')
                                                                    </div>

                                                                    <div class="col-xl-10">
                                                                        <!-- LISTE DES CLIENTS -->
                                                                        @include('Customers/customersListe')

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="commande">
                                                        <!-- ** COMMANDES**  -->
                                                            <div class="container">
                                                                <div class="row">

                                                                    <div class="col-xl-3">
                                                                        <h4>This is brand</h4>
                                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                                    </div>

                                                                    <div class="col-xl-9">
                                                                        <!-- LISTE DES COMMANDES -->
                                                                        @include('Orders/OrdersListe')

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="bdc">
                                                            <!-- ** BON DE COMMANDE ** -->
                                                            <div class="p-t-15">
                                                                <h4>Bon de commande</h4>
                                                                @include('BonDeCommande')
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="vente">
                                                        <!-- ** VENTES**  -->
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-xl-3">
                                                                        <h4>This is brand</h4>
                                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                                    </div>
                                                                    <div class="col-xl-9">
                                                                        <!-- SUIVI DES COMMANDES -->
                                                                        @include('OrderItems/OrderItemsListe')
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!----------------
                                REPORTING
                            ------------------>
                            <div class="tab-pane fade" id="reporting">
                                <div class="p-t-15">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="custom-tab-1">
                                                    <ul class="nav nav-tabs mb-3">
                                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#production3">Production</a></li>
                                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#vente4">Vente</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="production3" role="tabpanel">
                                                            <div class="p-t-15">
                                                                <h4>This is home title</h4>

                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="vente4">
                                                            <div class="p-t-15">
                                                                <h4>This is profile title</h4>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-------------------
                                ADMINISTRATION
                            --------------------->
                            <div class="tab-pane fade" id="administration">
                                <div class="p-t-15">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="custom-tab-1">
                                                    <ul class="nav nav-tabs mb-3">
                                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#utilisateur">Utilisateurs</a></li>
                                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#magasins">Magasins</a></li>
                                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profil">Profil</a></li>
                                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#historique">Historiques</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="utilisateur" role="tabpanel">
                                                        <!-- ** UTILISATEURS ** -->
                                                            <div class="container">
                                                                <div class="row">

                                                                    <div class="col-xl-3">
                                                                        <div class="card-body">
                                                                            <!-- CREATION MODIFICATION d'un UTILISATEUR -->
                                                                            @include('Staffs/StaffForm')
                                                                            <hr>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-9">
                                                                        <!-- LISTE DES UTILISATEURS ('Staffs/StaffsListe')-->
                                                                        @include('Staffs.StaffsListe')
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="magasins">
                                                        <!-- ** MAGASIN ** -->
                                                            <div class="container">
                                                                <div class="row">

                                                                    <div class="col-xl-3">
                                                                        @include('Stores/StoreForm')
                                                                    </div>

                                                                    <div class="col-xl-9">
                                                                        <!-- LISTE DES MAGASINS -->
                                                                        @include('Stores/StoresListe')
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="profil">
                                                        <!-- ** PRROFILE ** -->
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <h4>This is brand</h4>
                                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <h4>This is brand</h4>
                                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="historique">
                                                        <!-- ** HISTORIQUE ** -->
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <h4>This is brand</h4>
                                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <h4>This is brand</h4>
                                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
