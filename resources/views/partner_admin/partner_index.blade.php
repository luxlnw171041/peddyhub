@extends('layouts.partner.theme_partner')

@section('content')
<style>
  .box {
    width: 90%;
    margin: 0 auto;
    padding: 2px;
    background-color: #eaab00;
    /* gold */
    /* Single pixel data uri image http://jsfiddle.net/LPxrT/ 
  /* background-image: gold, gold, white */
    background-image: url('data:image/gif;base64,R0lGODlhAQABAPAAAOqrAP///yH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='), url('data:image/gif;base64,R0lGODlhAQABAPAAAOqrAP///yH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='),
      url('data:image/gif;base64,R0lGODlhAQABAPAAAP///////yH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==');
    background-repeat: no-repeat;
    background-size: 0 2px, 0 100%, 0% 2px;
    background-position: top center, top center, bottom center;
    -webkit-animation: drawBorderFromCenter 4s;
  }

  /* Chrome, Safari, Opera */
  @-webkit-keyframes drawBorderFromCenter {
    0% {
      background-size: 0 2px, 0 0, 100% 100%;
    }

    20% {
      background-size: 100% 2px, 100% 0, 100% 100%;
    }

    66% {
      background-size: 100% 2px, 100% 98%, 100% 100%;
    }

    99% {
      background-size: 100% 2px, 100% 98%, 0 2px;
    }
  }



  .content {
    background: white;
    padding: 2em;
    text-align: center;
    /* text-transform: uppercase; */
  }
</style>
<center>
  <div class="box" style="font-family: 'Prompt', sans-serif;border-radius: 25px;">
    <div class="content" style="font-family: 'Prompt', sans-serif;border-radius: 25px;">
      <div class="row">
        <div class="card-body col-md-6" style="hight: 500px">
          <img src="peddyhub/images/sticker/01.png" width="80%" alt="peddyhub">
        </div>
        <div class="card-body col-md-6 d-flex align-items-center ">
          <div class="col-md-12">
            @php
            $user = \Illuminate\Support\Facades\Auth::user();
            $partner = \App\Models\Partner::where('id' , '=' ,$user->partner)->get();
            @endphp
            <h1 style="font-family: 'Prompt', sans-serif;text-shadow: 4px 4px 4px rgba(150, 150, 150, 1);margin-top:25px;"> <b>ยินดีต้อนรับ </b> </h1>
            <h1 style="font-family: 'Prompt', sans-serif;text-shadow: 4px 4px 4px rgba(150, 150, 150, 1);margin-top:25px;"> 
              <b>
                @foreach($partner as $item)
                {{$item->name}}
                @endforeach
              </b>
            </h1>
            <h1 style="font-family: 'Prompt', sans-serif;text-shadow: 4px 4px 4px rgba(150, 150, 150, 1);margin-top:25px;"> <b>เข้าสู่</b> </h1>
            <h1 style="font-family: 'Prompt', sans-serif;text-shadow: 4px 4px 4px rgba(150, 150, 150, 1);margin-top:25px;"> <b>PEDDyHUB PARTNER</b> </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</center>
@endsection