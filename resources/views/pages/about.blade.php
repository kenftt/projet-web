@extends('app')

@section('title', 'A propos | '. config('app.name'))

<style> /**
    CSS ABOUT-US
    **/
    .shadow {
        background-color: #648ad4;
    }
    .w-full{
        margin: 20 auto;
        width: 100px;
    }
    .w-full1 {
        border: solid;
        margin: 20 auto;
        width: 300%;
    }
    .revenir{
    margin: 30 auto;
    }
    .test {
        width: 100px;
        margin: auto;
        text-align: center;
        border: solid;
    }
    .pt-6 {
        width: 100px;
        margin: auto;
        text-align: center;
    }



    </style>

@section('content')
<form class="w-full1 max-w-lg">
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
          Prénom
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Prénom">
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
          Nom
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Nom">
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          E-mail
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email">
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          Message
        </label>
        <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message"></textarea>

      </div>
    </div>
    <div class="md:flex md:items-center">

      <div class="md:w-2/3"></div>
    </div>
  </form>
  <form class="test">
    <input type="button" class="bouton" value="SEND"  onClick="Message()">
    </form>
    <script type="text/javascript">
       function Message() {
           var msg="Message bien envoyé";
           console.log(msg)
           alert(msg);
           window.location.href = 'http://cesistage.com';
       }
    </script>
    </a>
  </div>
    <div class=revenir>
    <p><a href="offers-">Revenir à la page d'accueil</a></p>
</div>



@endsection
