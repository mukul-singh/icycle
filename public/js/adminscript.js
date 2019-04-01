var spinnerwhitexs = ' <div class="spinner white xs"></div>';

function adminLogin(e) {
	var username = $("#username").val().trim();
	var password = $("#password").val();
	loadButton(e, spinnerwhitexs);
	$.ajax({
        url: BASE_URL+"admin/actions",
        type: "POST",
        data: {"action":"login", "username":username, "password":password},
        success: function(data) {
            if(data == 0) {
                location.reload();
            }
        	if(data == -1) {
        		unloadButton(e, ".spinner");
                showPopover("#username", "top", "Wrong username or password");
        	}
        }
    });
}

function logout() {
    $.ajax({
        url: BASE_URL+"admin/actions",
        type: "POST",
        data: {"action":"logout"},
        success: function(data) {
            location.reload();
        }
    });
}

function addMorePhotos() {
    $("#gallery-images").append('<div class="col-12 row mar-b15"><div class="col-8"><input type="file" class="form-control gallery-img"></div><div class="col-4"><button class="btn compact btn-danger pad-5-10" onclick="removePhoto(this)">&times;</button></div></div>');
}

function removePhoto(e) {
    $(e).parent().parent().remove();
}

function saveEvent(e) {
    var data = {
        "trail": $("#trail").val().trim(),
        "date": $("#event-date").val(),
        "level": $("#level").val(),
        "type": $("#type").val().trim(),
        "transit_distance": $("#t-distance").val(),
        "cycling_distance": $("#c-distance").val(),
        "cost": $("#cost").val(),
        "mentor_name": $("#mentor-name").val().trim(),
        "mentor_email": $("#mentor-email").val().trim(),
        "mentor_mobile": $("#mentor-mobile").val().trim(),
        "mentor_exp": $("#mentor-exp").val().trim(),
        "description": $("#event-desc").val().trim(),
    }
    var formData = new FormData();
    var galleryImageCount = 0;
    formData.append("action", "add-weekend-event");
    formData.append("data", JSON.stringify(data));
    formData.append("eventBanner", $("#event-banner").prop('files')[0]);
    formData.append("elevationImg", $("#elevation-img").prop('files')[0]);
    formData.append("mentorImg", $("#mentor-img").prop('files')[0]);
    $("#gallery-images .gallery-img").each(function() {
        if($(this).val()) {
            galleryImageCount++;
            formData.append("galleryImage"+galleryImageCount, $(this).prop('files')[0]);
        }
    });
    formData.append("galleryImageCount", galleryImageCount);
    loadButton(e, spinnerwhitexs);
    $.ajax({
        url: BASE_URL+"admin/actions",
        type: "POST",
        contentType: false,
        cache: false,
        processData:false,
        data: formData,
        success: function(data) {
            unloadButton(e, ".spinner");
        }
    });
}

/*
/ loadButton: function to switch button to loading state
*/

function loadButton(e, sp) {
    $(e).attr("disabled", true).html($(e).html() + sp);
}

/*
/ unloadButton: function to switch button to normal state
*/

function unloadButton(e, classes) {
    $(e).attr("disabled", false).find(classes).remove();
}

// error popover
function showPopover(e, position, msg) {
    $(e).attr('data-toggle', 'popover');
    $(e).attr('data-placement', position);
    $(e).attr('data-content', msg);
    $(e).popover({trigger: 'manual'})
    .on('click', function() {
        $(e).popover('hide');
        $(e).removeAttr('data-toggle data-placement data-content data-trigger');
    })
    .on('keydown', function() {
        $(e).popover('hide');
        $(e).removeAttr('data-toggle data-placement data-content data-trigger');
    });
    $(e).popover('show');
    setTimeout(function(){
        $(e).popover('hide');
    }, 4000);
    $(".popover").addClass("error-alert");
    $(e).focus();
}