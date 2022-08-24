function setNotificationCookie(cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = "notification_dismissed=" + getNotificationCookie() + "|" + cvalue + "|" + "; " + expires;

    document.querySelector('[data-notification-id="' + cvalue + '"]').remove();
}

function getNotificationCookie() {
    var name = "notification_dismissed=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}
