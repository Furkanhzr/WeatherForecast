@extends('layouts.master')
@section('content')
    <div class="hero" data-bg-image="images/banner.png">
        <div class="container" id="da">
            <form action="{{route('find-place')}}" method="POST" class="find-location" id="find-location-form">
                @csrf
                <input id="text" name="text" type="text" placeholder="Konumunu bul...">
                <input type="submit" value="Bul">
            </form>

        </div>
    </div>
    <div class="forecast-table">
        <div class="container">
            <div class="forecast-container" id="cont">
            </div>
        </div>
    </div>

    <script>
        current("38.67431N", "39.22321E" ,"Istanbul");
        daily("38.67431N", "39.22321E");

        $('#find-location-form').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{route('find-place')}}",
                data: $(this).serialize(),
                success: function (response) {
                    if(response !== "null") {
                        $('#loc_name').html(`${response['name']}`);
                        current(response['lat'], response['lon'], response['name'])
                        daily(response['lat'], response['lon'])
                    }
                    else {
                        $('#text').val("")
                        $('#text').attr('placeholder', 'Böyle bir konum bulunamadı.')
                    }

                }
            })
            return false
        })

        function current(lat, lon, name) {
            $.ajax({
                type: "GET",
                url: "{{route('current')}}",
                data: {
                    lat: lat,
                    lon: lon,
                },
                success: function (data) {
                    var direction
                    switch (data['response']['current']['wind']['dir']) {
                        case "N":
                            direction = "Kuzey"
                            break;
                        case "S":
                            direction = "Güney"
                            break;
                        case "E":
                            direction = "Doğu"
                            break;
                        case "W":
                            direction = "Batı"
                            break;
                        case "NE":
                            direction = "Kuzeydoğu"
                            break;
                        case "NW":
                            direction = "Kuzeybatı"
                            break;
                        case "SE":
                            direction = "Güneydoğu"
                            break;
                        case "SW":
                            direction = "Güneybatı"
                            break;
                        case "NNE":
                            direction = "Kuzey-Kuzeydoğu"
                            break;
                        case "NNW":
                            direction = "Kuzey-Kuzeybatı"
                            break;
                        case "ENE":
                            direction = "Doğu-Kuzeydoğu"
                            break;
                        case "ESE":
                            direction = "Doğu-Güneydoğu"
                            break;
                        case "SSE":
                            direction = "Güney-Güneydoğu"
                            break;
                        case "SSW":
                            direction = "Güney-Güneybatı"
                            break;
                        case "WSW":
                            direction = "Batı-Güneybatı"
                            break;
                        case "WNW":
                            direction = "Batı-Kuzeybatı"
                            break;
                        default:
                            direction = "Yön Belirlenemedi"
                            break;
                    }

                    var month
                    switch (data['month']) {
                        case 1:
                            month = "Ocak"
                            break;
                        case 2:
                            month = "Şubat"
                            break;
                        case 3:
                            month = "Mart"
                            break;
                        case 4:
                            month = "Nisan"
                            break;
                        case 5:
                            month = "Mayıs"
                            break;
                        case 6:
                            month = "Haziran"
                            break;
                        case 7:
                            month = "Temmuz"
                            break;
                        case 8:
                            month = "Ağustos"
                            break;
                        case 9:
                            month = "Eylül"
                            break;
                        case 10:
                            month = "Ekim"
                            break;
                        case 11:
                            month = "Kasım"
                            break;
                        case 12:
                            month = "Aralık"
                            break;
                        default:
                            month = "Belirlenemedi"
                            break;
                    }

                    var dayOfWeek
                    switch (data['dayOfWeek']) {
                        case 0:
                            dayOfWeek = "Pazar"
                            break;
                        case 1:
                            dayOfWeek = "Pazartesi"
                            break;
                        case 2:
                            dayOfWeek = "Salı"
                            break;
                        case 3:
                            dayOfWeek = "Çarşamba"
                            break;
                        case 4:
                            dayOfWeek = "Perşembe"
                            break;
                        case 5:
                            dayOfWeek = "Cuma"
                            break;
                        case 6:
                            dayOfWeek = "Cumartesi"
                            break;
                        default:
                            dayOfWeek = "Belirlenemedi"
                            break;
                    }

                    $('#cont').empty()
                    $('#cont').html(`
                    <div class="today forecast">
                        <div class="forecast-header">
                            <div class="day">${dayOfWeek}</div>
                            <div class="date">${data['day']} ${month}</div>
                        </div> <!-- .forecast-header -->
                        <div class="forecast-content">
                            <div class="location" id="loc_name">${name}</div>
                            <div class="degree">
                                <div class="num">${data['response']['current']['temperature']}<sup>o</sup>C</div>
                                <div class="forecast-icon">
                                    <img src="{{'template'}}/images/icons/icon-1.svg" alt="" width=90>
                                </div>
                            </div>
                            <span><img src="{{'template'}}/images/icon-umberella.png" alt="">${data['response']['current']['precipitation']['total']*10}%</span>
                            <span><img src="{{'template'}}/images/icon-wind.png" alt="">${data['response']['current']['wind']['speed']}km/h</span>
                            <span><img src="{{'template'}}/images/icon-compass.png" alt="">${direction}</span>
                        </div>
                    </div>
                    `)
                }
            })
        }

        function daily(lat, lon) {
            $.ajax({
                type: "GET",
                url: "{{route('daily')}}",
                data: {
                    lat: lat,
                    lon: lon,
                },
                success: function (data) {
                    const daysOfWeek = ["Pazar", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi"];
                    for(var i=1; i<=6; i++) {
                        const dateString = data['daily']['data'][i]['day'];
                        const date = new Date(dateString);
                        const dayOfWeek = daysOfWeek[date.getDay()];
                        $('#cont').append(`
                        <div class="forecast">
                            <div class="forecast-header">
                                <div class="day">${dayOfWeek}</div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="forecast-icon">
                                    <img src="{{'template'}}/images/icons/icon-${data['daily']['data'][i]['icon']}.svg" alt="" width=48>
                                </div>
                            <div class="degree" >${data['daily']['data'][i]['temperature_max']}<sup>o</sup>C</div>
                            <small>${data['daily']['data'][i]['temperature_min']}<sup>o</sup></small>
                           </div>
                    </div>
                    `)
                    }
                }
            })
        }
    </script>
@endsection
