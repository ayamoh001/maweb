const MaWebCache = "MA-WEB"
const assets = [
  "/index.php",
  "/cdns/bootstrap.min.css",
  "/js/bootstrap.bundle.min.js",
  "/js/script.js"
]

self.addEventListener("install", installEvent => {
  installEvent.waitUntil(
    caches.open(MaWebCache).then(cache => {
      cache.addAll(assets)
    })
  )
})

self.addEventListener("fetch", fetchEvent => {
    fetchEvent.respondWith(
      caches.match(fetchEvent.request).then(res => {
        return res || fetch(fetchEvent.request)
      })
    )
  })