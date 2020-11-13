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
                `  <div class="tab-content " id="contintTemplate">
                <div class="tab-pane fade active show" id="profile-classic" role="tabpanel" aria-labelledby="profile-tab-classic">
                    <div class="d-grid pt-2 mt-5">
                        <!-- Row -->
                        <div class="row container m-auto mt-5 ">
                <div class="col-md-4 mb-5 ">
                <div class=" hover-state card-with-title">
                <a href="/template/${response.data[i].id}">
                <img src="images/${response.data[i].image_url}" alt="Image" style="max-width:100%;">

              </a>
              </div>
              <div class="text-center ">
              <a href="/template/${response.data[i].id}">
              <p class="my-3 primery-color">${response.data[i].title_ar}</p>
          </a> <a class="btn primery-button" href="/template/${response.data[i].id}">تفاصيل </a>
      </div>
  </div>
  <div class="col-md-1 col-hide"></div>
  </div>
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


//start get template new -> category
function getDataTemplateCategoryNew(idCatecory) {
    try{

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
                    <div class="middle w-100" >
                        <p class="mb-3"> ${response.data[i].title_ar}</p>
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

}catch(e){
    console.log(e);
}
}
// getDataTemplateCategoryNew('1')

//template selector 2
function getDataTemplateSelectorCategory2(idCatecory) {
    // try{
    $.ajax({
        type: "GET",
        url: "/viewTemplateCatecory/"+idCatecory,
        data: "data",
        dataType: "json",
        success: function (response) {
            let contentSlideOL = '';
            let contintTemplate2 = '';
            let contentModal = '';

            var counterLI = 1

            for (let i = 0; i < response.data.length; i++) {
                console.log(response.data[i].title_ar);
                var active = ' '
                if(i == 0){
                     active = 'active'
                }
                if(i%6 == 0){//pager
                    contentSlideOL +=
                    `
                    <li data-target="#blogCarousel" data-slide-to="${counterLI}" class="${active}">
                        <span class="primery-color">${counterLI}</span>
                    </li>
                    `
                    counterLI+=1
                }

                if(i/6 == 1){
                    contintTemplate2 +=
                    `
                        </div>
                    </div>
                    `
                }
                if(i%6 == 0){
                    contintTemplate2 +=
                    `
                        <div class="carousel-item c-i ${active}">
                        <div class="row">
                    `
                }
                contintTemplate2 +=
                `
                    <div class="col-md-3 m-4">
                        <div class="">
                            <label>
                                <input type="radio" name="templates"
                                    class="card-input-element d-none"
                                    id="template_${response.data[i].id}"
                                    value="${response.data[i].id}">
                                <div class="card card-select h-100"
                                    data-cardSelect>
                                    <div class=" hover-state">
                                        <a href="#">
                                            <img src="images/${response.data[i].image_url}"
                                                alt="Image"
                                                style="max-width:100%;">
                                        </a>

                                        <div class="middle card-section">
                                            <p class="mb-3"> ${response.data[i].title_ar}</p>
                                            <button class="btn primery-button"
                                                data-toggle="modal"
                                                data-target="#exampleModal-${i+1}">تفاصيل
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                `

                contentModal +=
                            `
                            <div class="modal fade" id="exampleModal-${i+1}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-${i+1}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel-${i+1}">${response.data[i].title_ar}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <img src="images/${response.data[i].image_url}" class="img-fluid p-5 pb-0" alt="">
                                            <p class="template-p  p-5 py-2">
                                            ${response.data[i].details_ar}
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn primery-button text-center my-5 " style="margin-left: 36%;">
                                                <a href='${response.data[i].preview_url}' target="_blank">مشاهدة الموقع</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            `
            }//end for
            document.getElementById('contentSlideOL').innerHTML = contentSlideOL;
            document.getElementById('contintTemplate2').innerHTML = contintTemplate2;
            document.getElementById('contentModal').innerHTML = contentModal;
        },
        fail: function(e){
            alert(e);
        }
    });
// }catch(e){
//     console.log(e);
// }
}


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
            <p class="template-p  p-5 py-2">
            ${response.getDetails}
            </p>
            <p class="mt-1 px-5"></p>
            <a href='${response.preview_url}' target="_blank">
            <button class="btn primery-button text-center my-5 w-25" style="margin-left: 37%;">
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
