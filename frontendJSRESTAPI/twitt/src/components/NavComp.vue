<template>
  
<nav class="navbar navbar-expand-lg navbar-light bg-primary;">
  <div class="container justify-content-evenly">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    
        <router-link class="nav-link active" aria-current="page" to="/">
          <span class="material-icons">home</span>
        </router-link>
        
        <router-link class="nav-link" to="/twitt">
          <span class="material-icons-outlined">mark_email_unread</span>
        </router-link>

        <router-link class="nav-link" to="/conf">
          <span class="material-icons-outlined">post_add</span>
        </router-link>
    
    
  </div>
</nav>

</template>