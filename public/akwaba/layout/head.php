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
    <!--<script src="https://cdn.jsdelivr.net/gh/gokertanrisever/leaflet-ruler@master/src/leaflet-ruler.js" integrity="sha384-N2S8y7hRzXUPiepaSiUvBH1ZZ7Tc/ZfchhbPdvOE5v3aBBCIepq9l+dBJPFdo1ZJ" crossorigin="anonymous"></script>-->
    <script src="js/leaflet-ruler.js"></script>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/tomik23/autocomplete@1.8.5/dist/css/autocomplete.min.css" />
    	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		 <link rel="stylesheet" href="assets/css/jquery.scrolling-tabs.css">
		<link rel="stylesheet" href="assets/css/landing-custom.css">
		 <link rel="stylesheet" href="assets/css/mignify-popup.css">
		 <link rel="stylesheet" type="text/css" href="assets/plugin/simplebar/simplebar.css">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.8/sweetalert2.min.css">
	<script src="https://cdn.jsdelivr.net/gh/tomik23/autocomplete@1.8.5/dist/js/autocomplete.min.js"></script>
	
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

/*.left-panel .scrollbar {
    height: 100%;
    overflow: hidden;
}*/
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
<style>
    .left_after_login {
      max-width: 350px !important;
    }

    .left-panel .img_top_user {
      width: 100% !important;
      height: 205px !important;
      background: rgb(230, 230, 230) !important;

    }

    .img_top_username {
      padding: 20px 8px 0px;
      align-items: center;
      margin-bottom: 20px;
    }

    .img_top_username .lh-1 {
      line-height: 1.2;
    }

    .img_top_username .Username {
      font-size: 18px;
      line-height: 20px;
      font-weight: 500;
      overflow-wrap: break-word;
    }

    .img_top_username .Useremail {
      font-size: 13px;
      opacity: 0.5;
      padding-top: 4px;
    }

    .img_top_username .usericon div {
      width: 56px;
      height: 56px;
      border-radius: 200px;
      color: rgb(38, 38, 38);
      background: rgb(255, 255, 255);
      box-shadow: rgb(38 38 38 / 50%) 0px 1px 3px 0px;
      overflow: hidden;

    }

    .img_top_username .usericon div P {
      height: 100%;
      font-size: 13px;
      font-weight: 700;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .signout-user .signout-btns {
      display: flex;
      padding: 0px 8px 0px;
    }

    .editprofile-btns {
      margin-right: 8px;

    }

    .editprofile-btns a {
      color: rgb(146, 146, 146);
    }

    .editprofile-btns a:hover {
      color: rgb(0, 0, 0);
    }
  </style>

  <style>
    .userdetails-tab .tab-details {
      /* display: flex; */
      height: 47px;
      background-color: #f2f2f2;
    }

    .userdetails-tab .tab-details .nav-tabs {
      background-color: #f2f2f2;

    }

    .userdetails-tab .tab-details .nav-tabs .nav-link {
      cursor: pointer;
      color: rgb(38, 38, 38);
      font-size: 13px;
      line-height: 16px;
      padding: 16px 0px 13px;
      margin: 0px 8px;
    }

    .userdetails-tab .tab-details .nav-tabs .nav-link:hover {
      color: rgb(146, 146, 146);
    }


    .userdetails-tab .nav-tabs .nav-link.active:after {
      width: 62px;
    }

    .places-details .my-places {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .places-details .my-places .places-figure {
      padding: 48px 66px;
      text-align: center;
    }

    .places-details .my-places .places-figure .places-figure-image {
      margin-bottom: 32px;
    }

    .places-figure-caption1 {
      font-size: 21px;
      line-height: 20px;
      font-weight: 600;
      overflow-wrap: break-word;
      margin-bottom: 12px;
    }

    .places-figure-caption2 {
      font-size: 13px;
      line-height: 16px;
      font-weight: 400;
    }

    .Favorites-one {
      border-bottom: 1px solid rgb(230, 230, 230);
    }

    .Favorites-details .details-one {
      position: relative;
      /* background: rgb(255, 255, 255); */
      padding: 16px 22px;
      color: rgb(38, 38, 38);
      font-size: 13px;
      line-height: 16px;
      font-weight: 400;
    }

    .Favorites-details .details-one:hover {
      background: rgb(249, 249, 249);
    }

    .Favorites-details .menu-list {
      display: flex;
      align-items: center;
      position: relative;
      z-index: 0;
    }

    .Favorites-details .menu-list-image {
      flex: 0 0 24px;
      margin-right: 24px;
      width: 32px;
      height: 32px;
    }

    .Favorites-details .menu-list-image img {
      height: 26px;
      width: 26px;
    }

    .Favorites-details .Favoritesname {
      font-size: 18px;
      line-height: 20px;
      font-weight: 500;
      overflow-wrap: break-word;
      margin-bottom: 4px;
    }

    .Favorites-details .menu-list1 .menu-list1_1 {
      margin-left: 50px;
      color: #0072ce;
    }

    .Edit-modal .modal-header {
      color: rgb(146, 146, 146);
      font-size: 13px;
      padding: 16px 34px 16px 24px;
    }

    .Edit-modal .modal-body {
      padding: 16px 34px 16px 24px;
    }

    .Edit-modal .fields {
      margin-bottom: 16px;
    }

    .Edit-modal .user-name-field {
      font-size: 11px;
      line-height: 12px;
      font-weight: 400;
      color: rgb(146, 146, 146);
      margin-bottom: 0;
      
    }

    .Edit-modal .input-field {
    width: 100%;
    align-items: center;
    color: rgb(146, 146, 146);
    padding: 12px 0px;
    position: relative;
    }

    .Edit-modal  .modal-footer{
      background: rgb(242, 242, 242);
    padding: 20px 24px;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
    }

    .Edit-modal  .btn{ 
    font-size: 13px;
    line-height: 16px;
    background: transparent;
    padding: 12px 24px;
    color: rgb(0, 114, 206);
    }

    .Edit-modal  .btn.btn-primary{     
    background: rgb(2, 142, 255);
    color: #fff;
    }

    .Edit-modal .input-field:after{
      content: "";
    position: absolute;
    bottom: 0px;
    height: 1px;
    width: 100%;
    left: 0px;
    background: rgb(230, 230, 230);
    }

    .Edit-modal  .field-input{
      color: rgb(38, 38, 38);
    border: none;
    display: block;
    width: 100%;
    padding: 0px;
    font-size: 13px;
    line-height: 16px;
    font-weight: 400;
    }
	 .modal.fade{
	  background: #0000007a;	
	  z-index: 999999;
	}
.leaflet-control-zoom.leaflet-bar.leaflet-control {
    top: -40px;
}
.leaflet-bar.leaflet-control {
    position: relative;
    top: -200px;
}
.multipleIconList {
    position: absolute;
    right: 9px;
    bottom: 134px;
    z-index: 9999;
}
  </style>  
 <style>
   .after_login.left-panel.extralarge {
        max-width: calc(350px + 353px) !important;
    }
	

    .after_login.left-panel ,.after_login.left-panel .scrollbar{
    height: 100%;
    max-width: 350px !important;
    width: 100%;
}



.after_login .extrapartAchivment{
height: 100%;
    box-shadow: -1px 0 0 0 rgb(38 38 38 / 12%);
  }

  .achivemntOne{
    padding: 8px 8px 12px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    box-shadow: rgb(230 230 230) 0px -1px inset;
    user-select: none;
    background: rgb(255, 255, 255);
  }

  .achivemntImage{
  height: 80px;
    width: 100%;
    position: relative;
    margin-bottom: 25px;
    border-radius: 4px;
    background: rgb(242, 242, 242);
  }

  .achivemntOne .imageContent{
    font-weight: 700;
    font-size: 13px;
  }

  .achivemntOne .imageContent2 {
    padding: 4px 19px 8px;
    white-space: pre-wrap;
    font-size: 13px;
    line-height: 1.3;
}

.achivemntOne .Counter {
    -webkit-box-align: center;
    font-size: 11px;
    line-height: 12px;
    font-weight: 400;
    color: rgb(146, 146, 146);
    display: flex;
    align-items: center;
}

.achivemntOne .Counter span {
    margin-right: 4px;
}

  .userdetails-tab  .upper-slider{
      height: 205px;
    box-shadow: rgb(230 230 230) 0px -1px inset;
    }
  .owl-carousel {
    max-width: 700px;
    margin: 0 auto;
    padding: 0px 12px;
    height: 150px;
  }

  .owl-carousel .item {
    cursor: pointer;
    padding: 0px 8px 12px;
    display: flex;
    flex-direction: column;
    align-items: center;
    user-select: none;
  }
 
  .owl-carousel .item .sliderImage{
  position: relative;
    margin-bottom: 14px;
    width: 104px;
    height: 104px;
  }

  .owl-carousel .item .imageContent{
    font-size: 13px;
    text-align: center;
  }
.achivemntImage .Image{
  position: absolute !important;
    width: 104px !important;
    height: 104px;
    top: 0px !important;
    left: 50% !important;
    transform: translate(-50%);
}

  .after_login .Image{
  position: relative;
    top: 6px;
    left: 6px;
    width: 100%;
    height: 100%;
    z-index: 0;
}

.after_login .Image img {
    display: block;
    width: 100%;
}
.after_login .Image::before {
    content: "";
    width: 100px;
    height: 100px;
    position: absolute;
    top: -4px;
    left: -4px;
    border-radius: 200px;
    background: rgb(255 255 255);
    z-index: -1;
}
  
  .owl-carousel .owl-nav button.owl-prev, .owl-carousel .owl-nav button.owl-next {
    position: absolute;
    top: -38px;
    right: 15%;
}
  
  .owl-nav button span {
    font-size: 24px;
    height: 100%;
    display: block;
    width: 100%;
    font-weight: 600;
  }
 
  .owl-carousel .owl-nav button.owl-next {
    right: 30px;
  }
  /* .owl-carousel .owl-nav {
    margin: 0;
  } */
  .owl-theme .owl-nav .disabled,
  button.disabled {
    opacity: 0.6;
  }

  .owl-theme .owl-nav [class*='owl-']:hover ,   .owl-theme .owl-nav:focus-visible  {
    background: #ffffff;
    color: rgb(0, 0, 0);
    border: none;
    text-decoration: none;
    outline: none;
}

.slider-bottomOne , .slider-bottomTwo{
    font-size: 18px;
    line-height: 20px;
    font-weight: 400;
    overflow-wrap: break-word;
    display: flex;
    justify-content: space-between;
    cursor: pointer;
    padding: 12px 24px;
    user-select: none;
    box-shadow: rgb(230 230 230) 0px -1px inset;
}

.slider-bottomOne:hover , .slider-bottomTwo:hover{
  background-color: rgb(246, 246, 246);
}

.spanTwo{
  font-size: 13px;
    line-height: 16px;
    font-weight: 400;
    color: rgb(146, 146, 146);
}
  </style>
<style>
.alert.success {
  padding: 20px;
  background-color: #04AA6D;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>  
 <style>
.extrapartFavorites{
  box-shadow: -1px 0 0 0 rgb(38 38 38 / 12%);
}

      .Favorites-one.p-relative{
        position: relative;
      }
      .Favorites-details .menu-list1 .Favoritessubname {
        color: rgb(146, 146, 146);
        margin-top: 4px;
      }

       .pencilIcon {
    padding: 12px 16px 12px 4px;
    position: absolute;
    right: 0px;
    top: 0px;
    display: none;
}

.Favorites-one-pencil .pencilIcon2{
  display: none;
}

.Favorites-one-pencil:hover .pencilIcon, .Favorites-one-pencil:hover .pencilIcon2{
  display: block;
}

.pencilIcon .pencilIconDiv ,.pencilIcon2 .pencilIconDiv {
    display: inline-flex;
    box-shadow: 0 1px 3px 0 rgb(38 38 38 / 50%);
    border-radius: 4px;
}

.pencilIcon2 .pencilIconDiv > *{
  box-shadow: inset -1px 0 #e6e6e6;
}

.pencilIcon .pencilIconBTN , .pencilIcon2 .pencilIconBTN  {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 32px;
    border: 0;
    height: 32px;
    color: #262626;
    border-radius: 4px;
    background: #ffffff;
}

.pencilIcon .pencilIconBTN:hover {
    opacity: 0.7;
}

.extrapartFavorites .FavoritesHead{
  background: rgb(41, 148, 0);
    color: rgb(255, 255, 255);
}

.extrapartFavorites .FavoritesHead .FavoritesHeadContent{
    padding: 24px;
    line-height: 1.2;
}
.extrapartFavorites .FavoritesHead .FavoritesHeadContent h1 {
    font-size: 18px;
    line-height: 20px;
    font-weight: 400;
    margin-bottom: 0;
}

.extrapartFavorites .FavoritesHead .FavoritesHeadContent .FavoritesHeadSubContent{
  font-size: 13px;
  line-height: 20px;
} 

.FavoritesBody{
  position: relative;
}

.FavoritesBodyContent {
    padding: 16px 24px;
    border-bottom: 1px solid rgb(230, 230, 230);
}

.FavoritesBodyhead {
    margin-bottom: 8px;
}

.FavoritesBodyheadContent {
  font-size: 18px;
    line-height: 20px;
    font-weight: 600;
    margin-bottom: 4px;
}

.FavoritesBodyheadContent button {
  color: rgb(0, 114, 206);
    border: none;
    padding: 0px;
    background-color: transparent;
    cursor: default;
}

.FavoritesBodySubContent {
    font-size: 13px;
    line-height: 16px;
    font-weight: 400;
    color: rgb(146, 146, 146);
}

.FavoritesBodySubContent span{
position: relative;
    margin-left: -12px;
    padding-left: 12px;
    margin-right: 12px;
  }

  .FavoritesBodyAddress:last-child {
    margin-bottom: 0px;
}

.FavoritesBodyAddress {
    font-size: 13px;
    line-height: 16px;
    font-weight: 400;
    margin-bottom: 8px;
}


.FavoritesBody .pencilIcon2 {
    /* display: none; */
    position: absolute;
    right: 16px;
    bottom: 12px;
}
    </style>
<style>
    .secondtabmaindiv {
      overflow: hidden;
    }

    .review-div-btn {

      background: #fff;
      border-top: 1px solid #dee2e6;
      padding: 10px 0;
    }

    .top-review-positive {
      margin-bottom: 10px;
    }

    .top-review-positive .starboxmaindiv {
      margin-left: 20px;
      display: flex;
      padding: 8px;
    }

    .top-review-positive .starboxmaindiv .starbox img {
      width: 15px;
    }

    .top-review-positive .starboxmaindiv .ratting {

      margin-left: 10px;
      font-weight: 700;
    }

    .top-review-positive .starboxmaindiv .ratting .ratting-p {
      font-size: 18px;
      margin-bottom: 2px;
    }

    .top-review-positive .starboxmaindiv .ratting .ratting-span {
      font-size: 21px;
    }

    .tabmaindiv .nav-tabs.branch-tabs {
      background: #ffffff;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      outline: 1px solid #CBCBCB;
      /* margin: 0 20px; */
      border-radius: 6px;
    }

    .top-review-tabs {
      margin: 0 20px;
    }

    .lh-1 {
      line-height: 1.2;
      padding-left: 5px;
    }

    .fade:not(.show) {
      opacity: 0;
      display: none;
    }

    .lh-2 {
      margin-top: 5px;
    }

    p.pink-p {
      font-size: 13px;
      color: #333;
      margin-top: 5px;
    }

    .pink-bg {
      padding: 13px 8px;
      margin-top: 10px;
      background-color: #FCF2FB;
      height: 100px;
      border-radius: 8px;
    }

    .user-profile-image {
      width: 42px;
      height: 42px;
      margin: auto 0;
    }

    p.code-data {
      font-size: 13px;
      color: #333;
    }

    .icon-right {
      position: absolute;
      /* float: right; */
      right: 8px;
    }

    .icon-right .img {
      width: 15px;
    }

    span.code-profile {
      font-size: 16px;
      color: #333;
      font-weight: 600;
    }

    span.code-deatils {
      font-size: 12px;
      color: #666666;
    }

    .inner-padding {
      padding: 10px 0;
    }

    .tabmaindiv .nav-tabs.branch-tabs .nav-item {
      width: 50%;
      text-align: center;
    }

    .tabmaindiv .nav-tabs.branch-tabs .nav-link.active {
      background-color: #B531AF;
      color: white;
    }

    .tabmaindiv .nav-tabs.branch-tabs .nav-link {
      padding: 10px;
      border-radius: 4px;
    }

    .modal-profile {
      font-size: 20px !important;
      font-weight: 800 !important;
      color: #000 !important;
    }

    .rating-stars {
      font-size: 16px;
      color: #000 !important;
      font-weight: 600;
    }

    .starbox-rating img {
      width: 20px;
    }

    .rating-stars span {
      font-size: 13px;

    }

    .review-footer-btn {
      justify-content: flex-start;
    }

    .review-footer-btn .btn {
      width: 100px;
      font-size: 16px;
      font-weight: 600;
    }

    .btn-post {
      background-color: #B531AF;
      border-color: #B531AF;
      color: #fff;
    }

    .map-screen iframe {
      height: 100%;
      float: right;
    }

    .btn-cancel {
      background-color: #F6F6F6;
      border-color: #CBCBCB;
      color: #000;
    }

    .modal-open .modal {
      background: #000000b3;
      z-index: 9999999;
    }


    textarea.review-text {
      width: 100%;
      margin-top: 7px;
      border-radius: 5px;
      height: 62px;
      border: 1px solid #CBCBCB;
    }

    .user-profile-image-modal {
      width: 60px;
      height: 60px;
      margin: auto 0;
    }

    .modal-deatils {
      font-size: 16px !important;
      font-weight: 600 !important;

    }

    .positive-input-box {
      text-align: right;
    }

    input.positive-input.w-101 {
      width: 109px;
      background-color: #fff;
      color: #BBBBBB;
    }

    span.code-likes {
    color: #000;
    font-weight: 600;
    font-size: 14px;
    margin: auto;
}

span.code-likes .like-btn {
  width: 20px;
}


    /* .color-yellow .star-rating label,
    .icon-right .star-rating label {
      color: #f8b42b;
    } */

    .star-15 .star-rating label {
      font-size: 1rem !important;
    }


    .star-rating-modal{
      float: left;
    }

    .star-rating-modal label{
      font-size: 1.5rem;
    }
.imageslist .lable-input label{
  width: 100px !important;
  height: 100px !important;
margin: 0;
} 

.pip_review_multiple {
   margin-bottom: 8px;
    display:inline-flex;
  margin: 10px 10px 0 0;
}

.close_imge_review{
    position: absolute;
    margin-left: -18px;
    cursor: pointer;
    margin-top:7px;
}

  </style>
  <style>
    /* ADDD COMOPANY MODEL */

.addcompany-modal .modal-header {
    color: rgb(0 0 0);
    font-size: 18px;
    padding: 24px 24px 0px;
    line-height: 20px;
    border-bottom: 0px solid #e9ecef;
}

.addcompany-modal .modal-body {
  padding: 24px 20px 12px;
  max-height: calc(100vh - 220px);
    /* overflow-y: scroll; */
}


.addcompany-profile .addone-head{
  padding: 12px 0px 12px 40px;
  font-size: 13px;
    line-height: 16px;
    font-weight: 700;
}

.addcompany-profile .addone-head.padding-extra{
  padding: 24px 0;
}

.addcompany-profile .input-company {
  position: relative;
    display: flex;
    flex-direction: column;
    background: rgb(255, 255, 255);
}

.addcompany-profile .input-company .input-image{
position: absolute;
    top: 8px;
    left: 8px;
    color: rgb(2, 142, 255);
}

.addcompany-profile .input-company .input-image img{
  width: 24px;
}

.addcompany-profile .fields {
    padding-left: 40px;
    margin-bottom: 0;
}


.add-number{
display: flex;
    align-items: center;
    margin-bottom: 12px;
    margin-top: 12px;
    border: 1px solid rgb(230, 230, 230);
    border-radius: 4px;
  }

  .add-number span{
    padding: 12px 24px;
    font-size: 13px;
    line-height: 16px;
    cursor: pointer;
    text-align: center;
    color: rgb(0, 114, 206);
    box-shadow: rgb(230 230 230) 0px 0px 0px 1px inset;
    width: 100%;
    opacity: 0.5;

  }


  .lable-input label{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background-color: rgb(2, 142, 255);
    width: 96px;
    height: 96px;
    color: rgb(255, 255, 255);
    border-radius: 4px;
    margin-right: 20px;
  }
 
  .addcompany-profile  .inputgroupcustom {
    display: flex;
    flex-wrap: wrap;
}
.addcompany-profile  .leftinput {
    width: calc(100% - 30px);
}
.addcompany-profile  .icon-cross {
    width: 20px;
    margin-left: 10px;
    color: rgb(146, 146, 146);
}
.addcompany-profile .lable-input label span{
  font-size: 11px;
    line-height: 12px;
    font-weight: 400;
    width: 52px;
    text-align: center;
    margin-top: 5px;
}
.addcompany-profile .lable-input {
    display: flex;
}

.addcompany-profile .lable-content{
  font-size: 13px;
    line-height: 16px;
    font-weight: 400;
    padding-top: 24px;
    max-width: 280px;
}

.addcompany-profile .spanone a{
  color: #007bff !important;
}

.addcompany-profile .spantwo{
  color: rgb(146, 146, 146);
}


.addcompany-modal .modal-footer {
    padding: 24px;
}

.addcompany-modal .img_top_username .usericon div {
    width: 40px;
    height: 40px;
}

.addcompany-modal .img_top_username .Username {
    font-size: 13px;
    margin-left: 7px;
}
.addcompany-modal .img_top_username .usericon div P {
    font-size: 12px;
}

.addcompany-modal .img_top_username {
    padding:  0px;
    align-items: center;
    margin-bottom: 0px;
        flex: auto;
}

.Edit-modal .modal-header {
      color: rgb(146, 146, 146);
      font-size: 13px;
      padding: 16px 34px 16px 24px;
    }

    .Edit-modal .modal-body {
      padding: 16px 34px 16px 24px;
      outline: none;
    }

    .Edit-modal .fields {
      margin-bottom: 16px;
    }

    .Edit-modal .user-name-field {
      font-size: 11px;
      line-height: 12px;
      font-weight: 400;
      color: rgb(146, 146, 146);
      margin-bottom: 0;

    }

    .Edit-modal .input-field {
    width: 100%;
    align-items: center;
    color: rgb(146, 146, 146);
    padding: 12px 0px;
    position: relative;
    }

    .Edit-modal  .modal-footer{
      background: rgb(242, 242, 242);
    padding: 20px 24px;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
    }

    .Edit-modal  .btn{
    font-size: 13px;
    line-height: 16px;
    background: transparent;
    padding: 12px 24px;
    color: rgb(0, 114, 206);
    }

    .Edit-modal  .btn.btn-primary{
    background: rgb(2, 142, 255);
    color: #fff;
    }

    .Edit-modal .input-field:after{
      content: "";
    position: absolute;
    bottom: 0px;
    height: 1px;
    width: 100%;
    left: 0px;
    background: rgb(230, 230, 230);
    }

    .Edit-modal .field-input{
      color: rgb(38, 38, 38);
    border: none;
    display: block;
    width: 100%;
    padding: 0px;
    font-size: 13px;
    line-height: 16px;
    font-weight: 400;
    outline: none;
    box-shadow: none;
    }
    .img_section{
    display: inline-flex;

    margin-bottom: 8px;
}
.pip {
   margin-bottom: 8px;
    display:inline-flex;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
.close_imge{
    position: absolute;
    margin-left: -18px;
    cursor: pointer;
    margin-top:7px;
}

.signinbtn1 a{
    display: flex;
    align-items: center;
}

.signinbtn1 a p{
    margin-bottom: 0px;
    margin-left: 15px;
}
.img_top_username .usericon a {
    color: black;
}
.img_top_username .usericon a div{
background-color: white;
display: flex;
align-items: center;
justify-content: center;
border-radius: 100%;
}

.img_top_username .usericon a div p{
    margin-bottom: 0px;
    font-size: 13px;
    line-height: 16px;
    font-weight: 700;

}
.fields #searchResult {
        border: 1px solid #c7c7c7;
    padding: 10px;
    height: 300px;
    overflow: auto;
    overflow-x: hidden;
    border-radius: 6px;
    margin-top: 11px;
}

.fields #searchResult .signinbtn1:hover {
    background-color: rgb(246,246,246);
}
.fields #searchResult .signinbtn1 {
    display: flex;
    padding: 5px;
    margin: 10px 0;
}

.fields #searchResult .signinbtn1 p {
    margin-left: 10px;
    color: black;
}

