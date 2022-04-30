<?php include_once('../layout/header.php')?>
<div class="contact-container">
     <div class="main-contact">
         <div class="contact">
            <div class="left-contact-form">
            <form>
                <div class="form-group">
                    <div class="left-name">
                        <label for="">Name</label><br>
                        <input type="text" name="name" placeholder="Name...">
                    </div>
                    <div class="right-phone">
                        <label for="">Phone</label> <br>
                        <input type="text" name="phone" placeholder="Phone...">
                    </div>
                </div>
                <div class="form-email">
                    <label for="">Email</label> <br>
                    <input type="text" name="email" placeholder="Email...">
                </div>
                <div class="message">
                    <label for="">Message</label> <br>
                    <textarea name="message" id="" ></textarea>
                </div>
                <div class="form-button">
                    <button>Send Message</button>
                </div>
            </form>
        </div>
        <div class="right-contact-infor">
            <span class="name-hastag">ADDRESS:</span>
            <br>
            <br>
            <span class="infor">
                98 West 21th Street, Suite 721 New York NY 10016
            </span><br>
            <span class="name-hastag">PHONE:</span>
            <br>
            <br>
            <span class="infor">
                (+1) 234 4567 8910
            </span><br>
            <span class="name-hastag">EMAIL:</span>
            <br>
            <br>
            <span class="infor">
                info@domain.com
            </span>
        </div>
         </div>
     </div>
</div>
<?php include_once('../layout/footer.php')?>