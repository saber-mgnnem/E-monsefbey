@extends('Admin.app')

@section('content')
<section class="section">
    <div class="container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="title">
              <h2>Calendar</h2>
            </div>
          </div>
          <!-- end col -->
          <div class="col-md-6">
            <div class="breadcrumb-wrapper">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#0">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Calendar
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- ========== title-wrapper end ========== -->

      <div class="row">
        <div class="col-lg-12">
          <div class="card-style calendar-card mb-30">
            <div id="calendar-full"></div>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- end container -->
  </section>
  <script>
    // ====== calendar activation
    document.addEventListener("DOMContentLoaded", function () {
      var calendarFullEl = document.getElementById("calendar-full");
      var calendarFull = new FullCalendar.Calendar(calendarFullEl, {
        initialView: "dayGridMonth",
        headerToolbar: {
          end: "today prev,next",
        },
      });
      calendarFull.render();
    });
  </script>

@endsection
