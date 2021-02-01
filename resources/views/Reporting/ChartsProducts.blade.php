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

  <script src="js/stocks-by-brands.js"></script>
  <script src="js/stocks-by-categories.js"></script>
