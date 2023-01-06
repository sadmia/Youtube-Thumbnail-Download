"use strict";


let urlInput = document.getElementById('urlInput');
let downloadBtn = document.getElementById('downloadBtn');
let viewImg = document.getElementById('viewImg');

let iconView = document.getElementById('iconView');
let textView = document.getElementById('textView');
let thumbnailShowDiv = document.getElementById('border');



urlInput.addEventListener("input", function(){

	let imgURL = urlInput.value;

	if (imgURL.indexOf("https://www.youtube.com/watch?v=") != -1) {
		let videoID = imgURL.split("v=")[1].substring(0, 11);
		imgCreat(videoID);
	} else if (imgURL.indexOf("https://youtu.be/") != -1) {
		let videoID = imgURL.split("be/")[1].substring(0, 11);
		imgCreat(videoID);
	} else if (imgURL.indexOf("https://www.youtube.com/shorts/") != -1) {
		let videoID = imgURL.split("shorts/")[1].substring(0, 11);
		imgCreat(videoID);
	}

	if (imgURL != '') {
		viewImg.style.display = "block";
	}

})

function imgCreat(videoID){

	let imgLink = `https://img.youtube.com/vi/${videoID}/maxresdefault.jpg`;
	viewImg.src = imgLink;
	downloadBtn.value = imgLink;
	viewImg.style.borderRadius = "5px";
	iconView.style.display = "none";
	textView.style.display = "none";
	thumbnailShowDiv.style.borderStyle = "none";

}


// downloadBtn.addEventListener("click", function(event){
// 	event.preventDefault();
// })