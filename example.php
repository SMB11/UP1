<?php require_once('connections/dbconnection.php');?>
<? $event_name = get_post_meta($post->ID, 'event_name', true);
$event_date = get_post_meta($post->ID, 'event_date', true);
$venue = get_post_meta($post->ID, 'venue', true);
$city = get_post_meta($post->ID, 'city', true);
$country = get_post_meta($post->ID, 'country', true);
$hometeam = get_post_meta($post->ID, 'hometeam', true);
$awayteam = get_post_meta($post->ID, 'awayteam', true); ?>
<meta property="og:locale" content="en_GB" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<? echo get_post_meta($post->ID, 'hometeam', true); ?> versus <? echo get_post_meta($post->ID, 'awayteam', true); ?> Tickets - <? echo $event_date; ?>  - Compare The Ticket Prices" />
<meta property="og:description" content="Compare prices for <? echo $event_name; ?> Tickets on <? echo $event_date; ?> using Fan Seats!"/>
<meta property="og:url" content="<? echo the_permalink(); ?>" />
<meta property="article:publisher" content="https://www.facebook.com/fanseatstickets/" />
<meta property="og:image" content="https://www.fanseats.co.uk/images/logo-bg.png" />
<meta property="og:image:secure_url" content="https://www.fanseats.co.uk/images/logo-bg.png" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Compare prices for <? echo $event_name; ?> Tickets on <? echo $event_date; ?> using Fan Seats!" />
<meta name="twitter:title" content="<? echo get_post_meta($post->ID, 'hometeam', true); ?> versus <? echo get_post_meta($post->ID, 'awayteam', true); ?> Tickets - <? echo $event_date; ?>  - Compare The Ticket Prices" />
<meta name="twitter:site" content="@fanseats" />
<meta name="twitter:image" content="https://www.fanseats.co.uk/images/logo-bg.png" />
<meta name="twitter:creator" content="@fanseats" />




<?php
/*
 * The Template for displaying all single posts.
 *
 * @package WordPress - Themonic Framework
 * @subpackage Iconic_One
 * @since Iconic One 1.0
 */

get_header(); ?>


<div id="teamversusimage">

<div id="eventbox">

<h1 class="event-title"><?php the_title(); ?></h1>
<div class="gamedetails">
<div class="badge1">
      <img src="<? echo $teamhomebadge; ?>" alt="<? echo get_field('hometeam'); ?> Crest"></div>
	  <div class="middetails">
      
      
      
      
      
      
                 <? $date = get_post_meta($post->ID, 'event_date', true);?>  
            

<p><? echo date('j ', strtotime($date));?> <? echo date('M', strtotime($date)); ?> <? echo date('Y', strtotime($date)); ?></p><br/>
      
      <? echo get_field('time'); ?><br/>
      
	  <? echo get_field('venue'); ?><br/>
	  <? echo get_field('city'); ?><br/><? echo get_field('country'); ?></div>
      
      <div class="badge2">
      <img src="<? echo $teamawaybadge; ?>" width="120px" height="120px" alt="<? echo get_field('awayteam'); ?> Crest"></div>

</div>

</div>
<? //get_field('time'); ?>


</div>

<div id="primary" class="event-content">
<div id="content" role="main">



 <?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );
}
?>


