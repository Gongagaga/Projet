<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Eileen Cahill Destrade - Graphiste Illustratrice Freelance</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a992aa71c9.js" crossorigin="anonymous"></script>
</head>
<body>
    
    
    <!-- ACCUEIL -->
    
<article class="background" id="accueil">

    <div class="bg-image">

        <img src="assets/img/bg-logo.jpg" alt="logo sur ordinateur">

    </div>
    
    <div class="aboutMe">
        
        <h2>ABOUT ME</h2>
        <p>Rigoureuse et appliquée, je propose depuis août 2022 mes services en tant que Graphiste VFX Junior en Freelance.</p>
        <p>Diplômée d'un DN Made Animation en alternance, j'ai su me forger des qualités nécessaires pour ce travail.</p>
        <p>J'ai eu la chance de travailler pour diverses entreprises de post-production en tant que graphiste VFX junior.</p>

        <ul class="categ">
            <li><a href="#accueil" class="btn">Accueil</a></li>
            <li><a href="#portfolio" class="btn">Portfolio</a></li>
            <li><a href="#contact" class="btn">Contact</a></li>
            <li><a href="https://docs.google.com/document/d/1pNfQWpbJQlfMmVRYIGQyYadfDfB9E2KlQ0q5N7cpqGI/edit" class="btn">Shop</a></li>
        </ul>
</div>

</article>

<nav class="navbar">
    <ul>
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="https://docs.google.com/document/d/1pNfQWpbJQlfMmVRYIGQyYadfDfB9E2KlQ0q5N7cpqGI/edit">Shop</a></li>
    </ul>
</nav>   

<!-- PORTFOLIO -->
    
<article class="portfolio" id="portfolio">

    <h2>RETROUVEZ QUELQUES DEMONSTRATIONS ICI</h2>

    <article class="demo">
        
        <a href="#" class="card"><img src="assets/img/bg-logo.jpg"></a>
        
        <a href="#" class="card"><img src="assets/img/bg-logo.jpg"></a>
        
        <a href="#" class="card"><img src="assets/img/bg-logo.jpg"></a>
        
        <a href="#" class="card"><img src="assets/img/bg-logo.jpg"></a>
        
        <a href="#">Voir toutes les démo...</a>
        
    </article>

</article>

<!--CONTACT-->

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
        
        <button type="submit" class="inputBtn btn" value="Envoyer !"/>
        
</form>

</article>

<!--FOOTER-->

<footer>
    
    <a href="https://www.instagram.com/godzileen/" class="reseaux"><i class="fa-brands fa-instagram"></i> godzileen</a>
    
    <a href="https://www.behance.net/leendc?tracking_source=search_users|E%C3%AFleen%20dc" class="reseaux"><i class="fa-brands fa-behance"></i> Eïleen DC</a>
    
    <a href="https://godzileen.artstation.com/" class="reseaux"><i class="fa-brands fa-artstation"></i> GODZILEEN</a>
    
</footer>

<script type="text/javascript" src="js/script.js"></script>
</body>
</html>