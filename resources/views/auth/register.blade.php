@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden rounded-sm border-0 shadow-lg my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 p-5 d-none d-lg-block bg-login-image">
                        <svg width="100%" height="100%" viewBox="0 0 1280 960" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
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
                    <div class="col-lg-7">

                        <div class="p-5">
                            <div class="user">
                                <div class="text-center">
                                    <h3>{{ __('Eregistrement') }}</h3>
                                </div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                            <div class="col-md-6">
                                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                                @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                                            <div class="col-md-6">
                                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name">

                                                @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E.mail') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="magasin" class="col-md-4 col-form-label text-md-right">{{ __('Magasin') }}</label>

                                            <div class="col-md-6">
                                                <select id="magasin" class="form-control" value="{{ old('magasin') }}" required>
                                                    <option selected>Choisir</option>
                                                    <option>Santa Cruz</option>
                                                    <option>Baldwin</option>
                                                    <option>Rowlett</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="profil" class="col-md-4 col-form-label text-md-right">{{ __('Profil') }}</label>
                                            <div class="col-md-6">
                                                <select id="profil" class="form-control" value="{{ old('profil') }}" required>
                                                    <option selected>Choisir</option>
                                                    <option>Vendeur</option>
                                                    <option>Administrateur</option>
                                                    <option>Préparateur</option>
                                                    <option>Réparateur</option>
                                                    <option>Direction</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de pass') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer mot de passe') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Enregister') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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
