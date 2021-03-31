var cacheName = 'js13kPWA-v1';
var appShellFiles = [

    '/css/app.css',
    '/js/app.js',
    '/images/icons/icon-72x72.png',
    '/images/icons/icon-96x96.png',
    '/images/icons/icon-128x128.png',
    '/images/icons/icon-144x144.png',
    '/images/icons/icon-152x152.png',
    '/images/icons/icon-192x192.png',
    '/images/icons/icon-384x384.png',
    '/images/icons/icon-512x512.png',
    '/resources/pages/company'
];
// ajout fichiers en cache
self.addEventListener('install', (e) => {
    e.waitUntil(
      caches.open('js13kPWA-v2').then((cache) => {
        return cache.addAll(contentToCache);
      })
    );
  });


self.addEventListener("fetch", (event) => {
  event.respondWith(
    caches.match(event.request).then(function (response) {
      // Cache hit - return response
      if (response) {
        return response;
      }

      // IMPORTANT: Cloner la requête.
      // Une requete est un flux et est à consommation unique
      // Il est donc nécessaire de copier la requete pour pouvoir l'utiliser et la servir
      var fetchRequest = event.request.clone();

      return fetch(fetchRequest).then(function (response) {
        if (!response || response.status !== 200 || response.type !== "basic") {
          return response;
        }

        // IMPORTANT: Même constat qu'au dessus, mais pour la mettre en cache
        var responseToCache = response.clone();

        caches.open(staticCacheName).then(function (cache) {
          cache.put(event.request, responseToCache);
        });

        return response;
      });
    })
  );
});

// supprimer caches
self.addEventListener("activate", (e) => {
  e.waitUntil(
    caches.keys().then((keys) => {
      return Promise.add(
        keys
          .filter((key) => key !== staticCacheName)
          .map((key) => caches.delete(key))
      );
    })
  );
});
