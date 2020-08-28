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
                <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="${response.data[i].preview_url}">
                    <div class="card bg-dark text-white">
                    <img class="card-img" src="images/${response.data[i].image_url}" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">${response.data[i].title_ar} </h5>
                            <p class="card-text">${response.data[i].small_details_ar}</p>
                            <p class="card-text">${response.data[i].category_id}</p>
                        </div>
                    </div>
                </a>
            </div>
                `
            }
        },
        fail: function(e){
            alert(e);
         }
    });
}
