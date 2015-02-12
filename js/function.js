// sticky header
$(window).load(function(){
	$("header").sticky({ topSpacing: 0, className: 'sticky', wrapperClassName: 'header-wrapper' });
});

$(document).ready(function() {
 
// panel scroll (nav menu highlight)
$('#nav').onePageNav();
$("#rsvp").click(function(){
$('html,body').scrollTo('#menu6','slow');
});
 
 // Photo gallery 
 $("a[rel^='photo']").prettyPhoto()
});	
	
// Contact form validation
$(document).ready(function() {
	$("#rsvpForm").validationEngine({scroll: false});
    $.get('libs/token.php',function(txt){
    		$('form').append('<input type="hidden" name="ts" value="'+txt+'"/>');
        });
                    
    $('#submit').click(function() {
    	if($('#rsvpForm').validationEngine('validate') == true) {
        	$.post('sendform.php',$('#rsvpForm').serializeArray(),function(data){
        	if(data.success == true)
            	{
            		$('form#rsvpForm').slideUp("fast", function() {				   
                    	$(this).before('<p class="result"><strong>Thanks!</strong> Your RSVP has been delivered!</p>');
                    });
                }
            },'json');
        }
	});
});