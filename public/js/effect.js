$(function()
{
	$(".innerBox").hide();                    /*hide contacts on load*/
	$(".innerBox").show("explode",600);       /*show contacts using jquery explode effect in defined time*/ 

	$("#addCon").click(function(){            /*on the click of the add contact button hide the contact using explode effect*/
		$(".innerBox").hide("explode",300);
	});
});