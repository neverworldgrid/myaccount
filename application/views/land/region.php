<?php foreach ($region_array as $region){ ?>

<center>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1hmOXKUFV2pGtanKMa3q7e0Bw8e4Ngs4VDW1As6hXmV09ZTe3" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading">Region: <?php echo $region["regionName"];?><small>  <a href="hop://hg.neverworldgrid.com:8002/<?php echo $region["regionName"];?>">Teleport</a></small></h3>
                    <span><strong>Flags </strong></span>
                        <span class="badge badge-warning">Payment Due Soon</span>
                        <span class="badge badge-info">Locked Out</span>
                        <span class="badge badge-info">Fallback Region</span>
                        <span class="badge badge-success">Online</span>
                    </center>
                    <hr>
                    <center>
			    <div class="row">
    <div class="col-sm">
	    <h6>Region Basic Info</h6>
		    <table class="table table-hover">
  <tbody>
    <tr>
      <td>Location : <?php echo $region["locX"] /256 ;?> , <?php echo $region["locY"] /256 ;?></td>
    </tr>
  </tbody>
</table>
    </div>
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
                    </center>



  <?php } ?>
