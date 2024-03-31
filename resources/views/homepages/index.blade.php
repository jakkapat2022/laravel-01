@extends('layouts.app')

@section('content')
<header>
  <div class="page-header min-vh-50" style="background-image: url(&#39;https://firebasestorage.googleapis.com/v0/b/profile-de379.appspot.com/o/20230212_093310.jpg?alt=media&token=ff1ef4ae-cf24-45b2-b3c4-5cdb0072c276&#39;);" loading="lazy">
    <span class="mask bg-gradient-light opacity-2"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
          <h1 class="text-light text-bold mb-4">Wellcome to <br>Jakkapat Singkaew Web site</h1>
          <p class="text-light opacity-8 lead pe-5 me-5">เว็บไชต์แนะนำตนเอง จัดทำโดย นายจักรภัทร สิงห์แก้ว</p>
          <div class="buttons">
            <button type="button" class="btn btn-white btn-light  mt-4">Get Started</button>
            <button type="button" class="btn text-light  shadow-none mt-4">Read more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<style>
  body{
    background-color:light;
  }
</style>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n7">
  <div class="container mt-5 mb-5">
    <div class="row align-items-center">
      <div class="card card-background-mask-light col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4 justify-content-center">
  
          <img class="rounded-circle shadow " src="https://firebasestorage.googleapis.com/v0/b/profile-de379.appspot.com/o/1658570989781%20(1).jpg?alt=media&token=55f7b910-ce4b-4dbc-85c7-1e80fee37890" id="image_preview_container">
      <div class="position-sticky" style="top:100px !important">
          <h2 class=" text-bold">Presentation By Jakkapat Singkaew</h2>
          <h4 class="text-secondary font-weight">ประวัติส่วนตัว
            <p>ชื่อเล่น "แบต" <br>เกิดเมื่อวันที่ 18 เดือน พฤศจิกายน พ.ศ.2545 อายุ 20 ปี<br>ที่อยู่ปัจจุบันเลขที่ 5 หมู่ที่ 4 ตำบลดอนเมย อำเภอเมือง จังหวัดอำนาจเจริญ รหัสไปรษณีย์ 37000</p>
          </h4>
        </div>
      </div>
      <div class="col-lg-6 ms-auto">
        <div class="row justify-content-start">
          <div class="col-md-6">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
              <h5 class="font-weight-bolder mt-3">ทักษะและความสามารถพิเศษ</h5>
              <p class="pe-5">สื่อสารภาษาอังกฤษระดับปานกลาง<br>เขียนโปรแกรมภาษา Html java python c/c++<br>ตัดต่อวีดีโอโดยใช้ adobe after effect<br>ขับรถยนต์และจักรยานยนต์
              <br>งานอดิเรก เขียนโปรแกรมควบคุมอุปกรณ์ Iot ไมโครคอนโทรเลอร์
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">flip_to_front</i>
              <h5 class="font-weight-bolder mt-3">ผลงานแห่งความสำเร็จ</h5>
              <p class="pe-3">โครงการจักรยานปั้นผลิตไฟฟ้า ระดับมัธยมศึกษา<br>โครงการระบบตรวจสอบใบหน้าผ่านกล่อง ระดับปวส.
            </div>
          </div>
        </div>
        <div class="row justify-content-start mt-5">
          <div class="col-md-6 mt-3">
            <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
            <h5 class="font-weight-bolder mt-3">จุดมุ่งหมายในการศึกษาต่อ</h5>
            <p class="pe-5">มหาวิทยาลัยธรรมศาสตร์ <br>วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมซอฟต์แวร์<br>ศึกษาเกี่ยวกับการปฏิสัมพันธ์ระหว่างมนุษย์และคอมพิวเตอร์<br> หลักการเขียน โปรแกรมเชิงวัตถุ วิศวกรรมซอฟต์แวร์เชิงวัตถุ <br>สถาปัตยกรรมและการออกแบบซอฟต์แวร์ การทวนสอบ และตรวจสอบซอฟต์แวร์ และจริยธรรมและกฏหมายสำหรับวิศวกรรมซอฟต์แวร์</p>
          </div>
          <div class="col-md-6 mt-3">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">devices</i>
              <h5 class="font-weight-bolder mt-3">ประสบการ์การทำงาน</h5>
              <p class="pe-3">ฝึกงานที่บริษัท google ประเทศไทย<br>ตำแหน่งงาน วิศวกรซอต์แวร์(Staff Software Engineer</b>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<section class="pt-3 pb-4" id="count-stats">
  <div class="container">
    <div class="row">
    <h2 class="mt-3 text-dark text-center">ประวัติการศึกษา</h2>
      <div class="col-lg-9 mx-auto py-3">
        <div class="row">
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h4 class="text-gradient text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
  <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"/>
  <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
</svg> ระดับ(ปวส.) <br>ปีการศึกษา <span id="state2" countTo="2"></span><span id="state1" countTo="564"></span> ถึงปัจจุบัน</h4>
              <h5 class="mt-3">วิทยาลัยเทคนิคอำนาจเจริญ</h5>
              <p class="text-sm font-weight-normal"></p>
            </div>
          </div>
          <div class="col-md-4 position-relative">
          <div class="p-3 text-center">
              <h4 class="text-gradient text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
  <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"/>
  <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
</svg> ระดับมัธยมศึกษา <br>ปีการศึกษา <span id="state3" countTo="2"></span><span id="state4" countTo="557"></span> ถึง 2564</h4>
              <h5 class="mt-3">โรงเรียนนาจิกพิทยาคม</h5>
              <p class="text-sm font-weight-normal"></p>
            </div>
          </div>
          <div class="col-md-4">
          <div class="p-3 text-center">
              <h4 class="text-gradient text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
  <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"/>
  <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
</svg> ระดับ(ปวส.) <br>ปีการศึกษา <span id="state5" countTo="2"></span><span id="state6" countTo="552"></span> ถึง 2557</h4>
              <h5 class="mt-3"> โรงเรียนบ้านหนองปลิง</h5>
              <p class="text-sm font-weight-normal"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      
    </div>
  </div>
</div>

<!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->

  

  <footer class="footer pt-5 mt-5">
  <div class="container">
    <div class=" row">
      <div class="col-md-3 mb-4 ms-auto ">
        <div>
          <h6 class="font-weight-bolder mb-4">by jakkapat singkaew</h6>
        </div>
        <div>
          <ul class="d-flex flex-row ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link pe-1" href="" target="_blank">
                <i class="fab fa-facebook text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="" target="_blank">
                <i class="fab fa-twitter text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="" target="_blank">
                <i class="fab fa-dribbble text-lg opacity-8"></i>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link pe-1" href="" target="_blank">
                <i class="fab fa-github text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="" target="_blank">
                <i class="fab fa-youtube text-lg opacity-8"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>



      <div class="col-md-2 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">เมนู</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                หน้าแรก
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                ข้อมูลนักศึกษา
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                ข้อมูลบริษัท
              </a>
            </li>

          </ul>
        </div>
      </div>

      

      <div class="col-12">
        <div class="text-center">
          <p class="text-dark my-4 text-sm font-weight-normal">
            All rights reserved. Copyright © <script>document.write(new Date().getFullYear())</script> Material Kit by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</footer>


  

  
  















<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>




<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="{{ asset('assets/js/plugins/countup.min.js') }}"></script>





<script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>



<script src="{{ asset('assets/js/plugins/prism.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/highlight.min.js') }}"></script>



<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="{{ asset('assets/js/plugins/rellax.min.js') }}"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="{{ asset('assets/js/plugins/tilt.min.js') }}"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>


<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="{{ asset('assets/js/plugins/parallax.min.js') }}"></script>











<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="{{ asset('assets/js/material-kit.min.js?v=3.0.4') }}" type="text/javascript"></script>


<script type="text/javascript">

  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state4')) {
    const countUp = new CountUp('state4', document.getElementById("state4").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state5')) {
    const countUp = new CountUp('state5', document.getElementById("state5").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state6')) {
    const countUp = new CountUp('state6', document.getElementById("state6").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script>

  

@endsection
