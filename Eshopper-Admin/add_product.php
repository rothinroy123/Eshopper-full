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
      					<h3 class="page-header"><i class="fa fa fa-bars"></i>Add Product</h3>
      					<ol class="breadcrumb">
      						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
      						<li><i class="fa fa-bars"></i>Product Section</li>
      						<li><i class="fa fa-square-o"></i>Add Product</li>
      					</ol>
      				</div>
      			</div>
              <!-- page start-->
              <div class="row" style="margin-bottom:40px">
                 <div class="col-lg-1">
                </div>
                <div class="col-lg-8">
                  <form>
                    <h3>Product Name</h3>
                    <input type="text"class="form-control" placeholder="Product name..">
                    <h3>Product Image</h3>
                    <input type="file"class="form-control">
                    <h3>Product Prize</h3>
                    <input type="text"class="form-control" placeholder="Product prize..">
                    <h3>Product Details</h3>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <div class="text-muted bootstrap-admin-box-title">TinyMCE Editor Full </div>
                      </div>
                      <div class="bootstrap-admin-panel-content">
                          <textarea id="tinymce_full"  name="tinyMCE" rows="10"></textarea>
                      </div>
                    </div>
                    <h3>Select Brand</h3>
                    <select class="form-control m-bot15">
                      <option></option>
                      <option>Brand 1</option>
                      <option>Brand 2</option>
                      <option>Brand 3</option>
                      <option>Brand 4</option>
                      <option>Brand 5</option>
                      <option>Brand 6</option>
                    </select>
                    <h3>Insert Size</h3>
                    <div class="row">
                      <div class="col-lg-4">
                        <h4>Small</h4>
                        <input type="text"class="form-control" value="0">
                      </div>
                      <div class="col-lg-4">
                        <h4>Medium</h4>
                        <input type="text"class="form-control" value="0">
                      </div>
                      <div class="col-lg-4">
                        <h4>Large</h4>
                        <input type="text"class="form-control" value="0">
                      </div>
                    </div>
                    <h3>Select Category & Sub-category</h3>
                    <div class="row">
                      <ul role="menu" class="sub-menu">
                       <!--category-productsr-->
                        <li>
                          <div class="panel-heading">
                            <h4 class="panel-title">
                            <input type="checkbox"><a data-toggle="collapse" data-parent="#accordian" href="#sports">
                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                Sportswear
                              </a>
                            </h4>
                          </div>
                          <div id="sports" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul>
                                <li><input type="checkbox"> Nike </a></li>
                                <li><input type="checkbox"> Under Armour </a></li>
                                <li><input type="checkbox"> Adidas </a></li>
                                <li><input type="checkbox"> Puma</a></li>
                                <li><input type="checkbox"> ASICS </a></li>
                              </ul>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <input type="checkbox"><a data-toggle="collapse" data-parent="#accordian" href="#men">
                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                Mens
                              </a>
                            </h4>
                          </div>
                          <div id="men" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul>
                                <li><input type="checkbox"> Fendi</a></li>
                                <li><input type="checkbox"> Guess</a></li>
                                <li><input type="checkbox"> Valentino</a></li>
                                <li><input type="checkbox"> Dior</a></li>
                                <li><input type="checkbox"> Versace</a></li>
                              </ul>
                            </div>
                          </div>
                        </li>
                        
                        <li>
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <input type="checkbox"><a data-toggle="collapse" data-parent="#accordian" href="#women">
                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                Womens
                              </a>
                            </h4>
                          </div>
                          <div id="women" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul>
                                <li><input type="checkbox"> Fendi</a></li>
                                <li><input type="checkbox"> Guess</a></li>
                                <li><input type="checkbox">S Valentino</a></li>
                              </ul>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="panel-heading">
                            <h4 class="panel-title"><input type="checkbox"> Kids</a></h4>
                          </div>
                        </li>
                        <li>
                          <div class="panel-heading">
                            <h4 class="panel-title"><input type="checkbox"> Fashion</a></h4>
                          </div>
                        </li>
                        <li>
                          <div class="panel-heading">
                            <h4 class="panel-title"><input type="checkbox"> Households</a></h4>
                          </div>
                        </li>
                      <!--/category-products-->
                      </ul>
                    </div><br>
                    <input type="submit" value="Save" name="form_add_product"class="btn btn-primary" style="width:150px;float:right">
                  </form>
                </div>
                <div class="col-lg-3">
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

    <script type="text/javascript" src="js/tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
            $(function() {
               

                // TinyMCE Full
                tinymce.init({
                    selector: "#tinymce_full",
                    plugins: [
                        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                        "searchreplace wordcount visualblocks visualchars code fullscreen",
                        "insertdatetime media nonbreaking save table contextmenu directionality",
                        "emoticons template paste textcolor"
                    ],
                    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                    toolbar2: "print preview media | forecolor backcolor emoticons",
                    image_advtab: true,
                    templates: [
                        {title: 'Test template 1', content: 'Test 1'},
                        {title: 'Test template 2', content: 'Test 2'}
                    ]
                });
            });

    </script>
  </body>
</html>
