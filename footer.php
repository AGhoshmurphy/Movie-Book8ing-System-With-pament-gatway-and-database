<div class="footer" style="background-color: #6EFFC8; text-align: center;">
	<div class="wrap">
		<div class="footer-top">
			<div class="col_1_of_4 span_1_of_4">
				<div class="footer-nav">
		            <ul>
		               <li><a href="index.php" style="text-decoration: none; color: #FFFFFF;">Home</a></li>
			  		   <li><a href="movies_events.php" style="text-decoration: none; color: #FFFFFF;">Movies</a></li>
			  		   <li><a href="login.php" style="text-decoration: none; color: #FFFFFF;">Login</a></li>
		            </ul>
		        </div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="textcontact">
					<p style="color: #FFFFFF;">Theatre Help<br>
					Online Theatre Ticket System<br>
					Ph: 123456798<br>
					</p>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="call_info">
					<p class="txt_3" style="color: #FFFFFF;">Contact Us with the Below Number:</p>
					<p class="txt_4" style="color: #FFFFFF;">1101231104456</p>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="social">
					<a href="#"><img src="images/fb.png" alt="" style="width: 24px; height: 24px;"></a>
					<a href="#"><img src="images/tw.png" alt="" style="width: 24px; height: 24px;"></a>
					<a href="#"><img src="images/dribble.png" alt="" style="width: 24px; height: 24px;"></a>
					<a href="#"><img src="images/pinterest.png" alt="" style="width: 24px; height: 24px;"></a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>


<style>
	.footer {
		padding: 20px;
	}

	.footer-nav ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
	}

	.footer-nav li {
		display: inline-block;
		margin-right: 10px;
	}

	.textcontact p {
		margin: 0;
	}

	.call_info {
		margin-top: 10px;
	}

	.social a {
		margin-right: 5px;
	}
</style>

<script src="js/auto-complete.js"></script>
 <link rel="stylesheet" href="css/auto-complete.css">
    <script>
        var demo1 = new autoComplete({
            selector: '#search111',
            minChars: 1,
            source: function(term, suggest){
                term = term.toLowerCase();
                <?php
						$qry2=mysqli_query($con,"select * from tbl_movie");
						?>
               var string="";
                <?php $string="";
                while($ss=mysqli_fetch_array($qry2))
                {
                
                $string .="'".strtoupper($ss['movie_name'])."'".",";
                //$string=implode(',',$string);
                
              
                }
                ?>
                //alert("<?php echo $string;?>");
              var choices=[<?php echo $string;?>];
                var suggestions = [];
                for (i=0;i<choices.length;i++)
                    if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                suggest(suggestions);
            }
        });
    </script>