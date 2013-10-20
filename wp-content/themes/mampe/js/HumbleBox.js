var HumbleBox = new Class({
	initialize : function(imgs){
		this.imgs = imgs;
		this.getImages();
	},
	getImages : function(){
		console.log('HB images : '+this.imgs);
	}
});