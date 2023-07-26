@extends('frontend.frontend_master')


{{-- section la 1 khoi de luu tru du lieu => khong hien thi => dung @yield() de hien thi section do --}}
@section('frontend_content')
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/contact.css">
<div class="container-xxl my-6">
    <div class="container p-5">
        <form>
            <section class="contact container" id="contact">
                <div class="row" id="wrap">
                    <div class="titlecol-1 col-lg-1 col-md-1">&nbsp;</div>
                    <div class=" titlecol-10 col-lg-5 col-md-10">
                        <h1>Contact Us</h1>
                        <h3 class="mb-4">Bakehouse and Office</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>06 Le Loi, Hue, VIET NAM</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <li class="mb-2">Mon-Fri: 9am - 5pm AEST</li>
                        <li class="mb-2">Open 7 days, 10am-5pm</li>
                        <div class="center">
                            <h2 class="centered"></h2>
                            <lable for="full_name">FULL NAME</lable><br>
                            <input type="text" id="full_name" name="full name" placeholder="Enter your name" /><br>
                            <lable for="email">EMAIL ADDRES</lable><br>
                            <input type="mail" id="email" name="Email" placeholder="enter your email" /><br />
                            <lable for="phone">PHONE</lable><br>
                            <input type="phone" id="phone" name="phone" placeholder="enter your phone" /><br />
                            <lable for="question">QUESTION</lable><br>
                            <textarea id="question" name="question" placeholder="Other questions"></textarea><br />
                            <a class="btn btn-square btn-outline-light rounded-rectangle me-1 submit_contact"
                                id="btn_submit_contact" onclick="val_form_contact();return false;">Submit</a>
                        </div>
                    </div>

                    <div class="col-10 col-lg-5 col-md-10" id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7652.648537092414!2d107.57930777736833!3d16.459110249176753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a149e5fbd6b5%3A0x7abcc9ee8c4f5c5f!2zMDYgTMOqIEzhu6NpLCBzdHJlZXQsIFRow6BuaCBwaOG7kSBIdeG6vywgVGjhu6thIFRoacOqbiBIdeG6vyA1MzAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1668766222765!5m2!1svi!2s"
                            width="100%" height="855" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="titlecol-1 col-lg-1 col-md-1">&nbsp;</div>
                </div>
    </div>

    </section>
    </form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    function val_form_contact(){
            var error_from=false;

            $(".error_field").hide(200);
            $("input").removeClass("error");
            $("textarea").removeClass("error");

            if($("#full_name").val().trim()==""){
                $("#full_name").addClass("error");
                $("<div class='error_field'>* Please enter your name</div>").insertAfter("#full_name");
                error_from=true;
            }

            if($("#email").val().trim()==""&&error_from==false){
                $("#email").addClass("error");
                $("<div class='error_field'>* Please enter a valid email address</div>").insertAfter("#email");
                error_from=true;
            }

            if($("#phone").val().trim()==""&&error_from==false){
                $("#phone").addClass("error");
                $("<div class='error_field'>* please enter your phone</div>").insertAfter("#phone");
                error_from=true;
            }

            if($("#question").val().trim()==""&&error_from==false){
                $("#question").addClass("error");
                $("<div class='error_field'>* Please enter a question</div>").insertAfter("#question");
                error_from=true;
            }

            if(error_from==false){
                $("#full_name").val("");
                $("#email").val("");
                $("#phone").val("");
                $("#question").val("");
                alert("Contact us success!");
            }

            return;
        }

            $("input,textarea").focus(function(){
                $("#effect_"+$(this).attr("id")).remove();
                $(this).css("border","none");
                $(this).css("margin-bottom","0px");
                $("<div id='effect_"+$(this).attr("id")+"' class='effect_focus'><div class='point focus'></div></div>").insertAfter(this);
            });

            $("input,textarea").focusout(function(){
                $("#effect_"+$(this).attr("id")).remove();
                $(this).css("border","none");
                $(this).css("margin-bottom","0px");
                $("<div id='effect_"+$(this).attr("id")+"' class='effect_focus'><div class='point unfocus'></div></div>").insertAfter(this);
            });
        
</script>

<!--chat-log -->

<div id="chat-circle" class="btn btn-raised btn btn-square">
    <div id="chat-overlay"></div>
    <i class="material-icons" id="chat">Chat</i>
</div>

<div class="chat-box">
    <div class="chat-box-header fs-3">
        Chat
        <span class="chat-box-toggle"><i class="material-icons">close</i></span>
    </div>
    <div class="chat-box-body">
        <div class="chat-box-overlay">
        </div>
        <div class="chat-logs">
            <div class="fs-5">Hello, what can i help you!!</div>
        </div>
    </div>
    <div class="chat-input">
        <form>
            <input type="text" id="chat-input" placeholder="Send a message..." />
            <button type="submit" class="chat-submit" id="chat-submit"><i class="material-icons">send</i></button>
        </form>
    </div>
</div>

</div>
<script src="{{ asset('frontend') }}/assets/js/chat.js"></script>
<script>
    function openForm() {
document.getElementById("myForm").style.display = "block";
}

function closeForm() {
document.getElementById("myForm").style.display = "none";
}
</script>

<!-- Contact End -->

@endsection