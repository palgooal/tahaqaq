//start get template -> category
function getDataTemplateCategory(idCatecory) {
    $.ajax({
        type: "GET",
        url: "/viewTemplateCatecory/"+idCatecory,
        data: "data",
        dataType: "json",
        success: function (response) {
            document.getElementById('contintTemplate').innerHTML = ' ';
            for (let i = 0; i < response.data.length; i++) {
                let element = response.data[i].name;
                console.log(element);
                document.getElementById('contintTemplate').innerHTML +=
                `
                <a href="/template/${response.data[i].id}">
                <div class="wrapper">
                    <div class="shadow"></div>
                    <h2 class="animated bounceInLeft">${response.data[i].title_ar}</h2>
                    <p class="animated bounceInLeft">${response.data[i].small_details_ar}</p>
                    <img alt="" src="images/${response.data[i].image_url}">
                </div>
            </a>
                `
            }
        },
        fail: function(e){
            alert(e);
         }
    });
}

//start set contact
$(document).ready(function () {
    $("#btnSubmit").click(function (event) {
        //stop submit the form, we will post it manually.
        event.preventDefault();
        // Get form
        var form = $('#idContact')[0];
		// Create an FormData object
        var data = new FormData(form);
		// If you want to add an extra field for the FormData
        data.append("CustomField", "This is some extra data, testing");
		// disabled the submit button
        $("#btnSubmit").prop("disabled", false);
        $("#alertName").text("")
        $("#alertEmail").text("")
        $("#alertMessage").text("")
        var name = $("#name").val()
        var email = $("#email").val()
        var message = $("#message").val()
        if(name.trim() == "" || email.trim() == "" || message.trim() == ""){
            if(name.trim() == ""){
              $("#alertName").text("الرجاء ملئ هذه الخانة")
              console.log("name");
            }
            if(email.trim() == ""){
              $("#alertEmail").text("الرجاء ملئ هذه الخانة")
              console.log("email");
            }
           if(message.trim() == ""){
              $("#alertMessage").text("الرجاء ملئ هذه الخانة")
              console.log("message");
           }
        }else{
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "/Contactus",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (response) {
                document.getElementById('alertContact').innerHTML = `
                <div class="alert alert-success" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">success:</span>
                ${response.message}
              </div>`
            },
            error: function (e) {
                document.getElementById('alertContact').innerHTML = `
                <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                ${e.message}
              </div>`
            }
        });
    }

    });

});
