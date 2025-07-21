function dark()
	{
		if(typeof(Storage) !== "undefined") {
			var tryb="light";
			localStorage.setItem("Tryb", tryb);
		}
		else
		{
			var tryb="light";
			console.log("Local storage not supported");
		} 
		if(document.getElementById('container').className == 'dark')
		{
			document.getElementById('container').className = 'light';
			//document.getElementById('sun').className = 'fas fa-moon';
			//document.getElementById('sun').src = main_dir + '/img/moon-solid.svg';
			document.getElementById("logo_motyl").src = main_dir + '/img/motyl.png';
			tryb = "light";
			localStorage.setItem("Tryb", tryb);
		}
		else
		{
			document.getElementById('container').className = 'dark';
			//document.getElementById('sun').className = 'fas fa-sun';
			//document.getElementById('sun').src = main_dir + '/img/sun-solid.svg';
			document.getElementById("logo_motyl").src = main_dir + '/img/motyl_ciemny1.png';
			tryb = "dark";
			localStorage.setItem("Tryb", tryb);
		}
	}
	
function tryb()
	{
		if(localStorage.getItem("Tryb")=="light")
		{
			document.getElementById('container').className = 'light';
			//document.getElementById('sun').className = 'fas fa-moon';
			//document.getElementById('sun').src = main_dir + '/img/moon-solid.svg';
			document.getElementById("logo_motyl").src = main_dir + '/img/motyl.png';
		}
		else
		{
			document.getElementById('container').className = 'dark';
			//document.getElementById('sun').className = 'fas fa-sun';
			//document.getElementById('sun').src = main_dir + '/img/sun-solid.svg';
			document.getElementById("logo_motyl").src = main_dir + '/img/motyl_ciemny1.png';
		}
	}

function openCity(evt, cityName)
{
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " active";
	
	localStorage.setItem("activeTab", cityName);
}

function initializeTabs() {
    var activeTab = localStorage.getItem("activeTab");
    if (activeTab) {
        var tabButton = document.querySelector('.tablinks[onclick="openCity(event, \'' + activeTab + '\')"]');
        if (tabButton) {
            tabButton.click();
        }
    }
}
	
function sStorage()
	{
		if (typeof(Storage) !== "undefined") {
			
			if(parseInt(sessionStorage.getItem("wynik"),10)>0)
			{
				var variable = parseInt(sessionStorage.getItem("wynik"),10);
				sessionStorage.setItem("wynik",variable + 1);
				document.getElementById("result").innerHTML = sessionStorage.getItem("wynik");
			}
			else
			{
				var wynik=1;
				sessionStorage.setItem("wynik", wynik);
				document.getElementById("result").innerHTML = sessionStorage.getItem("wynik");
			}
		} 
		else 
		{
			document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
		}
	}
	
function navi() 
	{
		var NavY = $('#nav').offset().top;
		 
		var stickyNav = function(){
		var ScrollY = $(window).scrollTop();
			  
		if (ScrollY > NavY) { 
			$('#nav').addClass('sticky');
		} else {
			$('#nav').removeClass('sticky'); 
		}
		};
		 
		stickyNav();
		 
		$(window).scroll(function() {
			stickyNav();
		});
	}
	
function imgExpander(imgs) 
	{
		var expandImg = document.getElementById("expandedImg");
		var imgText = document.getElementById("imgtext");
		expandImg.src = imgs.src;
		imgText.innerHTML = imgs.alt;
		expandImg.parentElement.style.display = "block";
	}