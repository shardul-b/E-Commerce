
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function advertCreator(){
	//Image links in this array 
	const banners=
	[
		'./Assets/Images/Ad1.jpg',
		'./Assets/Images/ad2.jpg',
		'./Assets/Images/ad3.jpg'
	];
	//Create Divs dynamically inside the advert div
	for(let i of banners){
		//create div
		let div=document.createElement('div');
		//set backgroundImage from array
		div.style.backgroundImage=`url(${i})`;
		//add classes
		div.classList.add('advert-img','hide');
		//join div
		document.getElementsByClassName('advert')[0].appendChild(div)
	}
}
//initially first image so count =0;
let count=0;

let bannerRef=document.getElementsByClassName('advert-img');

window.onload=()=>{
	//This function executes first when page loads
	advertCreator();
	bannerRef[0].classList.remove('hide');
};
//Left Arrow control 
document.getElementsByClassName('left-arrow')[0].addEventListener('click', ()=>{
	bannerRef[count].classList.add('hide');
	count-=1;
	if(count<0){
		//if it is first image go to last
		count=bannerRef.length-1;
	}
	bannerRef[count].classList.remove('hide');
});
//Right Arrow control
document.getElementsByClassName('right-arrow')[0].addEventListener('click', ()=>{
	bannerRef[count].classList.add('hide');
	count+=1;
	if(count>=bannerRef.length){
		//if it is last image go back to first
		count=0;
	}
	bannerRef[count].classList.remove('hide');
});