<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="{{asset('images/logo-rounded.png')}}">
  <title>Sers | Smart City</title>
  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/lineicons.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/quill/bubble.cs')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/quill/snow.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/fullcalendar.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/morris.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/datatable.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}" />

  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Bootstrap-Select JS -->

   <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}" ></script>
   <script src="{{asset('assets/js/bootstrap4.bundle.min.js')}}" ></script>
   <script src="{{asset('assets/js/bootstrap-select.min.js')}}" ></script>

</head>

<body>
    @include('sweetalert::alert')

  <!-- ======== sidebar-nav start =========== -->
  <aside class="sidebar-nav-wrapper">
    <div >
        <img src="{{ asset('assets/images/logo.png') }}" style="width: 150px !important; margin-left: 2.5rem !important;">

    </div>
    <nav class="sidebar-nav">
      <ul>
        <span class="divider mt-2">
            <hr />
        </span>
        <li class="nav-item nav-item-has-children">
            <a href="" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_2" aria-controls="ddmenu_2"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon">
                <!-- Icône mise à jour -->
                <i class="fas fa-users"></i>
              </span>
              <span class="text ">Users</span>
            </a>
            <ul id="ddmenu_2" class="collapse dropdown-nav">
              <li>
                <a  href="{{url('users')}}">
                  <span class="icon">
                    <!-- Icône pour Clients -->
                    <i class="fas fa-user-friends"></i>
                  </span>
                  <span class="text">Clients</span>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item">
            <a href="{{url('calendar')}}">
              <span class="icon">
                <!-- Icône mise à jour pour le profil -->
                <i class="fas fa-calendar-days"></i>
              </span>
              <span class="text">
                Calendar
              </span>
            </a>
          </li>


        <span class="divider">
          <hr />
        </span>
        <li class="nav-item">
            <a href="{{url('categories')}}">
              <span class="icon">
                <!-- Icône mise à jour pour le profil -->
                <i class="fas fa-address-card"></i>
              </span>
              <span class="text">
                category
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a  href="{{url('add-category')}}">
              <span class="icon">
                <!-- Icône mise à jour pour le profil -->
                <i class="fas fa-calendar-check"></i>
              </span>
              <span class="text">
                add category
              </span>
            </a>
          </li>
          <span class="divider">
            <hr />
          </span>
          <li class="nav-item">
            <a href="{{url('products')}}">
              <span class="icon">
                <!-- Icône mise à jour pour le profil -->
                <i class="fas fa-list"></i>
              </span>
              <span class="text">
                Products
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('add-product')}}">
              <span class="icon">
                <!-- Icône mise à jour pour le profil -->
                <i class="fas fa-list"></i>
              </span>
              <span class="text">
                Add Product
              </span>
            </a>
          </li>
          <span class="divider">
            <hr />
          </span>
          <li class="nav-item">
            <a href="{{url('orders')}}">
              <span class="icon">
                <!-- Icône mise à jour pour le profil -->
                <i class="fab fa-speakap"></i>
              </span>
              <span class="text">
                Orders
              </span>
            </a>
          </li>
      </ul>

      </ul>
    </nav>

  </aside>
  <div class="overlay"></div>
  <!-- ======== sidebar-nav end =========== -->

  <!-- ======== main-wrapper start =========== -->
  <main class="main-wrapper">
    <!-- ========== header start ========== -->
    <header class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-6">
            <div class="header-left d-flex align-items-center">
              <div class="menu-toggle-btn mr-15">
                <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                  <i class="lni lni-chevron-left me-2"></i> Menu
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 col-6">
            <div class="header-right">



              <!-- profile start -->
              <div class="profile-box ml-15">
                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="profile-info">
                    <div class="info">

                      <div>
                        <h6 class="fw-500">admin</h6></div>
                    </div>
                  </div>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                  <li>
                    <div class="author-info flex items-center !p-1">

                      <div class="content">
                        <h4 class="text-sm">admin</h4>

                      </div>
                    </div>
                  </li>
                  <li class="divider"></li>

                  <li class="divider"></li>
                  <li class="">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                </ul>
              </div>
              <!-- profile end -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- ========== header end ========== -->
    <section class="section">
      <div class="container-fluid ">
        @include('sweetalert::alert')
        @yield('content')
      </div>
    <!-- end container -->
  </section>
    <!-- ========== section end ========== -->
    <!-- ========== footer start =========== -->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 order-last order-md-first">
            <div class="copyright text-center text-md-start">
              <p class="text-sm">
                Designed and Developed by
                <a href="https://ihebheni.infinityfreeapp.com/" rel="nofollow" target="_blank">
                  saber Mgannem & Iheb heni
                </a>
              </p>
            </div>
          </div>
          <!-- end col-->
          <div class="col-md-6">
            © 2024 SersTour+. Tous droits réservés.
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </footer>
    <!-- ========== footer end =========== -->
  </main>
  <!-- ======== main-wrapper end =========== -->

  <!-- ============ Theme Option Start ============= -->
  <button class="option-btn">
    <i class="lni lni-cog"></i>
  </button>
  <div class="option-overlay"></div>
  <div class="option-box">
    <div class="option-header">
      <div>
        <h5>Theme Customizer</h5>
        <p class="text-gray">Customize and Preview in Real time</p>
      </div>
      <button class="option-btn-close text-gray">
        <i class="lni lni-close"></i>
      </button>
    </div>
    <h6 class="mb-10">Sidebar</h6>
    <ul class="mb-30">
      <li><button class="leftSidebarButton active">Left Sidebar</button></li>
      <li><button class="rightSidebarButton">Right Sidebar</button></li>
    </ul>

    <h6 class="mb-10">Theme</h6>
    <ul class="d-flex flex-wrap align-items-center">
      <li>
        <button class="lightThemeButton active">
          Light Theme + Sidebar 1
        </button>
      </li>
      <li><button class="darkThemeButton">Dark Theme + Sidebar 1</button></li>
    </ul>

  </div>
  <!-- ============ Theme Option End ============= -->


  <!-- ========= All Javascript files linkup ======== -->
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/Chart.min.js')}}"></script>
  <script src="{{asset('assets/js/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/js/dynamic-pie-chart.js')}}"></script>
  <script src="{{asset('assets/js/moment.min.js')}}"></script>
  <script src="{{asset('assets/js/fullcalendar.js')}}"></script>
  <script src="{{asset('assets/js/jvectormap.min.js')}}"></script>
  <script src="{{asset('assets/js/world-merc.js')}}"></script>
  <script src="{{asset('assets/js/polyfill.js')}}"></script>
  <script src="{{asset('assets/js/quill.min.js')}}"></script>
  <script src="{{asset('assets/js/datatable.js')}}"></script>
  <script src="{{asset('assets/js/Sortable.min.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
    // ======== jvectormap activation
    var markers = [
      { name: "Egypt", coords: [26.8206, 30.8025] },
      { name: "Russia", coords: [61.524, 105.3188] },
      { name: "Canada", coords: [56.1304, -106.3468] },
      { name: "Greenland", coords: [71.7069, -42.6043] },
      { name: "Brazil", coords: [-14.235, -51.9253] },
    ];

    var jvm = new jsVectorMap({
      map: "world_merc",
      selector: "#map",
      zoomButtons: true,

      regionStyle: {
        initial: {
          fill: "#d1d5db",
        },
      },

      labels: {
        markers: {
          render: (marker) => marker.name,
        },
      },

      markersSelectable: true,
      selectedMarkers: markers.map((marker, index) => {
        var name = marker.name;

        if (name === "Russia" || name === "Brazil") {
          return index;
        }
      }),
      markers: markers,
      markerStyle: {
        initial: { fill: "#4A6CF7" },
        selected: { fill: "#ff5050" },
      },
      markerLabelStyle: {
        initial: {
          fontWeight: 400,
          fontSize: 14,
        },
      },
    });
    // ====== calendar activation
    document.addEventListener("DOMContentLoaded", function () {
      var calendarMiniEl = document.getElementById("calendar-mini");
      var calendarMini = new FullCalendar.Calendar(calendarMiniEl, {
        initialView: "dayGridMonth",
        headerToolbar: {
          end: "today prev,next",
        },
      });
      calendarMini.render();
    });

    // =========== chart one start
    const ctx1 = document.getElementById("Chart1").getContext("2d");
    const chart1 = new Chart(ctx1, {
      type: "line",
      data: {
        labels: [
          "Jan",
          "Fab",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [
          {
            label: "",
            backgroundColor: "transparent",
            borderColor: "#365CF5",
            data: [
              600, 800, 750, 880, 940, 880, 900, 770, 920, 890, 976, 1100,
            ],
            pointBackgroundColor: "transparent",
            pointHoverBackgroundColor: "#365CF5",
            pointBorderColor: "transparent",
            pointHoverBorderColor: "#fff",
            pointHoverBorderWidth: 5,
            borderWidth: 5,
            pointRadius: 8,
            pointHoverRadius: 8,
            cubicInterpolationMode: "monotone", // Add this line for curved line
          },
        ],
      },
      options: {
        plugins: {
          tooltip: {
            callbacks: {
              labelColor: function (context) {
                return {
                  backgroundColor: "#ffffff",
                  color: "#171717"
                };
              },
            },
            intersect: false,
            backgroundColor: "#f9f9f9",
            title: {
              fontFamily: "Plus Jakarta Sans",
              color: "#8F92A1",
              fontSize: 12,
            },
            body: {
              fontFamily: "Plus Jakarta Sans",
              color: "#171717",
              fontStyle: "bold",
              fontSize: 16,
            },
            multiKeyBackground: "transparent",
            displayColors: false,
            padding: {
              x: 30,
              y: 10,
            },
            bodyAlign: "center",
            titleAlign: "center",
            titleColor: "#8F92A1",
            bodyColor: "#171717",
            bodyFont: {
              family: "Plus Jakarta Sans",
              size: "16",
              weight: "bold",
            },
          },
          legend: {
            display: false,
          },
        },
        responsive: true,
        maintainAspectRatio: false,
        title: {
          display: false,
        },
        scales: {
          y: {
            grid: {
              display: false,
              drawTicks: false,
              drawBorder: false,
            },
            ticks: {
              padding: 35,
              max: 1200,
              min: 500,
            },
          },
          x: {
            grid: {
              drawBorder: false,
              color: "rgba(143, 146, 161, .1)",
              zeroLineColor: "rgba(143, 146, 161, .1)",
            },
            ticks: {
              padding: 20,
            },
          },
        },
      },
    });
    // =========== chart one end

    // =========== chart two start
    const ctx2 = document.getElementById("Chart2").getContext("2d");
    const chart2 = new Chart(ctx2, {
      type: "bar",
      data: {
        labels: [
          "Jan",
          "Fab",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [
          {
            label: "",
            backgroundColor: "#365CF5",
            borderRadius: 30,
            barThickness: 6,
            maxBarThickness: 8,
            data: [
              600, 700, 1000, 700, 650, 800, 690, 740, 720, 1120, 876, 900,
            ],
          },
        ],
      },
      options: {
        plugins: {
          tooltip: {
            callbacks: {
              titleColor: function (context) {
                return "#8F92A1";
              },
              label: function (context) {
                let label = context.dataset.label || "";

                if (label) {
                  label += ": ";
                }
                label += context.parsed.y;
                return label;
              },
            },
            backgroundColor: "#F3F6F8",
            titleAlign: "center",
            bodyAlign: "center",
            titleFont: {
              size: 12,
              weight: "bold",
              color: "#8F92A1",
            },
            bodyFont: {
              size: 16,
              weight: "bold",
              color: "#171717",
            },
            displayColors: false,
            padding: {
              x: 30,
              y: 10,
            },
          },
        },
        layout: {
          padding: {
            top: 15,
            right: 15,
            bottom: 15,
            left: 15,
          },
        },
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            grid: {
              display: false,
              drawTicks: false,
              drawBorder: false,
            },
            ticks: {
              padding: 35,
              max: 1200,
              min: 0,
            },
          },
          x: {
            grid: {
              display: false,
              drawBorder: false,
              color: "rgba(143, 146, 161, .1)",
              drawTicks: false,
              zeroLineColor: "rgba(143, 146, 161, .1)",
            },
            ticks: {
              padding: 20,
            },
          },
        },
        plugins: {
          legend: {
            display: false,
          },
          title: {
            display: false,
          },
        },
      },
    });
    // =========== chart two end

    // =========== chart three start
    const ctx3 = document.getElementById("Chart3").getContext("2d");
    const chart3 = new Chart(ctx3, {
      type: "line",
      data: {
        labels: [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [
          {
            label: "Revenue",
            backgroundColor: "transparent",
            borderColor: "#365CF5",
            data: [80, 120, 110, 100, 130, 150, 115, 145, 140, 130, 160, 210],
            pointBackgroundColor: "transparent",
            pointHoverBackgroundColor: "#365CF5",
            pointBorderColor: "transparent",
            pointHoverBorderColor: "#365CF5",
            pointHoverBorderWidth: 3,
            pointBorderWidth: 5,
            pointRadius: 5,
            pointHoverRadius: 8,
            fill: false,
            tension: 0.4,
          },
          {
            label: "Profit",
            backgroundColor: "transparent",
            borderColor: "#9b51e0",
            data: [
              120, 160, 150, 140, 165, 210, 135, 155, 170, 140, 130, 200,
            ],
            pointBackgroundColor: "transparent",
            pointHoverBackgroundColor: "#9b51e0",
            pointBorderColor: "transparent",
            pointHoverBorderColor: "#9b51e0",
            pointHoverBorderWidth: 3,
            pointBorderWidth: 5,
            pointRadius: 5,
            pointHoverRadius: 8,
            fill: false,
            tension: 0.4,
          },
          {
            label: "Order",
            backgroundColor: "transparent",
            borderColor: "#f2994a",
            data: [180, 110, 140, 135, 100, 90, 145, 115, 100, 110, 115, 150],
            pointBackgroundColor: "transparent",
            pointHoverBackgroundColor: "#f2994a",
            pointBorderColor: "transparent",
            pointHoverBorderColor: "#f2994a",
            pointHoverBorderWidth: 3,
            pointBorderWidth: 5,
            pointRadius: 5,
            pointHoverRadius: 8,
            fill: false,
            tension: 0.4,
          },
        ],
      },
      options: {
        plugins: {
          tooltip: {
            intersect: false,
            backgroundColor: "#fbfbfb",
            titleColor: "#8F92A1",
            bodyColor: "#272727",
            titleFont: {
              size: 16,
              family: "Plus Jakarta Sans",
              weight: "400",
            },
            bodyFont: {
              family: "Plus Jakarta Sans",
              size: 16,
            },
            multiKeyBackground: "transparent",
            displayColors: false,
            padding: {
              x: 30,
              y: 15,
            },
            borderColor: "rgba(143, 146, 161, .1)",
            borderWidth: 1,
            enabled: true,
          },
          title: {
            display: false,
          },
          legend: {
            display: false,
          },
        },
        layout: {
          padding: {
            top: 0,
          },
        },
        responsive: true,
        // maintainAspectRatio: false,
        legend: {
          display: false,
        },
        scales: {
          y: {
            grid: {
              display: false,
              drawTicks: false,
              drawBorder: false,
            },
            ticks: {
              padding: 35,
            },
            max: 350,
            min: 50,
          },
          x: {
            grid: {
              drawBorder: false,
              color: "rgba(143, 146, 161, .1)",
              drawTicks: false,
              zeroLineColor: "rgba(143, 146, 161, .1)",
            },
            ticks: {
              padding: 20,
            },
          },
        },
      },
    });
    // =========== chart three end

    // ================== chart four start
    const ctx4 = document.getElementById("Chart4").getContext("2d");
    const chart4 = new Chart(ctx4, {
      type: "bar",
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [
          {
            label: "",
            backgroundColor: "#365CF5",
            borderColor: "transparent",
            borderRadius: 20,
            borderWidth: 5,
            barThickness: 20,
            maxBarThickness: 20,
            data: [600, 700, 1000, 700, 650, 800],
          },
          {
            label: "",
            backgroundColor: "#d50100",
            borderColor: "transparent",
            borderRadius: 20,
            borderWidth: 5,
            barThickness: 20,
            maxBarThickness: 20,
            data: [690, 740, 720, 1120, 876, 900],
          },
        ],
      },
      options: {
        plugins: {
          tooltip: {
            backgroundColor: "#F3F6F8",
            titleColor: "#8F92A1",
            titleFontSize: 12,
            bodyColor: "#171717",
            bodyFont: {
              weight: "bold",
              size: 16,
            },
            multiKeyBackground: "transparent",
            displayColors: false,
            padding: {
              x: 30,
              y: 10,
            },
            bodyAlign: "center",
            titleAlign: "center",
            enabled: true,
          },
          legend: {
            display: false,
          },
        },
        layout: {
          padding: {
            top: 0,
          },
        },
        responsive: true,
        // maintainAspectRatio: false,
        title: {
          display: false,
        },
        scales: {
          y: {
            grid: {
              display: false,
              drawTicks: false,
              drawBorder: false,
            },
            ticks: {
              padding: 35,
              max: 1200,
              min: 0,
            },
          },
          x: {
            grid: {
              display: false,
              drawBorder: false,
              color: "rgba(143, 146, 161, .1)",
              zeroLineColor: "rgba(143, 146, 161, .1)",
            },
            ticks: {
              padding: 20,
            },
          },
        },
      },
    });
      // =========== chart four end

    // =========== theme change
    const lightThemeColors = {
      darkBorder: "rgba(143, 146, 161, .1)",
      darkColor: "#5A6A85",
    };

    const darkThemeColors = {
      darkBorder: "#2b2b42",
      darkColor: "#838C9A",
    };

    // Function to apply theme colors to the chart
    function applyThemeColors(themeColors) {
      chart1.options.scales.y.grid.color = themeColors.darkBorder;
      chart1.options.scales.y.grid.borderColor = themeColors.darkBorder;
      chart1.options.scales.x.ticks.color = themeColors.darkColor;
      chart1.options.scales.y.ticks.color = themeColors.darkColor;

      chart2.options.scales.y.grid.color = themeColors.darkBorder;
      chart2.options.scales.y.grid.borderColor = themeColors.darkBorder;
      chart2.options.scales.x.ticks.color = themeColors.darkColor;
      chart2.options.scales.y.ticks.color = themeColors.darkColor;

      chart3.options.scales.y.grid.color = themeColors.darkBorder;
      chart3.options.scales.y.grid.borderColor = themeColors.darkBorder;
      chart3.options.scales.x.ticks.color = themeColors.darkColor;
      chart3.options.scales.y.ticks.color = themeColors.darkColor;

      chart4.options.scales.y.grid.color = themeColors.darkBorder;
      chart4.options.scales.y.grid.borderColor = themeColors.darkBorder;
      chart4.options.scales.x.ticks.color = themeColors.darkColor;
      chart4.options.scales.y.ticks.color = themeColors.darkColor;

      chart1.update();
      chart2.update();
      chart3.update();
      chart4.update();
    }

    const darkThemeButton = document.querySelector('.darkThemeButton')
    const lightThemeButton = document.querySelector('.lightThemeButton')

    // Check if the user has a saved theme preference
    const savedTheme = localStorage.getItem('theme')

    // Check the saved theme preference and apply appropriate colors
    if (savedTheme === 'dark') {
      applyThemeColors(darkThemeColors);
    } else {
      applyThemeColors(lightThemeColors);
    }

    // Event listeners for theme buttons
    darkThemeButton.addEventListener('click', () => {
      applyThemeColors(darkThemeColors);
    });

    lightThemeButton.addEventListener('click', () => {
      applyThemeColors(lightThemeColors);
    });
  </script>
</body>


<!-- Mirrored from demo.plainadmin.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 15:33:20 GMT -->
</html>

</body>
</html>
