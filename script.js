$(document).ready(function(){
        $.getJSON('data.json', function(k,v){
            $.each(data, function(){
                var name = v.name;
                var email = v.email;
                var phone = v.phone;
                $('#formFeed').append('<div>' + name + '<br />' + email + '<br />' + phone + '</div>')
            });
        });
});