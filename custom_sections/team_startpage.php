<?php 
    $h1 = 'team';
    $h2 = 'unser';
    // For newlines put \n into the marked spaces
    // WARNING: All text has to be between <<<EOT and EOT. after <<<EOT there HAS TO BE a new line!
    
    $text =
<<<EOT
'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
\n\n    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
\n    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.';
EOT
?>

<section class="row  team_startpage padding_top_bottom">
    <div class="container col-8">
        <div class="row row-cols-lg-2 row-cols-sm-1">
            <div class="col-5 hidden-sm-down">
                <img src="images/Fotos/Start/team.jpg" alt="">
            </div>
            <div class="col-7">
                <h2>
                    <?php echo $h2; ?>    
                </h2>
                <h1>
                    <?php echo $h1; ?>    
                </h1>
                <p>
                    <?php echo nl2br($text); ?>    
                </p>
            </div>
        </div>
    </div>
</section>