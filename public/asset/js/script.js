new WOW().init();

$(document).on('click', '.nav-toggle', function(e) {
    e.preventDefault();
    $('.main-nav').toggleClass('active');
});
$(document).on('click', '.rate-stars i', function(e) {
    var $this = $(this);
    $('.rate-stars i').removeClass('active');
    $this.addClass('active');
    $this.prevAll().addClass('active');
});
$(document).on('change', 'input[type=radio][name=pay]', function(e) {
    e.preventDefault();
    if($('#part').is(':checked')){
        $('.sub-radio').slideToggle();
    }else{
        $('.sub-radio').hide();
    }
});
$(document).on('change', '#profile-img', function (e) {
    if($(this).val()) {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.profile-img img').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    }
});
$(document).on('click', '.change-img', function (e) {
    e.preventDefault();
    $(this).closest('.profile-img').find('input').click();
});
$('.custom-tabs a[data-toggle="tab"]').on('show.bs.tab', function (e) {
    $("html, body").animate({scrollTop: ($(window).scrollTop() + 1)});
});
$('a[data-toggle="tab"][aria-controls="previous"]').on('show.bs.tab', function (e) {
    $("html, body").animate({scrollTop: ($(window).scrollTop() + 1)});
});

$(document).on('click', '.dots-nav li', function (e) {
    e.preventDefault();
    var $this = $(this);
    if(!$this.hasClass('active')){
        $('.dots-nav li').removeClass('active');
        $this.addClass('active');
        console.log($this.index());
        $('.lessons-tabs-nav li:nth-child('+($this.index()+1)+') a').click();
    }
});

$(document).on('click', '.lessons-paging a', function (e) {
    e.preventDefault();
    var $this = $(this);
    console.log($('.dots-nav li.active').index());
    console.log($('.dots-nav li').length);
    if($this.hasClass('prev')){
        console.log('prev');
        if($('.dots-nav li.active').index() > 0) {
            $('.dots-nav li.active').prev().click();
        }
    }else{
        if($('.dots-nav li.active').index() < $('.dots-nav li').length) {
            $('.dots-nav li.active').next().click();
        }
    }
});
$('.lessons-tabs-nav a').on('shown.bs.tab', function (e) {
    console.log($(this).closest('li').index());
    $('.dots-nav li').removeClass('active');
    $('.dots-nav li:nth-child('+($(this).closest('li').index()+1)+')').addClass('active');
});
$('#rate_course').modal('show');
$('#alert-modal').modal('show');

$('.scrollable-area').mCustomScrollbar();

$(document).on('click', '.notf-wrap>i', function (e) {
    e.preventDefault();
    var $this = $(this);
    $this.toggleClass('active');
    $('.notf-dropdown').toggleClass('active');
});
$(document).on('click', '.user-toggle', function (e) {
    e.preventDefault();
    var $this = $(this);
    $this.toggleClass('active');
    $('.user-dropdown').toggleClass('active');
});
$(document).on('click', '.lang-toggle', function (e) {
    e.preventDefault();
    var $this = $(this);
    $this.toggleClass('active');
    $('.lang-dropdown').toggleClass('active');
});
$(document).on('click', '.upload-attachment', function (e) {
    e.preventDefault();
    $('#attachment-file').click();
});
$(document).on('click', '.upload-course-lesson', function (e) {
    e.preventDefault();
    $('#lesson-file').click();
});
$(document).click(function(event) {
    $target = $(event.target);
    if(!$target.closest('.notf-dropdown').length &&
        $('.notf-dropdown').hasClass('active') && !$target.closest('.notf-wrap>i').length ) {
        $('.notf-dropdown').removeClass('active');
        $('.notf-wrap>i').removeClass('active');
    }
});

$(document).click(function(event) {
    $target = $(event.target);
    if(!$target.closest('.user-dropdown').length &&
        $('.user-dropdown').hasClass('active') && !$target.closest('.user-toggle').length ) {
        $('.user-dropdown').removeClass('active');
        $('.user-toggle').removeClass('active');
    }
});

$(document).click(function(event) {
    $target = $(event.target);
    if(!$target.closest('.lang-dropdown').length &&
        $('.lang-dropdown').hasClass('active') && !$target.closest('.lang-toggle').length ) {
        $('.lang-dropdown').removeClass('active');
        $('.lang-toggle').removeClass('active');
    }
});

$(window).scroll(function(){
    fixed_header();
});
fixed_header();

function fixed_header() {
    if($(window).width() > 768) {
        if ($(window).scrollTop() > 1 ) {
            $('header').addClass('fixed');
            $('body').addClass('fixed');
        } else {
            $('header').removeClass('fixed');
            $('body').removeClass('fixed');
        }
    }

}
Vue.component("step-navigation-step", {
    template: "#step-navigation-step-template",

    props: ["step", "currentstep"],

    computed: {
        indicatorclass() {
            return {
                active: this.step.id == this.currentstep,
                complete: this.currentstep > this.step.id
            };
        }
    }
});

Vue.component("step-navigation", {
    template: "#step-navigation-template",

    props: ["steps", "currentstep"]
});

Vue.component("step", {
    template: "#step-template",

    props: ["step", "stepcount", "currentstep"],

    computed: {
        active() {
            return this.step.id == this.currentstep;
        },

        firststep() {
            return this.currentstep == 1;
        },

        laststep() {
            return this.currentstep == this.stepcount;
        },

        stepWrapperClass() {
            return {
                active: this.active
            };
        }
    },

    methods: {
        nextStep() {
            this.$emit("step-change", this.currentstep + 1);
        },

        lastStep() {
            this.$emit("step-change", this.currentstep - 1);
        }
    }
});

new Vue({
    el: "#app",

    data: {
        currentstep: 1,

        steps: [
            {
                id: 1,
                title: "Personal",
                icon_class: "fa fa-user-circle-o"
            },
            {
                id: 2,
                title: "Details",
                icon_class: "fa fa-th-list"
            },
            {
                id: 3,
                title: "Send",
                icon_class: "fa fa-paper-plane"
            }
        ]
    },

    methods: {
        stepChanged(step) {
            this.currentstep = step;
        }
    }
});

