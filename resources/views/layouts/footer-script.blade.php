        <!-- JAVASCRIPT -->
        <script src="{{ URL::asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/metismenu/metismenu.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/node-waves/node-waves.min.js')}}"></script>
       
        <script src="{{ URL::asset('assets/js/parsleyjs-parsley.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/select2.min.js')}}"></script>

        @yield('script')

        <!-- App js -->
        <script src="{{ URL::asset('assets/js/app.min.js')}}"></script>
        <script>

            // $(document).on("changeLang",  function(e) {
              $("#changeLang").change(function(){
          
                var Language = $(this).val();
                
            
                $.ajax({
                    type: "POST",
                    data: {"Lang": Language,"_token": "{{ csrf_token() }}"},
                    url: '{{ route('changeLang') }}',
                    success: function(data) {
                       if(data == 1){
                        //alert(data);
                     location.reload();
                       }else{
                       //alert(data);
                       location.reload();
                       }
                                                    
                    }
                });
            
            });
            
            </script>
        <script>
function openNav() {
    document.getElementById("custom_saction_filter").style.right = "0";
}

function closeNav() {
    document.getElementById("custom_saction_filter").style.right = "-280px";
}
        </script>
        <script>
$(document).ready(function() {

    display_c();

});

function getonloadcountry() {
    var getcountry = JSON.parse(localStorage.getItem("country"));
    var gettimezo = JSON.parse(localStorage.getItem("timezonecountry"));
    var countrynamelocal = JSON.parse(localStorage.getItem("countryname"));

    if (localStorage.getItem("country") != null) {
        $(".dropdown-icon-item").removeClass("topactive");
        var html = "";
        for (var j = 0; j < getcountry.length; j++) {

            $("#" + getcountry[j]).addClass("topactive");
            html += '<div class="singal_wathar ind"><p><span class = "flag-icon flag-icon-' + getcountry[j] +
                '" ></span>&nbsp' + countrynamelocal[j] + '</p><h4 id = "time-part"><span id="times' + getcountry[j] +
                '">' +
                countrytime('' +
                    gettimezo[j] + '') +
                '</span></h4></div>';
        }
        $("#showcountry").html(html);
        display_c();
    }

}

function display_c() {
    var refresh = 1000; // Refresh rate in milli seconds
    mytime = setTimeout('getonloadcountry()', refresh)
}


// function display_ct() {
//     var x = new Date()
//     var londontime = calcTime('London', '+1');
//     var indiatime = calcTime('Bombay', '+5.5');
//     var newyorktime = calcTime('New York', '-08');



//     document.getElementById('indiatimezone').innerHTML = indiatime;
//     document.getElementById('londontimezone').innerHTML = londontime;
//     document.getElementById('newyorktimezone').innerHTML = newyorktime;
//     display_c();
// }

// function timeof(x) {
//     var hours = x.getHours();
//     var minutes = x.getMinutes();
//     var ampm = hours >= 12 ? 'PM' : 'AM';
//     hours = hours % 12;
//     hours = hours ? hours : 12; // the hour '0' should be '12'
//     minutes = minutes < 10 ? '0' + minutes : minutes;
//     x1 = hours + ":" + minutes + ":" + x.getSeconds() + " " + ampm;
//     return x1;
// }


function onlyUnique(value, index, self) {
    return self.indexOf(value) === index;
}

function countrytime(timezone1) {
    var estTime = new Date();
    var currentDateTimeCentralTimeZone = new Date(estTime.toLocaleString('en-US', {
        timeZone: timezone1
    }));
    var seconds = currentDateTimeCentralTimeZone.getSeconds();
    var minutes = currentDateTimeCentralTimeZone.getMinutes();
    var hours = currentDateTimeCentralTimeZone.getHours(); //new Date().getHours();
    var am_pm = currentDateTimeCentralTimeZone.getHours() >= 12 ? "PM" : "AM";

    if (hours < 10) {
        hours = "0" + hours;
    }

    if (minutes < 10) {
        minutes = "0" + minutes;
    }
    if (seconds < 10) {
        seconds = "0" + seconds;
    }
    var mid = 'PM';
    if (hours == 0) { //At 00 hours we need to show 12 am
        hours = 12;
    } else if (hours > 12) {
        hours = hours % 12;
        if (hours < 10) {
            hours = "0" + hours;
        }
        //   hours = "0" + hours;
        mid = 'AM';
    }
    return x3 = hours + ':' + minutes + ' ' + am_pm
    // Add a leading zero to seconds value
}

function gettime(country, timezone1, name) {
    var array = [];
    var timezonelocal = [];
    var countryname = [];
    if (localStorage.getItem("country") === null) {
        array.unshift(country);
        timezonelocal.unshift(timezone1);
        countryname.unshift(name);
    } else {
        var getcountry = JSON.parse(localStorage.getItem("country"));
        var gettimezone = JSON.parse(localStorage.getItem("timezonecountry"));
        var getcountryname = JSON.parse(localStorage.getItem("countryname"));


        array = getcountry;
        timezonelocal = gettimezone;
        countryname = getcountryname;

        if (array.length < 4) {
            var pos1 = array.indexOf(country);
            if (pos1 != -1) {
                array.splice(pos1, 1);
                timezonelocal.splice(pos1, 1);
                countryname.splice(pos1, 1);
            } else {
                array.unshift(country);
                timezonelocal.unshift(timezone1);
                countryname.unshift(name);
            }

        } else {
            var pos1 = array.indexOf(country);
            if (pos1 != -1) {
                array.splice(pos1, 1);
                timezonelocal.splice(pos1, 1);
                countryname.splice(pos1, 1);

            } else {
                array.pop();

                array.unshift(country);

                timezonelocal.pop();
                timezonelocal.unshift(timezone1);

                countryname.pop();
                countryname.unshift(name);
            }


        }



    }

    array.filter(onlyUnique);
    timezonelocal.filter(onlyUnique);
    countryname.filter(onlyUnique);
    var countryarray = JSON.stringify(array);
    var countrytime1 = JSON.stringify(timezonelocal);
    var countrynamedata = JSON.stringify(countryname);

    localStorage.setItem("country", "" + countryarray + "");
    localStorage.setItem("timezonecountry", "" + countrytime1 + "");
    localStorage.setItem("countryname", "" + countrynamedata + "");

    var getcountry = JSON.parse(localStorage.getItem("country"));
    var gettimezo = JSON.parse(localStorage.getItem("timezonecountry"));
    var countrynamelocal = JSON.parse(localStorage.getItem("countryname"));
    $(".dropdown-icon-item").removeClass("topactive");
    var html = "";
    for (var j = 0; j < getcountry.length; j++) {

        $("#" + getcountry[j]).addClass("topactive");
        html += '<div class="singal_wathar ind"><p><span class = "flag-icon flag-icon-' + getcountry[j] +
            '" ></span>&nbsp' + countrynamelocal[j] + '</p><h4 id = "time-part"><span id="times' + getcountry[j] +
            '">' +
            countrytime('' +
                gettimezo[j] + '') +
            '</span></h4></div>';
    }
    $("#showcountry").html(html);
    display_c();

}
        </script>
        @yield('script-bottom')