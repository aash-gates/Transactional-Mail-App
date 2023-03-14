$(document).ready(function(){
    $("#email-form").submit(function(event){
        event.preventDefault();
        var form = $(this);
        var formData = form.serialize();
        $.ajax({
