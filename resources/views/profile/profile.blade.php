
@extends('layouts.peddyhub')

 @section('content')


</section>
<div class="pet about main-wrapper pet tm_profile" style="z-index: 1";>
        <section class="team">
            <div class="row">
                <div class="col-md-5 d-flex justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="member">
                            <div class="image">
                                <img src="{{ url('/peddyhub/images/home_5/team-1.png') }}" alt="image of client" title="client"
                                    class="img-fluid customer">
                            </div>
                            <div class="content">
                                <div class="name wow fadeInDown">
                                    <a title="name">{{ $data->name }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="main-wrapper pet tm_profile">
                        <section class="profile team">
                                <div class="slide">
                                    <div class="row">
                                        <div class="col-lg-11 col-md-11 col-sm-12" >
                                            <br>
                                            <div class="spec card">
                                                <ul>
                                                    <li>
                                                        <h5>ข้อมูลส่วนตัว</h5><a href="{{ url('/profile/' . $data->id . '/edit') }}" class="text-white float-right btn btn-warning main-shadow main-radius" >
                                <i class="fas fa-user-edit"></i> แก้ไขโปรไฟล์
                            </a>
                                                    </li>
                                                    <li><i class="fas fa-paw yellow me-2"></i> <span> username: </span>  {{ $data->username }}</li>
                                                    <li><i class="fas fa-paw yellow me-2"></i> <span> Email: </span> {{ $data->email }}</li>
                                                    <li><i class="fas fa-paw yellow me-2"></i> <span> tel: </span>{{ $data->tel }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
<!-- <div class="main-wrapper pet tm_profile">
        <section class="profile">
            <div class="container">
                <div class="slide">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="images">
                                <img src="images/home_5/team-1.png" alt="Image of Member" title="Member"
                                    class="img-fluid">
                            </div>
                            <div class="card">
                                <ul>
                                    <li>
                                        <h4>Contact Info</h4>
                                    </li>

                                    <li><i class="fas fa-paw yellow me-2"></i> <span> Email: </span>
                                        <a href="mailto: example@example.com">example@example.com</a> </li>
                                    <li><i class="fas fa-paw yellow me-2"></i> <span> Phone: </span>  <a href="tel: 9328475899"> +9328475899</a>
                                    </li>
                                    <li><i class="fas fa-paw yellow me-2"></i> <span> Emergency: </span>
                                        <a href="tel: (08000) 5439 980"> (08000) 5439 980</a>
                                    </li>
                                    <li class="links mt-3 text-center">
                                        <a href="#" title="facebook"><i class="fas fa-facebook"></i></a>
                                        <a href="#" title="twitter">asd</a>
                                        <a href="#" title="instagram"><i class="fas fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12" >
                            <br>
                            <div class="spec card">
                                <ul>
                                    <li>
                                        <h5>ข้อมูลส่วนตัว</h5>
                                    </li>
                                    <li><i class="fas fa-paw yellow me-2"></i> <span> username: </span>  {{ $data->username }}</li>
                                    <li><i class="fas fa-paw yellow me-2"></i> <span> name: </span> {{ $data->name }}</li>
                                    <li><i class="fas fa-paw yellow me-2"></i> <span> Email: </span> {{ $data->email }}</li>
                                    <li><i class="fas fa-paw yellow me-2"></i> <span> tel: </span>{{ $data->tel }}</li>
                                    <li><i class="fas fa-paw yellow me-2"></i> <span> Availablity: </span> Mon -
                                        Sat 9:00 am To 6:00 pm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> -->