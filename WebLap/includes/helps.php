

<div style="display:none;" class="alert alert-success col-6 mx-auto" role="alert" id="getAlert">
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
  Message sent, thank you.
</div>

<div style="display:none;" class="alert alert-danger col-6 mx-auto" role="alert" id="warning">
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  No field shall remain empty!
</div>

<div style="display:none;" class="results col-6 mx-auto" id="Results">

  <label name="email1" class="email  mb-2" style="text-decoration: underline;"  >Email: </label><br><label id="emial1"><?php if(isset($_SESSION['email'])) { echo $_SESSION['email']; }?></label><br>
  <label class="topic  mb-2" style="text-decoration: underline;">Topic: </label><br><label id="topic1"></label> <br>
  <label class="problem  mb-2" style="text-decoration: underline;">Problem: </label><br><label style="word-wrap: break-word;" id="problem1"></label>

</div>

<div style="display:block;" id="Help_Div" class="screen col-6 mx-auto">
  <!-- form: -->
  <form action="../system/sendMessage.php" method="post">

    <div class="textarea ">
      <div class="input-group mb-3 ">
        <span class="input-group-text" id="basic-addon1">Email:</span>
        <?php if(isset($_SESSION['email'])){ ?>
          <input type="email" class="form-control" placeholder="<?php if(isset($_SESSION['email'])) {
            echo $_SESSION['email']; ?><?php }?> " aria-label="Username" aria-describedby="basic-addon1" id="email" disabled>
         <?php } else { ?>
          <input type="email" class="form-control" placeholder="johndoe@example.com" aria-label="Username" aria-describedby="basic-addon1" id="email" name="email">
          <?php } ?>
        <span class="input-group-text" id="basic-addon1">For: fluffyhelp@support.com</span>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Topic:</span>
        <input type="text" class="form-control" placeholder="I can't change my password." aria-label="Recipient's username" 
        aria-describedby="button-addon2" id="topic" name="topic" maxlength="70">
        <button class="btn btn-outline-danger" type="button" id="button-addon2" onclick="getClear()">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />          </svg></button> 
            <!--SUBMIT-->

            <button class="btn btn-outline-success" type="submit" id="button-addon2"onclick="getHelp()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
                </svg>
            </button>
                
            
      </div>
      <div class="mb-3 ">

        <textarea placeholder="max 700 word" class="form-control" id="exampleFormControlTextarea1" rows="10" maxlength="700" name="message"></textarea>
        <!--<span class="input-group-text" id="basic-addon1">  max 700 word</span>-->
      </div>
      
    </div>
  </form>
</div>

<script src="../JavaScript/getHelp.js"></script>