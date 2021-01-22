  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Représentation graphique des données</h1>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-12 col-lg-7">

            <!-- COMMANDES PAR MAGASIN PAR MOIS -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary">&#x27A4 &nbsp; Commandes par magasins et par mois</h4>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <a type="button" id="update_order_store_month" class="btn float-right btn-sm btn-outline-primary">Actualisé le graphique</a><br>
                    <canvas id="chartOrderStoreMonth"></canvas>
                  </div>
                  <hr>
                </div>
              </div>

            <!-- COMMANDES PAR MAGASIN POUR 2016 -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary">&#x27A4 &nbsp; Commandes par magasins/semaines pour 2016</h4>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <a type="button" id="update_order_store_week_2016" class="btn float-right btn-sm btn-outline-primary">Actualisé le graphique</a><br>
                    <canvas id="chartOrderStoreWeek2016"></canvas>
                  </div>
                  <hr>
                </div>
              </div>
            <!-- COMMANDES PAR MAGASIN POUR 2017 -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary">&#x27A4 &nbsp; Commandes par magasins/semaines pour 2017</h4>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <a type="button" id="update_order_store_week_2017" class="btn float-right btn-sm btn-outline-primary">Actualisé le graphique</a><br>
                    <canvas id="chartOrderStoreWeek2017"></canvas>
                  </div>
                  <hr>
                </div>
              </div>
              <!-- COMMANDES PAR MAGASIN PAR SEMAINES -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary">&#x27A4 &nbsp; Commandes par magasins/semaines sur 3 ans</h4>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <a type="button" id="update_order_store_week" class="btn float-right btn-sm btn-outline-primary">Actualisé le graphique</a><br>
                    <canvas id="chartOrderStoreWeek"></canvas>
                  </div>
                  <hr>
                </div>
              </div>

              <!-- COMMANDES PAR SALARIES PAR MOIS -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary">&#x27A4 &nbsp; Commandes par salariés et par mois</h4>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <a type="button" id="update_order_staff" class="btn float-right btn-sm btn-outline-primary">Actualisé le graphique</a><br>

                    <canvas id="chartOrderStaffMonth"></canvas>
                  </div>
                  <hr>
                </div>
              </div>

              <!-- COMMANDES PAR SALARIES PAR ANS -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary">&#x27A4 &nbsp; Commande par salariés par an</h4>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <a type="button" id="update_order_staff_year" class="btn float-right btn-sm btn-outline-primary">Actualisé le graphique</a>
                    <canvas id="chartOrderStaffYear"></canvas>
                  </div>
                  <hr>
                </div>
              </div>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary">&#x27A4 &nbsp;  Stocks par marques</h4>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <!--<a type="button" id="test_myChartCopy" class="btn btn-lg btn-block btn-outline-primary">Charger le graphique</a>-->                    <canvas id="myCustomersYears"></canvas>
                  </div>
                </div>
              </div>

              <!-- STOCKS PAR MARQUES -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary">&#x27A4 &nbsp; Stocks par marques</h4>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-bar pt-4">
                    <a type="button" id="update_stock_by_brand" class="btn float-right btn-sm btn-outline-primary">Charger le graphique</a>
                    <canvas id="chartStockByBrand"></canvas>
                  </div>
                </div>
              </div>

              <!-- STOCKS PARCATEGORIES -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary">&#x27A4 &nbsp; Stocks par catégories</h4>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-bar pt-4">
                    <a type="button" id="update_stock_by_categories" class="btn float-right btn-sm btn-outline-primary">Charger le graphique</a>
                    <canvas id="chartStockByCtaegories"></canvas>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Bike-Stores 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>

  <script src="js/chart-orders-store-month.js"></script>
  <script src="js/chart-orders-store-week-2016.js"></script>
  <script src="js/chart-orders-store-week-2017.js"></script>
  <script src="js/chart-orders-store-week.js"></script>
  <script src="js/chart-orders-staff-month.js"></script>
  <script src="js/chart-orders-staff-year.js"></script>
  <script src="js/chart-orders-by-staffs-years.js"></script>
  <script src="js/stocks-by-brands.js"></script>
  <script src="js/stocks-by-categories.js"></script>



