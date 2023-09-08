$(document).ready(function() {
    $("#btnShow").click(function(){
        if(! $.fn.DataTable.isDataTable( '#data' )){
     
                     showTable();
    
        }
    });
    
  function showTable(){
    $('#data').css("display","");
    var table = $('#data').DataTable({

        responsive: true,
        "ajax": {
            "type": "POST",
            "url": "data.json",
            "timeout": 120000,
            "dataSrc": function (json) {
                if(json != null){
                    return json
                } else {
                    return "";
                }
            }
        },

        "sAjaxDataProp": "",
        "width": "100%",
        "order": [[ 0, "asc" ]],
        "aoColumns": [

            {
                "mData": null,
                "title": "No",
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },

            {
                "mData": "images_1", "aTargets": [0],
                "title": "Image",
                "render": function (data) {
                    return '<img src="' +data+ '" />';
                }
            },

            {
                "mData": null,
                "title": "Title",
                "render": function (data, row, type, meta) {
                    return data.title;
                }
            },

            {
                "mData": null,
                "title": "Category",
                "render": function (data, row, type, meta) {
                    return data.category;
                }
            },

            {
                "mData": null,
                "title": "Brand",
                "render": function (data, row, type, meta) {
                    return data.brand;
                }
            },

            {
                "mData": null,
                "title": "Stock",
                "render": function (data, row, type, meta) {
                    return data.stock;
                }
            },

            {
                "mData": null,
                "title": "Price",
                "render": function (data, row, type, meta) {
                    return data.price;
                }
            },

            {
                "mData": null,
                "title": "Aksi",
                "sortable": false,
                "render": function (data, row, type, meta) {
                    let btn = '';

                    {
                        btn += "<button style='font-size: 11px;' class='btn btn-primary' id='detail' name='detail' title='Lihat Detail'><i class='fa fa-search'></i></button>";
                    }

                    return btn;
                }
            }
        ]

    });

    $('#data tbody').on( 'click', '#detail', function () {

        var HTML = "";

        var current_row = $(this).parents('tr');
        if (current_row.hasClass('child')) {
            current_row = current_row.prev();
        }

        var data = table.row( current_row ).data();
        for(var i=0; i<10; i++) {  // We need 5 stars
            var icoClass = i<data.rating ? "fa fa-star" : "fa fa-star-o"; // full or empty star?
            HTML += "<i class='"+ icoClass +"'></i>"; // concatenate stars
        }
        
        document.getElementById("title").value = data["title"];
        document.getElementById("description").value = data["description"];
        document.getElementById("category").value = data["category"];
        document.getElementById("thumbnail_1").src = data["thumbnail_1"];
        document.getElementById("thumbnail_2").src = data["thumbnail_2"];
        document.getElementById("thumbnail_3").src = data["thumbnail_3"];
        document.getElementById("images_1").src = data["images_1"];
        document.getElementById("images_2").src = data["images_2"];
        document.getElementById("images_3").src = data["images_3"];
        document.getElementById("brand").value = data["brand"];
        document.getElementById("rating").innerHTML = HTML; // Finally insert
        document.getElementById("stock").value = data["stock"];
        document.getElementById("price").value = data["price"];

        $("#viewModal").modal("show");
        
    });
  }
});


let slideIndex = 1;
    showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");

        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
}