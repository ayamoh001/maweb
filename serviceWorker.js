const MaWebCache = "MA-WEB"
const assets = [
  "/index.php",
  "/cdns/bootstrap.min.css",
  "/js/bootstrap.bundle.min.js",
  "/js/script.js",
  "/imgs/my-icon-sm.png",
  "/imgs/my-icon.png",
  "img1.webp",
  "img2.webp",
  "img3.webp",
  "img4.webp",
  "img5.webp",
  "img6.webp",
  "img7.webp",
  "img8.webp",
  "img9.webp"
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