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