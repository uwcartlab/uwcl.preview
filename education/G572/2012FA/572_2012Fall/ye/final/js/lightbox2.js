			$(document).ready(function(){
 
				//$('.lightbox').click(function(){
				$('.case').click(function(){
					$('.backdrop, .box').animate({'opacity':'.50'}, 300, 'linear');
					$('.box').animate({'opacity':'1.00'}, 300, 'linear');
					$('.backdrop, .box').css('display', 'block');
					$('.backdrop').css('height',$(document).height())
					//$('.backdrop').css('height',800)
					//window.location ='#amount';
				});
 
				$('.close').click(function(){
					close_box();
				});
 
				$('.backdrop').click(function(){
					close_box();
				});
 
			});
 
			function close_box()
			{
				$('.backdrop, .box').animate({'opacity':'0'}, 300, 'linear', function(){
					$('.backdrop, .box').css('display', 'none');
				});
				window.location ='#amount';
			}