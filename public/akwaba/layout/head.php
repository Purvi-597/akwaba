<!DOCTYPE html>
<html lang="en">

<head>
  <title>AKWABA</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" />
  <script src="js/leaflet.js"></script>

  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet-src.js" integrity="sha512-IkGU/uDhB9u9F8k+2OsA6XXoowIhOuQL1NTgNZHY1nkURnqEGlDZq3GsfmdJdKFe1k1zOc6YU2K7qY+hF9AodA==" crossorigin=""></script>

  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.3.2/leaflet.draw.css" />
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
  <link rel="stylesheet" href="../assets/libs/sweetalert2/sweetalert2.min.css">
  <link href='../assets/css/select2.min.css' rel="stylesheet" type="text/css" />
  <!--<link rel="stylesheet" href="global.css" />-->

  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
 
 
  <style>
.navigation-map .OnClickSearch .img-top {
    width: 100%;
    /* height: 100vh;  Comment this */ 
    background: #fff;
    background-size: cover;
    padding: 20px;
}
.navigation-map .OnClickMenuDetails{
        height: 85vh;
      z-index: 10000;
      display: block;
      overflow-y: auto;
      width: 84%;
      margin-left: 36px;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
      background: white;
}
.navigation-map .OnClickSearch .categories-icons-section ,
.navigation-map .OnClickSearch .brend-image , 
.navigation-map .OnClickSearch .featured-places-section , .OnClickMenu{
  display: none;
}

.navigation-map .OnClickSearch .OnClickMenu{
  display: block;

}
.navigation-map .OnClickSearch .img-top-name{
  color: #000 !important;
}

.navigation-map .OnClickMenu .OnClickMenuDetails {
    padding: 16px 0;
    margin-bottom: 0;
    box-sizing: border-box;
}
.navigation-map .OnClickMenu .OnClickMenuDetails .OnClickMenuDetailsList {
    display: flex;
    padding-top: 12px;
    padding-bottom: 5px;
    padding-right: 0px;
    padding-left: 20px;
}

.navigation-map .OnClickMenu .OnClickMenuDetailsImage {
    display: flex;
    align-items: center;
    width: 32px;
    margin-top: 5px;
    height: 26px;
    margin-right: 20px;
}

.navigation-map .OnClickMenu .OnClickMenuDetailsImage img {
    width: 26px;
    height: 26px;
}

