<div class="container" id="massage" >
    <div class='row'>
        <div class='col-md-6'>
             <div class="container-fluid" id="massages-list">
                @include("pages.message.inbox"); 
             </div>
        </div>
        <div class='col-md-6' id='send-message'>
           <div class="container-fluid">
                <h3>Send Message</h3>
                <div class="responsive-form">
                    <form class="form">
                        <label for="send-to">To: </label>
                        <select id="send-to" class="form-control color">
                            @for($i = 0;$i < 6;$i++)
                                <option value="#id">#name</option>
                            @endfor
                        </select>
                        <label for="message">Message: </label>
                        <i class="small" style="display:block">Compose your massage</i>
                        <textarea class="form-control" style="margin-bottom: 1em;">
                        </textarea>
                        <input type="submit" value="Send" class="btn btn-success pull-right form-control"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
