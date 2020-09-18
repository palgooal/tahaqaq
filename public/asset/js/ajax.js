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


//start get template new -> category
function getDataTemplateCategoryNew(idCatecory) {
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
                <div class="col-md-3 m-4">
                    <div class=" hover-state">
                    <a href="#">
                    <img src="images/${response.data[i].image_url}"
                        alt="Image" style="max-width:100%;">
                    </a>
                    <div class="middle">
                        <p class="mb-5"> ${response.data[i].title_ar}</p>
                        <button class="btn primery-button"
                        onclick="getoneTamplateNewAjax('${response.data[i].id}')">اختيار
                        </button>
                    </div>
                    </div>
                </div>
                `
            }
        },
        fail: function(e){
            alert(e);
         }
    });
}
// getDataTemplateCategoryNew('1')

//start get one template new ->id
function getoneTamplateNewAjax(id) {
    document.getElementById('idTemplateSelector').innerHTML = ' ';
    $.ajax({
        type: "GET",
        url: "getOneTemplateAjax/"+id,
        data: "data",
        dataType: "json ",
        success: function (response) {

            document.getElementById('idTemplateSelector').innerHTML = `
            <h4 class="my-3 primery-color text-center">القالب التجريبي 1 </h4>
            <img src="images/${response.image_url}" class="img-fluid p-5 pb-0" alt="">
            <p class="template-p mt-1 p-5">
            ${response.getDetails}
            </p>
            <p class="mt-1 px-5"></p>
            <a href='${response.preview_url}' target="_blank">
            <button class="btn primery-button text-center my-5 w-25" style="margin-left: 38%;">
            مشاهدة الموقع
            </button>
        </a>
                    `;
            try {
                document.planSelectFrm.selectedTemplateId.value = id;
            } catch (error) {
                console.log(error);
            }
        }
    });
}


//template selector
function getDataTemplateSelectorCategory(idCatecory) {
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
                document.getElementById('contintTemplate').innerHTML +=`
                <div class="col-sm-12">
                <a onclick="getoneTamplateAjax('${response.data[i].id}')">
                    <div class="wrapper">
                        <div class="shadow"></div>
                        <h2 class="animated bounceInLeft">${response.data[i].title_ar}</h2>
                        <p class="animated bounceInLeft">${response.data[i].small_details_ar}</p>
                        <img alt="" src="images/${response.data[i].image_url}">
                    </div>
                </a>
            </div>`
            }
        },
        fail: function(e){
            alert(e);
        }
    });
}


function getoneTamplateAjax(id) {
    document.getElementById('idTemplateSelector').innerHTML = ' ';
    $.ajax({
        type: "GET",
        url: "getOneTemplateAjax/"+id,
        data: "data",
        dataType: "json ",
        success: function (response) {

            document.getElementById('idTemplateSelector').innerHTML = `
                    <div class="imgTemplate">
                        <img src="images/${response.image_url}" width="100%" height="300px">
                    </div>
                    <a href='/template/${response.id}'><input type="button" class="btn btn-primary" value="تفاصيل اضافية"></a>
                    <a href='${response.preview_url}'><input type="button" class="btn btn-primary" value="تصفح النموذج"></a>
                    <h2 class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">${response.getTitle}</h2>
                    <p style="text-align: justify">
                        ${response.getSmall_details}
                    </p>

                    `;
                        document.getElementById('idTemplateSelector').innerHTML += ' <h2 class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">خصائص القالب</h2><ul>'
                        for (let i = 0; i < response.getTextSpasefcation.length; i++) {
                            document.getElementById('idTemplateSelector').innerHTML += `<li>${response.getTextSpasefcation[i]}</li>`;

                        }

                        document.getElementById('idTemplateSelector').innerHTML +=`</ul>`;



            try {
                document.planSelectFrm.selectedTemplateId.value = id;
            } catch (error) {
                console.log(error);
            }
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
