var $ = jQuery.noConflict();

var mobile='+91 9422449858';
var email='austerio_fernandes@yahoo.co.uk';
			
$(document).ready(function() {
	$(".mobile .mobile").text(mobile.toString());
	$(".email .email").html('<a href="mailto:'+email.toString()+'">'+email.toString()+'</a>');
});
