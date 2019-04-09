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

function logoutAdmin() {
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

function addMorePoints() {
    $("#detail-points").append('<tr class="point"><td><input type="text" class="form-control key" placeholder="Key"></td><td><input type="text" class="form-control value" placeholder="Value"></td><td><button class="btn compact btn-danger pad-5-10" onclick="removePoint(this)">&times;</button></td></tr>');
}

function removePhoto(e) {
    $(e).parent().parent().remove();
}

function removePoint(e) {
    $(e).parent().parent().remove();
}

function saveEvent(e, eid) {
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
    };
    if(data['trail'] == "") {
        showPopover("#trail", "top", "Trail is required");
        return;
    }
    if(data['date'] == "") {
        showPopover("#event-date", "top", "Event date is required");
        return;
    }
    var formData = new FormData();
    var galleryImageCount = 0;
    var detailPoints = [];
    formData.append("action", "add-weekend-event");
    formData.append("data", JSON.stringify(data));
    formData.append("eid", eid);
    formData.append("eventBanner", $("#event-banner").prop('files')[0]);
    formData.append("elevationImg", $("#elevation-img").prop('files')[0]);
    formData.append("mentorImg", $("#mentor-img").prop('files')[0]);
    $("#detail-points .point").each(function() {
        var key = $(this).find(".key").val().trim();
        var value = $(this).find(".value").val().trim();
        if(key != "" && value != "") {
            detailPoints.push({
                "key": key,
                "value": value
            })
        }
    });
    formData.append("detailPoints", JSON.stringify(detailPoints));
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

function deleteGalleryImage(eid, id, e) {
    $.ajax({
        url: BASE_URL+"admin/actions",
        type: "POST",
        data: {"action":"delete-gallery-image", "eid":eid, "id":id},
        success: function(data) {
            $(e).parent().remove();
        }
    });
}

function saveTour(e, cid) {
    var data = {
        "name": $("#name").val().trim(),
        "rental_cost_1": $("#cost1").val(),
        "rental_cost_2": $("#cost2").val(),
        "rental_cost_3": $("#cost3").val(),
        "rental_cost_4": $("#cost4").val(),
        "rental_cost_5": $("#cost5").val(),
        "member_A_bike": $("#mbike1").val(),
        "member_B_bike": $("#mbike2").val(),
        "member_C_bike": $("#mbike3").val(),
        "member_D_bike": $("#mbike4").val(),
        "member_A_cost": $("#mcost1").val(),
        "member_B_cost": $("#mcost2").val(),
        "member_C_cost": $("#mcost3").val(),
        "member_D_cost": $("#mcost4").val(),
    };
    if(data['name'] == "") {
        showPopover("#name", "top", "Name is required");
        return;
    }
    loadButton(e, spinnerwhitexs);
    $.ajax({
        url: BASE_URL+"admin/actions",
        type: "POST",
        data: {"action":"cyclotour", "cid":cid, "data":data},
        success: function(data) {
            unloadButton(e, ".spinner");
            location.reload();
        }
    });
}

function saveStory(e, sid) {
    var data = {
        "title": $("#title").val().trim(),
        "date": $("#date").val(),
        "sub_title": $("#sub_title").val().trim(),
        "content": $("#content").val().trim()
    };
    if(data['title'] == "") {
        showPopover("#title", "top", "Title is required");
        return;
    }
    if(data['date'] == "") {
        showPopover("#date", "top", "Story date is required");
        return;
    }
    if(data['content'] == "") {
        showPopover("#content", "top", "Story content is required");
        return;
    }
    var formData = new FormData();
    var galleryImageCount
    formData.append("action", "stories");
    formData.append("data", JSON.stringify(data));
    formData.append("sid", sid);
    formData.append("banner", $("#banner").prop('files')[0]);
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
            location.reload();
        }
    });
}

function saveAnnualEvent(e, aid) {
    var data = {
        "title": $("#title").val().trim(),
        "url": $("#url").val().trim(),
        "description": $("#description").val().trim()
    };
    if(data['title'] == "") {
        showPopover("#title", "top", "Title is required");
        return;
    }
    if(data['description'] == "") {
        showPopover("#description", "top", "Event description is required");
        return;
    }
    var formData = new FormData();
    formData.append("action", "annual-events");
    formData.append("data", JSON.stringify(data));
    formData.append("aid", aid);
    formData.append("banner", $("#banner").prop('files')[0]);
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
            location.reload();
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