<?php while ( have_posts() ) : the_post(); ?>





   <h2 style="text-align:center;">Find the best ticket prices for <?php echo the_title(); ?></h2> 
   
   
   
   
    
   <? if (in_category('Premier League') ){ $livelink = "https://www.fanseats.co.uk/tickets-event-pl-203902";}?>
   <? if (in_category('World Cup') ){ $livelink = "https://www.fanseats.co.uk/tickets-event-wc-2018";}?> 
   <? if (in_category('FA Cup') ){ $livelink = "https://www.fanseats.co.uk/fs-2018-fa-cup";}?> 
   <? if (in_category('Champions League') ){ $livelink = "https://www.fanseats.co.uk/go/gettickets";}?>     
   <? if (in_category('Carabao Cup') ){ $livelink = "https://www.fanseats.co.uk/go/gettickets";}?>   
   
   
   
   
   
     
  <? if ($totalRows_GETPRICES == 0)  {?>
   
   
   <div id="containerprice">
<div id="container">
<div id="row-header">
  <div id="left-header"><div class="column-in-header">Ticket Website  </div></div>
  <div id="middle-header"><div class="column-in-header">Features</div></div>
  <div id="right-header"><div class="column-in-header">Availability</div></div></div>
<div id="row">
  <div id="left"><div class="column-in">
    
 <img title="<?php the_title(); ?>" src="https://www.fanseats.co.uk/wp-content/uploads/2016/12/lftfanseats.jpg" alt="Ticket Prices" width="125" height="30" class="matchDetailsboxpic" itemprop="image"/>
  </div></div>
  <div id="middle"><div class="column-in">
  
<a rel="nofollow" href="#" data-tooltip="Guaranteed Seating in Pairs">
<img data-tooltip="Fan Seats Pairs" title="" src="https://www.fanseats.co.uk/wp-content/uploads/2017/09/pairs-seats.png" alt="Fan Seats Pairs" width="40" height="40"/></a>
<a rel="nofollow" href="#" data-tooltip="Excellent Customer Service">
<img data-tooltip="Excellent Customer Service" title="" src="https://www.fanseats.co.uk/wp-content/uploads/2017/09/cservice.png" alt="Customer Service Level" width="40" height="40"/></a>
<a rel="nofollow" href="#" data-tooltip="Number 1 for Football Tickets">
<img data-tooltip="Number 1 for Football Tickets" title="" src="https://www.fanseats.co.uk/wp-content/uploads/2017/09/thumbsup.png" alt="Thumbs Up" width="40" height="40"/>
</a>
  </div></div>
  <div id="right"><div class="column-in">
   
    <a class="buylink" href="<? echo $livelink; ?>" 
onclick="gtag('event', 'click', {
  'event_category': 'NonPrice-<? echo the_title(); ?>'
});" class="matchDetailsboxticket" itemprop="url" rel="nofollow">
<div class="buyticketsbutton">Still Available <i class="fa fa-chevron-right"></i></a></div>   
      </div></div>
      </div>
      <div id="row">
  <div id="left"><div class="column-in-soldhome">
    
 <img title="official mtach ticket: <?php the_title(); ?>" src="<? echo $teamhomebadge; ?>" alt="Official Ticket Prices" width="125" height="60" class="matchDetailsboxpic" itemprop="image"/>
  </div></div>
  <div id="middle"><div class="column-in-sold">
<img data-tooltip="Fan Seats Pairs" title="" src="https://www.fanseats.co.uk/wp-content/uploads/2017/09/pairs-seats.png" alt="Official Seats Pairs" width="40" height="40"/>
<img data-tooltip="Excellent Customer Service" title="" src="https://www.fanseats.co.uk/wp-content/uploads/2017/09/cservice.png" alt="Customer Service Level" width="40" height="40"/>
<img data-tooltip="Official Football Tickets" title="" src="https://www.fanseats.co.uk/wp-content/uploads/2017/09/thumbsup.png" alt="Thumbs Up" width="40" height="40"/>

  </div></div>
  <div id="right"><div class="column-in"><div class="buyticketsbuttonsold">Sold Out</div></div></div></div>
  <div id="row"><div id="left"><div class="column-in-soldhome">
 <img title="<?php the_title(); ?>" src="<? echo $teamawaybadge; ?>" alt="Official match Ticket Prices" width="125" height="60" class="matchDetailsboxpic" itemprop="image"/> Box Office
  </div></div>
  <div id="middle"><div class="column-in-sold">
