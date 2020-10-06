$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});


/**/
$('.carousel .vertical .item').each(function () {
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 1; i < 2; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});


// optional
$('#blogCarousel').carousel({
    interval: 5000000
});



// /***/
// const button-show-more,
//       content = document.querySelector('#details');

//       button-show-more = document.querySelector('#details-but').addEventListener('onclick',function(){
//         content.addClass('d-block').removeClass('d-none');
//     }),

$('#navbar a ,#footer a').on('click', function (e) {//removed , .btn
    if (this.hash !== '') {
        e.preventDefault();

        const hash = this.hash;

        $('html, body').animate(
            {
                scrollTop: $(hash).offset().top,
            },
            800
        );
    }
});
/*

*/
//Change pos/background/padding/add shadow on nav when scroll event happens
$(function () {
    var navbar = $('.navbar');

    $(window).scroll(function () {
        if ($(window).scrollTop() <= 40) {
            navbar.removeClass('navbar-scroll');
        } else {
            navbar.addClass('navbar-scroll');
        }
    });
});

/******* scripts ****************/















const
par1 = document.getElementById("welcome"),
par2 = document.getElementById("welcome1"),
par3 = document.getElementById("welcome2")
;

const btnokButton = document.getElementById("okButton");
if(btnokButton != undefined && btnokButton!= null){
    btnokButton.addEventListener("click", function () {
        par1.classList.add('d-block');
        par1.classList.remove('d-none');

        if (par2.classList || par3.classList === 'd-block') {
            par3.classList.add('d-none');
            par3.classList.remove('d-block');
            par2.classList.add('d-none');
            par2.classList.remove('d-block');

        }
    }, true);
}
const okButton1 = document.getElementById("okButton1");
if(okButton1 != undefined && okButton1!= null){
    okButton1.addEventListener("click", function () {
        par2.classList.add('d-block');
        par2.classList.remove('d-none');

        if (par1.classList || par3.classList === 'd-block') {
            par1.classList.add('d-none');
            par1.classList.remove('d-block');
            par3.classList.add('d-none');
            par3.classList.remove('d-block');

        }
    }, true);
}
const okButton2 =document.getElementById("okButton2")
if(okButton2 != undefined && okButton2!= null){
    okButton2.addEventListener("click", function () {
        par3.classList.add('d-block');
        par3.classList.remove('d-none');

        if (par2.classList || par1.classList === 'd-block') {
            par1.classList.add('d-none');
            par1.classList.remove('d-block');
            par2.classList.remove('d-block');
            par2.classList.add('d-none');
        }
    }, true);
}
/**/
function myFunction(x) {
    x.classList.toggle("change");
}

