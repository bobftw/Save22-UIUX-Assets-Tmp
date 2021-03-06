<?php include('header.php'); ?>

  <div class="row">
    <ul class="breadcrumbs">
      <li><a href="main.php">Home</a></li>
      <li class="current"><a href="#">Catalogue Name</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 large-12 small-centered columns">

      <header>
        <h2><a href="#link-to-catalogue">*Catalogue Title*</a></h2>
      </header>

      <section>
        <form>
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Catalogue Title</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" placeholder="Title">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Category</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" placeholder="Category">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Retailer</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" placeholder="Retailer Name">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Branch</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" placeholder="Branch Location">
              <a href="#" class="button small radius secondary">add another branch</a>
              <a href="#" class="button small radius secondary" data-reveal-id="newBranch">create new branch</a>
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Expiry Date</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="datepicker" placeholder="">
              <!-- date picker: https://github.com/dbushell/Pikaday -->
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-12 large-3 large-centered columns">
              <input type="submit" value="Save" class="button centered expand">
            </div>
          </div>
        </form>

      </section>

      <section>
        <ul class="large-block-grid-4">
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
        </ul>

        <ul class="large-block-grid-4">
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
        </ul>

      </section>

      <hr>

      <div class="pagination-centered">
        <ul class="pagination">
          <li class="arrow unavailable"><a href="">&laquo; Previous</a></li>
          <li class="current"><a href="">1</a></li>
          <li><a href="">2</a></li>
          <li><a href="">3</a></li>
          <li><a href="">4</a></li>
          <li class="arrow"><a href="">Next &raquo;</a></li>
        </ul>
      </div>

    </div>
  </div>
  

  <div id="newBranch" class="reveal-modal large">
    <a class="close-reveal-modal">&#215;</a>
    <h2>Create a new Branch</h2>

        <form class="custom">
          <div class="row">
            <div class="small-3 columns">
              <label for="branchAddress" class="right inline">Branch Address</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="branchAddress" class="lnglat" placeholder="Address">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="branchTitle" class="right inline">Branch Title</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="branchTitle" placeholder="Title">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="branchTel" class="right inline">Contact No.</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="branchTel" placeholder="Telephone Number">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="branchEmail" class="right inline">Contact Email</label>
            </div>
            <div class="small-9 columns">
              <input type="email" id="branchEmail" placeholder="Email">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="branchURL" class="right inline">URL</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="branchURL" placeholder="http://">
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-3 columns">
              <label for="branchDesc" class="right inline">Description</label>
            </div>
            <div class="small-9 columns">
              <textarea id="branchDesc"></textarea>
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-3 columns">
              <label for="meta_branchDesc" class="right inline">Meta Description</label>
            </div>
            <div class="small-9 columns">
              <textarea id="meta_branchDesc"></textarea>
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-3 columns">
              <label for="branchBanner" class="right inline">Image Banner</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="branchBanner" placeholder="http://">
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-3 columns">
              <label for="branchHours" class="right inline">Office Hours</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="branchHours" placeholder="Ex: 10am - 11pm">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="branchPayOptions" class="right inline">Payment Options</label>
            </div>
            <div class="small-9 columns">
              <label for="checkbox1"><input type="checkbox" id="checkbox1" CHECKED><span class="custom checkbox"></span> Cash</label>
              <label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> Debit</label>
              <label for="checkbox2"><input type="checkbox" id="checkbox2"><span class="custom checkbox checked"></span> Visa</label>
              <label for="checkbox3"><input type="checkbox" id="checkbox3"><span class="custom checkbox checked"></span> MasterCard</label>
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-12 large-3 large-centered columns">
              <br><br>
              <input type="submit" value="Add New Branch" class="button centered expand">
            </div>
          </div>
        </form>

  </div>

  <!-- JS FOR LOCATION PICKER -->
  <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false'></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type='text/javascript' src='js/jquery.locationpicker.js'></script>
  <script type="text/javascript">
      jQuery(document).ready(function(){
          /* jQuery('input.lnglat').locationPicker();*/
          $('input.lnglat').locationPicker();
      });
  </script>

  <!-- JS FOR CALENDAR -->
  <script src="js/pikaday.js"></script>
  <script>

    var picker = new Pikaday(
    {
        field: document.getElementById('datepicker'),
        format: 'D MMM YYYY',
        firstDay: 1,
        minDate: new Date('2000-01-01'),
        maxDate: new Date('2020-12-31'),
        yearRange: [2000,2020]
    });

  </script>

<?php include('footer.php'); ?>