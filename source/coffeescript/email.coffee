String.prototype.rotate = (number) ->
    result = ""
    this.toLowerCase()
    for char in this
        value = (char.charCodeAt(0) - 97 + number) % 26 + 97
        result += String.fromCharCode(value)
    return result

String.prototype.reverse = () ->
    this.split("").reverse().join("")

switchEmail = (link) ->
    return "mailto:" + link.replace('mailto:', '').reverse()

getEmail = () ->
    the_at_sign = "@"
    the_dot_sign = "."
    hidden_name = "nnebafgbpxqvyy"
    email = hidden_name.rotate(13) + the_at_sign + "me" + the_dot_sign + "com"
    return email

setupEmail = () ->
    email = getEmail().reverse()
    new_email_code = "<a href=\"mailto:" + email + " \" class=\"borked-email email\">" + email + "</a>"
    $("#email-holder").html new_email_code
    $(".borked-email").on('mouseover', (event) ->
        event.target.href = switchEmail event.target.href)
    $(".borked-email").on('mouseout', (event) ->
        event.target.href = switchEmail event.target.href)

setupEmail()
