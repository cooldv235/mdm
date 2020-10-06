// SIDENAV
const sideNav = document.querySelector('.sidenav');
M.Sidenav.init(sideNav,{});

// SLIDER
const slider = document.querySelector('.slider');
M.Slider.init(slider,{
	indicators: false,
	height: 500,
	transition: 500,
	interval: 5000
});

// GALLERY IMAGES
const mb = document.querySelectorAll('.materialboxed');
M.Materialbox.init(mb, {});

// SCROLLSPY
const ss = document.querySelectorAll('.scrollspy');
M.ScrollSpy.init(ss, {});