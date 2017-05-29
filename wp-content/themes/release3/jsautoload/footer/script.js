// Cache DOM
const browse = document.querySelector('.browse');
const browseBlog = document.querySelector('.browse-blog');
const nav = document.querySelector('nav');
const currentPage = window.location.pathname.substr(window.location.pathname.length - 10);

// Event Listeners
browse ? browse.addEventListener('click', showSidebar) : null;

function showSidebar() {
	browseBlog.classList.toggle('hidden');
	browse.classList.toggle('primary75-bg');
	browse.classList.toggle('position-fixed');
}

// Change Primary Color
let r = 202, g = 71, b = 71;
let rUp = true, gUp = true, bUp = true;

function changePrimaryColor() {
	if (r === 255) {
		rUp = false;
	} else if (r === 0) {
		rUp = true;
	}
	if (g === 255) {
		gUp = false;
	} else if (g === 0) {
		gUp = true;
	}
	if (b === 255) {
		bUp = false;
	} else if (b === 0) {
		bUp = true;
	}
	rUp ? r += 1 : r -= 1;
	gUp ? g += 1 : g -= 1;
	bUp ? b += 1 : b -= 1;

	let color = `rgb(${r}, ${g}, ${b})`;
	let color75 = `rgba(${r}, ${g}, ${b}, 0.75)`;
	document.documentElement.style.setProperty('--primary-color', color);
	document.documentElement.style.setProperty('--primary-color75', color75);
}

setInterval(changePrimaryColor, 100);

// Make two first links white in navbar
if(window.location.href.indexOf('portfolio') > -1) {
  nav.children[0].children[0].children[0].children[0].classList.add('white');
  nav.children[0].children[0].children[1].children[0].classList.add('white');
}

function getPortfolioItems() {
	const portfolio = document.querySelector('.portfolio');

	const request = new XMLHttpRequest();
	request.open('GET', '../wp-json/wp/v2/portfolio_posts/');
	request.onload = function() {
	  if (request.status === 200) {
	  	const response = JSON.parse(request.responseText);
	  	console.log(response);
	  	response.forEach(x => {
	  		const title = x.title.rendered;
	  		const content = x.content.rendered;
	  		const thumbnail = x.acf.image1;
	  		const link = x.acf.link;
	  		portfolio.innerHTML += `
	  			<article class="flex-row">
	  				<div class="images">
	  					<div>
	  						<a href="${link}" target="_blank"><img src="${thumbnail}" /></a>
	  					</div>
	  				</div>
	  				<div class="descriptions flex-col center">
	  					<h3><a class="black-link" href="${link}" target="_blank">${title}</a></h3>
	  					<p>${content}</p>
	  				</div>
	  			</article>
	  		`;
	  	});
	  } else {
	 		console.log('error');
	  }
	}.bind(this);
	request.send();
};

if (currentPage === 'portfolio/') {
	getPortfolioItems();
}