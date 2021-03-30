<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Michel Pierrel') }}
        </h2>
        <h2>Administrateur</h2>
        <h3>Nancy</h3>
    </x-slot>

<!-- Side navigation -->
<div class="sidenav">
    <a href="users">Editer un profil</a>
    <a href="companies">Editer une entreprise</a>
    <a href="offers">Editer une offre</a>
    <a href="#">Editer une page</a>
  </div>

  <!-- Page content -->
  <div class="main">
    ...
  </div>
<style>
  /* The sidebar menu */
  .sidenav {
    height: 100%; /* Full-height: remove this if you want "auto" height */
    width: 300px; /* Set the width of the sidebar */
    position: fixed; /* Fixed Sidebar (stay in place on scroll) */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    left: 0;
    background-color: #111; /* Black */
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 20px;
  }

  /* The navigation menu links */
  .sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
  }

  /* When you mouse over the navigation links, change their color */
  .sidenav a:hover {
    color: #f1f1f1;
  }

  /* Style page content */
  .main {
    margin-left: 160px; /* Same as the width of the sidebar */
    padding: 0px 10px;
  }

  /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  } </style>
</x-app-layout>

