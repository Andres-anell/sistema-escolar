
<?php  
include "../include/head.php";
include "../include/navb.php";
?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
      <p>Start a beautiful journey here</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body"><!-- Create a beautiful dashboard --></div>
<!-- modal -->

 <!-- Button trigger modal -->
 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
 Nuevo Docente
 </button>
 
 <!-- Modal -->
 <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <form>
                    <div class="form-group">
                      <label class="control-label">Name</label>
                      <input class="form-control" type="text" placeholder="Enter full name">
                    </div>
                    <div class="form-group">
                      <label class="control-label">Email</label>
                      <input class="form-control" type="email" placeholder="Enter email address">
                    </div>
                    <div class="form-group">
                      <label class="control-label">Address</label>
                      <textarea class="form-control" rows="4" placeholder="Enter your address"></textarea>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Gender</label>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gender">Male
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gender">Female
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Identity Proof</label>
                      <input class="form-control" type="file">
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">I accept the terms and conditions
                        </label>
                      </div>
                    </div>
                  </form>
                  <div class="tile-footer">
                  <button class="btn btn-info btn-block" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
 </div>
       
      </div>
    </div>
  </div>
 

  <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</main>

 <!-- Essential javascripts for application to work-->
 <script src="../../assets/js/jquery-3.3.1.min.js"></script>
<script src=" ../../assets/js/popper.min.js"></script>
<script src=" ../../assets/js/bootstrap.min.js"></script>
<script src=" ../../assets/js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<!-- Data table plugin-->
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
<!-- Google analytics script-->
<script type="text/javascript">
  if(document.location.hostname == 'pratikborsadiya.in') {
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-72504830-1', 'auto');
    ga('send', 'pageview');
  }
</script>