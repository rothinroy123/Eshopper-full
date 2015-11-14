<?php include_once("header.php");?>

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt "></i>
                          <span>Product Section</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="active" href="add_product.php">Add Product</a></li>                          
                          <li><a class="" href="view_product.php">View Product</a></li>
                          <li><a class="" href="all_category.php">All Category</a></li>
                          <li><a class="" href="all_brand.php">All Brand</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Form Elements</a></li>                          
                          <li><a class="" href="form_validation.html">Form Validation</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">General Components</a></li>
                          <li><a class="" href="grids.html">Grids</a></li>
                      </ul>
                  </li>      
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table.php">Basic Table</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu ">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="login.php"><span>Login Page</span></a></li>
                          <li><a class="active" href="blank.php">Blank Page</a></li>
                          <li><a class="" href="404.html">404 Error</a></li>
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="page-header"><i class="fa fa fa-bars"></i>All Brand</h3>
                  <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                    <li><i class="fa fa-bars"></i>Product Section</li>
                    <li><i class="fa fa-square-o"></i>All Brand</li>
                  </ol>
                </div>
              </div>
              <!-- page start-->
  
              <div class="row">
                 <div class="col-lg-1">
                </div>
                <div class="col-lg-5">
                  <form>
                    <h3 >Existing All Brand</h3><br>
                    <ol>
                      <li>
                        <label>Lottto (91) </label>
                        <a class="btn btn-warning" data-toggle="modal" href="#myModal2">
                           Edit
                        </a>
                        <a class="btn btn-danger" href=""  onclick='return confirmDelete();'>
                           Delete!
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Edit Brand name</h4>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="all_brand.php">
                                  <h4>Brand Name :</h4>
                                  <input type="text"value="Lotto"class="form-control"><br>
                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                  <input type="submit" value="Update" class="btn btn-success">
                                </form>
                              </div>         
                            </div>
                          </div>
                        </div>
                        <!-- modal -->
                      </li><br>
                      <li>
                        <label>Fusion (58) </label>
                        <a class="btn btn-warning" data-toggle="modal" href="#myModal2">
                           Edit
                        </a>
                        <a class="btn btn-danger" href=""  onclick='return confirmDelete();'>
                           Delete!
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Edit Brand name</h4>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="all_brand.php">
                                  <h4>Brand Name :</h4>
                                  <input type="text"value="Lotto"class="form-control"><br>
                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                  <input type="submit" value="Update" class="btn btn-success">
                                </form>
                              </div>         
                            </div>
                          </div>
                        </div>
                        <!-- modal -->
                      </li><br>
                      <li>
                        <label>Easy (405) </label>
                        <a class="btn btn-warning" data-toggle="modal" href="#myModal2">
                           Edit
                        </a>
                        <a class="btn btn-danger" href=""  onclick='return confirmDelete();'>
                           Delete!
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Edit Brand name</h4>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="all_brand.php">
                                  <h4>Brand Name :</h4>
                                  <input type="text"value="Lotto"class="form-control"><br>
                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                  <input type="submit" value="Update" class="btn btn-success">
                                </form>
                              </div>         
                            </div>
                          </div>
                        </div>
                        <!-- modal -->
                      </li><br>
                      <li>
                        <label>Galliver (109) </label>
                        <a class="btn btn-warning" data-toggle="modal" href="#myModal2">
                           Edit
                        </a>
                        <a class="btn btn-danger" href=""  onclick='return confirmDelete();'>
                           Delete!
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Edit Brand name</h4>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="all_brand.php">
                                  <h4>Brand Name :</h4>
                                  <input type="text"value="Lotto"class="form-control"><br>
                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                  <input type="submit" value="Update" class="btn btn-success">
                                </form>
                              </div>         
                            </div>
                          </div>
                        </div>
                        <!-- modal -->
                      </li>
                    </ol>                                
                    <h3>New Brand Name</h3>
                    <input type="text"name="brand_name"class="form-control"><br>
                    <input type="submit" value="Save" name="form_add_post"class="btn btn-primary">
                  </form>
                </div>
                <div class="col-lg-6">
                </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>



   <script type="text/javascript">
     function confirmDelete() {
        return confirm("Are you sure you want to Delete this data?")
      }
  </script>

  </body>
</html>