<img data-tooltip="Fan Seats Pairs" title="" src="https://www.fanseats.co.uk/wp-content/uploads/2017/09/pairs-seats.png" alt="Official Seats Pairs" width="40" height="40"/>
<img data-tooltip="Excellent Customer Service" title="" src="https://www.fanseats.co.uk/wp-content/uploads/2017/09/cservice.png" alt="Customer Service Level" width="40" height="40"/>
<img data-tooltip="Official Football Tickets" title="" src="https://www.fanseats.co.uk/wp-content/uploads/2017/09/thumbsup.png" alt="Thumbs Up" width="40" height="40"/>
</div></div>
  <div id="right"><div class="column-in"><div class="buyticketsbuttonsold">Sold Out</div></div></div></div></div>
  </div>
   
   
   
   <? }?>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   <?  $todaysdate = date( 'Y-m-d' ); $matchdate = get_post_meta($post->ID, 'event_date', true);?>
<div id="containerpricetable"><div id="container"></div></div>


<!--<div id="row-header">
<div id="left-header"><div class="column-in-header">Ticket Website</div></div>
<div id="left-middle-header"><div class="column-in-header">Rating</div></div>
<div id="middle-header"><div class="column-in-header">Features</div></div>
<div id="right-middle-header"><div class="column-in-header">Lowest Prices</div></div>
<div id="right-header"><div class="column-in-header">Order</div></div>
 </div> -->
   
   
   
   
   
   
   
   
   
   
   
   


<?php get_template_part( 'content', get_post_format() ); ?>







<div id="banner-message">
  <button>Request data</button>
</div>
<div id="livefootball"></div>
<div id="stubhub"></div>






<div class="orderdetails">
<h3 class="orderinfo-title">
Order Information: <?php the_title(); ?> </h3> <br />All tickets for the match are guaranteed in pairs unless otherwise stated. <br />Access information into <? echo get_field('venue'); ?> will be given before game. <br /> For fans outside of <? echo get_field('country'); ?> tickets to be delivered in <? echo get_field('city'); ?> from 48 hours before the match. <br />
The game is scheduled for <?php echo date('\<\s\p\a\n \c\l\a\s\s\=\"\c\a\t\d\a\y\v\e\n\u\e\"\>l jS M Y\<\/\s\p\a\n\>', strtotime($date)); ?> with  a kickoff time of <? echo get_field('time'); ?> pm.<br/>
</div>    





<? if(has_tag()) { //Check if Game has teams. ?>
     <div class="clubteamnamebox">                                
      <?php
      global $post;
      foreach(get_the_tags($post->ID) as $tag)
      { echo '|<a class ="teamclub" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>&nbsp;'; }?>
     </div>
<? }?>














                

				<?php //comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
<script>
	function getData(game, date){

    const matchApiUrl = "http://142.93.34.56/api/match";
    const livefootballApiUrl = "http://142.93.34.56/api/tickets/livefootball";
    const livefootballUrlAppend = "&LP=www.LiveFootballTickets.com&OID=FS";
    const stubhubApiUrl = "http://142.93.34.56/api/tickets/stubhub";
    const stubhubResBefore= "http://pdt.tradedoubler.com/click?a(2813023)p(248222)prod(3030627499)ttid(5)url(";
    const stubhubUrlAfter = "/fix?afl=1X00396LRG&utm_medium=affiliate&utm_content=feed&utm_campaign=1&utm_source=td-tech)";

    $.post( matchApiUrl, 
    { event: game, date: date},
    function( data ) {
        let liveFootballRes;
        let stubhubRes;
        $.when(
            $.post( livefootballApiUrl,
                { url:data.livefootball[0].event_url },
                function( d) {
                    liveFootballRes = d.tickets;
                },
                "json"),
            $.post( stubhubApiUrl,
                { url:data.stubhub[0].event_url },
                function( d) {
                    stubhubRes = d.tickets;
                },
                "json")
          
        ).then(function() {
            for(var i = 0; i< liveFootballRes.length; i++){
                liveFootballRes[i].nameOfSupplier = "LiveFootball";
                liveFootballRes[i].url += livefootballUrlAppend;
            }
            for(var i = 0; i< stubhubRes.length; i++){
                stubhubRes[i].nameOfSupplier = "StubHub";
                stubhubRes[i].url = stubhubResBefore + stubhubRes[i].url + stubhubUrlAfter;
            }
            var resArray = stubhubRes.concat(liveFootballRes);
            bubbleSort(resArray);
            putData(resArray);
        });
    },
    "json");
    
}

	var merchantscore = 0;
	var mechant_rating = "";

