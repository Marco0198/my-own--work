<?php

function component($package_name,$price,$paragraph1,$paragraph2,$paragraph3){

    $Element="

    <div class='price_section_2'>
        <div class='row'>
            <div class='col-sm-12 col-lg-4'>
                <div class='beginner'>
                    <h2 class='beginner_text'>$package_name</h2>
                    <h1 class='plan_text'>$price</h1>
                    <P class='access_text'>$package_name</P>

                    <P class='access_text'>$paragraph2</P>
                    <P class='access_text'>$paragraph3</P>

                </div>
               
                
            </div>
        </div>
    </div>
</div>
</div> 



<!--
 <div class='our_section layout_padding'>
    	<div class='container'>
    		<h1 class='our_text'><strong>OUR PRICES</strong></h1>
    		<p class='client_long_text'>It is a long established fact that a reader will be distracted by the readable</p>
    		<div class='row padding_top_0'>
    			<div class='col-lg-4'>
    				<div class='image_7'>$package_name</div>
    <h2 class='design_text'></h2>
    				<p class='fact_text'>It is a long established fact that a reader will be distracted by the readable</p>
    			</div>
    			
    			-->";
    echo $Element;
    ?>
<?php
}


    