/* Advertisement multiple image */
.pip_multiple {
   margin-bottom: 8px;
    display:inline-flex;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
.close_imge{
    position: absolute;
    margin-left: -18px;
    cursor: pointer;
    margin-top:7px;
}
  </style>
  <style>
  .Short {  
    width: 100%;  
    background-color: #dc3545;  
    margin-top: 5px;  
    height: 3px;  
    color: #dc3545;  
    font-weight: 500;  
    font-size: 12px;  
}  
.Weak {  
    width: 100%;  
    background-color: #ffc107;  
    margin-top: 5px;  
    height: 3px;  
    color: #ffc107;  
    font-weight: 500;  
    font-size: 12px;  
}  
.Good {  
    width: 100%;  
    background-color: #28a745;  
    margin-top: 5px;  
    height: 3px;  
    color: #28a745;  
    font-weight: 500;  
    font-size: 12px;  
}  
.Strong {  
    width: 100%;  
    background-color: #00FF00;  
    margin-top: 5px;  
    height: 3px;  
    color: #00FF00;  
    font-weight: 500;  
    font-size: 12px;  
} 
  </style>
 <style>
  .OnClickSearch .img-top {
    width: 100%;
    height: 100vh;
    background: #fff;
    background-size: cover;
    padding: 20px;
}
.OnClickSearch .img-top .search-bar {
    /* box-shadow: 0px 2px 4px #00000029; */
    box-shadow: 0 0px 0px 0 rgb(0 0 0 / 50%);
}

.img-top  .form-control:focus {
    border-color: #ffffff;
    box-shadow: 0 0 0 0rem rgba(255, 255, 255, 0.25);
}
.img-top  .cross-btn2 img{
width: 20px;
}


.OnClickSearch .categories-icons-section ,
.OnClickSearch .brend-image , 
.OnClickSearch .featured-places-section {
  display: none;
}
.pip_review {
	margin-bottom: 8px;
	display:inline-flex;
	margin: 10px 10px 0 0;
}

  </style>
</head>



