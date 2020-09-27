// Menus delete
$('#deletemenu').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)
    var menu_id = button.data('menuid')
    var modal = $(this)

    modal.find('.modal-body #menu_id').val(menu_id)
    })

// pages delete
$('#deletepage').on('show.bs.modal', function (event) {

var button = $(event.relatedTarget)
var page_id = button.data('pageid')
var modal = $(this)

modal.find('.modal-body #page_id').val(page_id)
})

// blogs delete
$('#deleteblog').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)
    var blog_id = button.data('blogid')
    var modal = $(this)

    modal.find('.modal-body #blog_id').val(blog_id)
    })

    // Contact us delete
$('#deletecontact').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)
    var contact_id = button.data('contactid')
    var modal = $(this)

    modal.find('.modal-body #contact_id').val(contact_id)
    })

   // Contact category template
$('#deletecategory').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)
    var category_id = button.data('categoryid')
    var modal = $(this)

    modal.find('.modal-body #category_id').val(category_id)
    })

// Contact category template
$('#deletetemplate').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)
    var template_id = button.data('templateid')
    var modal = $(this)

    modal.find('.modal-body #template_id').val(template_id)
    })

    // Contact User template
$('#deleteuser').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)
    var user_id = button.data('userid')
    var modal = $(this)

    modal.find('.modal-body #user_id').val(user_id)
    })