function putData(resArray){
	if (resArray.nameOfSupplier=="LiveFootball") {
		merchantscore = 9.5;
		mechant_rating="excellent";

	}
	else if (resArray.nameOfSupplier=="StubHub") {
		merchantscore=9.4;
		mechant_rating="very good"
	}
	for(var i = 0; i < resArray.length; i++){
		var obj = resArray[i];
		$("#containerpricetable #container").append(
			`
			
			<div id="row">
  				<div id="left">
  					<div class="column-in-left" onclick="gtag('event', 'clickmerchantlogo', { 'event_category': 'click', 'event_label':'Logo-`+obj.nameOfSupplier+`-`+obj.title+`'}); window.open('https://www.fanseats.co.uk/tickets.php?event=`+obj.url+`','new_window');">      
	 					<img class="merchanti" title="`+obj.title+`" src="`+(obj.nameOfSupplier == 'LiveFootball')? 'livefootballLogoSrc' : 'stubHubLogoSrc'+`" alt="Secure Seats" class="matchDetailsboxpic" itemprop="image"/>
	 					<br/>

						<!--<div id="ratingstars"><img title="Our Rating:<?php //echo $row_GETPRICES['merchant_rating'];?>" src="<?php //echo $row_GETPRICES['sellerstars'];?>" alt="<?php //echo $row_GETPRICES['merchant_rating'];?>" width="140" height="40"/></div>!-->
					</div>
				</div> 
    			<!--<div id="leftmiddle">
    				<div class="column-in">  
  						<img title="Our Rating:`+ merchant_rating +`" src="<?php echo $row_GETPRICES['sellerstars'];?>" alt="Star Rating" width="125" height="26"/>
  					</div>
   					<div id="middlescore">
						<span class="merchantscore">
							`merchantscore`
						</span>
  					</div>
  				</div>!-->
				<div id="middle">
					<div class="column-in">
						<img data-tooltip="Fan Seats Pairs" title="" src="https://www.fanseats.co.uk/wp-content/uploads/2017/09/pairs-seats.png" alt="Fan Seats Pairs" width="40" height="40"/>
						<img data-tooltip="Excellent Customer Service" title="" src="https://www.fanseats.co.uk/wp-content/uploads/2017/09/cservice.png" alt="Customer Service Level" width="40" height="40"/>
						<img data-tooltip="<?php echo $row_GETPRICES['merchant_rating'];?>" title="" src="https://www.fanseats.co.uk/wp-content/uploads/2017/09/thumbsup.png" alt="Thumbs Up" width="40" height="40"/>
						<br/>
						<?php echo $row_GETPRICES['Merchant_Info'];?>
  					</div>
				</div>
  				<div id="rightmiddle">
  					<div class="column-in">  
	  					<div class="ticketprice"> 
	  						<strong>£`+obj.price+`</strong>
						</div>
	  				</div>
				</div>
				<div id="right">
					<div class="column-in">
	      				<a href="`+obj.url+`" onClick="gtag('event', 'buyticketbutton', {
	  						'event_category': 'click',
	  						'event_label': 'Price-`+obj.nameOfSupplier+`-`+obj.title+`'}); " target="_blank" rel="nofollow">
							<div class="buyticketsbutton">
								Buy Tickets 
								<i class="fa fa-chevron-right" aria-hidden="true" style='color: #FFFFFF;'></i>
							</div>
						</a>
	       
	      			</div>
	  			</div>
			</div>
      
			`
		);
	}
}

function bubbleSort(a){
    var flag;
    do{
      flag = false;
      for(var i = 0; i<a.length-1; i++){
        if(parseInt(a[i].price)>parseInt(a[i+1].price)){
          var temp = a[i];
          a[i] = a[i+1];
          a[i+1] = temp;
          flag = true;
        }
      }
    }while(flag);
  }
  


getData(<?=$event_name?>, <?=$event_date?>);   
</script>