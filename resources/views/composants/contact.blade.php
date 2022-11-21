<article class="contact" id="contact">

    <h2>ME CONTACTER</h2>

    <form method="POST" class="form" action="{{Route('contact.store')}}">
        @csrf
        <div>
            <input name="email"  id="email" type="email"  class="input" placeholder="Votre email..." required/>
            <!--@if ($errors->has('email'))-->
            <!--<div class="error">-->
            <!--    {{ $errors->first('email') }}-->
            <!--</div>-->
            <!--@endif-->
        </div>
        <div>
            <input  name="subject" id="subject" type="text" class="input" placeholder="Sujet du mail" required/>
            <!--@if ($errors->has('subject'))-->
            <!--<div class="error">-->
            <!--    {{ $errors->first('subject') }}-->
            <!--</div>-->
            <!--@endif-->
        </div>
        <div>
            <textarea name="message" id="message"  type="text"rows="5" cols="33" class="input" placeholder="Votre message..." required></textarea>
            <!--@if ($errors->has('message'))-->
            <!--<div class="error">-->
            <!--    {{ $errors->first('message') }}-->
            <!--</div>-->
            <!--@endif-->
        </div>
        
        <button type="submit" class="inputBtn btn">Envoyer !</button>
        
</form>

</article>