<!DOCTYPE html>
<html lang="en">

<head>
  <title>AKWABA</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  
  <link rel="stylesheet" type="text/css"
  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" />
    <script src="js/leaflet.js"></script>
	
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet-src.js"
      integrity="sha512-IkGU/uDhB9u9F8k+2OsA6XXoowIhOuQL1NTgNZHY1nkURnqEGlDZq3GsfmdJdKFe1k1zOc6YU2K7qY+hF9AodA==" crossorigin=""
  ></script>
	
	 <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
	 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.3.2/leaflet.draw.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.3.2/leaflet.draw.js"></script>

    <link rel="stylesheet" href="https://makinacorpus.github.io/Leaflet.MeasureControl/leaflet.measurecontrol.css" />
    <script src="https://makinacorpus.github.io/Leaflet.MeasureControl/leaflet.measurecontrol.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/gokertanrisever/leaflet-ruler@master/src/leaflet-ruler.css" integrity="sha384-P9DABSdtEY/XDbEInD3q+PlL+BjqPCXGcF8EkhtKSfSTr/dS5PBKa9+/PMkW2xsY" crossorigin="anonymous">  
    <script src="https://cdn.jsdelivr.net/gh/gokertanrisever/leaflet-ruler@master/src/leaflet-ruler.js" integrity="sha384-N2S8y7hRzXUPiepaSiUvBH1ZZ7Tc/ZfchhbPdvOE5v3aBBCIepq9l+dBJPFdo1ZJ" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/tomik23/autocomplete@1.8.5/dist/css/autocomplete.min.css" />
    	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/landing-custom.css">
		 <link rel="stylesheet" type="text/css" href="assets/plugin/simplebar/simplebar.css">
	<script src="https://cdn.jsdelivr.net/gh/tomik23/autocomplete@1.8.5/dist/js/autocomplete.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	
	<!--<link rel="stylesheet" href="global.css" />-->
	
	<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
   <style>
        html,
        body {height: 100%;padding:0;margin:0;}        
        #map {width: 100%;height: 100vh;}
        .info-div{font-size: 18px; padding: 5px;}
        .select-profile {border: 1px solid #d7d7d7;font-size: 16px;padding: 12px; width: 100%;}
        .leaflet-control.enabled a {background-color: yellow;}
        .leaflet-draw-guide-dash {background-color: red !important;}
        .leaflet-overlay-pane .leaflet-zoom-animated{filter: invert(19%) sepia(92%) saturate(7486%) hue-rotate(358deg) brightness(117%) contrast(112%) !important}
    </style>
  <style>
    .gm-style .place-card-large {
      display: none;
    }

    .filterpart {
      border-right: 1px solid #e6e6e6;
      height: calc(100vh - 130px);
      /*overflow: auto;*/
    }

    .cafesbar {
      margin-top: 10px;
      position: relative;
    }

    .cafesbar .input {
      margin-bottom: 12px;
    }

    input.cafesbar-input {
      border: 1px solid #CBCBCB;
      font-size: 14px;
      padding: 6px 10px;
      color: #BBBBBB;
      height: 32px;
      border-radius: 4px;
    }

    input.cafesbar-input.w-101 {
      width: 101px;
      background-color: #F6F6F6;
    }

    input.cafesbar-input.w-64 {
      width: 64px;
      background-color: #F6F6F6;
    }

    .input .toggle-btn2 {
      position: absolute;
      right: 30px;
      /* top: 0; */
      bottom: 14px;
      font-size: 20px;
    }

    .input .toggle-btn3 {
      right: 16px;
    }

    .input .toggle-btn4 {
      left: 22px;
    }

    .cafesbar .toggle-btn {
      top: 0;
      right: 11px;
    }

    .cafesbar .list-heading{
      font-size: 14px;
    padding-left: 5px;
    color: #273F43;
    }

    .cafesbar ul li.morebtn {
      border-radius: 9px;
      background-color: #f6f6f6;
      padding: 3px 9px
    }

    .cafesbar ul li.morebtn img {
      padding-bottom: 4px;
    }

    .cafesbar ul .side-list.active{
      background-color: #BE2BBB;
      border: 1px solid #B531AF;
      color: #fff;
    }
    
    .cafesbar ul .side-list {
      list-style-type: none;
      display: inline-block;
      margin: 4px 0px;
      border: 1px solid #CBCBCB;
      padding: 3px 14px;
      border-radius: 24px;
      font-size: 13px;
      color: #707070;
      font-weight: 600;
    }

    .cafesbar ul {
      padding-left: 0;
      margin-bottom: 10px;
    }

    .toggle-btn ,  .toggle-btn2 ,  .toggle-btn3 , .toggle-btn4 {
    background: #ffffff00;
}

.list-progress{
    height: 8px !important;
    margin-top: 18px;
}

.left-panel .scrollbar {
    height: 100%;
    overflow: hidden;
}
.list-progress .progress-bar {
    background-color: #be2bbb;
}

    .gmnoprint {
      display: none;
    }

.extrapartfeature .feature-p{
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

    .left-panel.hideleftpanel .extrapartfeature
{
  overflow: hidden;
}

.extrapartfeature .feature-p {
  font-size: 14px;
  font-weight: 500;
  padding-right: 30px;
  color: #363636;
  text-align: justify;
}

	
    .left-feature-panel.extralarge {
      max-width: calc(400px + 390px);
    }


    .left-panel .scrollbar.featured-places {
      max-width: 400px;
    }

    .extrapartfeature {
      width:390px;
      height: 100vh;
      box-shadow: -1px 0 0 0 rgb(38 38 38 / 12%);
    }


    .left-feature-panel .restaurantdetilsbox {
      height: 215px;
      padding: 0;
    }

    .image-heading {
      z-index: 0;
      padding: 68px 24px 20px;
      user-select: none;
      color: rgb(255, 255, 255);
    }

    .left-feature-panel .image-heading-h2 {
      font-size: 18px;
      line-height: 20px;
      font-weight: 500;
      margin-bottom: 4px;
    }

    .left-feature-panel .image-heading-p {
      font-size: 13px;
      padding: 8px 0px 12px;
      margin-bottom: 0;
      line-height: 1.2;
    }

     .extrapartfeature .feature-p{
      font-weight: 400;
     }


    .extrapartfeature .categories-icons-section {
      padding: 0 20px;
      /* height: calc(100vh - 215px); */
    }

    .extrapartfeature .categories-icons-section .padding-section{
      padding: 16px 0px;
      /* padding-right: 12px; */
    border-bottom: 1px solid rgb(230, 230, 230);
    }

    .extrapartfeature .categories-icons-section .single-feature {
      margin: 12px 0px 4px;
    }

    .extrapartfeature .categories-icons-section .feature-h4 {
      font-size: 18px;
      line-height: 20px;
      color: #0072ce;
      font-weight: 500;
    }

    .extrapartfeature .categories-icons-section .star-rating-count {
      text-align: center;
    }

    .extrapartfeature .categories-icons-section .features-span2 {
      padding-right: 30px;
      line-height: 1.2;
    }
    .extrapartfeature .categories-icons-section .features-span2 span {
      color: rgb(0, 0, 0) !important;
    }

    .extrapartfeature .categories-icons-section .star-rating-count,
    .extrapartfeature .categories-icons-section .feature-span,
    .extrapartfeature .categories-icons-section .features-span2 span {
      font-size: 13px;
      line-height: 16px;
      font-weight: 400;
      color: rgb(146, 146, 146);
    }

    .extrapartfeature .categories-icons-section .feature-span .one {
      padding-left: 12px;
      margin-right: 12px;
      margin-left: -12px;
    }

    .extrapartfeature .categories-icons-section .feature-span .two {
      position: relative;
    }

    .extrapartfeature .categories-icons-section .feature-span .two:before {
      position: absolute;
      left: -12px;
      top: 2px;
      width: 12px;
      text-align: center;
      color: rgb(230, 230, 230);
      content: "•";
    }

    .extrapartfeature .categories-icons-section .features-overflow {
      padding: 8px 0px 12px;
    }
	
	.left-panel .featured-places .img-top, .left-panel .extrapart .img-top {
		height: 150px;
		background-image: none;
		background-color: #B531AF !important;
	}

	.left-panel .extrapart .img-top {
		display: flex;
		flex-wrap: wrap;
		align-items: center;
		background-color: #ddd !important;
	}
	
	.left-panel .extrapart .img-top .topboxheader{
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      width: 100%;
    }
    .left-panel .extrapart .img-top .topboxheader span{
      width: calc(100% - 80px);
      /*color: #fff;*/
    }
    .left-panel .extrapart .img-top .topboxheader .icontopmaindiv{
      width: 60px;
      height: 60px;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      margin-left: 20px;
    }
    /* .extrapartfeature {
      box-shadow: -1px 0 0 0 rgb(38 38 38 / 12%);
      max-width: 390px;
    } */	
  </style>
</head>



