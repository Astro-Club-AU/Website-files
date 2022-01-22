var url_al = "../assets/data/alumni.json";         
$.getJSON(url_al, function (data) {
    $.each(data[2].data, function (key,value) {
        document.getElementById('alumni').innerHTML += " <div class='row' data-aos='fade-up'><div class='col-md-5'><img src='assets/img/Alumni/" + value.Image_name +"' class='img-fluid' alt='Failed to Load' width=85% ></div>"+
        "<div class='col-md-7 pt-4'><h3>"+value.Name+"</h3>"+
        "<p class='font-italic'>"+value.Designation+"</p> <p>"+value.description+"</p></div></div>";
    }) 
});

var url_up = "../assets/data/upcoming_events.json";         
// id Name Description Image_name
var delay = 10;
$.getJSON(url_up, function (data) {
    $.each(data[2].data, function (key,value) {
        document.getElementById('upevents').innerHTML += "<div class='justify-content-center row'>"+
        "<div class='col-md-6 col-lg-3 d-flex align-items-stretch' data-aos='fade-up' data-aos-delay='"+delay+"'>"+
        "<div class='icon-box icon-box-cyan'>"+
            "<div><img src='assets/img/upcoming_events/"+value.Image_name+"' class='event-picture'></div>"+
            "<h4 class='title'><a href=''>'"+value.Name+"'</a></h4>"+
            "<p class='description'>'"+value.Description+"'</p>"+
        "</div></div>";
        delay+=10;
    }) 
});
     