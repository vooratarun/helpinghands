       <script type="text/Javascript">
            function load(id)
                {
                    $("#maindiv").load(id);
                }
             function load_home()
                {
                   $("#maindiv").load("home.php");
                }
            //function load_banner()
            //{
              // $("#banner").load("./load/demo-3d.html");
            //}
var c=0;
var an= new Array ('"In this life we cannot always do great things.But we can do small things with great love."','" Let us always meet each other with smile, and the smile is the beginning of love -MOTHER TERESA"', '"Do not wait for leaders; do it alone person to person. -MOTHER TERESA"', '"If we cannot love the person whom we see, how can we love god, whom we cannot see?"', '"Be faithful in small things because it is in them that your strength lies."','If you start judging people you will be having no time to love them..."','"Joy is a net of love by which you can catch souls."','"You should never lose heart. God is merciful and kind. He has endowed you with the best gift-SMILE, which can make millions happy."','"Peace begins with a smile."')
var t;
var timer_is_on=0;

function timedCount()
{
document.getElementById('txt').innerHTML=an[c];
c=c+1;
if(c==5)
	c=0;
t=setTimeout("timedCount()",8000);
}

function doTimer()
{
if (!timer_is_on)
  {
  timer_is_on=1;
  timedCount();
  }
}




$(document).ready(function(){
			$(document).bind("scroll",function(event){
			var menu_pos=$("#menu1").position().top - $(window).scrollTop();
			var temp_pos=$("#bg1").position().top-$(window).scrollTop();
			var set = $("#bg").position().top+10;
			if(menu_pos<0)
				{
					$("#menu1").css({"position":"fixed","top":0,"left":170,"z-index":1});
				}
			else if(temp_pos>0)
				{
						$("#menu1").css({"position":"absolute","top":set,"left":170,"z-index":1});

				}
			});
		});
       </script>
