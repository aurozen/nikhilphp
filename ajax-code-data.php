<?php 
  Header("Cache-control: private, no-cache");
  Header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); # Past date
  Header("Pragma: no-cache");
  
  $opts = array('http' => array(
    'method' => "GET",
    'header' =>
    "Content-Type: application/x-www-form-urlencoded\r\n",
  ));
  
  $ActionVal=$_POST["ActionVal"];
  
  if($ActionVal==2)
  {
    $GymName=$_POST["GymName"];
    $context = stream_context_create($opts);
    $result = file_get_contents("http://13.233.29.39:8012/getAllGymByCity/".$GymName."", false, $context);
    $getAllGymByCity = json_decode($result, true);
  
    if(count($getAllGymByCity["data"]) > 0)
     {
       $dataVal=$getAllGymByCity["data"];
       for($i=0;$i<count($dataVal);$i++)
        {
?>

<div class="column dt-sc-one-half with-sidebar first">
  <article id="post-322" class="blog-entry post-330 post type-post status-publish format-image has-post-thumbnail hentry category-strength-endurance category-workout post_format-post-format-image">
    <div class="blog-entry-inner">
      <div class="entry-title">
        <h4><a href="#" title="Training with Dumbell"><?php echo $dataVal[$i]["gymName"]; ?></a></h4>
        <div class="entry-metadata">
          <p class="tags"><a href="#" rel="category tag"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; <?php echo $dataVal[$i]["gymCity"]; ?></a></p>
        </div>
      </div>
      <div class="entry-thumb">
        <a href="#" title="<?php echo $dataVal[$i]["gymName"]; ?>">
          <img height="200px !important;" src="<?php echo $dataVal[$i]["gymPhotos"][0]["fileName"];?>" class="attachment-blog-onecol-bothsidebar size-blog-onecol-bothsidebar wp-post-image" alt="" title="<?php echo $dataVal[$i]["gymName"]; ?>" sizes="(max-width: 588px) 100vw, 588px">                                        
          <div class="blog-overlay"><span class="image-overlay-inside"></span></div>
        </a>
        <div class="entry-meta">
          <div class="date">
            <span>4.00</span> 
            <br>Reviews 
          </div>
        </div>
      </div>
      <div class="entry-body">
        <p><strong>Address - </strong><?php echo trim($dataVal[$i]["gymAddress"]); ?></p>
     <!--    <div _ngcontent-gpr-c1="" class="mt-3">
          <span _ngcontent-gpr-c1="" class="badge"><img _ngcontent-gpr-c1="" class="icons" src="images/acrob.jpg"></span>
          <span _ngcontent-gpr-c1="" class="badge"><img _ngcontent-gpr-c1="" class="icons" src="images/ham.jpg"></span>
          <span _ngcontent-gpr-c1="" class="badge"><img _ngcontent-gpr-c1="" class="icons" src="images/yoga.jpg"></span>
          <span _ngcontent-gpr-c1="" class="badge"><img _ngcontent-gpr-c1="" class="icons" src="images/boot.jpg"></span>
        </div> -->
      </div>
    </div>
  </article>
</div>

<?php } } } ?>