.navigation-map .OnClickMenu .OnClickMenuDetailsAddress{
    color: #555 !important;
    cursor: pointer;
    margin-bottom: 0;
}
.navigation-map .OnClickMenu span.OnClickMenuDetailsDestination {
    font-size: 14px;
    color: #929292;
}
</style>
 <style>



    html,
    body {
      height: 100%;
      padding: 0;
      margin: 0;
    }

    #map {
      width: 100%;
      height: 100vh;
    }

    path.leaflet-interactive.animate {
      stroke-dasharray: 1920;
      stroke-dashoffset: 1920;
      animation: dash 20s linear 3s forwards;
    }

    @keyframes dash {
      to {
        stroke-dashoffset: 0;
      }
    }

    .info-div {
      font-size: 18px;
      padding: 5px;
    }

    .select-profile {
      border: 1px solid #d7d7d7;
      font-size: 16px;
      padding: 12px;
      width: 100%;
    }

    .leaflet-control.enabled a {
      background-color: yellow;
    }

    .leaflet-draw-guide-dash {
      background-color: red !important;
    }

    .leaflet-overlay-pane .leaflet-zoom-animated {
      filter: invert(19%) sepia(92%) saturate(7486%) hue-rotate(358deg) brightness(117%) contrast(112%) !important
    }
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

    .cafesbar .list-heading {
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

    .cafesbar ul .side-list.active {
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

    .toggle-btn,
    .toggle-btn2,
    .toggle-btn3,
    .toggle-btn4 {
      background: #ffffff00;
    }

    .list-progress {
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

    .extrapartfeature .feature-p {
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .left-panel.hideleftpanel .extrapartfeature {
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
      width: 390px;
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

    .extrapartfeature .feature-p {
      font-weight: 400;
    }


    .extrapartfeature .categories-icons-section {
      padding: 0 20px;
      /* height: calc(100vh - 215px); */
    }

    .extrapartfeature .categories-icons-section .padding-section {
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

    .left-panel .featured-places .img-top,
    .left-panel .extrapart .img-top {
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

    .left-panel .extrapart .img-top .topboxheader {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      width: 100%;
    }

    .left-panel .extrapart .img-top .topboxheader span {
      width: calc(100% - 80px);
      /*color: #fff;*/
    }

    .left-panel .extrapart .img-top .topboxheader .icontopmaindiv {
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


    .addcompany-profile .addone-head {
      padding: 12px 0px 12px 40px;
      font-size: 13px;
      line-height: 16px;
      font-weight: 700;
    }

    .addcompany-profile .addone-head.padding-extra {
      padding: 24px 0;
    }

    .addcompany-profile .input-company {
      position: relative;
      display: flex;
      flex-direction: column;
      background: rgb(255, 255, 255);
    }

    .addcompany-profile .input-company .input-image {
      position: absolute;
      top: 8px;
      left: 8px;
      color: rgb(2, 142, 255);
    }

    .addcompany-profile .input-company .input-image img {
      width: 24px;
    }

    .addcompany-profile .fields {
      padding-left: 40px;
      margin-bottom: 0;
    }


    .add-number {
      display: flex;
      align-items: center;
      margin-bottom: 12px;
      margin-top: 12px;
      border: 1px solid rgb(230, 230, 230);
      border-radius: 4px;
    }

    .add-number span {
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


    .lable-input label {
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

    .addcompany-profile .inputgroupcustom {
      display: flex;
      flex-wrap: wrap;
    }

    .addcompany-profile .leftinput {
      width: calc(100% - 30px);
    }

    .addcompany-profile .icon-cross {
      width: 20px;
      margin-left: 10px;
      color: rgb(146, 146, 146);
    }

    .addcompany-profile .lable-input label span {
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

    .addcompany-profile .lable-content {
      font-size: 13px;
      line-height: 16px;
      font-weight: 400;
      padding-top: 24px;
      max-width: 280px;
    }

    .addcompany-profile .spanone a {
      color: #007bff !important;
    }

    .addcompany-profile .spantwo {
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
      padding: 0px;
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

    .Edit-modal .modal-footer {
      background: rgb(242, 242, 242);
      padding: 20px 24px;
      border-bottom-left-radius: 6px;
      border-bottom-right-radius: 6px;
    }

    .Edit-modal .btn {
      font-size: 13px;
      line-height: 16px;
      background: transparent;
      padding: 12px 24px;
      color: rgb(0, 114, 206);
    }

    .Edit-modal .btn.btn-primary {
      background: rgb(2, 142, 255);
      color: #fff;
    }

    .Edit-modal .input-field:after {
      content: "";
      position: absolute;
      bottom: 0px;
      height: 1px;
      width: 100%;
      left: 0px;
      background: rgb(230, 230, 230);
    }

    .Edit-modal .field-input {
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

    .img_section {
      display: inline-flex;

      margin-bottom: 8px;
    }

    .pip {
      margin-bottom: 8px;
      display: inline-flex;
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

    .close_imge {
      position: absolute;
      margin-left: -18px;
      cursor: pointer;
      margin-top: 7px;
    }

    .signinbtn1 a {
      display: flex;
      align-items: center;
    }

    .signinbtn1 a p {
      margin-bottom: 0px;
      margin-left: 15px;
    }

    .img_top_username .usericon a {
      color: black;
    }

    .img_top_username .usericon a div {
      background-color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 100%;
    }

    .img_top_username .usericon a div p {
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
      background-color: rgb(246, 246, 246);
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
      display: inline-flex;
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

    .close_imge {
      position: absolute;
      margin-left: -18px;
      cursor: pointer;
      margin-top: 7px;
    }
    
  </style>
  <style>
      .gm-style .place-card-large {
      display: none;
    }

    .gmnoprint {
      display: none;
    }

    .left-panel .navigation-map .img-top {
      background: #B531AF !important;
      height: 192px;
    }

    .from-where-input .from-input,
    .from-where-input .Where-input {
      display: flex;
    }

    .from-where-input .Where-input {
      margin-top: 15px;
    }

    .from-where-input .from-input .from-input-icon,
    .from-where-input .Where-input .Where-input-icon {
      margin: auto 0;
      margin-right: 0.9rem;
    }

    .from-where-input .from-input .from-input-box,
    .from-where-input .Where-input .Where-input-box {
      width: 301px;
      height: 48px;
      font-weight: 500;
      font-size: 16px;
    }

    .line-between {
      top: 61px;
      left: 30px;
    }

    .swap-between {
      right: 13px;
    }

    .p-absolute {
      position: absolute;
    }

    .from-where-input .Filter-btn img {
      margin-bottom: 4px;
      padding-right: 5px;
      filter: invert(0);
    }

    .pl-10px {
      padding-left: 10px;
    }

    .from-where-input .No_Filters {
      background-color: #b531af;
    }

    .from-where-input .No_Filters_btn {
      color: #fff;
    }

    .navigation-tab {
      border-bottom: none;
    }

    .navigation-tab .nav-item.show .nav-link,
    .navigation-tab .nav-link.active,
    .navigation-tab .nav-link:focus,
    .navigation-tab .nav-link:hover {
      background-color: #b531af;

    }

    .navigation-tab .nav-link.active img {
      filter: brightness(1);
    }

    .navigation-tab .nav-link img {
      height: 35px;
      filter: brightness(0.8);
    }

    .navigation-tab .nav-link {
      margin: 0 20px;
      padding: 0;
      border: none;
      position: relative;
    }






    .navigation-tab .nav-link.active:after {
      content: '';
      width: 52px;
      height: 4px;
      background: #ffffff;
      position: absolute;
      bottom: -10px;
      left: calc(50% - 25px);
    }

    .taken-time {
      color: #b531af;
      font-weight: 600;
    }

    span.address-name {
      font-weight: 600;
      color: #000;
    }

    .img-address {
      margin-right: 14px;
    }

    .trafic-status,
    .kilo-meters {
      font-size: 14px;
      color: #333333;
      font-weight: 500;
    }

    .address-one,
    .address-two,
    .address-three {
      display: flex;
      padding: 20px;
    
    }

    .address-one1{
      display: flex;
      padding: 5px;
      border-left: 6px solid #ffffff;
    }
    .instructions{
      height: 50vh;
    overflow: auto;
    }
    .car-time .address-two , .walk-time  .address-one , .cycle-time .address-three {
      background-color: #F6F6F6;
      border-left: 6px solid #BE2BBB;
    }

    
.navigation-tab{
  border-bottom: none;
}

.navigation-tab .nav-link {
    margin: 0 16px;
    padding: 0;
}

.navigation-tab .nav-item.show .nav-link,
 .navigation-tab .nav-link.active{
    background-color: #b531af;
    border: none ;
}

.navigation-tab .nav-link:focus, .navigation-tab .nav-link:hover {
    border: none;
}

.navigation-tab .nav-link img{
  height: 35px;
}

*:focus-visible {
    outline:none;
}

.navigation-tab .nav-item.show .nav-link:after, .navigation-tab .nav-link.active:after {
    content: '';
    width: 52px;
    height: 4px;
    background: #ffffff;
    position: absolute;
    bottom: -10px;
    left: -5px;
}



.force-overflow
{
	min-height: 450px;
}
/* #path-results
{
	background: #F5F5F5;
	overflow-y: scroll;
  height: 70vh;
} */
/* #path-results::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}

#path-results::-webkit-scrollbar
{
	width: 10px;
	background-color: #F5F5F5;
}

#path-results::-webkit-scrollbar-thumb
{
	background-color: #B531AF;
	border: 2px solid #c7c7c7;
} */

.instructions
{
	background: #F5F5F5;
	overflow-y: scroll;
  height: 50vh;
  margin: 0 15px;
}
.instructions::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #f0f0f0;
}

.instructions::-webkit-scrollbar
{
	width: 6px;
	/* background-color: rgba(0, 0, 0, 0.2) !important; */
}

.instructions::-webkit-scrollbar-thumb
{
	background-color: rgba(0, 0, 0, 0.2) !important;
	border: 2px solid #c7c7c7;
}

.border-dark {
    border-color: #9ca0a5!important;
}
  </style>

  <style>
       .info-card.ReachTime {
    height: calc(100vh - 180px);
    overflow: hidden;
}
.ReachTime:hover{
  overflow:auto ;
}

      .ReachTime:hover::-webkit-scrollbar,
      .navigation-map .OnClickMenuDetails::-webkit-scrollbar {
    width: 6px;
  }

  .ReachTime:hover::-webkit-scrollbar-thumb,
  .navigation-map .OnClickMenuDetails::-webkit-scrollbar-thumb
   {
    background-color: rgba(0, 0, 0, 0.2) !important; 
  }

  .ReachTime:hover::-webkit-scrollbar-track,
  .navigation-map .OnClickMenuDetails::-webkit-scrollbar-track  {
    background-color: #f0f0f0 !important;
  }
  </style>


</head>